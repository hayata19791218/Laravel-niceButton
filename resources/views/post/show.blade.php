@extends('layouts.app')

@section('content')
@foreach($posts as $post)
<div class="container-fulid mt-20" style="margin-left:-10px;">
    <div >
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="media flex-wrap w-100 align-items-center">
                        <div class="media-body ml-3">{{$post->title}}</div>
                    </div>
                </div>
                <div class="card-body">
                    <p>{{$post->body}}</p>
                </div>

                @if($post->nices()->where('user_id', Auth::user()->id)->count() == 1)
                <a href="{{ route('unnice', $post) }}" class="btn btn-success btn-sm">
                    いいねを消す
                    <span class="badge">{{ $post->nices->count() }}</span>
                </a>
                @else
                <a href="{{ route('nice', $post) }}" class="btn btn-secondary btn-sm">
                    いいねをつける
                    <span class="badge">{{ $post->nices->count() }}</span>
                </a>
                @endif
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
