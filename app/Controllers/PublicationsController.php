<?php

namespace App\Controllers;

class PublicationsController extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Publications',
        ];
        return view('frontend/publications',$data);
    }
}
