<?php

namespace views\subview\Controllers;

use Illuminate\Http\Request;

class catController extends Controller
{
    public function about () {
        return view('about');
        }
        public function check () {
        return view('check');
        }
        public function read () {
        $read = array(
        'Read Book 1',
        'Read Book 2'
        );
        return view('read', compact('read'));
}
