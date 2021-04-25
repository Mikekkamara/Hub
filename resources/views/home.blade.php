@extends('layouts.app')

@section('content')

            <div class="home_btns">
                <a class="post_btn" href="{{ url('home/create') }}">New Post</a>
                <a class="show_posts"href="/home/ {{  Auth::user()->id }} ">Your Posts</a>
            </div>

            <div class="feeds">
                {{-- {{ Auth::user()->id }} --}}
                {{-- <a href="show">Your Posts</a> --}}
                <h1>Your Feed</h1>
                @foreach ($posts as $post )
                    <div
                    class="main">
                        <p id="sweet">
                            <span class="postId">By <a href="#">{{ $post->User_name }}</a> . Liked by {{ $post->likes }}</span>
                            <span class="home_ttl">{{ $post->title }}</span> <br>
                           <span class="quote">"</span> {{ $post->body }} <span class="quote">"</span>
                        </p>
                        <form action="home/{{ $post->id }}/like" method="POST">
                        @csrf
                        @method('get')
                           <button class="like_btn" type="submit" onsubmit="stop()">L</button>
                        </form>

                    </div>
                @endforeach
                    {{-- <form action=""></form> --}}
            </div>


                    {{-- <div style="margin-top: 100px"><a href="create">Hey</a></div> --}}

@endsection


