@extends('layouts.app')
@php
    $title  = __('Disease Test Template Parameter');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('diseaseTestTemplateParameter.index') }}
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">

                <span id="card_title">
                    {{ __('Disease Test Template Parameter') }}
                </span>

                 <div class="float-right">
                    <a href="{{ route('diseaseTestTemplateParameter.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Disease Test Template Id</th>
										<th>Measurement Id</th>
										<th>Min Value</th>
										<th>Max Value</th>
										<th>Fact Value Check Regex</th>
										<th>Suggested Values</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($diseaseTestTemplateParameters as $diseaseTestTemplateParameter)
                            <tr>
                                <td>{{ ++$i }}</td>
                                
											<td>{{ $diseaseTestTemplateParameter->create_person_id }}</td>
											<td>{{ $diseaseTestTemplateParameter->updated_person_id }}</td>
											<td>{{ $diseaseTestTemplateParameter->deleted }}</td>
											<td>{{ $diseaseTestTemplateParameter->title }}</td>
											<td>{{ $diseaseTestTemplateParameter->disease_test_template_id }}</td>
											<td>{{ $diseaseTestTemplateParameter->measurement_id }}</td>
											<td>{{ $diseaseTestTemplateParameter->min_value }}</td>
											<td>{{ $diseaseTestTemplateParameter->max_value }}</td>
											<td>{{ $diseaseTestTemplateParameter->fact_value_check_regex }}</td>
											<td>{{ $diseaseTestTemplateParameter->suggested_values }}</td>

                                <td>
                                    <form action="{{ route('diseaseTestTemplateParameter.destroy',$diseaseTestTemplateParameter->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('diseaseTestTemplateParameter.show',$diseaseTestTemplateParameter->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('diseaseTestTemplateParameter.edit',$diseaseTestTemplateParameter->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
    {!! $diseaseTestTemplateParameters->links() !!}
@endsection
