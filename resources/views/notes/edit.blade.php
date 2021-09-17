@extends("layouts.app")


@section("title", "Edit")


@section("content")


    <h1 class="text-center mt-3 display-4 text-light">Edit Note <i class="fas fa-edit"></i></h1>

    <div class="text-light edit-container">

        <form action="{{ route("notes.update", $note->id) }}" method="post">
            @csrf
            @method("PUT")
            <div class="form-group">
                <label for="title">Note Title</label>
                <input  name="title" value="{{ $note->title }}" type="text" class="form-control" id="title" placeholder="Note Title" required>
            </div>
            
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" class="form-control" id="content" cols="30" rows="10" placeholder="Content" required>{{ $note->content }}</textarea>
            </div>
            
            <button type="submit" class="btn btn-primary btn-block mt-4">Update</button>
        </form>
    </div>

@endsection