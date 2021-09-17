@extends("layouts.app")


@section("title", "Register")

@section("content")

    <h1 class="text-center mt-3 display-4 text-light">Register <i class="fas fa-user-plus"></i></i></h1>

    <div class="text-light register-container">
        <form action="{{ route("register") }}" method="post">
            
            @csrf
            <div class="form-group"> <div></div>
                <label for="name">Name</label>
                <input value="{{ old("name") }}" name="name" id="name"
                class="form-control{{ $errors->has("name") ? " is-invalid": "" }}">

                @if ($errors->has("name"))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first("name") }}</strong>
                    </span>                
                @endif
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input value="{{ old("email") }}" name="email" id="email" 
                class="form-control{{ $errors->has("email") ? " is-invalid": "" }}">

                @if ($errors->has("email"))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first("email") }}</strong>
                    </span>                
                @endif
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" 
                class="form-control{{ $errors->has("password") ? " is-invalid": "" }}">

                @if ($errors->has("password"))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first("password") }}</strong>
                    </span>                
                @endif
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary btn-block mt-4">Register</button>
        
        </form>
    </div>


@endsection