@extends("layouts.frame")
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success" style="display:none;">
                <span class="glyphicon glyphicon-ok"></span> Drag table row and cange Order</div>
            <table class="table table-bordered" align = "center">
                <thead>
                    <tr id='icon'>
                        <th scope="col">
                            Rank
                        </th>
                        <th scope="col">
                            College
                        </th>
                        <th scope="col">
                            Points
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="active">
                        <th scope="row">
                            1
                        </td>
                        <th>
                            Gcek
                        </th>
                        <th>
                            58
                        </th>
                    </tr>
                    <tr>
                        <td>
                            Column content
                        </td>
                        <td>
                            Column content
                        </td>
                        <td>
                            Column content
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Column content
                        </td>
                        <td>
                            Column content
                        </td>
                        <td>
                            Column content
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Column content
                        </td>
                        <td>
                            Column content
                        </td>
                        <td>
                            Column content
                        </td>
                    </tr>
                    <tr class="warning">
                        <td>
                            Column content
                        </td>
                        <td>
                            Column content
                        </td>
                        <td>
                            Column content
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Column content
                        </td>
                        <td>
                            Column content
                        </td>
                        <td>
                            Column content
                        </td>
                    </tr>
                    <tr class="danger">
                        <td>
                            Column content
                        </td>
                        <td>
                            Column content
                        </td>
                        <td>
                            Column content
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection