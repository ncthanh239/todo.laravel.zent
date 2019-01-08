@extends('layouts.master')
@section('noidung')
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h3 class="title">Danh sách sản phẩm</h3>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-striped" id="shoes-table">
                <thead>
                	<th>Image</th>
                    
                    <th>Quantity</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>Action</th>
                    
                </thead>
                @foreach($data as $value)
                <tbody>
                	<td><img src="{{asset(\Storage::url($value['image']['0']))}}" style="width: 64px; height: 64px;"></td>
                	<td>{{$value['value']['0']}}</td>
                	
                	<td>{{$value['size']}}</td>
                	<td><input type="color" name="" value="{{$value['color']}}" style="width: 80px;border: none;"></td>
                	<td>
                		<button class="btn btn-sm btn-primary detail" data-target="#detailsp" data-id="{{$value['id']}}"><i class="fa fa-eye" aria-hidden="true" ></i></button>
                        <button class="btn btn-sm btn-danger" data-target="" data-id="{{$value['id']}}"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                    </td>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>


<div class="modal fade" id="detailsp">
	<div class="modal-dialog" style="width: 60%;">
		<div class="modal-content" >
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Chi tiết sản phẩm</h4>
			</div>
			<div class="modal-body">
               <div class="a">
                <div>Code: <span id="code_img"></span></div>
                <hr>
                <div>Name: <span id="name_img"></span></div>
                <hr>
                <div>Price: <span id="price_img"></span></div>
                <hr>
                <div>Description: <span id="description_img"></span></div>
                <hr>

            </div>
            <div class="a">
                <img class="imgg" style="width: 300px; height: 300px;">
                    
            </div>

        </div>
        <div class="modal-footer">

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
<script type="text/javascript">
    $(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }

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
                        url: 'http://todo.laravel.zent:8080/admin/shoes/delete/' +id,
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

        $(document).on('click','.detail', function(e){
            e.preventDefault();
            var id = $(this).attr('data-id');
            $('#detailsp').modal('show');

            $.ajax({
                type:'get',
                url:'http://todo.laravel.zent:8080/admin/shoes/showimg/'+id,
                success: function(response){

                    // console.log(response.aaa.img.data[0].link_image);
                    $('#code_img').text(response.aaa.product.code);
                    $('#name_img').text(response.aaa.product.name);
                    $('#price_img').text(response.aaa.product.price);
                    $('#description_img').html(response.aaa.product.description);

                    // $.each(response.aaa.img.data as $key => $value){
                    //      $('.imgg').attr('src',response.aaa.img.data[0].link_image);
                    // }
                   
                    // $.each(response.aaa.imgg, function(){
                    //     var html='<img src="{{asset('')}}storage/'+(this).link_image'">';
                    //     $('#imgg').append(html);
                    // })
                    // 
                    var a = response.aaa.img.data;
                    a.forEach(function(entry) {
                         // var html='<img src="''+ entry.link_image">';
                        $('.imgg').append(html);
                        console.log(entry.link_image);
                        $('.imgg').attr('src',entry.link_image);
                        $('.imgg').append( $('.imgg').attr('src',entry.link_image));
                    });
                    
                }
            });
        });
    });
</script>
@endsection