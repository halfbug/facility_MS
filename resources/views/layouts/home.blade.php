@extends('layouts.app')

@section('content')
<!--<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @yield('panel1')
                </div>
            </div>
        </div>
    </div>
</div>-->

<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="{{ url('/home') }}">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="{{ url('/application') }}">Application Form</a></li>
            <li><a href="{{ url('/facility') }}">Facility</a></li>
            <!--<li><a href="#">Export</a></li>-->
          </ul>
<!--          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>-->
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main ">
          

          @yield('panel_1')
          @yield('panel_2')
          @yield('panel_3')
          
          </div>
      </div>
    </div>
@endsection
