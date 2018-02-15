@extends('layouts.app')

@section('content')
  <div class="container">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Sl.No</th>
          <th>College Name</th>
          <th>points</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($colleges as $college)
        <tr>
          <td>1</td>
          <td>{{ $college->college_name }}</td>
          <td>{{ $college->points }}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>

@endsection