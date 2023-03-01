@extends('layouts.app');

@section('content')
        <h1>Posts</h1>
        @if(count($posts)>0)
            @foreach($posts as $post)
                <div class="well">
                    <a href="/posts/{{$post->id}}"><h3>{{$post->title}}</h3></a>
                    <small>Written on {{$post->created_at}}</small>
                </div>
            @endforeach
        @else
            <p>No Posts Found</p>
        @endif
@endsection