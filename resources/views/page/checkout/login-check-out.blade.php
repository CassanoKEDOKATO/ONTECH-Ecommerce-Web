@extends('homelayout')
@section('content')

<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Login</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->			
<div class="col-md-6 col-sm-6 sign-in">
	<h4 class="">ĐĂNG NHẬP</h4>
	<p class="">Hello, Welcome to your account.</p>
	<div class="social-sign-in outer-top-xs">
		<a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Sign In with Facebook</a>
		<a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Sign In with Twitter</a>
	</div>
	<form class="register-form outer-top-xs" role="form"  method="POST" action="{{URL::to('/login-customer')}}">
		{{ csrf_field() }}
		<div class="form-group">
		    <label class="info-title"  for="exampleInputEmail1">Địa chỉ E-mail <span>*</span></label>
		    <input type="email" name="email_acc" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
		</div>
	  	<div class="form-group">
		    <label class="info-title" for="exampleInputPassword1">Mật khẩu<span>*</span></label>
		    <input type="password" name="pass_acc" class="form-control unicase-form-control text-input" id="exampleInputPassword1" >
		</div>
		<div class="radio outer-xs">
		  	<label>
		    	<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Remember me!
		  	</label>
		  	<a href="#" class="forgot-password pull-right">Quên mật khẩu ?</a>
		</div>
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Đăng nhập</button>
	</form>					
</div>
<!-- Sign-in -->

<!-- create a new account -->
<div class="col-md-6 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle">TẠO TÀI KHOẢN MỚI</h4>
	<p class="text title-tag-line">Create your new account.</p>
	<form class="register-form outer-top-xs" role="form" method="POST" action="{{URL::to('/add-customer')}}">
        {{ csrf_field() }}
		<div class="form-group">
	    	<label class="info-title" for="exampleInputEmail2">Dịa chỉ E-mail <span>*</span></label>
	    	<input type="text" name="c_email" class="form-control unicase-form-control text-input" id="exampleInputEmail2" >
	  	</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Tên <span>*</span></label>
		    <input type="text" name="c_name" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
		</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">SDT<span>*</span></label>
		    <input type="text" name="c_sdt" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
		</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Mật khẩu <span>*</span></label>
		    <input type="text"name="c_password" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
		</div>
         <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Xác nhận mật khẩu <span>*</span></label>
		    <input type="text" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
		</div>
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Đăng ký</button>
</form>
	
	
</div>	
<!-- create a new account -->			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
    
@endsection