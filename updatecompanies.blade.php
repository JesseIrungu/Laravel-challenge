<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
                <h4>Enter Company Details</h4>
                <hr>
                
                <form action="{{route('edit-company')}}" method="post">
                    @csrf
                 
                    @if(Session::has('company_update'))
                    <div class="alert alert-success">{{Session::get('company_update')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                
                <input type="hidden" name="id" value="{{$companies->id}}">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$companies->name}}">
                    
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" class="form-control" name="email" value="{{$companies->email}}">
                    
                </div>

                <div class="form-group">
                    <label for="logo">Logo</label>
                    <input type="text" class="form-control" name="logo" value="{{$companies->logo}}">
                    
                </div>

                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="text" class="form-control" name="website" value="{{$companies->website}}">
                    
                </div></br>
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