<?php
namespace App\Controllers;
use CodeIgniter\Controllers;

class InfographicsController extends BaseController {

    public function index(){
         $page = "Infographics";
        return view('frontend/infographics',compact('page'));
    }

}