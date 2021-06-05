@extends('layouts.app')
@php
    $title  = __('Message');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('message.index') }}
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">

                <span id="card_title">
                    {{ __('Message') }}
                </span>

                 <div class="float-right">
                    <a href="{{ route('message.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Reporting Person Name</th>
										<th>Reporting Person Phone Number</th>
										<th>Item Category Id</th>
										<th>Item Id</th>
										<th>Item Condition</th>
										<th>Item Address Soato Id</th>
										<th>Item Address Additional</th>
										<th>Item Address Latitude</th>
										<th>Item Address Longitude</th>
										<th>Attached Photos</th>
										<th>Reporting Date</th>
										<th>Is Approved</th>
										<th>Approved Person Id</th>
										<th>Status</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $message)
                            <tr>
                                <td>{{ ++$i }}</td>

											<td>{{ $message->create_person_id }}</td>
											<td>{{ $message->updated_person_id }}</td>
											<td>{{ $message->deleted }}</td>
											<td>{{ $message->reporting_person_name }}</td>
											<td>{{ $message->reporting_person_phone_number }}</td>
											<td>{{ $message->item_category_id }}</td>
											<td>{{ $message->item_id }}</td>
											<td>{{ $message->item_condition }}</td>
											<td>{{ $message->item_address_soato_id }}</td>
											<td>{{ $message->item_address_additional }}</td>
											<td>{{ $message->item_address_latitude }}</td>
											<td>{{ $message->item_address_longitude }}</td>
											<td>{{ $message->attached_photos }}</td>
											<td>{{ $message->reporting_date }}</td>
											<td>{{ $message->is_approved }}</td>
											<td>{{ $message->approved_person_id }}</td>
											<td>{{ $message->status }}</td>

                                <td>
                                    <form action="{{ route('message.destroy',$message->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('message.show',$message->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('message.edit',$message->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
    {!! $messages->links() !!}
@endsection
