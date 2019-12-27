@extends('admin.layout')
@section('content')
<h3 class="text-center py-3">ADMIN AREA</h3>
@endsection

@section('js')
<script>
    $(function () {
      $("#example2").DataTable();
    });
</script>
@endsection