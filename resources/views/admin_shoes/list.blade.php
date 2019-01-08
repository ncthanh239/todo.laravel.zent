@extends('layouts.master')
@section('noidung')
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Danh sách sản phẩm</h4>
            
            
        </div>

        <div class="content table-responsive table-full-width">
            <button data-toggle="modal" type="button" class="btn btn-sm btn-success" id="add_btn" data-target="#modaladd" style="margin-bottom: 20px; margin-left: 20px;">Thêm mới</button>
            <table class="table table-striped" id="shoes-table">

                <thead>
                    <th>ID</th>
                    <th>Code</th>
                    <th>Name</th>
                    
                    <th>Price</th>
                    <th>Action</th>
                    
                </thead>
                
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modaladd">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Thêm mới</h4>
            </div>
            <form id="add" action="" method="POST" role="form">
                {{ csrf_field() }}           
                <div class="modal-body">
                    <h3>Thêm mới</h3>
                    <div class="form-group">
                        <label for="">Name (<span style="color: red;">*</span>)</label>

                        <input type="text" class="form-control" id="name" placeholder="name" name="name">
                    </div>

                    <div class="form-group">
                        <label for="">Title (<span style="color: red;">*</span>)</label>
                        <input type="text" class="form-control" id="title" placeholder="title" name="title">
                    </div>

                    <div class="form-group">
                        <label for="">Description (<span style="color: red;">*</span>)</label>
                        <textarea name="editor1" id="editor1" rows="10" cols="30" name="description"></textarea>
                    </div>


                    <div class="form-group">
                        <label for="">Price (<span style="color: red;">*</span>)</label>
                        <input type="text" class="form-control" id="price" placeholder="price" name="price">
                    </div>
                </div>
                <div class="modal-footer">

                 <button type="submit" class="btn btn-primary" >Add</button>
             </div>
         </form>
     </div>
 </div>
</div>


<div class="modal fade" id="add_detail">
    <div class="modal-dialog container">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Thêm chi tiết</h4>
            </div>
            <form action="" method="POST" role="form">
                {{ csrf_field() }}  
                <div class="modal-body">
                    <h3>Thêm mới chi tiết</h3>
                    <div class="form-group">
                        @foreach($atts as $att)
                        <div class="form-group">
                            <label for="">{{$att->column}} (<span style="color: red;">*</span>)</label>
                            <input type="text" class="form-control" id="{{$att->column}}" placeholder="{{$att->column}}" name="{{$att->column}}">
                        </div>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <label for="">Size (<span style="color: red;">*</span>)</label>
                        <select class="form-control chon" name="size_id" id="size_id">
                            @if(count($sizes)>0)
                            @foreach($sizes as $size)
                            <option value="{{$size->id}}">{{$size->size}}</option>
                            @endforeach
                            @endif
                        </select>

                        
                    </div>
                    <div class="form-group">
                        <label for="">Color (<span style="color: red;">*</span>)</label>
                        <select class="form-control" name="color_id" id="color_id1" style="width: 135px;height: 35px">
                            @if(count($colors)>0)
                            @foreach($colors as $color)
                            <option value="{{$color->id}}" style="background-color: {{$color->code_color}}">{{$color->color}}</option>


                            @endforeach
                            @endif


                        </select>


                    </div>


                    
                {{--  </div> --}}
            {{-- </div> --}}





        </div>
        <div class="modal-footer">

         <button type="submit" class="btn btn-primary" id="addthem">Add</button>
     </div>
 </form>
</div>
</div>
</div>


<div class="modal fade" id="modal_upload">
    <div class="modal-dialog" style="width: 60%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body main-section" style=" margin:0 auto;padding: 20px;margin-top: 100px; background-color: #fff;
            box-shadow: 0px 0px 20px #c1c1c1; ">

            {!! csrf_field() !!}
            <div class="form-group">
                <label for="">Color (<span style="color: red;">*</span>)</label>
                <select class="form-control" name="color_id" id="color_id" style="width: 135px;height: 35px">
                    @if(count($colors)>0)
                    @foreach($colors as $color)
                    <option value="{{$color->id}}" style="background-color: {{$color->code_color}}">{{$color->color}}</option>

                    
                    @endforeach
                    @endif

                    
                </select>


            </div>

            <div class="form-group">
                <label for="">Size (<span style="color: red;">*</span>)</label>
                <select class="form-control chon" name="size_id" id="size_id1" style="width: 135px;height: 35px">
                    @if(count($sizes)>0)
                    @foreach($sizes as $size)
                    <option value="{{$size->id}}">{{$size->size}}</option>
                    @endforeach
                    @endif
                </select>


            </div>
            <div class="form-group">
               <label for="">Choose Image (<span style="color: red;">*</span>)</label>
               <div class="file-loading">
                <input id="file-1" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">
            </div>
        </div>


    </div>
    <div class="modal-footer">

        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
    </div>
</div>
</div>
</div>


