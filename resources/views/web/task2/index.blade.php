@extends('layouts.app')
@php
    $title  = __('Task');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('task.index') }}
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">

                <span id="card_title">
                    {{ __('Task') }}
                </span>

                 <div class="float-right">
                    <a href="{{ route('task.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                      {{ __('Create New') }}
                    </a>
                  </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead">
                        <tr>
                            <th>No</th>
                            
										<th>Create Person Id</th>
										<th>Updated Person Id</th>
										<th>Deleted</th>
										<th>Referenced Table Id</th>
										<th>Type</th>
										<th>Number</th>
										<th>Gave Person Id</th>
										<th>Gave Person Department Id</th>
										<th>Gave Date</th>
										<th>Deadline</th>
										<th>Description</th>
										<th>Attached Person Id</th>
										<th>Attached Person Department Id</th>
										<th>Approved Person Id</th>
										<th>Organization Id</th>
										<th>Status</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td>{{ ++$i }}</td>
                                
											<td>{{ $task->create_person_id }}</td>
											<td>{{ $task->updated_person_id }}</td>
											<td>{{ $task->deleted }}</td>
											<td>{{ $task->referenced_table_id }}</td>
											<td>{{ $task->type }}</td>
											<td>{{ $task->number }}</td>
											<td>{{ $task->gave_person_id }}</td>
											<td>{{ $task->gave_person_department_id }}</td>
											<td>{{ $task->gave_date }}</td>
											<td>{{ $task->deadline }}</td>
											<td>{{ $task->description }}</td>
											<td>{{ $task->attached_person_id }}</td>
											<td>{{ $task->attached_person_department_id }}</td>
											<td>{{ $task->approved_person_id }}</td>
											<td>{{ $task->organization_id }}</td>
											<td>{{ $task->status }}</td>

                                <td>
                                    <form action="{{ route('task.destroy',$task->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('task.show',$task->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('task.edit',$task->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {!! $tasks->links() !!}
@endsection
