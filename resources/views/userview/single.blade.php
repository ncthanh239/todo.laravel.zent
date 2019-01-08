<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Downy Shoes an Ecommerce Category Bootstrap Responsive Website Template | Single :: w3layouts</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Downy Shoes Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="{{asset('css/shop.css')}}" type="text/css" media="screen" property="" />
	<link href="{{asset('css/style7.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" />
	<link href="{{asset('css/easy-responsive-tabs.css')}}" rel='stylesheet' type='text/css' />
	<!-- Owl-carousel-CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui1.css')}}">
	<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/checkout.css')}}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/angular-toastr/2.1.1/angular-toastr.min.css">
	<style type="text/css">
	.qty .count {
		color: #000;
		display: inline-block;
		vertical-align: top;
		font-size: 25px;
		font-weight: 700;
		line-height: 30px;
		padding: 0 2px
		;min-width: 35px;
		text-align: center;
	}
	.qty .plus {
		cursor: pointer;
		display: inline-block;
		vertical-align: top;
		color: white;
		width: 30px;
		height: 30px;
		font: 30px/1 Arial,sans-serif;
		text-align: center;
		border-radius: 50%;
	}
	.qty .minus {
		cursor: pointer;
		display: inline-block;
		vertical-align: top;
		color: white;
		width: 30px;
		height: 30px;
		font: 30px/1 Arial,sans-serif;
		text-align: center;
		border-radius: 50%;
		background-clip: padding-box;
	}
	
	.minus:hover{
		background-color: #717fe0 !important;
	}
	.plus:hover{
		background-color: #717fe0 !important;
	}
	
	nput::-webkit-outer-spin-button,
	

