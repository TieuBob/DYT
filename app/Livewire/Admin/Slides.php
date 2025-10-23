<?php

namespace App\Livewire\Admin;

use App\Models\Slide;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class Slides extends Component
{
    use WithFileUploads;

    public $isUpdateSlideMode = false;
    public $slide_id, $slide_heading, $slide_link, $slide_image, $slide_status = true;
    public $selected_slide_image = null;

    protected $listeners = [
        'updateSlidesOrdering',
        'deleteSlideAction'
    ];

    public function updatedSlideImage()
    {
        if ($this->slide_image) {
            $this->selected_slide_image = $this->slide_image->temporaryUrl();
        }
    }

    public function addSlide()
    {
        $this->slide_id = null;
        $this->slide_heading = null;
        $this->slide_link = null;
        $this->slide_image = null;
        $this->slide_status = true;
        $this->isUpdateSlideMode = false;
        $this->selected_slide_image = null;
        $this->showSlideModalForm();
    }

    public function showSlideModalForm()
    {
        $this->resetErrorBag();
        $this->dispatch('showSlideModalForm');
    }

    public function hideSlideModalForm()
    {
        $this->dispatch('hideSlideModalForm');
        $this->isUpdateSlideMode = false;
        $this->slide_id = $this->slide_heading = $this->slide_link = $this->slide_image = null;
        $this->slide_status = true;
    }

    public function createSlide()
    {
        $this->validate([
            'slide_heading' => 'required',
            'slide_link' => 'nullable|url',
            'slide_image' => 'required|mimes:png,jpg,jpeg|max:2048',
        ]);

        $path = 'slides/';
        $file = $this->slide_image;
        $filename = 'SLD_' . date('YmdHis', time()) . '.' . $file->getClientOriginalExtension();

        $upload = $file->storeAs($path, $filename, 'slides_uploads');

        if (!$upload) {
            $this->dispatch('showToasts', ['type' => 'error', 'message' => 'Something went wrong while uploading slide image.']);
        } else {
            /** Store new slide */
            $slide = new Slide();
            $slide->image = $filename;
            $slide->heading = $this->slide_heading;
            $slide->link = $this->slide_link;
            $slide->status = $this->slide_status == true ? 1 : 0;
            $saved = $slide->save();

            if ($saved) {
                $this->hideSlideModalForm();
                $this->dispatch('showToasts', ['type' => 'success', 'message' => 'New Slide has been successfully added to database.']);
            } else {
                $this->dispatch('showToasts', ['type' => 'error', 'message' => 'Something went wrong while saving slide details.']);
            }
        }
    }

    public function editSlide($id)
    {
        $slide = Slide::findOrFail($id);
        $this->slide_id = $slide->id;
        $this->slide_heading = $slide->heading;
        $this->slide_link = $slide->link;
        $this->slide_image = null;
        $this->selected_slide_image = '/images/slides/' . $slide->image;
        $this->slide_status = $slide->status == 1 ? true : false;
        $this->isUpdateSlideMode = true;
        $this->showSlideModalForm();
    }

    public function updateSlide()
    {
        $slide = Slide::findOrFail($this->slide_id);

        $this->validate([
            'slide_heading' => 'required',
            'slide_link' => 'nullable|url',
            'slide_image' => 'nullable|mimes:png,jpg,jpeg|max:2048',
        ]);

        $slide_image_name = $slide->image;

        // if form has image file
        if ($this->slide_image) {
            $path = 'slides/';
            $file = $this->slide_image;
            $filename = 'SLD_' . date('YmdHis', time()) . '.' . $file->getClientOriginalExtension();

            $upload = $file->storeAs($path, $filename, 'slides_uploads');

            if (!$upload) {
                $this->dispatch('showToasts', ['type' => 'error', 'message' => 'Something went wrong while uploading slide image.']);
            } else {
                /** Delete old slide image */
                $slide_path = 'images/' . $path;
                $old_slide_image = $slide->image;

                if ($old_slide_image != '' && File::exists(public_path($slide_path . $old_slide_image))) {
                    File::delete(public_path($slide_path . $old_slide_image));
                    $this->hideSlideModalForm();
                    $this->dispatch('showToasts', ['type' => 'success', 'message' => 'New Slide has been successfully added to database.']);
                }

                $slide_image_name = $filename;
            }
        }

        //Update slide info
        $slide->image = $slide_image_name;
        $slide->heading = $this->slide_heading;
        $slide->link = $this->slide_link;
        $slide->status = $this->slide_status == true ? 1 : 0;
        $saved = $slide->save();

        if ($saved) {
            $this->hideSlideModalForm();
            $this->dispatch('showToasts', ['type' => 'success', 'message' => 'Slide has been successfully updated.']);
        } else {
            $this->dispatch('showToasts', ['type' => 'error', 'message' => 'Something went wrong while updating slide info.']);
        }
    }

    public function updateSlidesOrdering($positions)
    {
        foreach ($positions as $position) {
            $index = $position[0];
            $newPosition = $position[1];
            Slide::where('id', $index)->update([
                'ordering' => $newPosition,
            ]);
            $this->dispatch('showToasts', ['type' => 'success', 'message' => 'Slides ordering have been updated successfully.']);
        }
    }

    public function deleteParentCategory($id)
    {
        $this->dispatch('deleteParentCategory', ['id' => $id]);
    }

    public function deleteSlideAction($id)
    {
        $slide = Slide::findOrFail($id);
        $path = "slides/";
        $slide_path = "images/" . $path;
        $slide_image = $slide->image;

        if ($slide_image != '' && File::exists(public_path($slide_path . $slide_image))) {
            File::delete(public_path($slide_path . $slide_image));
        }

        $delete = $slide->delete();

        if ($delete) {
            $this->dispatch('showToasts', ['type' => 'success', 'message' => 'Slide has been deleted successfully.']);
        } else {
            $this->dispatch('showToasts', ['type' => 'error', 'message' => 'Something went wrong while deleting slide info.']);
        }
    }

    public function render()
    {
        return view('livewire.admin.slides', [
            'slides' => Slide::orderBy('ordering', 'asc')->get()
        ]);
    }
}
