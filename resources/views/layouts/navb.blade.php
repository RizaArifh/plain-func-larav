
@section('navb')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('home')}}">Twitter Lite</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('home')}}" >Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('about')}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
        </li>
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
        
      </ul>
    </div>
  </nav>
  @endsection