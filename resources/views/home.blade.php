@extends('layouts.app')

@section('content')

            <div class="home_btns">
                <a href="{{ url('home/create') }}">New Post</a>
                <a href="/home/ {{  Auth::user()->id }} ">Your Posts</a>
            </div>

            <div class="feeds">
                {{-- {{ Auth::user()->id }} --}}
                {{-- <a href="show">Your Posts</a> --}}
                <h1>Your Feed</h1>
                @foreach ($posts as $post )
                    <div
                    class="main">
                        <p id="sweet">
                            <span class="postId">By {{ $post->User_name }}</span>
                           <span class="quote">"</span> {{ $post->body }} <span class="quote">"</span>
                        </p>
                        <button type="submit" class="likee">Hey</button>
                    </div>
                @endforeach
                    <form action=""></form>
            </div>


                    {{-- <div style="margin-top: 100px"><a href="create">Hey</a></div> --}}

@endsection


