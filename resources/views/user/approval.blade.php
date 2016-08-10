@extends('layouts.home')

@section('panel_1')

<h3 class="page-header">{{$newUser->first_name}} {{$newUser->last_name}} <br> <small>Registration Request({{ $newUser->created_at->format('d M Y') }})</small></h3>
    

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        
        <form action="{{ url('user/approved') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <input type="hidden" value="{{$newUser->id}}" name="newUser">
            <div class="form-group">
                <label for="facility" class="col-sm-3 control-label">Facility</label>

                <div class="col-sm-6">
                    <label for="facility" class="form-control">@foreach ($newUser->facilities()->get() as $userFacility)
                        {{ $userFacility->name }}
                        @endforeach</label>

                </div>
            </div>
            
           
            <div class="form-group">
                <label for="first_name" class="col-sm-3 control-label">First Name</label>

                <div class="col-sm-6">
                    <label for="facility" class="form-control">
                        {{ $newUser->first_name }}
                    </label>

                </div>
            </div>
            
            <div class="form-group">
                <label for="last_name" class="col-sm-3 control-label">Last Name</label>

                <div class="col-sm-6">
                    <label for="facility" class="form-control">
                        {{ $newUser->last_name }}
                    </label>

                </div>
            </div>
            
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>

                <div class="col-sm-6">
                    <label for="facility" class="form-control">
                        {{ $newUser->email }}
                    </label>

                </div>
            </div>
            
            <div class="form-group">
                <label for="roles" class="col-sm-3 control-label">Roles</label>

                <div class="col-sm-6">
                    <select id="role" name="role" class="form-control">
                                  @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                   @endforeach
                                    
                                </select>

                </div>
            </div>
            
            <div class="form-group">
                <label for="assign_branch" class="col-sm-3 control-label">Assign Branch</label>

                <div class="col-sm-6">
                    <div class="row">
    <div class="col-xs-5">
        <label>All Branches</label>
        <select name="from[]" class="multiselect form-control" size="8" multiple="multiple" data-right="#multiselect_to_1" data-right-all="#right_All_1" data-right-selected="#right_Selected_1" data-left-all="#left_All_1" data-left-selected="#left_Selected_1">
            @foreach ($branches as $branch)
                                    <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                   @endforeach
        </select>
    </div>
                       
    <div class="col-xs-2">
        <br>
        <br>
        <!--<button type="button" id="right_All_1" class="btn btn-block"><i class="glyphicon glyphicon-forward"></i></button>-->
        <button type="button" id="right_Selected_1" class="btn btn-default btn-block"><i class="glyphicon glyphicon-chevron-right"></i></button>
        <button type="button" id="left_Selected_1" class="btn btn-default btn-block"><i class="glyphicon glyphicon-chevron-left"></i></button>
        <!--<button type="button" id="left_All_1" class="btn btn-block"><i class="glyphicon glyphicon-backward"></i></button>-->
    </div>
    <label>Assigned</label>
    <div class="col-xs-5">
        <select name="to[]" id="multiselect_to_1" class="form-control" size="8" multiple="multiple"></select>
    </div>
</div>

                </div>
            </div>
            
            
            <!-- Add  Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-success">
                        Approved Registration
                    </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a  href='#' class="btn btn-warning">
                        Decline Registration
                    </a>
                </div>
            </div>
        </form>
    
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/multiselect.min.js') }}"></script><script type="text/javascript">
jQuery(document).ready(function($) {
    $('.multiselect').multiselect();
});
</script>

@endsection
