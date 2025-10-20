<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ParentCategory;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class PostController extends Controller
{
    public function addPost(Request $request)
    {
        $categories_html = '';
        $pcategories = ParentCategory::whereHas('children')->orderBy('name', 'asc')->get();
        $categories = Category::where('parent', 0)->orderBy('name', 'asc')->get();

        if (count($pcategories) > 0) {
            foreach ($pcategories as $item) {
                $categories_html .= '<optgroup label="' . $item->name . '">';
                foreach ($item->children as $category) {
                    $categories_html .= '<option value="' . $category->id . '">' . $category->name . '</option>';
                }
                $categories_html .= '</optgroup>';
            }
        }

        if (count($categories) > 0) {
            foreach ($categories as $item) {
                $categories_html .= '<option value="' . $item->id . '">' . $item->name . '</option>';
            }
        }

        $data = [
            'title' => 'Add new post',
            'categories_html' => $categories_html
        ];

        return view('backend.pages.add_post', $data);
    }

    public function createPost(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:posts,title',
            'content' => 'required',
            'category' => 'required|exists:categories,id',
            'featured_image' => 'required|mimes:png,jpg,jpeg|max:1024'
        ]);

        //create post
        if ($request->hasFile('featured_image')) {
            $path = "images/posts/";
            $file = $request->file('featured_image');
            $filename = $file->getClientOriginalName();
            $new_filename = time() . '_' . $filename;

            //upload featured image
            $upload = $file->move(public_path($path), $new_filename);

            if ($upload) {
                //generate resized image and thumbnail
                $resized_path = $path . 'resized/';
                if (!File::isDirectory($resized_path)) {
                    File::makeDirectory($resized_path, 0777, true, true);
                }
                $manager = new ImageManager(new Driver());
                //thumbnail (aspect ratio: 1)
                $manager->read($path . $new_filename)->resize(250, 250)->save($resized_path . 'thumb_' . $new_filename);

                // Resize image (aspect ratio: 1.6)
                $manager->read($path . $new_filename)->cover(512, 320)->save($resized_path . 'resized_' . $new_filename);

                $post = new Post();
                $post->author_id = auth()->id();
                $post->category = $request->category;
                $post->title = $request->title;
                $post->content = $request->content;
                $post->featured_image = $new_filename;
                $post->tags = $request->tags;
                $post->meta_keywords = $request->meta_keywords;
                $post->meta_description = $request->meta_description;
                $post->visibility = $request->visibility;
                $saved = $post->save();

                if ($saved) {
                    return response()->json(['status' => 1, 'message' => 'New post has been successfully created.']);
                } else {
                    return response()->json(['status' => 0, 'message' => 'Something went wrong.']);
                }
            } else {
                return response()->json(['status' => 0, 'message' => 'Something went wrong on uploading a featured image.']);
            }
        }
    }

    public function allPosts(Request $request)
    {
        $data = [
            'title' => 'Posts'
        ];
        return view('backend.pages.posts', $data);
    }

    public function editPost(Request $request, $id = null)
    {
        $post = Post::findOrFail($id);

        $categories_html = '';
        $pcategories = ParentCategory::whereHas('children')->orderBy('name', 'asc')->get();
        $categories = Category::where('parent', 0)->orderBy('name', 'asc')->get();

        if (count($pcategories) > 0) {
            foreach ($pcategories as $item) {
                $categories_html .= '<optgroup label="' . $item->name . '">';
                foreach ($item->children as $category) {
                    $selected = $category->id == $post->category ? 'selected' : '';
                    $categories_html .= '<option value="' . $category->id . '"' . $selected . '>' . $category->name . '</option>';
                }
                $categories_html .= '</optgroup>';
            }
        }

        if (count($categories) > 0) {
            foreach ($categories as $item) {
                $selected = $item->id == $post->category ? 'selected' : '';
                $categories_html .= '<option value="' . $item->id . '"' . $selected . '>' . $item->name . '</option>';
            }
        }

        $data = [
            'title' => 'Edit',
            'post' => $post,
            'categories_html' => $categories_html
        ];

        return view('backend.pages.edit_post', $data);
    }

    public function updatePost(Request $request)
    {
        $post = Post::findOrFail($request->post_id);
        $featured_image_name = $post->featured_image;

        //validate the form
        $request->validate([
            'title' => 'required|unique:posts,title,' . $post->id,
            'content' => 'required',
            'category' => 'required|exists:categories,id',
            'featured_image' => 'nullable|mimes:png,jpg,jpeg|max:1024'
        ]);

        if ($request->hasFile('featured_image')) {
            $old_featured_image = $post->featured_image;
            $path = "images/posts/";
            $file = $request->file('featured_image');
            $filename = $file->getClientOriginalName();
            $new_filename = time() . '_' . $filename;

            //upload new featured image
            $upload = $file->move(public_path($path), $new_filename);

            if ($upload) {
                //generate resized image and thumbnail
                $resized_path = $path . 'resized/';

                if (!File::isDirectory($resized_path)) {
                    File::makeDirectory($resized_path, 0777, true, true);
                }
                $manager = new ImageManager(new Driver());

                //image thumbnail (aspect ratio: 1)
                $manager->read($path . $new_filename)->resize(250, 250)->save($resized_path . 'thumb_' . $new_filename);

                // Resize image (aspect ratio: 1.6)
                $manager->read($path . $new_filename)->cover(512, 320)->save($resized_path . 'resized_' . $new_filename);

                // Optionally delete old featured images
                if ($old_featured_image != null && File::exists(public_path($path . $old_featured_image))) {
                    // @unlink(public_path($path . $post->featured_image));
                    // @unlink(public_path($resized_path . 'thumb_' . $post->featured_image));
                    // @unlink(public_path($resized_path . 'resized_' . $post->featured_image));

                    File::delete(public_path($path . $old_featured_image));

                    //delete resized image
                    if (File::exists(public_path($resized_path . 'resized_' . $old_featured_image))) {
                        File::delete(public_path($resized_path . 'resized_' . $old_featured_image));
                    }

                    //delete thumbnail
                    if (File::exists(public_path($resized_path . 'thumb_' . $old_featured_image))) {
                        File::delete(public_path($resized_path . 'thumb_' . $old_featured_image));
                    }
                }

                $featured_image_name = $new_filename;
            } else {
                return response()->json(['status' => 0, 'message' => 'Something went wrong while uploading featured image.']);
            }
        }

        //update post in database
        // $post->author_id = auth()->id();
        $post->category = $request->category;
        $post->title = $request->title;
        $post->slug = null;
        $post->content = $request->content;
        $post->featured_image = $featured_image_name;
        $post->tags = $request->tags;
        $post->meta_keywords = $request->meta_keywords;
        $post->meta_description = $request->meta_description;
        $post->visibility = $request->visibility;

        $saved = $post->save();

        if ($saved) {
            return response()->json(['status' => 1, 'message' => 'Blog post has been successfully updated.']);
        } else {
            return response()->json(['status' => 0, 'message' => 'Something went wrong while updating a post.']);
        }
    }
}
