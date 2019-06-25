<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Orika - Dashboard</title>
	<link href="{{asset('dashboard_assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="{{asset('dashboard_assets/css/styles.css')}}" rel="stylesheet">
	<!--Custom Font-->
	<link href="css/font.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Orika</span>Admin</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status">demo@demo.com</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li class="active"><a href="index.html"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
	 <li><a href="{{ route('site.home')}}" target="_blank"><em class="fa fa-calendar">&nbsp;</em> Website</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Banner <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">

					<li><a class="" href="{{ route('BannerView')}}"><span class="fa fa-arrow-right">&nbsp;</span> Banner Add</a></li>
          <li><a class="" href="{{ route('BannerAddForm')}}"><span class="fa fa-arrow-right">&nbsp;</span> Banner View</a></li>

				</ul>

			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-2">
				<em class="fa fa-navicon">&nbsp;</em> About <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li><a class="" href="{{ route('AboutAddForm')}}"><span class="fa fa-arrow-right">&nbsp;</span> About Add</a></li>
					<li><a class="" href="{{ route('AboutView')}}"><span class="fa fa-arrow-right">&nbsp;</span> About View</a></li>

				</ul>

			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-3">
				<em class="fa fa-navicon">&nbsp;</em> Experience <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li><a class="" href="{{ route('ExperiencesAddForm')}}"><span class="fa fa-arrow-right">&nbsp;</span> Experience Add</a></li>
					<li><a class="" href="{{ route('ExprienceView')}}"><span class="fa fa-arrow-right">&nbsp;</span> Experience View</a></li>

				</ul>

			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-4">
				<em class="fa fa-navicon">&nbsp;</em>Product  <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-4">
					<li><a class="" href="{{ route('ProductAddForm')}}"><span class="fa fa-arrow-right">&nbsp;</span>Product Add</a></li>
					<li><a class="" href="{{ route('ProductView')}}"><span class="fa fa-arrow-right">&nbsp;</span>Product view</a></li>

				</ul>

			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-5">
				<em class="fa fa-navicon">&nbsp;</em>Service  <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-5">
					<li><a class="" href="{{ route('ServiceAddForm')}}" ><span class="fa fa-arrow-right">&nbsp;</span>Service Add</a></li>
					<li><a class="" href="{{ route('ServiceView')}}" ><span class="fa fa-arrow-right">&nbsp;</span>Service View</a></li>

				</ul>

			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-6">
				<em class="fa fa-navicon">&nbsp;</em>Slider<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-6">
					<li><a class="" href="{{ route('SliderAddForm')}}"><span class="fa fa-arrow-right">&nbsp;</span>Slider Add</a></li>
					<li><a class="" href="{{ route('SliderView')}}"><span class="fa fa-arrow-right">&nbsp;</span>Slider View</a></li>

				</ul>

			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-7">
				<em class="fa fa-navicon">&nbsp;</em>Partner<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-7">
					<li><a class=""  href="{{ route('PartnerAddForm')}}"><span class="fa fa-arrow-right">&nbsp;</span>Partner Add</a></li>
					<li><a class=""  href="{{ route('PartnerView')}}"><span class="fa fa-arrow-right">&nbsp;</span>Partner View</a></li>

				</ul>

			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-8">
				<em class="fa fa-navicon">&nbsp;</em>Blog<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-8">
					<li><a class="" href="{{ route('BlogAddForm')}}"><span class="fa fa-arrow-right">&nbsp;</span>Blog Add</a></li>
					<li><a class="" href="{{ route('BlogView')}}"><span class="fa fa-arrow-right">&nbsp;</span>Blog View</a></li>

				</ul>

			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-9">
				<em class="fa fa-navicon">&nbsp;</em>Message<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-9">
					<li><a class=""  href="{{ route('viewmsg')}}" ><span class="fa fa-arrow-right">&nbsp;</span>View Message</a></li>

				</ul>

			</li>
			<li>

				<a class="dropdown-item" href="{{ route('logout') }}"
					 onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();">
						{{ __('Logout') }}
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
				</form>









			</li>
		</ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-md-12">
			 @yield('content')
			</div>
		</div>
	</div>	<!--/.main-->

	<script src="{{asset('dashboard_assets/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{asset('dashboard_assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('dashboard_assets/js/js/custom.js')}}"></script>

</body>
</html>
