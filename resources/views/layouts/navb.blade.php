@section('navb')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('home')}}">Twitter Lite</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            {{-- basic --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Basic Page
                </a>
                <ul class="dropdown-menu bg-dark text-center text-light " aria-labelledby="navbarDropdown"
                    style="min-width: 7rem ">
                    <li class="nav-item ">
                        <a class=" nav-link" href="{{route('home')}}">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link" href="{{route('about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link" href="{{route('contact')}}">Contact Us</a>
                    </li>
                </ul>
            </li>

            {{-- CRUD --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    CRUD Page
                </a>
                <ul class="dropdown-menu bg-dark text-center text-light " aria-labelledby="navbarDropdown"
                    style="min-width: 7rem ">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('users.all')}}">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('post.getallpost')}}">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('student.show')}}">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('teacher.index')}}">Teacher</a>
                    </li>
                </ul>
            </li>
            {{-- Function --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Function
                </a>
                <ul class="dropdown-menu bg-dark text-center text-light " aria-labelledby="navbarDropdown"
                    style="min-width: 7rem ">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('upload.uploadform')}}">Upload File</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('mail.send')}}">Send Email</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('zip.download')}}">Download Zip</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('image.resize')}}">Resize Image</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('product.searchform')}}">Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('chart.index')}}">HighChart</a>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('chart.bar')}}">BarChart</a>
                      </li>
                </ul>
            </li>
            {{-- Form --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Form Page
                </a>
                <ul class="dropdown-menu bg-dark text-center text-light " aria-labelledby="navbarDropdown"
                    style="min-width: 10rem ">

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('auth.parsley')}}">Validate Parsley</a>
                    </li>
                </ul>
            </li>





        </ul>
    </div>
</nav>

@endsection

@yield('c')
