@extends('layouts.home')

@section('panel_1')

    <h1 class="page-header">Application Forms</h1>

    <div class="panel-body">
        
        <a href="{{url('/application/add')}}" class="btn btn-primary"> <i class="fa fa-plus"></i> Add New Application</a>
        
        <br />
        <br>
        
<form action="{{ url('/application/post') }}" method="POST" class="form-horizontal">
    {{ csrf_field() }}
    <div class="col-sm-3">
        
        <select id="branches" name="branches" class="form-control"  onchange="this.form.submit()">
        @if (count($branches) > 0)
                    @foreach ($branches as $branch)
                    
                   @if ($old->branches == $branch->id)
                    <option value="{{ $branch->id }}" selected="selected">{{ $branch->name }}</option>
                    @else
                    <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                    @endif
                    @endforeach
        @endif  

                </select>
            </div>
    
</form>
        <br>
        
            @if (count($appforms) > 0)
    <div class="col-sm-12">
        <div class="panel panel-default ">
<!--            <div class="panel-heading">
                <h2 class="sub-header"> Facilities </h2>
            </div>-->
            <div class="panel-default">
                <table class="table table-striped table-hover">

                    <!-- Table Headings -->
                    <thead>
                    <th>&nbsp; </th>
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
                                <td> <a href="{{url('/application/export/').'/'.$app->id}}">Export</a></td>
                                <td class="table-text">
                                    <div>{{ $app->first_name ." ".$app->last_name }}</div>
                                </td>

                                <td class="table-text">
                                    <div>
                                        {{ $app->date_of_birth==='0000-00-00' ? "":$app->date_of_birth }}
                                    </div>
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
            @else
            <h4>No Record Found</h4>
    @endif    
    
    </div>
@endsection
