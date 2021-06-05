@extends('layouts.app')
@php
    $title  = __('Application');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('application.index') }}
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">

                <span id="card_title">
                    {{ __('Application') }}
                </span>

                 <div class="float-right">
                    <a href="{{ route('application.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Applicant Person Id</th>
										<th>Applicant Organization Id</th>
										<th>Applicant Phone Number</th>
										<th>Purpose</th>
										<th>Urgency</th>
										<th>Category Paid</th>
										<th>Test Address Soato Id</th>
										<th>Item Category Id</th>
										<th>Item Id</th>
										<th>Item Owner Person Id</th>
										<th>Item Owner Organization Id</th>
										<th>Is Animal</th>
										<th>Bdic Id</th>
										<th>Bdiczm Id</th>
										<th>Item Sex</th>
										<th>Item Colour</th>
										<th>Item Age</th>
										<th>Item Health Status</th>
										<th>Measurement Id</th>
										<th>Measurement Value</th>
										<th>Registration Date</th>
										<th>Akt Date</th>
										<th>Test Receipt Date</th>
										<th>Test Date</th>
										<th>Attachments</th>
										<th>Status</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($applications as $application)
                            <tr>
                                <td>{{ ++$i }}</td>

											<td>{{ $application->create_person_id }}</td>
											<td>{{ $application->updated_person_id }}</td>
											<td>{{ $application->deleted }}</td>
											<td>{{ $application->applicant_person_id }}</td>
											<td>{{ $application->applicant_organization_id }}</td>
											<td>{{ $application->applicant_phone_number }}</td>
											<td>{{ $application->purpose }}</td>
											<td>{{ $application->urgency }}</td>
											<td>{{ $application->category_paid }}</td>
											<td>{{ $application->test_address_soato_id }}</td>
											<td>{{ $application->item_category_id }}</td>
											<td>{{ $application->item_id }}</td>
											<td>{{ $application->item_owner_person_id }}</td>
											<td>{{ $application->item_owner_organization_id }}</td>
											<td>{{ $application->is_animal }}</td>
											<td>{{ $application->bdic_id }}</td>
											<td>{{ $application->bdiczm_id }}</td>
											<td>{{ $application->item_sex }}</td>
											<td>{{ $application->item_colour }}</td>
											<td>{{ $application->item_age }}</td>
											<td>{{ $application->item_health_status }}</td>
											<td>{{ $application->measurement_id }}</td>
											<td>{{ $application->measurement_value }}</td>
											<td>{{ $application->registration_date }}</td>
											<td>{{ $application->akt_date }}</td>
											<td>{{ $application->test_receipt_date }}</td>
											<td>{{ $application->test_date }}</td>
											<td>{{ $application->attachments }}</td>
											<td>{{ $application->status }}</td>

                                <td>
                                    <form action="{{ route('application.destroy',$application->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('application.show',$application->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('application.edit',$application->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
    {!! $applications->links() !!}
@endsection
