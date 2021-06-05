@extends('layouts.app')
@php
    $title  = __('Disease Test Template');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('diseaseTestTemplate.index') }}
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">

                <span id="card_title">
                    {{ __('Disease Test Template') }}
                </span>

                 <div class="float-right">
                    <a href="{{ route('diseaseTestTemplate.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Disease Id</th>
										<th>Item Category Id</th>
										<th>Item Id</th>
										<th>Note</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($diseaseTestTemplates as $diseaseTestTemplate)
                            <tr>
                                <td>{{ ++$i }}</td>

											<td>{{ $diseaseTestTemplate->create_person_id }}</td>
											<td>{{ $diseaseTestTemplate->updated_person_id }}</td>
											<td>{{ $diseaseTestTemplate->deleted }}</td>
											<td>{{ $diseaseTestTemplate->disease_id }}</td>
											<td>{{ $diseaseTestTemplate->item_category_id }}</td>
											<td>{{ $diseaseTestTemplate->item_id }}</td>
											<td>{{ $diseaseTestTemplate->note }}</td>

                                <td>
                                    <form action="{{ route('diseaseTestTemplate.destroy',$diseaseTestTemplate->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('diseaseTestTemplate.show',$diseaseTestTemplate->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('diseaseTestTemplate.edit',$diseaseTestTemplate->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
    {!! $diseaseTestTemplates->links() !!}
@endsection
