<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Attribute;
use App\Value;
use App\Color;
use App\Size;
use App\Product_image;
use App\Color_size;
use Yajra\Datatables\Datatables;
use Gloudemans\Shoppingcart\Facades\Cart;	
class ProductController extends Controller
{	
	public $atts;
	public $colors;
	public $sizes;
	public $id_size;
	public function __construct(){
		$this->attr = new Attribute;
		$this->color = new Color;
		$this->size = new Size;
		$this->id_size= new Size;
	}	
	public function index(){
		$colors=Color::all();
		$sizes=Size::all();
		return view('admin_shoes.list', ['colors'=>$colors], ['sizes'=>$sizes]);
	}
	public function detail(){
		$product=Product::all();
		return view('admin_shoes.detail', ['product'=>$product]);
	}
	public function Shoes(){
		$atts = Attribute::select('id', 'column')->get();

		$products =Product::orderBy('id', 'desc')->get();

		foreach ($products as $key => $product) {
			foreach ($atts as $key => $att) {
				$cot  = $att->column;
				$value = Value::where('attribute_id', $att->id)->where('product_id', $product->id)->first();
				if (!empty($value)) {
					$product->$cot = $value->value;
				}
				else {
					$product->$cot = 'Unknown';
				}
				
			}
		}
		return datatables()->of($products)
		->addColumn('action', function ($product) {
			return '<a href="http://todo.laravel.zent:8080/admin/shoes/'.$product->id.'"
			class="btn btn-sm btn-success btn-detail" data-id="'.$product->id.'" ><i class="fa fa-eye" aria-hidden="true"></i></a>
			<button class="btn btn-sm btn-primary btn-add-them" data-id="'.$product->id.'" ><i class="fa fa-puzzle-piece" aria-hidden="true"></i></button>
			<button class="btn btn-sm btn-info btn-upload" data-id="'.$product->id.'"><i class="fa fa-upload" aria-hidden="true"></i></button>
			<button class="btn btn-sm btn-warning btn-edit"  data-id="'.$product->id.'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
			<button class="btn btn-sm btn-danger" data-id="'.$product->id.'"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
			';
		})
		->editColumn('price', function($product){
			return number_format($product->price);
		})
		->toJson();
	}

	public function create_first(){
		return view('admin_shoes.list');
	}
	public function store_first(Request $request){
		$data=$request;
		$data['slug']=str_slug($data['title']);
		$data['code']='SP'.time();
		$data['description']=$request->description;
		$product=Product::store_first($request->all());

		return response()->json([
			'error'=>false,
			'data'=>$product
		]);
	}
	public function create($id){
		$atts=Attribute::select('id', 'column')->get();
		
		return view('admin_shoes.list',['atts'=>$atts],Product::find($id));	
	}
	public function store(Request $request,$id){

		$data=$request->all();
		

		$atts=Attribute::select('id', 'column')->get();
		$size_id=$data['size_id'];
		$color_id=$data['color_id'];
		// dd($color_id);
		$result=Value::where('color_id',$request->color_id)->where('size_id',$request->size_id)->first();
		foreach($data as $key =>$value){
			$att=Attribute::where('column', $key)->first();

			if(isset($att)){
				if (empty($result)) {

					Value::create([
						'product_id'=>$id,
						'attribute_id'=>$att->id,
						'size_id'=>$size_id,
						'color_id'=>$color_id,
						'value'=>$value
					]);

					Color_size::create([
						'product_id'=>$id,
						'size_id'=>$size_id,
						'color_id'=>$color_id

					]);

				}else{
						$qua=$request->quantity+$result->value;
					
						Value::where('product_id',$request->id)->update([
							'value'=>$qua,
						]);

						Color_size::create([
						'product_id'=>$id,
						'size_id'=>$size_id,
						'color_id'=>$color_id

					]);
					
						
					
					// dd($qua);
				}
			}	
		}
	}
	public function destroy($id){
		$color_size=Color_size::where('product_id', $id)->delete();
		$values=Value::where('product_id', $id)->delete();
		$images=Product_image::where('product_id',$id)->delete();
		$products=Product::find($id)->delete();
		return response()->json([
			'message'=>'Da xoa',
		]);
		
		
	}

	public function show($id){

		$array= array();
		$data=array();
		$atts = Attribute::select('id', 'column')->get();
		$sizes = Size::select('size');
		$kichco=Value::where('product_id',$id)->select('size_id')->paginate();
		$bbb=[];
		$aaa=[];
		$sizescolors=Value::where('product_id',$id)->where('attribute_id',1)->select('size_id','color_id')->get();
		
		foreach ($sizescolors as $key => $sizecolor) {
			
			$images=Product_image::where('product_id',$id)->where('size_id',$sizecolor->size_id)->where('color_id',$sizecolor->color_id)->paginate();
			$values=Value::where('product_id',$id)->where('size_id',$sizecolor->size_id)->where('color_id',$sizecolor->color_id)->paginate();

			foreach ($values as $key2 => $value) {
				$aaa[$key2]=$value->value;
			}

			foreach ($images as $key1 => $image) {
				$bbb[$key1]=$image->link_image;
			}
			$gtrisize=Size::where('id',$sizecolor->size_id)->first()->size;
			$gtricolor=Color::where('id',$sizecolor->color_id)->first()->code_color;
			$array['id']=$id;
			$array['size']=$gtrisize;
			$array['color']=$gtricolor;
			$array['image']=$bbb;
			$array['value']=$aaa;
			$data[$key]=$array;
			
			// dd($sizecolor->size_id);
			
			// dd($gtrisize);
			


		}

		// dd($data);
		
		
		return view('admin_shoes.detail',['data'=>$data]);
	}

