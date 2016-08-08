@extends('layouts.home')

@section('panel_1')

    <h1 class="page-header">Facilities</h1>

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        
        <form action="{{ url('facility') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            
            <div class="form-group">
                <label for="facility-name" class="col-sm-3 control-label">Facility Name</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="facility-name" class="form-control">
                </div>
            </div>
            
            <div class="form-group">
                <label for="facility-name" class="col-sm-3 control-label">Description</label>

                <div class="col-sm-6">
                    <textarea rows="4" name="desc" id="desc" class="form-control cols="50"></textarea>
                    
                </div>
            </div>
            
            <div class="form-group">
                <label for="Address" class="col-sm-3 control-label">Address</label>

                <div class="col-sm-6">
                    <textarea rows="4" name="address" id="address" class="form-control cols="50"></textarea>
                    
                </div>
            </div>
            
            <div class="form-group">
                <label for="suburb" class="col-sm-3 control-label">Suburb</label>

                <div class="col-sm-6">
                    <input type="text" name="suburb" id="suburb" class="form-control">
                </div>
            </div>
            
            <div class="form-group">
                <label for="state" class="col-sm-3 control-label">State</label>

                <div class="col-sm-6">
                    <input type="text" name="state" id="state" class="form-control">
                </div>
            </div>
            
            <div class="form-group">
                <label for="postcode" class="col-sm-3 control-label">Post code</label>

                <div class="col-sm-6">
                    <input type="text" name="postcode" id="postcode" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="phone" class="col-sm-3 control-label">Phone</label>

                <div class="col-sm-6">
                    <input type="text" name="phone" id="phone" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="web_url" class="col-sm-3 control-label">Web URL</label>

                <div class="col-sm-6">
                    <input type="text" name="web_url" id="web_url" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>

                <div class="col-sm-6">
                    <input type="text" name="email" id="email" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="parent_id" class="col-sm-3 control-label">Parent</label>

                <div class="col-sm-6">
                    <select id="facility" name="facility" class="form-control">
                                  @foreach ($parents as $parent)
                                    <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                                   @endforeach
                                    
                                </select>
                </div>
            </div>
            <div class="form-group">
                <label for="tree_level" class="col-sm-3 control-label">Tree Level</label>

                <div class="col-sm-6">
                    <input type="text" name="tree_level" id="tree_level" class="form-control">
                </div>
            </div>
            
            <!-- Add  Button -->
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
<!--            <div class="panel-heading">
                <h2 class="sub-header"> Facilities </h2>
            </div>-->

            <div class="panel-default">
                <table class="table table-striped table-hover">

                    <!-- Table Headings -->
                    <thead>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Web URL</th>
                        <th>Email</th>
                        <th>Parent</th>
                        <th> </th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($facilities as $facility)
                            <tr>
                                
                                <td class="table-text">
                                    <div>{{ $facility->name }}</div>
                                </td>

                                <td class="table-text">
                                    <div>{{ $facility->phone }}</div>
                                </td>
                                
                                <td class="table-text">
                                    <div>{{ $facility->web_url }}</div>
                                </td>
                                
                                <td class="table-text">
                                    <div>{{ $facility->email }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $facility->parent_id }}</div>
                                </td>
                                <td class="table-text">
                                    <div>
                                        <a href="#" alt="edit">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>
                                        
                                        <a href="#" alt="delete">
                                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                        </a>
                                        
                                        <a href="#" alt="detail">
                                        <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                                        </a>
                                    </div>
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