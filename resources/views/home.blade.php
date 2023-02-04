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

                <form action="{{route('post.destroy',$post)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">削除</button>
                </form>

                @if($nice)

                <!-- 「いいね」取消用ボタンを表示 -->
                    <a href="{{ route('unnice', $post) }}" class="btn btn-success btn-sm">
                        いいねを消す
                        <!-- 「いいね」の数を表示 -->
                        <span class="badge">
                            {{ $post->nices->count() }}
                        </span>
                      
                        {{$post->user->name}}
                    </a>
                @else
                <!-- まだユーザーが「いいね」をしていなければ、「いいね」ボタンを表示 -->
                    <a href="{{ route('nice', $post) }}" class="btn btn-secondary btn-sm">
                        いいねをつける
                        <!-- 「いいね」の数を表示 -->
                        <span class="badge">
                            {{ $post->nices->count() }}
                        </span>
                        <p>id : {{$post->id}}</p>
                        <p>いいねをつけた人 : {{$post->user->name}}</p>
                    </a>
                @endif

                @php 
                    echo '<pre>'; 
                    var_dump($nice); 
                    echo '<pre>';
                @endphp

             
            </div>
        </div>
    </div>
</div>



@endforeach
@endsection
