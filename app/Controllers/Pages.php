<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'My Portfolio'
        ];
        return view('pages/home', $data);
    }
}