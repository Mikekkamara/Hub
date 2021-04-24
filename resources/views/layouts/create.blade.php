@extends('layouts.app')

@section('content')

<div class="new_post">
    <div class="label" >New Post</div>

    <div class="inp-ttl">
        <form action="/home" method="POST">
        @csrf

            <label class="ttl_label" for="title">Title</label> <br>
            <input type="text" class="title" name="title" autocomplete="new-password" > <br>

            <label class="text_label"  for="Body">Your Text</label>  <br>
            <textarea name="body" id="body" class="body-text" cols="30" rows="10"></textarea>

            <button class="sub_btn" type="submit">submit</button>
        </form>
    </div>

</div>

@endsection
