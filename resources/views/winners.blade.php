@extends("layouts.app")
@section('content')
<div class="container">
    <h2 class="page-header" style="margin-top: 10px; font-family: 'Quicksand', sans-serif">
        Winners
    </h2>
    @foreach($scoreboards as $event => $winners) 
        <div class="panel panel-default" style="margin-bottom: 20px;">
            <div class="panel-heading">
                <strong>{{ $event }}</strong> 
            </div>
            <div class="panel-body">
                @if(count($winners) > 0)
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="bg-info">
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
                @else
                    <h4>Results not published....</h4>
                @endif    
            </div>
        </div>
    @endforeach
</div>
@endsection

