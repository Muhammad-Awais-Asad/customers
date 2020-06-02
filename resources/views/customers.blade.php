@extends('layout')
@section('content')

<div class="container">
  <h2 style="text-align: center;">Laravel Customers Information</h2>
    <table class="table table-bordered" id="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>
        </tr>
      </thead>
    </table>
</div>

<script>
$(function() {
  $('#table').DataTable({
    dom: 'Bfrtip',
    buttons: [
      'copy', 'csv', 'excel', 'pdf', 'print'
        ],
    rocessing: true,
    serverSide: true,
    ajax: '{{ url('/index') }}',
    columns: [
      { data: 'id', name: 'id' },
      { data: 'name', name: 'name' },
      { data: 'email', name: 'email' }
    ],
  });
});
</script>

@endsection