@extends('layouts.home')

@section('panel_1')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Task Form -->
        <form action="{{ url('facility') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="facility-name" class="col-sm-3 control-label">Facility Name</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="facility-name" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Facility
                    </button>
                </div>
            </div>
        </form>
    

        
<!-- Current Tasks -->
    @if (count($facilities) > 0)
    <div class="col-sm-10">
        <div class="panel panel-default ">
            <div class="panel-heading">
                <h2 class="sub-header"> Facilities </h2>
            </div>

            <div class="panel-default">
                <table class="table table-striped table-hover">

                    <!-- Table Headings -->
                    <thead>
                        <th>Name</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($facilities as $facility)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $facility->name }}</div>
                                </td>

                                <td>
                                    <!-- TODO: Delete Button -->
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