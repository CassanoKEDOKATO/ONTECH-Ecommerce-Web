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
	<h4 class="">THÔNG TIN TÀI KHOẢN</h4>
	<p class="">Hello, Welcome to your account.</p>
	
	<form class="register-form outer-top-xs" role="form"  method="POST" action="{{URL::to('/update-profile-customer')}}">
		{{ csrf_field() }}
		<div class="form-group">
		    <label class="info-title"  for="exampleInputEmail1">Tên khách hàng<span></span></label>
		    <input type="text" name="client_name" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
		</div>
        <div class="form-group">
		    <label class="info-title"  for="exampleInputEmail1">Địa chỉ E-mail <span>*</span></label>
		    <input type="email" name="client_email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
		</div>
        <div class="form-group">
		    <label class="info-title"  for="exampleInputEmail1">Số điện thoại<span></span></label>
		    <input type="text" name="client_phone" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
		</div>
	  	<div class="form-group">
		    <label class="info-title" for="exampleInputPassword1">Mật khẩu<span>*</span></label>
		    <input type="password" name="client_password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" >
		</div>
	</form>					
</div>

</div>	
</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
    
@endsection