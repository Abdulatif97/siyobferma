@extends('layouts.app')
@php
    $title  = __('Disease');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('disease.index') }}
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">

                <span id="card_title">
                    {{ __('Disease') }}
                </span>

                 <div class="float-right">
                    <a href="{{ route('disease.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Attachments</th>
										<th>Disease Category Id</th>
										<th>Type</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($diseases as $disease)
                            <tr>
                                <td>{{ ++$i }}</td>

											<td>{{ $disease->create_person_id }}</td>
											<td>{{ $disease->updated_person_id }}</td>
											<td>{{ $disease->deleted }}</td>
											<td>{{ $disease->title }}</td>
											<td>{{ $disease->description }}</td>
											<td>{{ $disease->attachments }}</td>
											<td>{{ $disease->disease_category_id }}</td>
											<td>{{ $disease->type }}</td>

                                <td>
                                    <form action="{{ route('disease.destroy',$disease->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('disease.show',$disease->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('disease.edit',$disease->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
    {!! $diseases->links() !!}
@endsection
