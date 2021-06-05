@extends('layouts.app')
@php
    $title  = __('Sample');
@endphp
@section('breadcrumb')
    {{ Breadcrumbs::render('sample.index') }}
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">

                <span id="card_title">
                    {{ __('Sample') }}
                </span>

                 <div class="float-right">
                    <a href="{{ route('sample.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Akt Id</th>
										<th>Code</th>
										<th>Type</th>
										<th>Normative Docs Id</th>
										<th>Sample State</th>
										<th>Sample Receipt Date</th>
										<th>Note</th>
										<th>Template Id</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($samples as $sample)
                            <tr>
                                <td>{{ ++$i }}</td>

											<td>{{ $sample->create_person_id }}</td>
											<td>{{ $sample->updated_person_id }}</td>
											<td>{{ $sample->deleted }}</td>
											<td>{{ $sample->akt_id }}</td>
											<td>{{ $sample->code }}</td>
											<td>{{ $sample->type }}</td>
											<td>{{ $sample->normative_docs_id }}</td>
											<td>{{ $sample->sample_state }}</td>
											<td>{{ $sample->sample_receipt_date }}</td>
											<td>{{ $sample->note }}</td>
											<td>{{ $sample->template_id }}</td>

                                <td>
                                    <form action="{{ route('sample.destroy',$sample->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('sample.show',$sample->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('sample.edit',$sample->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
    {!! $samples->links() !!}
@endsection
