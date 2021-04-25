@extends('layouts.app')

@section('content')
    <div class="back_container">
        <a class="back_btn" href="{{ url('home/create') }}">Back</a>
    </div>

    <div class="new_post">
        <div class="label" >Edit Post</div>

        <div class="inp-ttl">
            <form action="/home/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')

                <label class="ttl_label" for="title">Title</label> <br>
                <input type="text" class="title" name="title" autocomplete="new-password" value="{{ $post->title }}" > <br>

                <label class="text_label"  for="Body">Your Text</label>  <br>
                <textarea name="body" id="body" class="body-text" cols="30" rows="10" >{{ $post->body }}</textarea>

                <button class="sub_btn" type="submit">submit</button>
            </form>
        </div>

    </div>

@endsection
