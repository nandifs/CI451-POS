<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about(): string
    {
        $page = "about page";
        return $page;
    }

    public function contact(): string
    {
        $page = "contact page";
        return $page;
    }

    public function faqs(): string
    {
        $page = "faqs page";
        return $page;
    }

    public function signin(): string
    {
        $page = "login";
        return view('pages/user/login');
    }
}
