@extends('layouts.app')
@php
    $title  = __('Disease Category');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('diseaseCategory.index') }}
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">

                <span id="card_title">
                    {{ __('Disease Category') }}
                </span>

                 <div class="float-right">
                    <a href="{{ route('diseaseCategory.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Type</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($diseaseCategories as $diseaseCategory)
                            <tr>
                                <td>{{ ++$i }}</td>

											<td>{{ $diseaseCategory->create_person_id }}</td>
											<td>{{ $diseaseCategory->updated_person_id }}</td>
											<td>{{ $diseaseCategory->deleted }}</td>
											<td>{{ $diseaseCategory->title }}</td>
											<td>{{ $diseaseCategory->description }}</td>
											<td>{{ $diseaseCategory->type }}</td>

                                <td>
                                    <form action="{{ route('diseaseCategory.destroy',$diseaseCategory->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('diseaseCategory.show',$diseaseCategory->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('diseaseCategory.edit',$diseaseCategory->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
    {!! $diseaseCategories->links() !!}
@endsection
