@extends('layouts.app');

@section('content')
        <h1>Create Post</h1>
        <form action="{{action('PostController@store')}}" method="post">
            
            <div class="form-group">
                <label for="exampleFormControlInput1">Enter Title</label>
                <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="body" rows="3"></textarea>
            </div>
            <!-- @csrf -->
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@endsection