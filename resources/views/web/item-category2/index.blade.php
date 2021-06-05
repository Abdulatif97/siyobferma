@extends('layouts.app')
@php
    $title  = __('Item Category');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('itemCategory.index') }}
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">

                <span id="card_title">
                    {{ __('Item Category') }}
                </span>

                 <div class="float-right">
                    <a href="{{ route('itemCategory.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Parent Id</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($itemCategories as $itemCategory)
                            <tr>
                                <td>{{ ++$i }}</td>

											<td>{{ $itemCategory->create_person_id }}</td>
											<td>{{ $itemCategory->updated_person_id }}</td>
											<td>{{ $itemCategory->deleted }}</td>
											<td>{{ $itemCategory->title }}</td>
											<td>{{ $itemCategory->description }}</td>
											<td>{{ $itemCategory->type }}</td>
											<td>{{ $itemCategory->parent_id }}</td>

                                <td>
                                    <form action="{{ route('itemCategory.destroy',$itemCategory->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('itemCategory.show',$itemCategory->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('itemCategory.edit',$itemCategory->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
    {!! $itemCategories->links() !!}
@endsection
