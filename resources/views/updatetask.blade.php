  @extends('layouts.app')
  @section('content')
  <div class="container">
    <form action="{{action('Taskcontroller@updatetask',$taskdata->id) }}" method="post" class="mt-5">
      @csrf
      <!-- Use Margin/Padding -->
      <div class="mb-3">
        <input type="text" class="form-control" name="task" value="{{$taskdata->task}}" />
      </div>
      <input type="submit" class="btn btn-warning my-3" value="Update" />
      <input type="button" class="btn btn-danger my-3" value="Cancel" onclick="location.href = '/tasks'" />
@endsection