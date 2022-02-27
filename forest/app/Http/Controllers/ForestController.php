<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForestController extends Controller
{
    /**
     * フォレストのトップページ
     * 
     * @return view
     */
    public function top() {
        return view('forest.list');
    }
}
