@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
   @include('sidebar')

        <div class="col-md-9 ">
            <div class="panel panel-default">
                <div class="panel-heading">create new user</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-sm-2" class="control-label col-md-2" class="control-label col-lg-2"  for="name">Name:</label>
                            <div class="col-sm-5" class="col-md-5" class="col-lg-5">
                                <input type="text" class="form-control" id="name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" class="control-label col-md-2" class="control-label col-lg-2"  for="Designation">Designation</label>
                            <div class="col-sm-5" class="col-md-5" class="col-lg-5">
                                <input type="text" class="form-control" id="Designation" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" class="control-label col-md-2" class="control-label col-lg-2"  for="Select Type">Select Type</label>
                            <div class="col-sm-5" class="col-md-5" class="col-lg-5">
                                 <select class="form-control" id="selectType">
                                    <option selected>Select Type</option>
                                    <option value="1">New</option>
                                    <option value="2">Initial</option>
                                    <option value="3">Processing</option>
                                    <option value="3">complete</option>


                                 </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" class="control-label col-md-2" class="control-label col-lg-2"  for="email">Email</label>
                            <div class="col-sm-5" class="col-md-5" class="col-lg-5">
                                <input type="email" class="form-control" id="email" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" class="control-label col-md-2" class="control-label col-lg-2"  for="password">Password</label>
                            <div class="col-sm-5" class="col-md-5" class="col-lg-5">
                                <input type="text" class="form-control" id="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-6" class="col-sm-8 col-sm-offset-5" class="col-lg-8 col-lg-offset-5">
                                <button type="button" class="btn btn-default">
                                    create
                                </button>
                            </div>
                        </div>
                    </form>
      
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
