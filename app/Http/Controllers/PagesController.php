<?php

namespace App\Http\Controllers;

use App\Models\Page;

class PagesController
{
    public function index()
    {
        $page = Page::pageShow('/');
        return view('pages.index', compact('page'));
    }

    public function contacts()
    {
        $page = Page::pageShow('contact');
        return view('pages.contacts', compact('page'));
    }

    public function gallery()
    {
        $page = Page::pageShow('gallery');
        return view('pages.gallery', compact('page'));
    }

    public function price()
    {
        $page = Page::pageShow('price');
        return view('pages.price', compact('page'));
    }
}
