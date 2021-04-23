@extends('layouts.app')

@section('content')


            <div class="feeds">

                <a href="create">New Post</a>
                <a href="{}">Your Posts</a>
                <a href="show">Your Posts</a>
                @foreach ($posts as $post )
                    <div
                    class="main">
                        <p id="sweet">
                            <span class="postId"> {{ $post->id }}</span>
                           <span class="quote">"</span> {{ $post->body }} <span class="quote">"</span>
                        </p>
                        <button type="submit" class="likee">Hey</button>
                    </div>
                @endforeach

            </div>


                    {{-- <div style="margin-top: 100px"><a href="create">Hey</a></div> --}}

@endsection


