@extends('layout')
@section('title', 'ブログ一覧')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
      <h2>ブログ記事一覧</h2>
      <table class="table table-striped">
          <tr>
              <th>記事番号</th>
              <th>日付</th>
              <th>タイトル</th>
              <th>更新</th>
          </tr>
          @foreach($forests as $forest)
          <tr>
              <td>{{$forest->id}}</td>
              <td>{{$forest->ja}}</td>
              <td>{{$forest->en}}</td>
              <td>{{$forest->updated_at}}</td>
          </tr>
          @endforeach
      </table>
  </div>
</div>
@endsection
    