</style>
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
	<!-- banner -->
	<input type="hidden" name="" id="product_detail_id" product_detail_id="{{$aaa['product']->id}}">
	<input type="hidden" name="" id="cl_id" cl_detail_id="" value="">
	<input type="hidden" name="" id="sz_id" sz_detail_id="" value="">
	<div class="banner_top innerpage" id="home">
		<div class="wrapper_top_w3layouts">
			<div class="header_agileits">
				<div class="logo inner_page_log">
					<h1><a class="navbar-brand" href="{{asset('')}}"><span>NCThanh</span> <i>Shoes</i></a></h1>
				</div>
				<div class="overlay overlay-contentpush">
					<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>

					<nav>
						<ul>
							
							<li><a href="index.html" class="active">Home</a></li>
							<li><a href="{{asset('')}}login" class="active">Acount</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="404.html">Team</a></li>
							<li><a href="shop.html">Shop Now</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a class="dropdown-item active" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="ti-unlock"></i>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </a></li>
						</ul>
					</nav>
				</div>
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>
				<!-- cart details -->
				<div class="top_nav_right">
					<div class="shoecart shoecart2 cart cart box_1">
						

						<a href="{{asset('')}}checkout"><button class="top_shoe_cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button></a>
						
					</div>
				</div>
			</div>
		</div>
		<!-- //cart details -->
		<!-- search -->
		<div class="search_w3ls_agileinfo">
			<div class="cd-main-header">
				<ul class="cd-header-buttons">
					<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
				</ul>
			</div>
			<div id="cd-search" class="cd-search">
				<form action="#" method="post">
					<input name="Search" type="search" placeholder="Click enter after typing...">
				</form>
			</div>
		</div>
		<!-- //search -->
		<div class="clearfix"></div>
		<!-- /banner_inner -->
		<div class="services-breadcrumb_w3ls_agileinfo">
			<div class="inner_breadcrumb_agileits_w3">

				<ul class="short">
					<li><a href="{{asset('')}}">Home</a><i>|</i></li>
					@if (Auth::user()==null)
					<li><a href="{{asset('')}}login">Login</a><li>
					@endif
					@if (Auth::user()!==null)
					<li>Single &nbsp; | &nbsp; <a href="{{asset('')}}detail">{{Auth::user()->name}}</a> </li>
					@endif
				</ul>
			</div>
		</div>
		<!-- //banner_inner -->
	</div>

	<!-- //banner -->
	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="col-md-4 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">

						<ul class="slides">
							@foreach($aaa['img'] as $img)
							<li data-thumb="{{asset(\Storage::url($img->link_image))}}">
								<div class="thumb-image"> <img src="{{asset(\Storage::url($img->link_image))}}" data-imagezoom="true" class="img-responsive"> </div>
							</li>
							@endforeach
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-8 single-right-left simpleCart_shelfItem">
				<h3>{{$aaa['product']['name']}}</h3>
				<p><span class="item_price">{{number_format($aaa['product']['price'])}} VND</span>
					{{-- <del>$1,199</del> --}}
				</p>
				<div class="rating1">
					<ul class="stars">
						<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="description">

					<h5>Color: </h5>
					
					@if(count($aaa['color'])>0)
					@foreach($aaa['color'] as $value)

					<div class="getColor" style="background-color: {{$value->code_color}};width: 30px; height: 30px;border-radius: 50%; display: inline-block; margin-right: 5px;border: 1px solid gray;" data-id="{{$aaa['product']['id']}}" color-id="{{$value->id}}"></div>

					@endforeach
					@endif

				{{-- </select> --}}

				<h5 style="margin-top: 20px;">Size: </h5>


						{{-- @if(count($aaa['size'])>0)
						@foreach($aaa['size'] as $value) --}}
						@if(count($aaa['value'])>0)
						@foreach($aaa['value'] as $a)
						<div class="getSize" style="width: 30px; height: 30px;border: 1px solid gray;text-align: center;display: inline-block;line-height: 30px;background-color: gray; color: white; margin-right: 5px;" color-id="{{$a->color_id}}" size-id="{{$a->size_id}}"></div>

						@endforeach
						@endif
						{{-- @endforeach
							@endif --}}

							<h5 style="margin-top: 20px;">
							Remaining: </h5>
							@if(count($aaa['value'])>0)
							@foreach($aaa['value'] as $a)

							<div class="getQuantity" style="width: 30px; height: 30px;border: 1px solid gray;text-align: center;display: inline-block;line-height: 30px;background-color: gray; color: white; margin-right: 5px;" ></div>

							@endforeach
							@endif
							<div class="color-quality-right" style="margin-top: 20px;">
								<h5>Quality :</h5>
								
							</div>
							<div class="color-quality">



								<div class="quantity" style="margin-top: 20px;">
									<div class="quantity-select">
										{{-- <div class="entry value-minus">&nbsp;</div> --}}
										{{-- <input type="number" name="" value="" style="width: 30px; height: 30px;" id="quality"> --}}
										{{-- <div class="entry value">1</div> --}}
										{{-- <div class="entry value-plus active">&nbsp;</div> --}}
										<div class="qty mt-5" style="display: inline-block;line-height: 35px;">
											<span class="minus bg-dark" style="background-color: gray;"
											>-</span>
											<input type="number" class="count" name="qty" value="1" style="width: 35px;height: 35px; border-radius: 50%;border: none;" id="quality">
											<span class="plus bg-dark" style="background-color: gray;">+</span>
										</div>
									</div>
								</div>

							</div>
						</div>

