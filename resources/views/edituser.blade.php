<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
body {
    /* background: url('https://static-communitytable.parade.com/wp-content/uploads/2014/03/rethink-target-heart-rate-number-ftr.jpg') fixed; */
    background-size: cover;
}

form {
    margin-top: 20rem;
}

*[role="form"] {
    max-width: 530px;
    margin-bottom: 20rem;
    padding: 15px;
    margin: 0 auto;
    border-radius: 0.3em;
    background-color: #f2f2f2;
}

*[role="form"] h2 {
    font-family: 'Open Sans', sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #000000;
    margin-top: 5%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}
</style>
<div class="container">

    <form class="form-horizontal" action="{{route('user.update',$user->id)}}" method="POST" role="form">
        @csrf
        @method('PUT')
        <h2>Registration</h2>
        <div class="form-group">
            <label for="firstName" class="col-sm-3 control-label">First Name</label>
            <div class="col-sm-9">
                <input type="text" id="firstName" name="username" placeholder="First Name"
                    value="{{ old('username', $user->username) }}" class="form-control" autofocus>
            </div>

        </div>
        <div>
            @error('username')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email* </label>
            <div class="col-sm-9">
                <input type="email" id="email" placeholder="Email" value="{{ old('email', $user->email) }}"
                    class="form-control" name="email">
            </div>

        </div>
        <div>
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password*</label>
            <div class="col-sm-9">
                <input type="password" id="password" name="password" value="{{ old('password', $user->password) }}"  placeholder="Password" class="form-control">
            </div>

        </div>
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
            <div class="col-sm-9">
                <input type="password" name="confirm_password" value="{{ old('password', $user->password) }}" id="confirm_password" placeholder="Password"
                    class="form-control">
            </div>

        </div>
        @error('confirm_password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="phone" class="col-sm-3 control-label">Phone*</label>
            <div class="col-sm-9">
                <input type="number" id="phone" value="{{ old('phone', $user->phone) }}" class="form-control">
                <!-- <span class="help-block">Your phone number won't be disclosed anywhere </span> -->
            </div>

        </div>
        @error('phone')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="city" class="col-sm-3 control-label">City</label>
            <div class="col-sm-9">
                <input type="text" id="city" placeholder="City" value="{{ old('city', $user->city) }}" class="form-control">

            </div>

        </div>
        @error('city')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">

            <label class="control-label col-sm-3">Gender</label>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-4">
                        <label class="radio-inline">
                            <input type="radio" name="gender" id="femaleRadio" value="Female">Female
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <label class="radio-inline">
                            <input type="radio" name="gender" id="maleRadio" value="Male">Male
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="weight" class="col-sm-3 control-label">Hobbies </label>
            <div class="col-sm-9">
                <select name="hobbies" class="form-control" id="hobbies">
                    <option value="">Select</option>
                    <option value="cricket">Cricket</option>
                    <option value="reading book">Reading Book</option>
                    <option value="song">Song</option>
                    <option value="other">other</option>


                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="weight" class="col-sm-3 control-label">Permission </label>
            <div class="col-sm-9">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="view_user"
                        value="view_user">
                    <label class="form-check-label" for="inlineCheckbox1">View</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="create_user"
                                value="create_user">
                            <label class="form-check-label" for="inlineCheckbox1">Add</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="edit_user"
                                value="edit_user">
                            <label class="form-check-label" for="inlineCheckbox1">Edit</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="delete_user"
                                value="delete_user">
                            <label class="form-check-label" for="inlineCheckbox1">Delete</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">

                </div> <!-- /.form-group -->

                <button type="submit" class="btn btn-primary btn-block">Register</button>
    </form> <!-- /form -->
</div> <!-- ./container -->