@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="alert alert-warning">
                <strong>Warning: </strong>
               Make sure all the fields are filled correctly
            </div>

            <div class="alert alert-info">
                <strong>Info: </strong>
                if there is more than one students, then names must be seperated by commas
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Event:</strong> {{ $event }} &nbsp;
                    <strong>Category: </strong>{{ $department }}
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                  <form class="form" method="POST" action="/home">
                      {{ csrf_field() }}
                      <fieldset>
                        <legend>1st place</legend>
                        <div class="form-group">
                            <label for="fname">Full Names: </label>
                            <input class="form-control" type="text" name="firstname" placeholder="Names seperated by commas" required>
                        </div> 
                        <div class="form-group">
                            <label for="college">College: </label>
                            <select class="form-control" name="first_college" required>
                                @foreach ($colleges as $college)
                                    <option value="{{ $college->id }}" @if($college->id==53) selected @endif>{{ $college->college_name }}</option>
                                @endforeach
                            </select> 
                        </div>
                      </fieldset>
                      
                      <fieldset>
                        <legend>2nd place</legend>
                        <div class="form-group">
                            <label for="fname">Full Names: </label>
                            <input class="form-control" type="text" name="secondname" placeholder="Names seperated by commas" required>
                        </div>
                        <div class="form-group">    
                            <label for="college">College: </label>
                            <select class="form-control" name="second_college" required>
                                @foreach ($colleges as $college)
                                    <option value="{{ $college->id }}" @if($college->id==53) selected @endif>{{ $college->college_name }}</option>
                                @endforeach
                            </select>
                            
                        </div>
                      </fieldset>
                      <fieldset>
                        <legend>3rd place</legend>
                        <div class="form-group">
                            <label for="fname">Full Names: </label>
                            <input class="form-control" type="text" name="thirdname" placeholder="Names seperated by commas" required>
                        </div>
                        <div class="form-group">    
                            <label for="college">College: </label>
                            <select class="form-control" name="third_college" required>
                                @foreach ($colleges as $college)
                                    <option value="{{ $college->id }}" @if($college->id==53) selected @endif>{{ $college->college_name }}</option>
                                @endforeach
                            </select>
                            
                        </div>
                      </fieldset>
                      <hr />
                      <button class="btn btn-primary" type="submit" onclick="askConfirm();">Submit</button>
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
