<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function lista()
    {
        return view('pages.lista-anime');
    }

    public function staff()
    {
        return view('pages.staff');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function autentificare()
    {
        return view('pages.autentificare');
    }

    public function inregistrare()
    {
        return view('pages.inregistrare');
    }

    public function admin()
    {
        return view('admin.home');
    }
}
