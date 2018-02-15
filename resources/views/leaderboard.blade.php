@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="page-header" style="margin-top: 10px; font-family: 'Quicksand', sans-serif">
      Leaderboard
    </h1>
    <table class="table table-hover">
      <thead class="bg-info">
        <tr>
          <th>Sl.No</th>
          <th>College Name</th>
          <th>Points</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($colleges as $key => $college)
        <tr>
          <td>{{ $key + 1 }}</td>
          <td>{{ $college->college_name }}</td>
          <td>{{ $college->points }}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>

@endsection