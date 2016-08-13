@extends('layouts.home')

@section('panel_1')

    <h1 class="page-header">Application Forms</h1>

    <div class="panel-body">
        
        <a href="{{url('/application/add')}}" class="btn btn-primary"> <i class="fa fa-plus"></i> Add New Application</a>
        

            @if (count($appforms) > 0)
    <div class="col-sm-10">
        <div class="panel panel-default ">
<!--            <div class="panel-heading">
                <h2 class="sub-header"> Facilities </h2>
            </div>-->

            <div class="panel-default">
                <table class="table table-striped table-hover">

                    <!-- Table Headings -->
                    <thead>
                    <th>&nbsp; </th>
                        <th>Name</th>
                        <th>Date of Birth</th>
                        <th>Home Address</th>
                        <th>Home Post Code</th>
                        <th>Email</th>
                        <th>GP Name </th>
                        <th>GP Post Code </th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($appforms as $app)
                            <tr>
                                <td> <a href="{{url('/application/update/').'/'.$app->id}}">Edit</a></td>
                                
                                <td class="table-text">
                                    <div>{{ $app->first_name ." ".$app->last_name }}</div>
                                </td>

                                <td class="table-text">
                                    <div>{{ $app->date_of_birth }}</div>
                                </td>
                                
                                <td class="table-text">
                                    <div>{{ $app->h_address }}</div>
                                </td>
                                
                                <td class="table-text">
                                    <div>{{ $app->h_postcode }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $app->h_email }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{$app->gp_name}}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{$app->gp_postcode}}</div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif    
    
    </div>
@endsection
