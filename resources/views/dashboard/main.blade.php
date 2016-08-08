@extends('layouts.home')

@section('panel_1')


<div class="row placeholders">
    <div class="col-xs-6 col-sm-3 placeholder">
        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
        <h4>Label</h4>
        <span class="text-muted">Something else</span>
    </div>
    <div class="col-xs-6 col-sm-3 placeholder">
        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
        <h4>Label</h4>
        <span class="text-muted">Something else</span>
    </div>
    <div class="col-xs-6 col-sm-3 placeholder">
        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
        <h4>Label</h4>
        <span class="text-muted">Something else</span>
    </div>
    <div class="col-xs-6 col-sm-3 placeholder">
        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
        <h4>Label</h4>
        <span class="text-muted">Something else</span>
    </div>
</div>

@endsection

@section('panel_2')
<h2 class="sub-header">New Registration</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>  </th>
                <th>Registration Date</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Facility</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($newRegistrations as $newUser)
            <tr>
                <td><a href="#">Edit</a></td>

                <td class="table-text">
                    <div>{{ $newUser->created_at }}</div>
                </td>
                <td class="table-text">
                    <div>{{ $newUser->first_name }}</div>
                </td>
                <td class="table-text">
                    <div>{{ $newUser->last_name }}</div>
                </td>
                <td class="table-text">
                    <div>{{ $newUser->email }}</div>
                </td>
                <td class="table-text">
                    <div>
                        
                        @foreach ($newUser->facilities()->get() as $userFacility)
                        {{ $userFacility->name }}
                    @endforeach
                    </div>
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

@section('panel_3')
@endsection