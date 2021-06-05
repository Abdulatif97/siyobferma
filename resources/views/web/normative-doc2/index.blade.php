@extends('layouts.app')
@php
    $title  = __('Normative Doc');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('normativeDoc.index') }}
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">

                <span id="card_title">
                    {{ __('Normative Doc') }}
                </span>

                 <div class="float-right">
                    <a href="{{ route('normativeDoc.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Type</th>
										<th>Item Category Id</th>
										<th>Item Id</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($normativeDocs as $normativeDoc)
                            <tr>
                                <td>{{ ++$i }}</td>

											<td>{{ $normativeDoc->create_person_id }}</td>
											<td>{{ $normativeDoc->updated_person_id }}</td>
											<td>{{ $normativeDoc->deleted }}</td>
											<td>{{ $normativeDoc->title }}</td>
											<td>{{ $normativeDoc->description }}</td>
											<td>{{ $normativeDoc->attachments }}</td>
											<td>{{ $normativeDoc->type }}</td>
											<td>{{ $normativeDoc->item_category_id }}</td>
											<td>{{ $normativeDoc->item_id }}</td>

                                <td>
                                    <form action="{{ route('normativeDoc.destroy',$normativeDoc->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('normativeDoc.show',$normativeDoc->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('normativeDoc.edit',$normativeDoc->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
    {!! $normativeDocs->links() !!}
@endsection
