@extends('layouts.master')
@section('noidung')
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Order Table</h4>
           {{--  <p class="category">Here is a subtitle for this table</p> --}}
        </div>
        <div class="content table-responsive table-full-width">
           {{--  <a href="" class="btn btn-sm btn-success btn-them" style="margin-bottom: 20px; margin-left: 20px;" data-target="#add_user" data-toggle="modal">Thêm</a> --}}
            <table class="table table-striped" id="users-table">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Product</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Action</th>
                       
                    </tr>
                </thead>

            </table>
        </div>
    </div>
</div>











@stop  

@section('foot')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
<script>


</script>  
@endsection                      
