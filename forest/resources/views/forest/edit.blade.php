@extends('layout')
@section('title', 'ブログ編集')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>ブログ編集フォーム</h2>
        <form method="POST" action="{{ route('update') }}" onSubmit="return checkSubmit()">
            @csrf
            <input type="hidden" name="id" value="{{ $forest->id }}">
            <div class="form-group">
                <label for="title">
                    タイトル
                </label>
                <input
                    id="title"
                    name="en"
                    class="form-control"
                    value="{{ $forest->en }}"
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
                >{{ $forest->ja }}</textarea>
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
                    更新する
                </button>
            </div>
        </form>
    </div>
</div>
<script>
function checkSubmit(){
if(window.confirm('更新してよろしいですか？')){
    return true;
} else {
    return false;
}
}
</script>
@endsection