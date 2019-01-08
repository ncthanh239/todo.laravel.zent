<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Downy Shoes an Ecommerce Category Bootstrap Responsive Website Template | Contact :: w3layouts</title>
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
	<link rel="stylesheet" type="text/css" href="{{asset('css/checkout.css')}}">
	<!-- Owl-carousel-CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/contact.css')}}">
	<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
	<!-- banner -->

	<div class="banner_top innerpage" id="home">
		<div class="wrapper_top_w3layouts">
			<div class="header_agileits">
				<div class="logo inner_page_log">
					<h1><a class="navbar-brand" href="{{asset('')}}"><span>Ncthanh</span> <i>Shoes</i></a></h1>
				</div>
				<div class="overlay overlay-contentpush">
					<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>

					<nav>
						<ul>
							<li><a href="{{asset('')}}" class="active">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="404.html">Team</a></li>
							<li><a href="shop.html">Shop Now</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
				</div>
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>
				<!-- cart details -->
				<div class="top_nav_right">
					<div class="shoecart shoecart2 cart cart box_1">
						<form action="#" method="post" class="last">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1">
							<button class="top_shoe_cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
						</form>
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
					<li><a href="index.html">Home</a><i>|</i></li>
					<li>Profile &nbsp;| &nbsp;</li>
					@if (Auth::user()==null)
					<li><a href="{{asset('')}}login">Login</a><li>
						@endif
						@if (Auth::user()!==null)
						{{-- {{dd(Auth::user())}} --}}
						<li> &nbsp; <a href="" id="id-user" id-user="{{Auth::user()->id}}">{{Auth::user()->name}}</a> </li>
						<input type="hidden" name="" id="user_detail_id" user_detail_id="{{Auth::user()->id}}">
						<input type="hidden" name="" id="user_detail_name" user_detail_name="{{Auth::user()->name}}">
						<input type="hidden" name="" id="user_detail_email" user_detail_email="{{Auth::user()->email}}">
						<input type="hidden" name="" id="user_detail_address" user_detail_address="{{Auth::user()->address}}">
						<input type="hidden" name="" id="user_detail_phone" user_detail_phone="{{Auth::user()->phone}}">
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
				<h3 class="head">Profile</h3>
				<p class="head_para">Add Some Description</p>
{{-- 				<table class="timetable_sub">
					<thead>
						<tr>
							<th>SL No.</th>
							<th>Product</th>
							<th>Quality</th>
							<th>Product Name</th>
							<th>Price</th>
							<th>Subtotal</th>
							
						</tr>
					</thead>
					<tbody>
							
						@foreach($orderss as $value)

							
							@foreach($value['product'] as $a)

						<tr class="rem1">
							<td class="invert" id="code_pd" code_pd="">{{$a['code']}}</td>
							@endforeach
							<td class="invert-image" style="padding-left: 20px;">

								<img src="{{asset('')}}storage/{{$value['imgs']}}" class="img-responsive" style="width: 100px;height: 100px;">

						

							</td>

						</td>
						<td class="invert">
							<div class="quantity">
								<div class="quantity-select">
									<div class="qty mt-5" style="display: inline-block;line-height: 35px;">
											{{$value['quality']}}
									</div>

								</div>
							</div>
						</td>
						@foreach($value['product'] as $a)
						<td class="invert"><p><strong>{{$a['name']}}</strong></p>


							<td class="invert">{{number_format($a['price'])}}</td>
						
							<td class="invert"></td>
						@endforeach	
						</tr>



						@endforeach
					</tbody>
				</table> --}}
				<div class="inner_section_w3ls">
					<div class="col-md-7 contact_grid_right">
						<h6>Personal information</h6>
						<form action="#" method="post">
							<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
							<div class="col-md-6 col-sm-6 contact_left_grid">
								<input type="text" name="Name" placeholder="Name" required="" id="name_detail">
								<input type="email" name="Email" placeholder="Email" required="" id="email_detail">
							</div>
							<div class="col-md-6 col-sm-6 contact_left_grid">
								<input type="text" name="phone" placeholder="Phone" required="" id="phone_detail">
								<input type="text" name="address" placeholder="Address" required="" id="address_detail">
							</div>

							
							<div class="clearfix"> </div>
							

							<input type="submit" value="Update" style="margin-top: 30px;" class="btn-detail-update">
							<button class="btn btn-sm btn-primary btn-md" style="height: 50px; margin-left: 30px;" data-target="#pd_dt" data-toggle="modal" user-id-dt="{{Auth::user()->id}}">View</button>
							
							
						</form>
					</div>
					<div class="col-md-5 contact-left">
						<h6>Your Info</h6>
						<div class="visit">
							<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
								<span class="fa fa-user" aria-hidden="true"></span>
							</div>
							<div class="col-md-10 col-sm-10 col-xs-10 contact-text">
								<h4>Name</h4>
								@if (Auth::user()!==null)
								<p>{{Auth::user()->name}}</p>

								@endif
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="mail-us">
							<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
								<span class="fa fa-envelope" aria-hidden="true"></span>
							</div>
							<div class="col-md-10 col-sm-10 col-xs-10 contact-text">
								<h4>Email</h4>
								@if (Auth::user()!==null)
								<p><a href="mailto:{{Auth::user()->email}}">{{Auth::user()->email}}</a></p>
								@endif
								
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="call">
							<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
								<span class="fa fa-phone" aria-hidden="true"></span>

							</div>
							<div class="col-md-10 col-sm-10 col-xs-10 contact-text">
								<h4>Phone</h4>
								@if (Auth::user()!==null)
								<p>{{Auth::user()->phone}}</p>
								@endif
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="visit">
							<div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
								<span class="fa fa-fax" aria-hidden="true"></span>
							</div>
							<div class="col-md-10 col-sm-10 col-xs-10 contact-text">
								<h4>Address</h4>
								@if (Auth::user()!==null)
								<p>{{Auth::user()->address}}</p>
								@endif
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="clearfix"> </div>

				</div>

				<div class="clearfix"></div>

			</div>
		</div>
		{{-- <div class="contact-map">

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783"
			class="map" style="border:0" allowfullscreen=""></iframe>
		</div> --}}

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
					<h2><a href="index.html"><span>D</span>owny Shoes </a></h2>
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
								<li><a href="single.html"><img src="images/t1.jpg" alt=" " class="img-responsive" /></a></li>
								<li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
								<li><a href="single.html"><img src="images/t3.jpg" alt=" " class="img-responsive" /></a></li>
								<li><a href="single.html"><img src="images/t4.jpg" alt=" " class="img-responsive" /></a></li>
								<li><a href="single.html"><img src="images/t1.jpg" alt=" " class="img-responsive" /></a></li>
								<li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
								<li><a href="single.html"><img src="images/t3.jpg" alt=" " class="img-responsive" /></a></li>
								<li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
								<li><a href="single.html"><img src="images/t4.jpg" alt=" " class="img-responsive" /></a></li>
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

	<div class="modal fade" id="pd_dt">
		<div class="modal-dialog" style="width: 80%;">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Modal title</h4>
				</div>
				<div class="modal-body">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Product</th>
								<th>Quality</th>
								<th>Product Name</th>
								<th>Price</th>
								<th>Subtotal</th>

							</tr>
						</thead>
						<tbody class="order-table">

						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					
				</div>
			</div>
		</div>
	</div>
	<!-- //footer -->

	<!-- js -->
	<script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
	<!-- //js -->
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
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
<!-- script for responsive tabs -->
<script src="{{asset('js/easy-responsive-tabs.js')}}"></script>
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
<!--search-bar-->
<script src="{{asset('js/search.js')}}"></script>
<!--//search-bar-->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
	$(function(){
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});


		$(document).on('click', '.btn-detail-update', function(e){
			
			var id = $('#user_detail_id').attr('user_detail_id');
			

			e.preventDefault();
			$.ajax({
				type:'post',
				url:"{{asset('')}}users/update/detail/"+id,
				data: {
					id:$('#user_detail_id').attr('user_detail_id'),
					name:$('#name_detail').val(),
					email:$('#email_detail').val(),
					address:$('#address_detail').val(),
					phone:$('#phone_detail').val(),

					success:function(response){
						swal({
							title: "Update thông tin thành công!",
							icon: "success",
							button: "OK!",
						});
						setTimeout(function(){
							window.location.href ="http://todo.laravel.zent:8080/detail"
						}, 800);

					}
				}

			});
			
		});


		$(document).on('click', '.btn-md', function(e){
			e.preventDefault();
			$('.order-table').text('');
			var id = $(this).attr('user-id-dt');
			var url = "http://todo.laravel.zent:8080/getIdUser/"+$(this).attr('user-id-dt');
			$.ajax({
				type:'get',
				url:url,
				data:{
					id:$(this).attr('user-id-dt'),

					success:function(response){
						console.log(response);
						for (var i = 0; i < response.length; i++) {
							var html='<tr><td>'+response[i].code+'</td><td>'+response[i].name+'</td><td style="width:20%"><img src="{{ asset('') }}storage/'+response[i].image+'" alt="" style="max-width:80%"></td><td style="width:15%">'+response[i].quality+'</td><td>$'+response[i].price+'</td></tr>';
							$('.order-table').append(html);
						}
					}
				}
				
			});	
		});



		// $(document).on('click', '#id_user', function(e){
		// 	e.preventDefault();
		// 	var id = $('#id-user').attr('id-user');
		// 	$.ajax({
		// 		type:'post',
		// 		url:"http://todo.laravel.zent:8080/getIdUser",
		// 		data:{
		// 			id_user:$('#id-user').attr('id-user'),

		// 			success:function(response){
		// 				console.log(response);
		// 			}
		// 		},
		// 	});
		// });

	});
</script>


</body>

</html>