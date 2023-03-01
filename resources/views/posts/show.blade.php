@extends('layouts.app');

@section('content')
        <a href="/posts" class="btn btn-default">Go Back</a>
        <h1>{{$post->title}}</h1>
        <small>Written on {{$post->created_at}}</small>
        <div>
            {{$post->body}}
        </div>
        @if(!Auth::guest())
            @if(Auth::user()->id==$post->user_id)
                <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
                <form action="{{action('PostController@destroy',$post->id)}}" method="post" class="pull-right">
                <input name="_method" type="hidden" value="DELETE">
                    <!-- @csrf -->
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <button type="submit" class="btn btn-default">Delete</button>
                </form>
            @endif
        @endif
@endsection