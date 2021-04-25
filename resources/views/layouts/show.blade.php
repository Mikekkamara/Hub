@extends('layouts.app')

@section('content')
        <div class="post_container">
            <h1 class="post_ttl">Your Posts</h1>
            <h6><a href="/home">Back</a></h6>

            @foreach ($posts as $post )
            <div class="your_posts">
                {{ $post->body }}
                <span class="edit_post" ><a href="{{ $post->id }}/edit">Edit &rarr;</a></span>
                
            {{-- DELETE BUTTON --}}
            <form action="{{ $post->id }}" method="POST">
                @csrf
                @method('delete')
                {{-- <span class="delete_post" ></span> --}}
                <button type="submit">Delete &rarr;</button>
            </form>
            {{-- DELETE BUTTON --}}
            </div>
            @endforeach

        </div>

@endsection
