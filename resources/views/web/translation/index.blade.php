@extends('layouts.app')
@php
    $title  = __('Translation');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('translation.index') }}
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">

                <span id="card_title">
                    {{ __('Translation') }}
                </span>

                 <div class="float-right">
                    <a href="{{ route('translation.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Referenced Column Id</th>
										<th>Lang Code</th>
										<th>Translation</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($translations as $translation)
                            <tr>
                                <td>{{ ++$i }}</td>

											<td>{{ $translation->create_person_id }}</td>
											<td>{{ $translation->updated_person_id }}</td>
											<td>{{ $translation->deleted }}</td>
											<td>{{ $translation->referenced_column_id }}</td>
											<td>{{ $translation->lang_code }}</td>
											<td>{{ $translation->translation }}</td>

                                <td>
                                    <form action="{{ route('translation.destroy',$translation->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('translation.show',$translation->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('translation.edit',$translation->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
    {!! $translations->links() !!}
@endsection
