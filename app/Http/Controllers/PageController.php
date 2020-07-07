<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;

use App\Models\Slide;
use App\Models\Image;

use App\Models\Service;

use App\Models\Advantage;

use App\Models\Contact;

class PageController extends Controller
{
    public static function get_all_pages()
    {
        return Page::all();
    }
    public function index()
    {
        $page = Page::findBySlug('/');
        $slides = Slide::all();
        $images = Image::all();
        if (!$page)
        {
            abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
        }
        return view('index')->with('data', $page)
            ->with('slides', $slides)
            ->with('images', $images);
    }
    public function services()
    {
        $page = Page::findBySlug('services');
        $services = Service::all();
        if (!$page)
        {
            abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
        }
        return view('services')->with('data', $page)
            ->with('services', $services);
    }
    public function about(){
        $page = Page::findBySlug('about');
        $advantages = Advantage::all();
        if (!$page)
        {
            abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
        }
        return view('about-company')->with('data', $page)
            ->with('advantages', $advantages);
    }
    public function contacts(){
        $page = Page::findBySlug('contacts');
        $contacts = Contact::all();
        if (!$page)
        {
            abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
        }
        return view('contacts')->with('data', $page)
            ->with('contacts', $contacts);
    }
}
