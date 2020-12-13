<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teachers Ajax CRUD</title>
    {{-- BS-css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    {{-- BS-js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    

</head>
<body>
    @include('layouts.navb')
    @yield('navb')
    <div class="container">
    
    <div class="mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
               Teachers 
               <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#teacherModal" >Add New Teacher</a>
                </div>
                <div class="card-body">
                    <table id="teacherTable" class="table">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teachers as $teacher)
                            <tr>
                                <td>{{$teacher->firstname}}</td>
                                <td>{{$teacher->lastname}}</td>
                                <td>{{$teacher->email}}</td>
                                <td>{{$teacher->phone}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                
                </div>
            </div>
        </div>
    </div>
</div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="teacherModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" id="teacherForm">
              @csrf
              <div class="form-group">
                  <label for="firstname">First Name</label>
                  <input id="firstname" class="form-control" type="text" name="firstname">
              </div>
              <div class="form-group">
                  <label for="lastname">Last Name</label>
                  <input id="lastname" class="form-control" type="text" name="lastname">
              </div>
              <div class="form-group">
                  <label for="email">Email</label>
                  <input id="email" class="form-control" type="email" name="email">
              </div>
              <div class="form-group">
                  <label for="phone">Phone</label>
                  <input id="phone" class="form-control" type="text" name="phone">
              </div>
              <button type="submit" class="btn btn-primary mt-3">Submit</button>
          </form>
        </div>
        
      </div>
    </div>
  </div>
      <script>
          $('#teacherForm').submit(function(e){
              e.preventDefault();
              let firstname=$('#firstname').val();
              let lastname=$('#lastname').val();
              let email=$('#email').val();
              let phone=$('#phone').val();
              let _token=$("input[name=_token]").val();

              $.ajax({
                  url:"{{route('teacher.add')}}",
                  type:"POST",
                  data:{
                      firstname:firstname,
                      lastname:lastname,
                      email:email,
                      phone:phone,
                      _token:_token,
                  },
                  success:function(response){
                      if(response){
                          $("#teacherTable tbody").prepend('<tr><td>'+ response.firstname +'</td><td>'+ response.lastname +'</td><td>'+ response.email +'</td><td>'+ response.phone +'</td></tr>');
                          $("#teacherForm")[0].reset();
                          $("#teacherModal").modal('hide');
                      }
                  }
              })
          })
      </script>
</body>
</html>