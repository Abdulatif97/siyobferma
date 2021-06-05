@extends('layouts.app')
@php
    $title  = __('Handbk');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('handbk.index') }}
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">

                <span id="card_title">
                    {{ __('Handbk') }}
                </span>

                 <div class="float-right">
                    <a href="{{ route('handbk.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Abbr</th>
										<th>Title</th>
										<th>Description</th>
										<th>Type</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($handbks as $handbk)
                            <tr>
                                <td>{{ ++$i }}</td>

											<td>{{ $handbk->create_person_id }}</td>
											<td>{{ $handbk->updated_person_id }}</td>
											<td>{{ $handbk->deleted }}</td>
											<td>{{ $handbk->abbr }}</td>
											<td>{{ $handbk->title }}</td>
											<td>{{ $handbk->description }}</td>
											<td>{{ $handbk->type }}</td>

                                <td>
                                    <form action="{{ route('handbk.destroy',$handbk->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('handbk.show',$handbk->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('handbk.edit',$handbk->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
    {!! $handbks->links() !!}
@endsection
