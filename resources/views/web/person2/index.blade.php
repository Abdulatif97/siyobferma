@extends('layouts.app')
@php
    $title  = __('Person');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('person.index') }}
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">

                <span id="card_title">
                    {{ __('Person') }}
                </span>

                 <div class="float-right">
                    <a href="{{ route('person.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Pinfl</th>
										<th>Id Card Number</th>
										<th>Passport Series</th>
										<th>Passport Number</th>
										<th>Given Name</th>
										<th>Surname</th>
										<th>Fathers Name</th>
										<th>Actual Address Soato Id</th>
										<th>Actual Address Additional</th>
										<th>Temporary Address Soato Id</th>
										<th>Temporary Address Additional</th>
										<th>Email Address</th>
										<th>Phone Number</th>
										<th>State Of Activity Status</th>
										<th>Is Client</th>
										<th>Organization Id</th>
										<th>Department Id</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($people as $person)
                            <tr>
                                <td>{{ ++$i }}</td>

											<td>{{ $person->create_person_id }}</td>
											<td>{{ $person->updated_person_id }}</td>
											<td>{{ $person->deleted }}</td>
											<td>{{ $person->pinfl }}</td>
											<td>{{ $person->id_card_number }}</td>
											<td>{{ $person->passport_series }}</td>
											<td>{{ $person->passport_number }}</td>
											<td>{{ $person->given_name }}</td>
											<td>{{ $person->surname }}</td>
											<td>{{ $person->fathers_name }}</td>
											<td>{{ $person->actual_address_soato_id }}</td>
											<td>{{ $person->actual_address_additional }}</td>
											<td>{{ $person->temporary_address_soato_id }}</td>
											<td>{{ $person->temporary_address_additional }}</td>
											<td>{{ $person->email_address }}</td>
											<td>{{ $person->phone_number }}</td>
											<td>{{ $person->state_of_activity_status }}</td>
											<td>{{ $person->is_client }}</td>
											<td>{{ $person->organization_id }}</td>
											<td>{{ $person->department_id }}</td>

                                <td>
                                    <form action="{{ route('person.destroy',$person->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('person.show',$person->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('person.edit',$person->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
    {!! $people->links() !!}
@endsection
