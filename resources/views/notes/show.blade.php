@extends("layouts.app")


@section("title", "Show")

@section("content")

    <div class="show-container">
        
        <h1 class="text-light mt-5 display-4">Title: {{ $note->title }}</h1>
        <p class="text-light my-5 display-4">Content: {{ $note->content }}</p>
        
        <div class="text-center">
            <a href="{{ route("notes.index") }}" class="show-back-list btn btn-primary">Back to your list</a>
        </div>
    </div>

@endsection