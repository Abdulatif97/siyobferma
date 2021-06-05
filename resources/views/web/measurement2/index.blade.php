@extends('layouts.app')
@php
    $title  = __('Measurement');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('measurement.index') }}
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">

                <span id="card_title">
                    {{ __('Measurement') }}
                </span>

                 <div class="float-right">
                    <a href="{{ route('measurement.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Title</th>
										<th>Description</th>
										<th>Measurement Value Check Regex</th>
										<th>Suggested Values</th>
										<th>Type</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($measurements as $measurement)
                            <tr>
                                <td>{{ ++$i }}</td>

											<td>{{ $measurement->create_person_id }}</td>
											<td>{{ $measurement->updated_person_id }}</td>
											<td>{{ $measurement->deleted }}</td>
											<td>{{ $measurement->title }}</td>
											<td>{{ $measurement->description }}</td>
											<td>{{ $measurement->measurement_value_check_regex }}</td>
											<td>{{ $measurement->suggested_values }}</td>
											<td>{{ $measurement->type }}</td>

                                <td>
                                    <form action="{{ route('measurement.destroy',$measurement->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('measurement.show',$measurement->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('measurement.edit',$measurement->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
    {!! $measurements->links() !!}
@endsection
