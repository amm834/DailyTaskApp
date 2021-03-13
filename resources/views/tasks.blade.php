  @extends('layouts.app')
  @section('content')
  <div class="container">
    <div class="text-center">

      <h1 style="background-color:Tomato; color:black; border: 15px solid powderblue; text-align: center;">DAILY TASKS</h1>
      <div class="row">
        <div class="col-md-12">

          @foreach($errors->all() as $error)

          <div class="alert alert-danger" role="alert">
            {{$error}}
          </div>

          @endforeach

          <form action="/saveTask"
          method="POST"
          >
            @csrf
        
            <input type="text" class="form-control" name="task" placeholder="Enter Your Task Here">
          </br>
          <input type="submit" class="btn btn-primary" value="SAVE">
          <input type="button" class="btn btn-warning" value="CLEAR">
        </form>
        <br>
        <br>
        <br>
        <table class="table table-dark">
          <th>ID</th>
          <th>Task</th>
          <th>Completed</th>
          <th>Action</th>

          @foreach($tasks as $task)
          <tr>
            <td>{{$task->id}}</td>
            <td>{{$task->task}}</td>
            <td>
              @if($task->is_completed)
              <button type="button" class="btn btn-success">COMPLETED</button>
              @else
              <button type="button" class="btn btn-danger">NOT COMPLETED</button>

              @endif
            </td>
            <td>

              @if($task->is_completed)


              <a href="/markasnotcompleted/{{$task->id}}" class="btn btn-warning">Mark as Not Completed</a>

              @else
              <a href="/markascompleted/{{$task->id}}" class="btn btn-info">Mark as Completed</a>
              @endif
              <a href="/deletetask/{{$task->id}}" class="btn btn-danger">Delete</a>
              <a href="/updatetask/{{$task->id}}" class="btn btn-primary">Update</a>
            </td>


          </tr>
          @endforeach

        </table>
      </div>
    </div>
  </div>
</div>
@endsection