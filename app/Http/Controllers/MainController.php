<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        // load user's note
        
        // show home view
        return view('home');
    }

    public function newNote(){
        echo 'I am create a new note';
    }
}
