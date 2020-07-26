<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;

use App\Models\Slide;
use App\Models\Image;

use App\Models\Service;

use App\Models\Advantage;

use App\Models\Contact;

use App\Models\Category;

use App\Models\Certificate;
use App\Models\Vacancy;
use App\Models\News;
use App\Models\Video;
use App\Models\Partner;

use App\Models\Product;

use App\Models\Type;
use App\Models\Project;

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
    public function product_list(){
        $page = Page::findBySlug('product_list');
        $categories = Category::all();
        if (!$page)
        {
            abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
        }
        return view('product_list')->with('data', $page)
            ->with('categories', $categories);
    }
    public function info(){
        $page = Page::findBySlug('info');
        $vacancies = Vacancy::all();
        $certificates = Certificate::all();
        $videos = Video::all();
        $news = News::all();
        $partners = Partner::all();
        if (!$page)
        {
            abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
        }
        return view('info')->with('data', $page)
            ->with('news', $news)
            ->with('vacancies', $vacancies)
            ->with('certificates', $certificates)
            ->with('videos', $videos)
            ->with('partners', $partners);
    }
    public function product_catalog(){
        $page = Page::findBySlug('product_catalog');
        $products = Product::all();
        $categories = Category::all();
        if (!$page)
        {
            abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
        }

        return view('product_catalog')->with('data', $page)
            ->with('categories', $categories)
            ->with('products', $products);
    }

    public function our_projects(){
        $page = Page::findBySlug('projects');
        $types = Type::all();
        $projects = Project::all();

        if (!$page)
        {
            abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
        }

        return view('projects')->with('data', $page)
            ->with('types', $types)
            ->with('projects', $projects);
    }
}
