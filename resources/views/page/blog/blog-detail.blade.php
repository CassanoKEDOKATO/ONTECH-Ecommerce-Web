@extends('homelayout')
@section('content')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'>Blog Details</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="row">
			<div class="blog-page">
				<div class="col-xs-12 col-sm-9 col-md-9 col-lg-12 ">
                    @foreach ($detail_blog as $key => $value_detail)
                        
     
	<div class="blog-post wow fadeInUp">
	<img class="img-responsive" src="{{asset('public/upload/blogImage/'.$value_detail->blog_image)}}" alt="">
	<h1>{{$value_detail->blog_title}}</h1>
	<span class="author">Nguyen Anh Quan</span>
	<span class="review">7 Comments</span>
	<span class="date-time">18/06/2016 11.30AM</span>
    <p>{!!$value_detail->blog_content!!}</p>
	<div class="social-media">
		<span>share post:</span>
		<a href="#"><i class="fa fa-facebook"></i></a>
		<a href="#"><i class="fa fa-twitter"></i></a>
		<a href="#"><i class="fa fa-linkedin"></i></a>
		<a href="#"><i class="fa fa-rss"></i></a>
		<a href="#" class="hidden-xs"><i class="fa fa-pinterest"></i></a>
	</div>
</div>
@endforeach
<div class="blog-post-author-details wow fadeInUp">
	<div class="row">
		<div class="col-md-2">
			<img src="assets/images/testimonials/member3.png" alt="Responsive image" class="img-circle img-responsive">
		</div>
		<div class="col-md-10">
			<h4>John Doe</h4>
			<div class="btn-group author-social-network pull-right">
				<span>Follow me on</span>
			    <button type="button" class="dropdown-toggle" data-toggle="dropdown">
			    	<i class="twitter-icon fa fa-twitter"></i>
			    	<span class="caret"></span>
			    </button>
			    <ul class="dropdown-menu" role="menu">
			    	<li><a href="#"><i class="icon fa fa-facebook"></i>Facebook</a></li>
			    	<li><a href="#"><i class="icon fa fa-linkedin"></i>Linkedin</a></li>
			    	<li><a href="#"><i class="icon fa fa-pinterest"></i>Pinterst</a></li>
			    	<li><a href="#"><i class="icon fa fa-rss"></i>RSS</a></li>
			    </ul>
			</div>
			<span class="author-job">Web Designer</span>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
		</div>
	</div>
</div>
	
				
@endsection