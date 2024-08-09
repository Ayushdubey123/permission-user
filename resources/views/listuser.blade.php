<!-- <table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table> -->
<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
    <!-- Include Bootstrap CSS from a CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        
        .create-button {
            position: absolute;
            bottom:1rem;
            right: 50px;
        }
        </style>
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-4">Users List</h1>
        <div class="col-12">
              @if(auth()->user()->create_user==="create_user")
            <a href="{{route('create.user')}}" class="btn btn-primary create-button">Create New</a>
            @endif
        </div>

            <table class="table table-striped">
                
     
        <!-- <button type="button" class="btn btn-primary">Primary</button> -->
         
   
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->gender }}</td>
                            <td>
                              @if(auth()->user()->edit_user==="edit_user")
                             
                              <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                              @else
                              <del>edit</del>
                              @endif
                              @if(auth()->user()->delete_user==="delete_user")
                             
                             <a href="#" class="btn btn-danger">Delete</a>
                             @else
                           <del>delete</del>
                             @endif
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
 
    </div>

    <!-- Include Bootstrap JS and dependencies from a CDN -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</body>
</html>
