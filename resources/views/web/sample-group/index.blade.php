@extends('layouts/contentLayoutMaster')

@section('title', trans('term.sample-group'))

@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset('vendors/css/tables/datatable/datatables.min.css') }}">

@endsection
@section('content')
  <!-- Zero configuration table -->
  <section id="basic-datatable">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            @if ($message = Session::get('success'))
              <div class="alert alert-success">
                <p>{{ $message }}</p>
              </div>
            @endif
          </div>
          <div class="card-header">
            <h4 class="card-title">{{ __('term.sample-group') }}</h4>
            <a href="{{route('sample-group.create')}}" class="btn btn-primary">{{trans('locale.Create')}}</a>
          </div>


          <div class="card-content">
            <div class="card-body card-dashboard">
              <div class="table-responsive">
                <table class="table zero-configuration">
                  <thead class="thead">
                  <tr>
                    <th>No</th>
                    <th>Samples Count</th>
                    <th>Note</th>
                    <th>Is Complex</th>
                    <th>Deleted</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($sampleGroups as $i => $sampleGroup)
                    <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $sampleGroup->samples_count }}</td>
                      <td>{{ $sampleGroup->note }}</td>
                      <td>{{ $sampleGroup->is_complex }}</td>
                      @php
                        $data = array();
                          $data = $sampleGroup->deleted ?  ['text' => ' ', 'bg-color' => 'bg-success'] :  ['text' => ' ', 'bg-color' => 'bg-danger'];
                      @endphp
                      <td><span class="badge rounded-pill {{$data['bg-color']}}">{{$data['text']}}</span> </td>
                      <td>
                        <form action="{{ route('sample-group.destroy',$sampleGroup->id) }}" method="POST">
                          <a class="btn btn-sm btn-primary " href="{{ route('sample-group.show',$sampleGroup->id) }}"><i class="fa fa-fw fa-eye"></i> {{trans('locale.Show')}}</a>
                          <a class="btn btn-sm btn-success" href="{{ route('sample-group.edit',$sampleGroup->id) }}"><i class="fa fa-fw fa-edit"></i> {{trans('locale.Edit')}}</a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm" ><i class="fa fa-fw fa-trash"></i> {{trans('locale.Delete')}}</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                  <tfoot class="thead">
                  <tr>
                    <th>No</th>
                    <th>Samples Count</th>
                    <th>Note</th>
                    <th>Is Complex</th>
                    <th>Deleted</th>
                    <th></th>
                  </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Zero configuration table -->
@endsection
@section('vendor-script')
  <script src="{{ asset('vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
  <script src="{{ asset('vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
  <script src="{{ asset('vendors/js/tables/datatable/datatables.min.js') }}"></script>
  <script src="{{ asset('vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
  <script src="{{ asset('vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
  <script src="{{ asset('vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
  <script src="{{ asset('vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
@endsection
@section('page-script')
  <script src="{{ asset('js/scripts/datatables/datatable.js') }}"></script>
@endsection
