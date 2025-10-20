<?php

use App\Models\Category;
use App\Models\GeneralSetting;
use App\Models\ParentCategory;

/**
 * Site information
 */
if (!function_exists('settings')) {
    function settings()
    {
        $settings = Generalsetting::take(1)->first();

        if (!is_null($settings)) {
            return $settings;
        }
    }
}

/**
 * dynamic navigation menus
 */
if (!function_exists('navigations')) {
    function navigations()
    {
        $navigations_html = '';

        //with dropdown
        $pcategories = ParentCategory::whereHas('children', function ($q) {
            $q->whereHas('posts');
        })->orderBy('name', 'asc')->get();

        //without dropdown
        $categories = Category::whereHas('posts')->where('parent', 0)->orderBy('name', 'asc')->get();

        if (count($pcategories) > 0) {
            foreach ($pcategories as $item) {
                $navigations_html .= '
                    <div class="col-md-3">
                        <span class="u-header__sub-menu-title">' . $item->name . '</span>
                        <ul class="u-header__sub-menu-nav-group mb-3">
                            
                ';
                foreach ($item->children as $category) {
                    if ($category->posts->count() > 0) {
                        $navigations_html .= ' <li><a href="#!" class="nav-link u-header__sub-menu-nav-link"> ' . $category->name . '</a></li> ';
                    }
                }
                $navigations_html .= '
                        </ul>
                    </div>
                ';
            }
        }
        if (count($categories) > 0) {
            foreach ($categories as $item) {
                $navigations_html .= '
                    <div class="col-md-3">
                        <span class="u-header__sub-menu-title">Shop Pages</span>
                        <ul class="u-header__sub-menu-nav-group mb-3">
                            <li><a href="#!" class="nav-link u-header__sub-menu-nav-link">' . $item->name . '</a></li>
                        </ul>
                    </div>
                ';
            }
        }
        return $navigations_html;
    }
}

// dynamic navigation menus
// if (!function_exists('navigations')) {
//     function navigations()
//     {
//         $navigations_html = '';
//         $pcategories = ParentCategory::whereHas('children', function ($q) {
//             $q->whereHas('posts');
//         })->orderBy('name', 'asc')->get();

//         $categories = Category::whereHas('posts')
//             ->where('parent', 0)
//             ->orderBy('name', 'asc')
//             ->get();

//         // group each 2 parent category in each col-md-3
//         $chunks = $pcategories->chunk(2);

//         foreach ($chunks as $group) {
//             $navigations_html .= '<div class="col-md-3">';

//             foreach ($group as $parent) {
//                 $navigations_html .= '
//                     <span class="u-header__sub-menu-title">' . e($parent->name) . '</span>
//                     <ul class="u-header__sub-menu-nav-group mb-3">
//                 ';

//                 foreach ($parent->children as $child) {
//                     if ($child->posts->count() > 0) {
//                         $navigations_html .= '
//                             <li>
//                                 <a href="#!" class="nav-link u-header__sub-menu-nav-link">'
//                             . e($child->name) .
//                             '</a>
//                             </li>
//                         ';
//                     }
//                 }

//                 $navigations_html .= '</ul>';
//             }

//             $navigations_html .= '</div>';
//         }

//         // add category empty parent (parent = 0)
//         if ($categories->count() > 0) {
//             $navigations_html .= '<div class="col-md-3">';
//             $navigations_html .= '<span class="u-header__sub-menu-title">Other Categories</span>';
//             $navigations_html .= '<ul class="u-header__sub-menu-nav-group mb-3">';
//             foreach ($categories as $cat) {
//                 $navigations_html .= '
//                     <li>
//                         <a href="#!" class="nav-link u-header__sub-menu-nav-link">' . e($cat->name) . '</a>
//                     </li>
//                 ';
//             }
//             $navigations_html .= '</ul></div>';
//         }

//         return $navigations_html;
//     }
// }
