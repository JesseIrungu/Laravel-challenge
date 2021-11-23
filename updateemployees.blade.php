<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
                <h4>Enter Employee Details</h4>
                <hr>
                
                <form action="{{route('edit-employee')}}" method="post">
                    @csrf
                 
                    @if(Session::has('employee_update'))
                    <div class="alert alert-success">{{Session::get('employee_update')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                
                <input type="hidden" name="id" value="{{$employees->id}}">

                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" name="firstname" value="{{$employees->firstname}}">
                    
                </div>

                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" name="lastname" value="{{$employees->lastname}}">
                    
                </div>

                <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" class="form-control" name="company" value="{{$employees->company}}">
                    
                </div></br>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" class="form-control" name="email" value="{{$employees->email}}">
                    
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" value="{{$employees->phone}}">
                    
                </div>

                <div class="form-group">
                    <button class="btn btn-block btn-primary" type="submit">Update</button>
                </div></br>

                

                </form>


            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>
</html> 