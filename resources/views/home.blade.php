@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    
<body>
<form>
<h2>1st place</h2>
<div>
    <label for="fname">Full Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
    <label for="college">College</label>
    <select id="college" name="Select College">
      <option value="college1">College1</option>
      <option value="college2">college2</option>
      <option value="college3">college3</option>
    </select>
</div>
<h2>2nd place</h2>
<div>
    <label for="fname">Full Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
    <label for="college">college</label>
    <select id="college" name="Select College">
      <option value="college1">college1</option>
      <option value="college2">college2</option>
      <option value="college3">college3</option>
    </select>
</div>
<h2>3rd place</h2>
<div>
    <label for="fname">Full Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
    <label for="college">college</label>
    <select id="college" name="Select College">
      <option value="college1">college1</option>
      <option value="college2">college2</option>
      <option value="college3">college3</option>
    </select>
</div>
<input type="submit" value="Submit">
</form>
</body>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
