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

                    <form class="form-inline">
                         <div class="form-group">
                            <label class="control-label col-sm-6" class="col-md-6" class="col-lg-6" for="Select Type">Select Lable</label>
                            <div class="col-sm-6" class="col-md-6" class="col-lg-6">
                                 <select class="form-control" id="selectLable">
                                    <option selected>Select Lable</option>
                                    <option value="1">New</option>
                                    <option value="2">Initial</option>
                                    <option value="3">Processing</option>
                                    <option value="3">complete</option>


                                 </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-6" class="col-md-6" class="col-lg-6" for="Select Type">Select Customer</label>
                            <div class="col-sm-6" class="col-md-6" class="col-lg-6">
                                 <select class="form-control" id="selectCustomer">
                                    <option selected>Select Type</option>
                                    <option value="1">New</option>
                                    <option value="2">Initial</option>
                                    <option value="3">Processing</option>
                                    <option value="3">complete</option>


                                 </select>
                            </div>
                        </div><br>

                        <div class="form-group">
                         &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                         <div class="col-md-9 col-md-offset-8" class="col-sm-9 col-sm-offset-8" class="col-lg-9 col-lg-offset-8">
                         <label for="InvoiceDate" class="form-group">Invoice DAte</label>
                          <input type="Date" class="form-control" id="DAte" name="DAte">
                        </div><br><br><br><br>

                         <div class="form-group">
                            &nbsp;  &nbsp;  &nbsp;  &nbsp; <label class="form-group" for="Subject">Subject</label>
                          <input type="text" class="form-control" id="Subject" name="Subject">
                        </div><br><br>


                         <table class="table table-bordered">

                        <thead>
                            <th>Qty</th>
                            <th>Item</th>
                            <th>qty</th>
                            <th>unit price</th>
                            <th>Total</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-default">Add</button>
                                <button type="button" class="btn btn-default">Del</button></td>
                            </tr>
                        </tbody>
                    </table>

                       <div class="form-group">
                         &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                         <div class="col-md-8 col-md-offset-8" class="col-sm-8 col-sm-offset-8" class="col-lg-8 col-lg-offset-8">
                         <label for="Total" class="form-group">Total</label>
                          <input type="text" class="form-control" id="Total" name="Total">
                        </div><br>

                        <div class="form-group">
                         &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                         <div class="col-md-8 col-md-offset-8" class="col-sm-8 col-sm-offset-8" class="col-lg-8 col-lg-offset-8">
                         <label for="Discount" class="form-group">Discount</label>
                          <input type="text" class="form-control" id="Discount" name="Discount">
                        </div><br>

                        <div class="form-group">
                         &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                         <div class="col-md-8 col-md-offset-8" class="col-sm-8 col-sm-offset-8" class="col-lg-8 col-lg-offset-8">
                         <label for="NetTotal" class="form-group">Net Total</label>
                          <input type="text" class="form-control" id="NetTotal" name="NetTotal">
                        </div><br>


                         <div class="form-group">
                            &nbsp;  &nbsp;  &nbsp;  &nbsp; <label class="form-group" for="remark">
                            Terms & Conditions</label>
                         <section>
                             <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
                             <script> tinymce.init({selector:'textarea'});</script>
                         </section>
                          <textarea class="form-control" id="remark"  name="remark" rows='5'></textarea>

                        </div><br><br>


                         <div class="form-group">
                            &nbsp;  &nbsp;  &nbsp;  &nbsp; <label class="form-group" for="Subject">Subject</label>
                          <input type="text" class="form-control" id="Subject" name="Subject">
                        </div>


                         &nbsp;  &nbsp;  &nbsp;  &nbsp;  <div class="form-group">
                            <div class="col-md-8 col-md-offset-5" class="col-sm-8 col-sm-offset-5" class="col-lg-8 col-lg-offset-5">
                                <button type="button" class="btn btn-default">
                                    create
                                </button>
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
