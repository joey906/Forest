@extends('layout')
@section('title', 'ブログ投稿')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>ブログ投稿フォーム</h2>
        <form method="POST" action="{{ route('store') }}" onSubmit="return checkSubmit()">
            @csrf
            <div class="form-group">
                <label for="title">
                    タイトル
                </label>
                <input
                    id="title"
                    name="en"
                    class="form-control"
                    value="{{ old('en') }}"
                    type="text"
                >
                @if ($errors->has('en'))
                    <div class="text-danger">
                        {{ $errors->first('en') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="content">
                    本文
                </label>
                <textarea
                    id="content"
                    name="ja"
                    class="form-control"
                    rows="4"
                >{{ old('ja') }}</textarea>
                @if ($errors->has('ja'))
                    <div class="text-danger">
                        {{ $errors->first('ja') }}
                    </div>
                @endif
            </div>
            <div class="mt-5">
                <a class="btn btn-secondary" href="{{ route('top') }}">
                    キャンセル
                </a>
                <button type="submit" class="btn btn-primary">
                    投稿する
                </button>
            </div>
        </form>
    </div>
</div>
<script>
function checkSubmit(){
if(window.confirm('送信してよろしいですか？')){
    return true;
} else {
    return false;
}
}
</script>
@endsection