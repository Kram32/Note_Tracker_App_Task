<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <title>Home Page</title>
</head>
<body>
    <div class="home-index">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand font-weight-bold" href="{{ route("home.index") }}"><i class="fas fa-clipboard mr-1"></i> Note Tracker App</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            
            
            <li class="nav-item">
              <a class="nav-link" href="{{ route("home.index") }}">Home</a>
            </li>

       

          @guest
      
          
          <li class="nav-item">
            <a class="nav-link" href="{{ route("register") }}">Register</a>
          </li>

          
          <li class="nav-item">
            <a class="nav-link" href="{{ route("login") }}">Login</a>
          </li>
  
          @else


          

          <li class="nav-item">

            <li class="nav-item">
              <a class="nav-link" href="{{ route("notes.index") }}">Notes</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route("notes.create") }}">Add Note</a>
            </li>
            
              <a class="nav-link" href="{{ route("logout") }}"
              onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                Logout (@if (Auth::user()->is_admin === 1)

                {{ "admin" }}
          
              @else

              {{ Auth::user()->email }} 
                
              @endif
              )
              
              </a>

              <form id="logout-form" method="post" action="{{ route("logout") }}" style="display: none;">
                @csrf
              </form>
        
          </li>
  
  
          @endguest



          </ul>
        </div>
      </nav>

    
     <div class="home-inner-container">
          <h1 class="text-center mt-5 text-light home-welcome">Welcome to <span class="home-note-tracker-app-text">Note Tracker App</span>, {{ Auth::user()->name }}!</h1>
          <p class="text-center text-light home-paragraph">We are taking notes very seriously</p>
      </div>
    </div>


    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8ca5a86689.js" crossorigin="anonymous"></script>
</body>
</html>


    
    

