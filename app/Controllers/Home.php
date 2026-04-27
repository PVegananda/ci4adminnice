<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('dashboard', [
            'title' => 'Dashboard - NiceAdmin'
        ]);
    }

    // Tables
    public function tableData(): string
    {
        return view('showcase/tables/tables-data', [
            'title' => 'Data Tables - NiceAdmin'
        ]);
    }

    public function tableGeneral(): string
    {
        return view('showcase/tables/tables-general', [
            'title' => 'General Tables - NiceAdmin'
        ]);
    }

    // Components
    public function alerts(): string
    {
        return view('showcase/components/components-alerts', [
            'title' => 'Alerts - NiceAdmin'
        ]);
    }

    public function accordion(): string
    {
        return view('showcase/components/components-accordion', [
            'title' => 'Accordion - NiceAdmin'
        ]);
    }

    // Forms
    public function formElements(): string
    {
        return view('showcase/forms/forms-elements', [
            'title' => 'Form Elements - NiceAdmin'
        ]);
    }

    public function formLayouts(): string
    {
        return view('showcase/forms/forms-layouts', [
            'title' => 'Form Layouts - NiceAdmin'
        ]);
    }

    // Pages
    public function profile(): string
    {
        return view('v_profile', [
            'title' => 'Profile - Toko'
        ]);
    }

    public function faq(): string
    {
        return view('showcase/pages/pages-faq', [
            'title' => 'FAQ - NiceAdmin'
        ]);
    }

    public function contact(): string
    {
        return view('showcase/pages/pages-contact', [
            'title' => 'Contact - NiceAdmin'
        ]);
    }

    public function login(): string
    {
        return view('showcase/pages/pages-login', [
            'title' => 'Login - NiceAdmin'
        ]);
    }

    public function register(): string
    {
        return view('showcase/pages/pages-register', [
            'title' => 'Register - NiceAdmin'
        ]);
    }

    public function error404(): string
    {
        return view('showcase/pages/pages-error-404', [
            'title' => 'Error 404 - NiceAdmin'
        ]);
    }

    public function blank(): string
    {
        return view('showcase/pages/pages-blank', [
            'title' => 'Blank Page - NiceAdmin'
        ]);
    }

    // Custom Pages
    public function produk(): string
    {
        return view('v_produk', [
            'title' => 'Produk - NiceAdmin'
        ]);
    }

    public function keranjang(): string
    {
        return view('v_kerajang', [
            'title' => 'Keranjang - NiceAdmin'
        ]);
    }
}
