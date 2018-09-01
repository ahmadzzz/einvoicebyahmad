@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
   @include('sidebar')

        <div class="col-md-9 ">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <th>Name</th>
                            <th>Business name</th>
                            <th>Label Name</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Recieve Payments</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ahmad</td>
                                <td>aaa</td>
                                <td>zzz</td>
                                <td>123456</td>
                                <td>ahmad@gmail.com</td>
                                <td>initial</td>
                                <td>yes</td>
                                
                                <td><button type="button" class="btn btn-default">Edit</button></td>
                            </tr>
                        </tbody>
                    </table>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
