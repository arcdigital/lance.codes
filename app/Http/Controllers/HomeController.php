<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index() {
    	return 'Lance Codes';
    }

    public function laravel() {
    	return 'Lance Codes Laravel';
    }

    public function php() {
    	return 'Lance Codes PHP';
    }
}
