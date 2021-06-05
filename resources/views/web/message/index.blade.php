@extends('layouts/contentLayoutMaster')

@section('title', trans('term.message'))

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
            <h4 class="card-title">{{ __('term.message') }}</h4>
            <a href="{{route('message.create')}}" class="btn btn-primary">{{trans('locale.Create')}}</a>
          </div>


          <div class="card-content">
            <div class="card-body card-dashboard">
              <div class="table-responsive">
                <table class="table zero-configuration">
                  <thead class="thead">
                  <tr>
                    <th>No</th>
                    <th>{{trans('input.reporting_person_name')}}</th>
                    <th>{{trans('input.reporting_person_phone_number')}}</th>
                    <th>{{trans('input.reporting_date')}}</th>
                    <th>Deleted</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($messages as $i => $message)
                    <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $message->reporting_person_name }}</td>
                      <td>{{ $message->reporting_person_phone_number }}</td>
                      <td>{{ $message->reporting_date }}</td>
                      @php
                        $data = array();
                          $data = $message->deleted ?  ['text' => ' ', 'bg-color' => 'bg-success'] :  ['text' => ' ', 'bg-color' => 'bg-danger'];
                      @endphp
                      <td><span class="badge rounded-pill {{$data['bg-color']}}">{{$data['text']}}</span> </td>
                      <td>
                        <form action="{{ route('message.destroy',$message->id) }}" method="POST">
                          <a class="btn btn-sm btn-primary " href="{{ route('message.show',$message->id) }}"><i class="fa fa-fw fa-eye"></i> {{trans('locale.Show')}}</a>
                          <a class="btn btn-sm btn-success" href="{{ route('message.edit',$message->id) }}"><i class="fa fa-fw fa-edit"></i> {{trans('locale.Edit')}}</a>
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
                    <th>{{trans('input.reporting_person_name')}}</th>
                    <th>{{trans('input.reporting_person_phone_number')}}</th>
                    <th>{{trans('input.reporting_date')}}</th>
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
