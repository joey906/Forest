<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forest;
use App\Http\Requests\ForestRequest;

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
    
    /**
     * ブログ登録画面を表示
     * @return view
     */
    public function showCreate() {
        return view('forest.form');
    }

    /**
     * ブログを登録する
     * @return view
     */
    public function exeStore(ForestRequest $request) {
        $inputs = $request->all();

        \DB::beginTransaction();
        try {
            Forest::create($inputs);
            \DB::commit();
        } catch(\Throwable $e)
         {
             \DB::rollback();
             abort(500);
        }
        
        \Session::flash('err_msg', 'ブログを登録しました');
        return redirect(route('top'));
    }

    /**
     * 詳細画面表示
     * @param int $id
     * @return view
     */

    public function showEdit($id) {
        $forest = Forest::find($id);

        if (is_null($forest)) {
            \Session::flash('err_msg', 'データがありません');
            return redirect(route('top'));
        }
        
        return view('forest.edit',['forest' => $forest]);
    }

     /**
     * ブログを更新する
     * @return view
     */
    public function exeUpdate(ForestRequest $request) {
        $inputs = $request->all();

        \DB::beginTransaction();
        try {
            $forest = Forest::find($inputs['id']);
            $forest->fill([
                'en' => $inputs['en'],
                'ja' => $inputs['ja']
            ]);
            $forest->save();
            \DB::commit();
        } catch(\Throwable $e)
         {
             \DB::rollback();
             abort(500);
        }
        
        \Session::flash('err_msg', 'ブログを更新しました');
        return redirect(route('top'));
    }
}
