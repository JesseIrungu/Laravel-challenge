<div>
    <h1>Todos</h1>
    
</div>

<form action="{{route('add-task')}}" method="post">
@csrf
                 
                 @if(Session::has('success'))
                 <div class="alert alert-success">{{Session::get('success')}}</div>
                 @endif
                 @if(Session::has('fail'))
                 <div class="alert alert-danger">{{Session::get('fail')}}</div>
                 @endif

                    <label for="name">Task Name</label>
                    <input type="text" class="form-control" name="taskname"></br>

                <input type="radio"  name="completed" value="1">
                    Complete
                &nbsp
                    <input type="radio"  name="completed" value="0">
                    Inomplete
                    
                </br></br>

                <div class="form-group">
                    <button class="btn btn-block btn-primary" type="submit">Submit</button>
                </div></br>

                <a href="readtasks">View registered tasks</a>

</form>