<div class="modal fade" id="modal_edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Sửa</h4>
            </div>
            <form id="update" method="POST" role="form">
                <div class="modal-body">

                    <input type="hidden" id="id_edit" name="id" class="form-control" value="">
                    <div class="form-group">
                        <label for="">Name (<span style="color: red;">*</span>)</label>
                        <input type="text" class="form-control" id="name2" placeholder="name" name="name">
                    </div>

                    <div class="form-group">
                        <label for="">Title (<span style="color: red;">*</span>)</label>
                        <input type="text" class="form-control" id="title2" placeholder="title" name="title">
                    </div>

                    <div class="form-group">
                        <label for="">Description (<span style="color: red;">*</span>)</label>
                        <textarea name="editor2" id="editor2" rows="10" cols="30" name="description"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Price (<span style="color: red;">*</span>)</label>
                        <input type="text" class="form-control" id="price2" placeholder="price" name="price">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-update">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_detail">
    <div class="modal-lg-12 container" style="width: 60%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Details Product</h4>
            </div>
            <div class="modal-body">

                <form method="GET" role="form" action="{{asset('')}}admin/shoes/">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="Code_detail">Code:</div>
                            <hr>
                            <div>Name:</div>
                            <hr>
                            <div class="material_detail">Material:</div>
                            <hr>
                            <div class="quantity_detail">Quantity:</div>
                            <hr>
                            <div class="size_detail">Size:</div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div>Color:</div>
                            <hr>
                            <div>Image:</div>

                        </div>
                    </div>
                    
                </form>

            </div>

        </div>
    </div>
</div>





@stop                          
@section('foot')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script> --}}
<script>
    $(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }

        });

        $('#shoes-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('admin.shoes') !!}',
            columns: [
            { data: 'id', name: 'id' },
            { data: 'code', name: 'code' },
            { data: 'name', name: 'name' },
            
            { data: 'price', name: 'price' },
            { data: 'action', name: 'action' }
            ]
        });
        // $('#color_id').change(function(){
        //     var id = $(this).attr('data-id');
        //     // alert($(this).val());
        //     // alert(id);

        // });

        $(document).on('submit','#add', function(e){
            e.preventDefault();
            var description = CKEDITOR.instances['editor1'].getData();
            var formData = new FormData();
            formData.append('name',$('#name').val());
            formData.append('title',$('#title').val());
            formData.append('description',description);
            formData.append('price',$('#price').val());



            $.ajax({
                type:'post',
                url:"{!!route('admin.storeshoes')!!}",
                dataType:'json',
                data:formData,
                async:false,
                processData: false,
                contentType: false,
                success:function(response){
                    $('#modaladd').modal('hide');
                    toastr.success('Thêm mới thành công!')
                    $('#shoes-table').DataTable().ajax.reload(null, false);
                }

            });
        })
    });


    $(document).on('click', '.btn-add-them', function(e){
       e.preventDefault();
       var id = $(this).attr('data-id');
       $('#addthem').attr('data-id', id);
       $('#add_detail').modal('show');

   });

    $(document).on('click','#addthem', function(e){ 
        e.preventDefault();
        var id= $(this).data('id');

        $.ajax({
            type:'post',
            url:"http://todo.laravel.zent:8080/admin/shoes/"+id,
            data:{
                
                quantity:$('#quantity').val(),
                size_id:$('#size_id').val(),
                color_id:$('#color_id1').val(),
            },
            success:function(response){
                $('#add_detail').modal('hide');
                toastr.success('Thêm chi tiết thành công!')
                $('#shoes-table').DataTable().ajax.reload(null, false);
            } 
        });
        
    });


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
                    url: 'http://todo.laravel.zent:8080/admin/shoes/' +id,
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

    $(document).on('click', '.btn-upload', function(e){
       e.preventDefault();
       var id = $(this).attr('data-id');
       $('#file-1').attr('data-id', id);
       $('#modal_upload').modal('show');


   });
    $("#file-1").fileinput({
        theme: 'fa',
        uploadUrl: "/upload",
        uploadExtraData: function() {
          var id= $('#file-1').data('id');
              // alert(id);
              return {
                 product_id: id,
                 color_id: $('#color_id').val(),
                 size_id: $('#size_id1').val(),
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




    $(document).on('click', '.btn-edit', function(e){
       e.preventDefault();
       var id = $(this).attr('data-id');

       $('#modal_edit').modal('show');

       $.ajax({
        type:'get',
        url:"{{asset('admin/shoes/edit')}}/"+id,
        success: function(response){
            console.log(response);
            $('#id_edit').val(response.data.id);
            $('#name2').val(response.data.name);
            $('#title2').val(response.data.title);
            CKEDITOR.instances['editor2'].setData(response.data.description
                );
            $('#price2').val(response.data.price);
        }
    });

   });

    $('#update').submit(function(e){

        var id=$('#id_edit').val();
        var url="{{asset('admin/shoes/update')}}/"+id;
        console.log(url);
        e.preventDefault();

        var description = CKEDITOR.instances['editor2'].getData();
        var formData = new FormData();
        formData.append('id',$('#id_edit').val());
        formData.append('name',$('#name2').val());
        formData.append('title',$('#title2').val());
        formData.append('description',description);
        formData.append('price',$('#price2').val());
        formData.append('_method','post');
        $.ajax({
            type:'post',
            url: url,
            dataType:'json',
            data : formData,
            async:false,
            processData: false,
            contentType: false,
            success: function(response){
                $('#modal_edit').modal('hide');
                toastr.success('Thêm chi tiết thành công!')
                $('#shoes-table').DataTable().ajax.reload(null, false);
            },

            
        });
    });





   //  $(document).on('click', '.btn-detail', function(e){
   //   e.preventDefault();
   //   var id = $(this).attr('data-id');
   //   $('#modal_detail').modal('show');


   // });



</script>  

<script type="text/javascript">

</script>
@endsection                 