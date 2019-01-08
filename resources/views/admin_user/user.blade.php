@extends('layouts.master')
@section('noidung')
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">User Table</h4>
           {{--  <p class="category">Here is a subtitle for this table</p> --}}
        </div>
        <div class="content table-responsive table-full-width">
           {{--  <a href="" class="btn btn-sm btn-success btn-them" style="margin-bottom: 20px; margin-left: 20px;" data-target="#add_user" data-toggle="modal">Thêm</a> --}}
            <table class="table table-striped" id="users-table">
                <thead>
                    <tr>

                        <th>ID</th>
                        <th>Avatar</th>
                        <th>Name</th>
                        <th>Email</th>
                        {{-- <th>Address</th> --}}
                        {{-- <th>Phone</th> --}}
                        <th>Action</th>
                    </tr>
                </thead>

            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="edit_user">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">User</h4>
            </div>
            <div class="modal-body">
                    <input type="hidden" name="_method" value="post">
                    <h1>Chỉnh sửa</h1>
                    <input type="hidden" id="id_edit" name="id" class="form-control" value="">
                    
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Nhập tên" name="name" value="{{old('name')}}">
                        @if ($errors->has('name'))
                        <div class="alert alert-danger">
                            {{$errors->first('name')}}
                        </div>
                        @endif
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Nhập email" name="email" value="{{old('email')}}">
                        @if ($errors->has('email'))
                        <div class="alert alert-danger">
                            {{$errors->first('email')}}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" id="address"  name="address" value="{{old('address')}}">
                        @if ($errors->has('email'))
                        <div class="alert alert-danger">
                            {{$errors->first('address')}}
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="number" class="form-control" id="phone"  name="phone" value="{{old('phone')}}">
                        @if ($errors->has('phone'))
                        <div class="alert alert-danger">
                            {{$errors->first('phone')}}
                        </div>
                        @endif
                    </div>

                    
                    <div class="form-group">

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Nhập password" name="password" value="{{old('password')}}">
                            @if ($errors->has('password'))
                            <div class="alert alert-danger">
                                {{$errors->first('password')}}
                            </div>
                            @endif
                        </div>

                    </div>



                    <button type="" class="btn btn-primary" id="update">Edit</button>

            </div>

        </div>

    </div>
</div>

<div class="modal fade" id="show_user">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">User Detail</h4>
            </div>
            <div class="modal-body">
              
                <div class="a">
                   <div>Name: <span id="name_user"></span></div>
                   <hr>
                   <div>Email: <span id="email_user"></span></div>
                   <hr>
                   <div>Address: <span id="address_user"></span></div>
                   <hr>
                   <div>Phone: <span id="phone_user"></span></div>
                   <hr>
                </div>
                <div class="a" id="b" >
                    
                </div>
                

            </div>

        </div>

    </div>
</div>

<div class="modal fade" id="modal_uploada">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Upload Avatar</h4>
            </div>
            <div class="modal-body main-section" style=" margin:0 auto;padding: 20px;margin-top: 100px; background-color: #fff;
            box-shadow: 0px 0px 20px #c1c1c1; ">

            {!! csrf_field() !!}
            
            <div class="form-group">
               <label for="">Choose Image (<span style="color: red;">*</span>)</label>
               <div class="file-loading">
                <input id="file-2" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">
            </div>
        </div>


    </div>
    <div class="modal-footer">

        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
    </div>
</div>





@stop  

@section('foot')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
<script>
    $(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('admin.listusers') !!}',
            columns: [
            { data: 'id', name: 'id' },
            { data: 'avatar', name: 'avatar' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            // { data: 'address', name: 'address' },
            // { data: 'phone', name: 'phone' },
            { data: 'action', name: 'action' }
            ]
        });
    });

    // $(document).on('click','.btn-danger', function(){
    //     var id = $(this).data('id');

    //     $.ajax({
    //         type:'delete',
    //         url:'http://todo.laravel.zent:8080/admin/users/' +id,
    //         success:function(response){
    //             toastr.success('Xóa thành công!')

    //             $('#users-table').DataTable().ajax.reload(null, false);
    //         }
    //     })
    // });


    $(document).on('click','.btn-danger', function(){
        var id=$(this).data('id');

        var _this=$(this);
        swal({
            title: "Bạn muốn xóa?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {

                $.ajax({    
                    type: 'delete',
                    url:'http://todo.laravel.zent:8080/admin/users/' +id,
                    data:{

                    },
                    success: function(response){
                        _this.parent().parent().remove();
                    }
                })
                swal("Xóa thành công!", {
                    icon: "success",
                });
            } else {
                swal("Xóa không thành công!");
            }
        });
    });

    $(document).on('click', '.btn-edit', function(e){
     e.preventDefault();
     var id = $(this).attr('data-id');
     $('#email').val('');
     $('#password').val('');
     $('#edit_user').modal('show');
     $.ajax({
        type:'get',
        url:"{{'users/edit'}}/"+id,
        success: function(response){
            console.log(response.users.id);
            $('#id_edit').val(response.users.id);
            $('#name').val(response.users.name);
            $('#email').val(response.users.email);
            $('#address').val(response.users.address);
            $('#phone').val(response.users.phone);


        }
    });

 });

    $(document).on('click','#update',function(e){
        var id=$('#id_edit').val();
       var url="{{asset('')}}admin/users/update/"+id;
        e.preventDefault();
        $.ajax({
            type:'post',
            url:url,
            data:{
            id: $('#id_edit').val(),
            name: $('#name').val(),
            email: $('#email').val(),
            address: $('#address').val(),
            phone:$('#phone').val(),

            success: function(response){
               $('#edit_user').modal('hide');
               toastr.success('Thêm chi tiết thành công!')
               $('#users-table').DataTable().ajax.reload(null, false);
           },
       }
   })

});
$(document).on('click', '.btn-uploada', function(e){
       e.preventDefault();
       var id = $(this).attr('data-id');
       $('#file-2').attr('data-id', id);
       $('#modal_uploada').modal('show');


   });

$("#file-2").fileinput({
        theme: 'fa',
        uploadUrl: "/uploadav",
        uploadExtraData: function() {
          var id= $('#file-2').data('id');
              // alert(id);
              return {
                 user_id: id,
                 _token: $("input[name='_token']").val(),
             };
         },
         allowedFileExtensions: ['jpg', 'png', 'gif'],
         overwriteInitial: false,
         maxFileSize:2000,
         maxFilesNum: 10,
         slugCallback: function (filename) {
            return filename.replace('(', '_').replace(']', '_');
        }
    });


    $(document).on('click', '.btn-user', function(e){
         $('#b').text('');
        e.preventDefault();
        var id = $(this).attr('data-id');
        $('#show_user').modal('show');


        $.ajax({
            type:'get',
            url:'http://todo.laravel.zent:8080/admin/users/'+id,
            success: function(response){
                $('#name_user').text(response.data.user.name);
                $('#email_user').text(response.data.user.email);
                $('#address_user').text(response.data.user.address);
                $('#phone_user').text(response.data.user.phone);

                var html='<img src="{{asset('')}}storage/'+response.data.avatar.link_avatar+'" style="width: 300px; height: 300px;">';
                $('#b').append(html);
            }

        });
       
    });







</script>  
@endsection                      
