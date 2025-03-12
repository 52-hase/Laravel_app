<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        print("<h1>こんにちは！ Laravel です！</h1>");
        return null;
    }
}