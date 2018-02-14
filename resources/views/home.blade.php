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

                    <style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>
<form method="POST" action="/home">
    {{ csrf_field() }}
    <h2>1st place</h2>
    <div>
        <label for="fname">Full Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="college">College</label>
        <select name="first_college">
            @foreach ($colleges as $college)
                <option value="{{ $college->id }}">{{ $college->college_name }}</option>
            @endforeach
        </select>
        
    </div>
    <h2>2nd place</h2>
    <div>
        <label for="fname">Full Name</label>
        <input type="text" id="fname" name="secondname" placeholder="Your name..">
        <label for="college">college</label>
        <select name="second_college">
            @foreach ($colleges as $college)
                <option value="{{ $college->id }}">{{ $college->college_name }}</option>
            @endforeach
        </select>
       
    </div>
    <h2>3rd place</h2>
    <div>
        <label for="fname">Full Name</label>
        <input type="text" id="fname" name="thirdname" placeholder="Your name..">
        <label for="college">college</label>
        <select name="third_college">
            @foreach ($colleges as $college)
                <option value="{{ $college->id }}">{{ $college->college_name }}</option>
            @endforeach
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
