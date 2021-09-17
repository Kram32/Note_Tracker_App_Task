@extends("layouts.app")


@section("title", "Create")


@section("content")

   
      
        <h1 class="text-center mt-3 display-4 text-light">Create Note <i class="fas fa-plus-circle"></i></h1>
        
        <div class="text-light create-container">

            <form action="{{ route("notes.store") }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Note Title</label>
                    <input  name="title" type="text" class="form-control" id="title" placeholder="Note Title" required>
                </div>
                
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" class="form-control" id="content" cols="30" rows="10" placeholder="Content" required></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary btn-block mt-4">Create</button>
            </form> 
        
        </div>


@endsection