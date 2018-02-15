@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="alert alert-info">
                <strong>Info: </strong>
                if there is more than one students, then names must be seperated by commas
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Event:</strong> {{ $event }} &nbsp;
                    <strong>category: </strong>{{ $department }}
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                  <form class="form" method="POST" action="/home">
                      {{ csrf_field() }}
                      <h2>1st place</h2>
                      <div>
                          <label for="fname">Full Names: </label>
                          <input class="form-control" type="text" name="firstname" placeholder="Names seperated by commas">
                          <label for="college">College: </label>
                          <select class="form-control" name="first_college">
                              @foreach ($colleges as $college)
                                  <option value="{{ $college->id }}">{{ $college->college_name }}</option>
                              @endforeach
                          </select>
                          
                      </div>
                      <h2>2nd place</h2>
                      <div>
                          <label for="fname">Full Names: </label>
                          <input class="form-control" type="text" name="secondname" placeholder="Names seperated by commas">
                          <label for="college">College: </label>
                          <select class="form-control" name="second_college">
                              @foreach ($colleges as $college)
                                  <option value="{{ $college->id }}">{{ $college->college_name }}</option>
                              @endforeach
                          </select>
                        
                      </div>
                      <h2>3rd place</h2>
                      <div>
                          <label for="fname">Full Names: </label>
                          <input class="form-control" type="text" name="thirdname" placeholder="Names seperated by commas">
                          <label for="college">College: </label>
                          <select class="form-control" name="third_college">
                              @foreach ($colleges as $college)
                                  <option value="{{ $college->id }}">{{ $college->college_name }}</option>
                              @endforeach
                          </select>
                          
                      </div><hr />
                      <button class="btn btn-primary" type="submit">Submit</button>
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
