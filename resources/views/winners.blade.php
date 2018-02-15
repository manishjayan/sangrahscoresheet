@extends("layouts.app")
@section('content')
<div class="container">
    @foreach($scoreboards as $event => $winners) 
        <div class="panel panel-default" style="margin-bottom: 20px;">
            <div class="panel-heading">
                <strong>Event: {{ $event }}</strong>
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead class="bg-primary">
                        <tr>
                            <th>Position</th>
                            <th>Names</th>
                            <th>College Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($winners as $winner) 
                        <tr>
                            <td>{{ $winner->position }}</td>
                            <td>{{ $winner->name }}</td>
                            <td>{{ $winner->college_name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach
</div>
@endsection

