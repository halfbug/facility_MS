@extends('layouts.home')

@section('panel_1')

<h1 class="page-header">@if ($old->id == null)
    Add 
    @else
    Edit
    @endif
    Application Form</h1>

<div class="panel-body">
    <!-- Display Validation Errors -->
    @include('common.errors')


    <form action="{{ url('/application/add') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        @if (!empty($old->id))
        <input type="hidden" name="id" id="id" class="form-control" value="{{$old->id}}">

        @endif

        <div class="form-group">
            <label for="title" class="col-sm-3 control-label">Title</label>

            <div class="col-sm-6">
                <input type="text" name="title" id="title" class="form-control" value="{{$old->title}}">
            </div>
        </div>

        <div class="form-group">
            <label for="first_name" class="col-sm-3 control-label">First Name</label>

            <div class="col-sm-6">
                <input type="text" name="first_name" id="first_name" class="form-control" value="{{$old->first_name}}">

            </div>
        </div>

        <div class="form-group">
            <label for="last_name" class="col-sm-3 control-label">Last Name</label>

            <div class="col-sm-6">
                <input type="text" name="last_name" id="last_name" class="form-control" value="{{$old->last_name}}">

            </div>
        </div>

        <div class="form-group">
            <label for="h_address" class="col-sm-3 control-label">Address</label>

            <div class="col-sm-6">
                <input type="text" name="h_address" id="h_address" class="form-control" value="{{$old->h_address}}">
            </div>
        </div>

        <div class="form-group">
            <label for="h_postcode" class="col-sm-3 control-label">Home Post Code</label>

            <div class="col-sm-6">
                <input type="text" name="h_postcode" id="state" class="form-control" value="{{$old->state}}">
            </div>
        </div>
        <div class="form-group">
            <label for="h_suburb" class="col-sm-3 control-label">Home Suburb</label>

            <div class="col-sm-6">
                <input type="text" name="h_suburb" id="h_suburb" class="form-control" value="{{$old->h_suburb}}" >
            </div>
        </div>

        <div class="form-group">
            <label for="h_state" class="col-sm-3 control-label">Home State</label>

            <div class="col-sm-6">
                <input type="text" name="h_state" id="h_state" class="form-control" value="{{$old->h_state}}" >
            </div>
        </div>

        <div class="form-group">
            <label for="h_email" class="col-sm-3 control-label">Home Email</label>

            <div class="col-sm-6">
                <input type="text" name="h_email" id="h_email" class="form-control" value="{{$old->h_email}}">
            </div>
        </div>

        <div class="form-group">
            <label for="h_phone" class="col-sm-3 control-label">Home Phone</label>

            <div class="col-sm-6">
                <input type="text" name="h_phone" id="h_phone" class="form-control" value="{{$old->h_phone}}" >
            </div>
        </div>
        <div class="form-group">
            <label for="date_of_birth" class="col-sm-3 control-label">Date of Birth</label>

            <div class="col-sm-6">
                <input type="text" name="date_of_birth" id="date_of_birth" class="form-control" value="{{$old->date_of_birth}}" >
            </div>
        </div>
        <div class="form-group">
            <label for="gp_fullname" class="col-sm-3 control-label">GP Full Name</label>

            <div class="col-sm-6">
                <input type="text" name="gp_fullname" id="web_url" class="form-control" value="{{$old->gp_fullname}}" >
            </div>
        </div>
        <div class="form-group">
            <label for="gp_address" class="col-sm-3 control-label">GP Address</label>

            <div class="col-sm-6">
                <input type="text" name="gp_address" id="gp_address" class="form-control" value="{{$old->gp_address}}" >
            </div>
        </div>

        <!--        <div class="form-group">
                    <label for="gp_suburb" class="col-sm-3 control-label">GP Address</label>
        
                    <div class="col-sm-6">
                        <input type="text" name="gp_suburb" id="gp_suburb" class="form-control" value="{{$old->gp_suburb}}" >
                    </div>
                </div>-->

        <div class="form-group">
            <label for="gp_suburb" class="col-sm-3 control-label">GP Suburb</label>

            <div class="col-sm-6">
                <input type="text" name="gp_suburb" id="gp_suburb" class="form-control" value="{{$old->gp_suburb}}" >
            </div>
        </div>

                <div class="form-group">
                    <label for="gp_state" class="col-sm-3 control-label">GP State</label>
        
                    <div class="col-sm-6">
                        <input type="text" name="gp_state" id="gp_state" value="{{$old->gp_state}}" class="form-control">
                    </div>
                </div><!--
        -->
        <div class="form-group">
            <label for="gp_postcode" class="col-sm-3 control-label">GP Post Code</label>

            <div class="col-sm-6">
                <input type="text" name="gp_postcode" id="gp_postcode" value="{{$old->gp_postcode}}" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="gp_phone_1" class="col-sm-3 control-label">GP Phone 1</label>

            <div class="col-sm-6">
                <input type="text" name="gp_phone_1" id="gp_phone_1" value="{{$old->gp_phone_1}}" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="gp_phone_2" class="col-sm-3 control-label">GP Phone 2</label>

            <div class="col-sm-6">
                <input type="text" name="gp_phone_2" id="gp_phone_2" value="{{$old->gp_phone_2}}" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="facility_id" class="col-sm-3 control-label">Facility</label>

            <div class="col-sm-6">
                <select id="facility_id" name="facility_id" class="form-control">
                    @foreach ($facilities as $facility)
                    @if ($old->facility_id == $facility->id)
                    <option value="{{ $facility->id }}" selected="selected">{{ $facility->name }}</option>
                    @else
                    <option value="{{ $facility->id }}">{{ $facility->name }}</option>
                    @endif
                    @endforeach

                </select>
            </div>
        </div>

        <!-- Add  Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Save
                </button>
            </div>
        </div>
    </form>





</div>
@endsection