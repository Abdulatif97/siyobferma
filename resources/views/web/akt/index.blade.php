@extends('layouts/contentLayoutMaster')

@section('title', trans('Akt'))

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
            <h4 class="card-title">{{ __('Akt') }}</h4>
            <a href="{{route('akt.create')}}" class="btn btn-primary">{{ __('Create New') }}</a>
          </div>
          <div class="card-content">
            <div class="card-body card-dashboard">
              <div class="table-responsive">
                <table class="table zero-configuration">
                  <thead class="thead">
                  <tr>
                    <th>No</th>
                    <th>Note</th>
                    <th>Additional Information</th>
                    <th>Sample Get Soato Id</th>
                    <th>Akt Write Off Id</th>
                    <th>Status</th>

                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($akts as $i => $akt)
                    <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $akt->note }}</td>
                      <td>{{ $akt->additional_information }}</td>
                      <td>{{ $akt->sample_get_soato_id }}</td>
                      <td>{{ $akt->akt_write_off_id }}</td>
                      <td>{{ $akt->status }}</td>
                      <td>
                        <form action="{{ route('akt.destroy',$akt->id) }}" method="POST">
                          <a class="btn btn-sm btn-primary " href="{{ route('akt.show',$akt->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                          <a class="btn btn-sm btn-success" href="{{ route('akt.edit',$akt->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm" ><i class="fa fa-fw fa-trash"></i> Delete</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                  <tfoot class="thead">
                  <tr>
                    <th>No</th>
                    <th>Note</th>
                    <th>Additional Information</th>
                    <th>Sample Get Soato Id</th>
                    <th>Akt Write Off Id</th>
                    <th>Status</th>
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
