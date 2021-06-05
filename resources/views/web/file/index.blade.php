@extends('layouts.app')
@php
    $title  = __('File');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('file.index') }}
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">

                <span id="card_title">
                    {{ __('File') }}
                </span>

                 <div class="float-right">
                    <a href="{{ route('file.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Referenced Column Id</th>
										<th>Type</th>
										<th>Original Name</th>
										<th>Generated Name</th>
										<th>File Extension</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($files as $file)
                            <tr>
                                <td>{{ ++$i }}</td>

											<td>{{ $file->create_person_id }}</td>
											<td>{{ $file->updated_person_id }}</td>
											<td>{{ $file->deleted }}</td>
											<td>{{ $file->referenced_column_id }}</td>
											<td>{{ $file->type }}</td>
											<td>{{ $file->original_name }}</td>
											<td>{{ $file->generated_name }}</td>
											<td>{{ $file->file_extension }}</td>

                                <td>
                                    <form action="{{ route('file.destroy',$file->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('file.show',$file->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('file.edit',$file->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
    {!! $files->links() !!}
@endsection
