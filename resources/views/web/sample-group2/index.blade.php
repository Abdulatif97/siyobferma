@extends('layouts.app')
@php
    $title  = __('Sample Group');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('sampleGroup.index') }}
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">

                <span id="card_title">
                    {{ __('Sample Group') }}
                </span>

                 <div class="float-right">
                    <a href="{{ route('sampleGroup.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Samples Count</th>
										<th>Note</th>
										<th>Is Complex</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sampleGroups as $sampleGroup)
                            <tr>
                                <td>{{ ++$i }}</td>

											<td>{{ $sampleGroup->create_person_id }}</td>
											<td>{{ $sampleGroup->updated_person_id }}</td>
											<td>{{ $sampleGroup->deleted }}</td>
											<td>{{ $sampleGroup->samples_count }}</td>
											<td>{{ $sampleGroup->note }}</td>
											<td>{{ $sampleGroup->is_complex }}</td>

                                <td>
                                    <form action="{{ route('sampleGroup.destroy',$sampleGroup->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('sampleGroup.show',$sampleGroup->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('sampleGroup.edit',$sampleGroup->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
    {!! $sampleGroups->links() !!}
@endsection
