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

    /**
     * 詳細画面表示
     * @param int $id
     * @return view
     */

    public function showDetail($id) {
        $forest = Forest::find($id);

        if (is_null($forest)) {
            \Session::flash('err_msg', 'データがありません');
            return redirect(route('top'));
        }
        
        return view('forest.detail',['forest' => $forest]);
    }
}
