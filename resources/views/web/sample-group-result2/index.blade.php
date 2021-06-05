@extends('layouts.app')
@php
    $title  = __('Sample Group Result');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('sampleGroupResult.index') }}
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">

                <span id="card_title">
                    {{ __('Sample Group Result') }}
                </span>

                 <div class="float-right">
                    <a href="{{ route('sampleGroupResult.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Sample Group Id</th>
										<th>Temperature</th>
										<th>Hum</th>
										<th>Additional Text</th>
										<th>End Date</th>
										<th>Note</th>
										<th>Approved Person Id</th>
										<th>Approved Date</th>
										<th>Attachments</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sampleGroupResults as $sampleGroupResult)
                            <tr>
                                <td>{{ ++$i }}</td>

											<td>{{ $sampleGroupResult->create_person_id }}</td>
											<td>{{ $sampleGroupResult->updated_person_id }}</td>
											<td>{{ $sampleGroupResult->deleted }}</td>
											<td>{{ $sampleGroupResult->code }}</td>
											<td>{{ $sampleGroupResult->sample_group_id }}</td>
											<td>{{ $sampleGroupResult->temperature }}</td>
											<td>{{ $sampleGroupResult->hum }}</td>
											<td>{{ $sampleGroupResult->additional_text }}</td>
											<td>{{ $sampleGroupResult->end_date }}</td>
											<td>{{ $sampleGroupResult->note }}</td>
											<td>{{ $sampleGroupResult->approved_person_id }}</td>
											<td>{{ $sampleGroupResult->approved_date }}</td>
											<td>{{ $sampleGroupResult->attachments }}</td>

                                <td>
                                    <form action="{{ route('sampleGroupResult.destroy',$sampleGroupResult->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('sampleGroupResult.show',$sampleGroupResult->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('sampleGroupResult.edit',$sampleGroupResult->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
    {!! $sampleGroupResults->links() !!}
@endsection
