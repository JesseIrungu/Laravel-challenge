<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tasks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
                <h4>Tasks</h4>
                <hr>

                @csrf
                 
                    @if(Session::has('task_delete'))
                    <div class="alert alert-success">{{Session::get('task_delete')}}</div>
                    @endif

                <a style="float:right" href="todos">Add Task</a>
                    <table class="table">
                        <tr>
                        <th>ID</th>
                        <th>Task Name</th>
                        <th>Completed</th>
                        <th>Action</th>
                    </tr>
                    
                    @foreach($todos as $todos)
                    <tr>
                        <td>{{ $todos ->id}}</td>
                        <td>{{ $todos ->taskname}}</td>
                        <td>{{ $todos ->completed }}</td>
                        <td>
                            <a href="/update-task/{{ $todos ->id }}">Update</a></br>
                            <a href="/delete-task/{{ $todos ->id }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach

                    </table>

            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>
</html>