	public function edit($id){
		$products=Product::find($id);

		return response()->json([
			'data'=>$products
		]);
	}

	public function update(Request $request,$id){
		$data=$request->only(['name','title','description','price']);
		$data['slug'] = str_slug($data['title']);
		$data['code'] = 'SP'.time();

		$product = Product::find($id)->update($data);

		return response()->json([
			'data'=>$product
		]);
	}

	public function indexshop(){
		$array=array();
		$aaa=[];
		$i=[];
		$bbb=[];
		$a=[];
		$products=Product::all();
		
		foreach ($products as $thai =>$product) {
			$images=Product_image::where('product_id',$product->id)->get();
			
			foreach ($images as $thanh => $image) {
				
				$i[$thanh]=$image->link_image;
			}	
			$bbb[$product->id]=$i;
			$a[$thai]=$bbb;
			
		}

		foreach ($products as $key => $product) {
			$aaa['id']=$product->id;
			$aaa['name']=$product->name;
			$aaa['title']=$product->title;
			$aaa['slug']=$product->slug;
			$aaa['description']=$product->description;
			$aaa['price']=$product->price;
			$aaa['image']=Product_image::where('product_id',$product->id)->paginate();
			$data[$key]=$aaa;
			

		}

		// dd($data);
		// dd($data[0]['image']->first()->link_image);
		return view('userview.shop', ['data'=>$data]);

	}

	public function single($id){
		$array=array();
		$aaa=[];
		$col=[];
		$sz=[];
		$quantity=[];
		$products=Product::find($id);
		$values=Value::where('product_id',$id)->get();
		$imgs=Product_image::where('product_id',$id)->paginate();
		
		
		$aaa['value']=$values;
		$aaa['product']=$products;
		$aaa['img']=$imgs;
		// dd($aaa['value']);
		// foreach ($values as $key => $value) {
			
		// }
		foreach ($imgs as $key=> $value) {
			// dd($value->color_id);
			$color_id=$value->color_id;
			$color=Color::where('id',$color_id)->first();
			$col[$key]=$color;

		}
		$aaa['color']=array_unique($col);
		// $aaa['color']=$col;
		// dd(array_unique($col));

		foreach ($imgs as $key=> $value) {
			
			$size_id=$value->size_id;
			$size=Size::where('id',$size_id)->first()->size;
			$sz[$key]=$size;

		}
		$aaa['size']=array_unique($sz);
		// dd($aaa);
		
		return view('userview.single' ,['aaa'=>$aaa]);
	}


	public function destroydetail($id){
		$products=Product::find($id);
		$value=Value::where('product_id',$id)->delete();
		$img=Product_image::where('product_id',$id)->delete();
		return response()->json([
			'message'=>'Da xoa',
		]);
		
	}


	public function detail_img($id){
		$array=array();
		$aaa=[];
		$products=Product::find($id);
		// dd($products);
		$imgs=Product_image::where('product_id',$id)->paginate();
		foreach ($imgs as $img) {
			$img->link_image = asset(\Storage::url($img->link_image));			
		}
		$aaa['product']=$products;
		$aaa['img']=$imgs;

		// dd($aaa['img'][0]['link_image']);

		return response()->json([
			'aaa'=>$aaa,
		]);
	}

	public function getSize(Request $request){
		$sss=array();
		$bbb=[];
		$sizes=Color_size::where('product_id',$request->product_id)->where('color_id',$request->color_id)->paginate();
		// dd($request->color_id);
		foreach ($sizes as $key => $value) {
			$size_id=$value->size_id;
			$size_name=Size::where('id', $size_id)->first()->size;
			// dd($size_id);
			$bbb['size_id']=$size_id;
			$bbb['size_name']=$size_name;
			$sss[$key]=$bbb;
		}
		// dd($sss);
		return response()->json([
			'size'=>$sss,
			'color_id'=>$request->color_id
		]);
	}

	public function getQuantity(Request $request){
		$ccc=array();
		$ddd=[];
		$quantity=Value::where('size_id',$request->size_id)->where('color_id',$request->color_id)->first();

		// dd($quantity->value);
		
		return response()->json([
			'size_id'=>$request->size_id,
			'color_id'=>$request->color_id,
			'quantity'=>$quantity
		]);
	}

	public function getDetail(Request $request){
		$cart=array();
		$array_id=[];
		$products=Product::find($request->product_id);
		
		$cart['product']=$products;
		$imgs=Product_image::where('product_id',$request->product_id)->where('color_id',$request->color_id)->where('size_id',$request->size_id)->select('link_image')->get();
		$cart['img']=$imgs;
		
		$soluong=$request->quality;
		$cart['soluong']=$soluong;
		$sz_id=$request->size_id;
		$cl_id=$request->color_id;
		$pd_id=$request->product_id;
		
		// Cart::destroy();
		// dd($sz_id);
		$cart=Cart::add($products['code'], $products['name'], $soluong, $products['price'], ['imgs'=>$imgs ,'sz_id'=>$sz_id, 'cl_id'=>$cl_id, 'pd_id'=>$pd_id]);
		
		// dd($array_id);

		return view('userview.checkout');

	}

	public function listorder(){
		return view('admin.orderlist');
	}

	

}
