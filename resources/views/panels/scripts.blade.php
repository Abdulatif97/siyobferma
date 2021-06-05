{{-- Vendor Scripts --}}
<script src="{{ asset('vendors/js/vendors.min.js') }}"></script>
<script src="{{ asset('js/tinymce.min.js') }}"></script>
<script src="{{ asset('vendors/js/ui/prism.min.js') }}"></script>
@yield('vendor-script')
{{-- Theme Scripts --}}
<script src="{{ asset('js/core/app-menu.js') }}"></script>
<script src="{{ asset('js/core/app.js') }}"></script>
<script src="{{ asset('js/scripts/components.js') }}"></script>
@if($configData['blankPage'] == false)
  <script src="{{ asset('js/scripts/customizer.js') }}"></script>
  <script src="{{ asset('js/scripts/footer.js') }}"></script>
  <script src="{{ asset('vendors/js/forms/select/select2.full.min.js') }}"></script>
  <script src="{{ asset('js/scripts/forms/select/form-select2.js') }}"></script>
@endif
@yield('page-script')
