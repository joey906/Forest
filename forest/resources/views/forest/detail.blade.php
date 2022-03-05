@extends('layout')
@section('title', 'ブログ詳細')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
      <h2>{{$forest->en}}</h2>
      <span>作成日:{{$forest->created_at}}</span>
      <span>更新日:{{$forest->updated_at}}</span>
      <p>{{$forest->ja}}</p>
  </div>
</div>
@endsection
    