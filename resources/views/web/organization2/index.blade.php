@extends('layouts.app')
@php
    $title  = __('Organization');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('organization.index') }}
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">

                <span id="card_title">
                    {{ __('Organization') }}
                </span>

                 <div class="float-right">
                    <a href="{{ route('organization.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Inn</th>
										<th>Full Name</th>
										<th>Date State Reg</th>
										<th>Number State Reg</th>
										<th>Legal Address Soato Id</th>
										<th>Legal Address Additional</th>
										<th>Opf</th>
										<th>Oked</th>
										<th>Coogu</th>
										<th>Activity Status</th>
										<th>Pcmp</th>
										<th>Email Address</th>
										<th>Phone Number</th>
										<th>Is Client</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($organizations as $organization)
                            <tr>
                                <td>{{ ++$i }}</td>

											<td>{{ $organization->create_person_id }}</td>
											<td>{{ $organization->updated_person_id }}</td>
											<td>{{ $organization->deleted }}</td>
											<td>{{ $organization->inn }}</td>
											<td>{{ $organization->full_name }}</td>
											<td>{{ $organization->date_state_reg }}</td>
											<td>{{ $organization->number_state_reg }}</td>
											<td>{{ $organization->legal_address_soato_id }}</td>
											<td>{{ $organization->legal_address_additional }}</td>
											<td>{{ $organization->opf }}</td>
											<td>{{ $organization->oked }}</td>
											<td>{{ $organization->coogu }}</td>
											<td>{{ $organization->activity_status }}</td>
											<td>{{ $organization->pcmp }}</td>
											<td>{{ $organization->email_address }}</td>
											<td>{{ $organization->phone_number }}</td>
											<td>{{ $organization->is_client }}</td>

                                <td>
                                    <form action="{{ route('organization.destroy',$organization->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('organization.show',$organization->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('organization.edit',$organization->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
    {!! $organizations->links() !!}
@endsection
