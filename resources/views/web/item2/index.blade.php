@extends('layouts.app')
@php
    $title  = __('Item');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('item.index') }}
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">

                <span id="card_title">
                    {{ __('Item') }}
                </span>

                 <div class="float-right">
                    <a href="{{ route('item.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Item Category Id</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ ++$i }}</td>

											<td>{{ $item->create_person_id }}</td>
											<td>{{ $item->updated_person_id }}</td>
											<td>{{ $item->deleted }}</td>
											<td>{{ $item->title }}</td>
											<td>{{ $item->description }}</td>
											<td>{{ $item->item_category_id }}</td>

                                <td>
                                    <form action="{{ route('item.destroy',$item->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('item.show',$item->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('item.edit',$item->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
    {!! $items->links() !!}
@endsection
