@extends("layouts.app")


@section("title", "Register")

@section("content")

    <h1 class="text-center mt-3 display-4 text-light">Login <i class="fas fa-sign-in-alt"></i></h1>


    <div class="text-light login-container">
        <form action="{{ route("login") }}" method="post"> 

            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" id="email" 
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

            <button type="submit" class="btn btn-primary btn-block mt-4">Login</button>
        
        </form>
    </div>


@endsection