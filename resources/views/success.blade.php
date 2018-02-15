@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Event:</strong> {{ $event }}
                    <strong>Catogory: </strong>{{ $department }}
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Position</th>
                          <th>Names</th>
                          <th>College</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($results as $result)
                        <tr>
                          <td>{{ $result->position }}</td>
                          <td>{{ $result->name }}</td>
                          <td>{{ $result->college_name }}</td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
