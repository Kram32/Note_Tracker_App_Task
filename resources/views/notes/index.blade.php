@extends("layouts.app")


@section("title", "All Notes")


@section("content")

  <div class="text-light">
    <h1 class="text-center my-5 display-4">All Notes <i class="fas fa-book-open"></i></h1>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Note Title</th>
              <th scope="col">Content</th>
              @if (Auth::user()->is_admin == 1)
                <th scope="col">User</th>
              @endif
              <th scope="col">Created_at</th>
              <th scope="col">Updated_at</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
          
                @foreach ($notes as $key => $note)
                  <tr>   
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $note->title }}</td>
                    <td>{{ $note->content }}</td>
                    @if (Auth::user()->is_admin == 1)
                    <td>{{ $note->user->is_admin == 1 ? "admin" : $note->user->name }}</td>
                    @endif
                    <td>{{ $note->created_at->diffForHumans() }}</td>
                    <td>{{ $note->updated_at->diffForHumans() }}</td>
                    <td>

                        {{--  <h3>{{ $note->user->name }}</h3>  --}}
                        <div class="d-flex">
                            <a href="{{ route("notes.edit", $note->id) }}" class="btn btn-success mr-2">Edit</a>
                            
                            <form action="{{ route("notes.destroy", $note->id) }}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </td>
                  </tr> 
                @endforeach 
          </tbody>
      </table>
  </div>

@endsection