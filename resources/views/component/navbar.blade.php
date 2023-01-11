 
 <header class="navbar px-3" style="background-color: black">
     @auth

         <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between w-100">
             <a class="col-md-3 nav-link d-md-flex px-2 text-center justify-content-center" href="{{ '/' }}">
                 <div class="logoarea px-2 d-flex align-items-center">
                     <img src="{{ asset('/img/logo.jpeg') }}" alt="" width="180px">
                 </div>
             </a>

             <div class="d-flex">
                 <div class="dropdown ms-4">
                     <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown"
                         aria-expanded="false">
                         {{ auth()->user()->name }}
                     </button>
                     <ul class="dropdown-menu" style="left:-150%;">
                         {{-- Logout --}}
                         <li><a href="{{ url('tiket') }}" class="dropdown-item">My Ticket</a></li>
                         
                         <hr class="m-1">
                         <li>                            
                             <form action="{{ url('logout') }}" method="POST">
                                 @csrf
                                 <button type="submit" class="dropdown-item">Logout</button>
                             </form>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     @else
         <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between w-100">
             <a class="col-md-3 nav-link d-md-flex px-2 text-center justify-content-center" href="{{ '/' }}">
                 <div class="logoarea px-2 d-flex align-items-center">
                     <img src="{{ asset('/img/logo.jpeg') }}" alt="" width="180px">
                 </div>
             </a>

             <div class="col-md-3 text-end">
                 @if (Auth::check())
                     <button type="button" class="btn btn-outline-primary">My Ticket</button>
                     <a href="{{ url('logout') }}" class="btn btn-danger">Logout</a>
                 @else
                     <a href="{{ url('login') }}" class="btn btn-outline-primary mx-1">Masuk</a>
                     <a href="{{ url('register') }}" class="btn btn-outline-warning mx-1">Registrasi</a>
                 @endif
             </div>
         </div>
         
     @endauth

     
 </header>
 
