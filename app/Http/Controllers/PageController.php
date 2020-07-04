<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;

// use App\Models\Page;

class PageController extends Controller
{
    public function index($slug = '/', $subs = null)
    {
        $page = Page::findBySlug($slug);
        if (!$page)
        {
            abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
        }

        return view('index')->with('data', $page);
//         $this->data['title'] = $page->title;
//         $this->data['content'] = $page->content;
//         $this->data['meta_title'] = $page->meta_title;
//         $this->data['meta_keywords'] = $page->meta_keywords;
//         $this->data['meta_description'] = $page->meta_description;
//         $this->data['meta_tags'] = $page->extras;
//         $this->data['page'] = $page->withFakes();

    }
}
