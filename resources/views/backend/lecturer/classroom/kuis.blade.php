
<!-- /.card-header -->
<div class="card-body">
  <table id="table_id" class="display table table-bordered table-hover dataTable dtr-inline">
    <thead class="text-center">
        <th>Kuis</th>
    </thead>
    <tbody class="text-left">
      @foreach ($tasks as $task)
        <tr>
          <td>
            <div class="row">
              <div class="ml-right col-1">
                <img src="{{asset('image/task.PNG')}}" alt="Avatar" width="50dp">
              </div>
              
                @can('isLecturer')
                <div class="col-10">
                  <a href="{{route('tasks.show', $task->id)}}">
                    <h4>{{$task->name}}</h4>
                    <p>{{$task->due_date}} &nbsp;&nbsp;{{$task->time}}</p>
                  </a>
                </div>
                <!-- <div class="col-2 text-center">
                  <td><a class="btn btn-danger" href="javascript:void(0)" onclick="delete_task({{$task->id}})"><i class="fas fa-trash"></i>&nbsp;&nbsp;Hapus</a></td>
                </div> -->
                @endcan
                @can('isStudent')
                <div class="col-4">
                  <!-- <a href='{{route("student.scores.index", "task_id=$task->id" )}}'> -->
                  <a href="javascript:void(0)" onclick="modal({{$task->id}})" data-toggle="modal" data-target="#scoreModal">
                    <h4>{{$task->name}}</h4>
                    <p>{{$task->due_date}} &nbsp;&nbsp;{{$task->time}}</p>
                  </a>
                </div>
                @endcan
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>            
</div>
<!-- /.card-body -->
