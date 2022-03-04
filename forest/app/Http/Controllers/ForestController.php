<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forest;

class ForestController extends Controller
{
    /**
     * フォレストのトップページ
     * 
     * @return view
     */
    public function top() {
        $forests = Forest::all();
        
        return view('forest.list',['forests' => $forests]);
    }
}
