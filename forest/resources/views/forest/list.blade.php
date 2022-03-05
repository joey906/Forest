@extends('layout')
@section('title', 'ブログ一覧')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
      <h2>ブログ記事一覧</h2>
      @if (session('err_msg'))
          <p class="text-danger">
              {{session('err_msg')}}
          </p>
      @endif
      <table class="table table-striped">
          <tr>
              <th>記事番号</th>
              <th>タイトル</th>
              <th>更新</th>
          </tr>
          @foreach($forests as $forest)
          <tr>
              <td>{{$forest->id}}</td>
              <td><a href="/forest/{{ $forest->id }}">{{$forest->en}}</a></td>
              <td>{{$forest->updated_at}}</td>
          </tr>
          @endforeach
      </table>
  </div>
</div>
@endsection
    