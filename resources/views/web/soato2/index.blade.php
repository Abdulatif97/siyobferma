@extends('layouts.app')
@php
    $title  = __('Soato');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('soato.index') }}
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">

                <span id="card_title">
                    {{ __('Soato') }}
                </span>

                 <div class="float-right">
                    <a href="{{ route('soato.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Name</th>
										<th>Parent Id</th>
										<th>Soato Type</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($soatos as $soato)
                            <tr>
                                <td>{{ ++$i }}</td>

											<td>{{ $soato->create_person_id }}</td>
											<td>{{ $soato->updated_person_id }}</td>
											<td>{{ $soato->deleted }}</td>
											<td>{{ $soato->name }}</td>
											<td>{{ $soato->parent_id }}</td>
											<td>{{ $soato->soato_type }}</td>

                                <td>
                                    <form action="{{ route('soato.destroy',$soato->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('soato.show',$soato->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('soato.edit',$soato->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
    {!! $soatos->links() !!}
@endsection