{{-- 				<div class="occasion-cart">
					<div class="shoe single-item single_page_b" style="margin-top: 50px;">
						<form action="#" method="post">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="shoe_item" value="Chikku Loafers">
							<input type="hidden" name="amount" value="405.00">
							<input type="submit" name="submit" value="Add to cart" class="button add">

							<a href="#" data-toggle="modal" data-target="#myModal1"></a>
						</form>

					</div>

				</div> --}}
				<div class="occasion-cart">
					<div class="shoe single-item single_page_b" style="margin-top: 50px;">
						<input type="submit" name="submit" value="Add to cart" class="button add btn-cart">
						{{-- <a href="http://todo.laravel.zent:8080/checkout" style="background-color: black; color: white;" class="button add btn-cart">Add to Cart</a> --}}
					</div>

				</div>

				<ul class="social-nav model-3d-0 footer-social social single_page">
					<li class="share">Share On : </li>
					<li>
						<a href="#" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="twitter">
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="pinterest">
							<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
						</a>
					</li>
				</ul>

			</div>
			<div class="clearfix"> </div>
			<!--/tabs-->
			<div class="responsive_tabs">
				<div id="horizontalTab">
					<ul class="resp-tabs-list">
						<li>Description</li>
						<li>Reviews</li>
						<li>Information</li>
					</ul>
					<div class="resp-tabs-container">
						<!--/tab_one-->
						<div class="tab1">

							<div class="single_page">
								<h6>{{$aaa['product']['title']}}</h6>
								<p>{!!$aaa['product']['description']!!}</p>
							</div>
						</div>
						<!--//tab_one-->
						<div class="tab2">

							<div class="single_page">
								<div class="bootstrap-tab-text-grids">
									<div class="bootstrap-tab-text-grid">
										<div class="bootstrap-tab-text-grid-left">
											<img src="{{asset('images/t1.jpg')}}" alt=" " class="img-responsive">
										</div>
										<div class="bootstrap-tab-text-grid-right">
											<ul>
												<li><a href="#">Admin</a></li>
												<li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
											</ul>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget.Ut enim ad minima veniam,
												quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
											autem vel eum iure reprehenderit.</p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="add-review">
										<h4>add a review</h4>
										<form action="#" method="post">
											<input type="text" name="Name" required="Name">
											<input type="email" name="Email" required="Email">
											<textarea name="Message" required=""></textarea>
											<input type="submit" value="SEND">
										</form>
									</div>
								</div>

							</div>
						</div>
						<div class="tab3">

							<div class="single_page">
								<h6>Shoe Rock Vision(SRV) Sneakers (Blue)</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
									blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
									ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
								magna aliqua.</p>
								<p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
									blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
									ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
								magna aliqua.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--//tabs-->
			<!-- /new_arrivals -->
			<div class="new_arrivals">
				<h3>Featured Products</h3>
				<!-- /womens -->
				<div class="col-md-3 product-men women_two">
					<div class="product-shoe-info shoe">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src="{{asset('images/s4.jpg')}}" alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="single.html" class="link-product-add-cart">Quick View</a>
									</div>
								</div>
								<span class="product-new-top">New</span>
							</div>
							<div class="item-info-product">
								<h4>
									<a href="single.html">Shuberry Heels </a>
								</h4>
								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<div class="grid-price ">
												<span class="money ">$575.00</span>
											</div>
										</div>
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="shoe single-item hvr-outline-out">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="shoe_item" value="Shuberry Heels">
											<input type="hidden" name="amount" value="575.00">
											<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>

									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 product-men women_two">
					<div class="product-shoe-info shoe">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src="{{asset('images/s5.jpg')}}" alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="single.html" class="link-product-add-cart">Quick View</a>
									</div>
								</div>
								<span class="product-new-top">New</span>
							</div>
							<div class="item-info-product">
								<h4>
									<a href="single.html">Red Bellies </a>
								</h4>
								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<div class="grid-price ">
												<span class="money ">$325.00</span>
											</div>
										</div>
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="shoe single-item hvr-outline-out">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="shoe_item" value="Red Bellies">
											<input type="hidden" name="amount" value="325.00">
											<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>

									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 product-men women_two">
					<div class="product-shoe-info shoe">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src="{{asset('images/s7.jpg')}}" alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="single.html" class="link-product-add-cart">Quick View</a>
									</div>
								</div>
								<span class="product-new-top">New</span>
							</div>
							<div class="item-info-product">
								<h4>
									<a href="single.html">Running Shoes</a>
								</h4>
								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<div class="grid-price ">
												<span class="money ">$875.00</span>
											</div>
										</div>
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="shoe single-item hvr-outline-out">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="shoe_item" value="Running Shoes">
											<input type="hidden" name="amount" value="875.00">
											<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>

									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 product-men women_two">
					<div class="product-shoe-info shoe">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src="{{asset('images/s8.jpg')}}" alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="single.html" class="link-product-add-cart">Quick View</a>
									</div>
								</div>
								<span class="product-new-top">New</span>
							</div>
							<div class="item-info-product">
								<h4>
									<a href="single.html">Sukun Casuals</a>
								</h4>
								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<div class="grid-price ">
												<span class="money ">$505.00</span>
											</div>
										</div>
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="shoe single-item hvr-outline-out">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="shoe_item" value="Sukun Casuals">
											<input type="hidden" name="amount" value="505.00">
											<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>

									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>

				<!-- //womens -->
				<div class="clearfix"></div>
			</div>
			<!--//new_arrivals-->


		</div>
	</div>
	<!-- //top products -->
	<div class="mid_slider_w3lsagile">
		<div class="col-md-3 mid_slider_text">
			<h5>Some More Shoes</h5>
		</div>
		<div class="col-md-9 mid_slider_info">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class=""></li>
					<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="2" class=""></li>
					<li data-target="#myCarousel" data-slide-to="3" class=""></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('images/g1.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('images/g2.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('images/g3.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('images/g4.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
						</div>
					</div>
					<div class="item active">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('images/g5.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('images/g6.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('images/g2.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('images/g1.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('images/g1.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('images/g2.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('images/g3.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('images/g4.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('images/g1.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('images/g2.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('images/g3.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-3 slidering">
								<div class="thumbnail"><img src="{{asset('images/g4.jpg')}}" alt="Image" style="max-width:100%;"></div>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="fa fa-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="fa fa-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
				<!-- The Modal -->

			</div>
		</div>

		<div class="clearfix"> </div>
	</div>
	<!-- /newsletter-->
	<div class="newsletter_w3layouts_agile">
		<div class="col-sm-6 newsleft">
			<h3>Sign up for Newsletter !</h3>
		</div>
		<div class="col-sm-6 newsright">
			<form action="#" method="post">
				<input type="email" placeholder="Enter your email..." name="email" required="">
				<input type="submit" value="Submit">
			</form>
		</div>

		<div class="clearfix"></div>
	</div>
	<!-- //newsletter-->
	<!-- footer -->
	<div class="footer_agileinfo_w3">
		<div class="footer_inner_info_w3ls_agileits">
			<div class="col-md-3 footer-left">
				<h2><a href="index.html"><span>NCT</span>hanh Shoes </a></h2>
				<p>Lorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.</p>
				<ul class="social-nav model-3d-0 footer-social social two">
					<li>
						<a href="#" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="twitter">
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="pinterest">
							<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9 footer-right">
				<div class="sign-grds">
					<div class="col-md-4 sign-gd">
						<h4>Our <span>Information</span> </h4>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="404.html">Services</a></li>
							<li><a href="404.html">Short Codes</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>

					<div class="col-md-5 sign-gd-two">
						<h4>Store <span>Information</span></h4>
						<div class="address">
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Phone Number</h6>
									<p>+1 234 567 8901</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Email Address</h6>
									<p>Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Location</h6>
									<p>Broome St, NY 10002,California, USA.

									</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<div class="col-md-3 sign-gd flickr-post">
						<h4>Flickr <span>Posts</span></h4>
						<ul>
							<li><a href="single.html"><img src="{{asset('images/t1.jpg')}}" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="{{asset('images/t2.jpg')}}" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="{{asset('images/t3.jpg')}}" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="{{asset('images/t4.jpg')}}" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="{{asset('images/t1.jpg')}}" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="{{asset('images/t2.jpg')}}" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="{{asset('images/t3.jpg')}}" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="{{asset('images/t2.jpg')}}" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="{{asset('images/t4.jpg')}}" alt=" " class="img-responsive" /></a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>

			<p class="copy-right-w3ls-agileits">&copy 2018 Downy Shoes. All rights reserved | Design by <a href="http://w3layouts.com/">w3layouts</a></p>
		</div>
	</div>
</div>
<!-- //footer -->
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->
<script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<!-- cart-js -->
<script src="{{asset('js/minicart.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
	shoe.render();

	shoe.cart.on('shoe_checkout', function (evt) {
		var items, len, i;

		if (this.subtotal() > 0) {
			items = this.items();

			for (i = 0, len = items.length; i < len; i++) {}
		}
});
</script>
<!-- //cart-js -->
<!-- /nav -->
<script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
<script src="{{asset('js/classie.js')}}"></script>
<script src="{{asset('js/demo1.js')}}"></script>
<!-- //nav -->
<!-- single -->
<script src="{{asset('js/imagezoom.js')}}"></script>
<!-- single -->
<!-- script for responsive tabs -->
<script src="{{asset('js/easy-responsive-tabs.js')}}"></script>
<script>
	$('.value-plus').on('click', function () {
		var divUpd = $(this).parent().find('.value'),
		newVal = parseInt(divUpd.text(), 10) + 1;
		divUpd.text(newVal);
	});

	$('.value-minus').on('click', function () {
		var divUpd = $(this).parent().find('.value'),
		newVal = parseInt(divUpd.text(), 10) - 1;
		if (newVal >= 1) divUpd.text(newVal);
	});
</script>
<script>
	$(document).ready(function () {
		$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
		$('#verticalTab').easyResponsiveTabs({
			type: 'vertical',
			width: 'auto',
			fit: true
		});
	});
</script>
<!-- FlexSlider -->
<script src="{{asset('js/jquery.flexslider.js')}}"></script>
<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<!-- //FlexSlider-->

	<!--search-bar-->
	<script src="{{asset('js/search.js')}}"></script>
	<!--//search-bar-->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
{{-- 	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function ($) {
		$(".scroll").click(function (event) {
			event.preventDefault();
			$('html,body').animate({
				scrollTop: $(this.hash).offset().top
			}, 1000);
		});
	});
</script>

<!-- //end-smoth-scrolling -->
<script type="text/javascript" src="{{asset('js/bootstrap-3.1.1.min.js')}}"></script>

<script type="text/javascript">
	$(function() {

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$(document).on('click', '.getColor', function(e){
			e.preventDefault();
			$('.getSize').text('');
			$('.getQuantity').text('');

			var url='http://todo.laravel.zent:8080/getSize';
			var formData = new FormData();
			formData.append('color_id', $(this).attr('color-id'));
			formData.append('product_id', $(this).attr('data-id'));

			$.ajax({
				type:'post',
				url:url,
				dataType:'json',
				data:formData,
				async:false,
				processData: false,
				contentType: false,
				success: function(response){
					console.log(response);
					for (i=0;i<response.size.length;i++){
						var html='<div class="getSize" size-id="'+response.size[i].size_id+'" color-id="'+response.color_id+'">'+response.size[i].size_name+'</div>';
						$('.getSize').append(html);
					}
				}
			});


		});

		$(document).on('click', '.getSize', function(e){
			e.preventDefault();
			$('.getQuantity').text('');
				// $('.getSize').text('');

				var url='http://todo.laravel.zent:8080/getQuantity';
				var formData = new FormData();
				formData.append('color_id', $(this).attr('color-id'));
				formData.append('size_id', $(this).attr('size-id'));

				$.ajax({
					type:'post',
					url:url,
					dataType:'json',
					data:formData,
					async:false,
					processData: false,
					contentType: false,
					success: function(response){
						console.log(response);
						// alert(response.color_id);
						
						var html='<div class="getQuantity" size-id="'+response.size_id+'" color-id="'+response.color_id+'">'+response.quantity.value+'</div>';
						$('.getQuantity').append(html);
						$('#cl_id').val(response.color_id);
						$('#sz_id').val(response.size_id);
						
					}
				});


			});

		$(document).on('click', '.btn-cart', function(e){
			e.preventDefault();

			var sl = $('#quality').val();
			// alert(sl);
			// die;
			var pd_id = $('#product_detail_id').attr('product_detail_id');
			var cl_id = $('#cl_id').val();
			var sz_id = $('#sz_id').val();
			var _this=$(this);
			swal({
				title: "Thêm giỏ hàng thành công!",
				icon: "success",
				button: "OK!",
			});
			var formData = new FormData();
			formData.append('quality',sl);
			formData.append('product_id',pd_id);
			formData.append('color_id',cl_id);
			formData.append('size_id',sz_id);

			$.ajax({
				type: 'post',
				url: 'http://todo.laravel.zent:8080/getDetail',
				dataType:'json',
				data : formData,
				async:false,
				processData: false,
				contentType: false,
				success:function(response){
					console.log(response);

				}
			});
		});

	});

	$(document).ready(function(){
		$('.count').prop('disabled', true);
		$(document).on('click','.plus',function(){
			$('.count').val(parseInt($('.count').val()) + 1 );
		});
		$(document).on('click','.minus',function(){
			$('.count').val(parseInt($('.count').val()) - 1 );
			if ($('.count').val() == 0) {
				$('.count').val(1);
			}
		});
	});
	
</script>


</body>

</html>