@extends('layouts.app')
@php
    $title  = __('Akt Write Off');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('aktWriteOff.index') }}
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">

                <span id="card_title">
                    {{ __('Akt Write Off') }}
                </span>

                 <div class="float-right">
                    <a href="{{ route('aktWriteOff.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Code</th>
										<th>Sample Group Result Id</th>
										<th>Write Off Date</th>
										<th>Note</th>
										<th>Approved Person Id</th>
										<th>Approved Date</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($aktWriteOffs as $aktWriteOff)
                            <tr>
                                <td>{{ ++$i }}</td>

											<td>{{ $aktWriteOff->create_person_id }}</td>
											<td>{{ $aktWriteOff->updated_person_id }}</td>
											<td>{{ $aktWriteOff->deleted }}</td>
											<td>{{ $aktWriteOff->code }}</td>
											<td>{{ $aktWriteOff->sample_group_result_id }}</td>
											<td>{{ $aktWriteOff->write_off_date }}</td>
											<td>{{ $aktWriteOff->note }}</td>
											<td>{{ $aktWriteOff->approved_person_id }}</td>
											<td>{{ $aktWriteOff->approved_date }}</td>

                                <td>
                                    <form action="{{ route('aktWriteOff.destroy',$aktWriteOff->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('aktWriteOff.show',$aktWriteOff->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('aktWriteOff.edit',$aktWriteOff->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" ><i class="fa fa-fw fa-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {!! $aktWriteOffs->links() !!}
@endsection
