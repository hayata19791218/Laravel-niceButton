@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-10 mt-6">
        <div class="card-body">
            <h1 class="mt4">新規作成</h1>
            <form enctype="multipart/form-data" action="{{route('post.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">件名</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <label for="body">本文</label>
                    <textarea name="body" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-success">送信する</button>
            </form>
        </div>
    </div>
</div>
@endsection