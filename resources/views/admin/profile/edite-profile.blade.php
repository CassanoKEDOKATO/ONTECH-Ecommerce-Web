@extends('adminlayout')
@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Forms</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Forms</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Basic Form</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">CHỈNH SỬA THÔNG TIN CÁ NHÂN</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                {{-- @foreach ($edit_admin as $key => $value_admin) --}}
                               
                               <div class=" col-md-9 col-lg-9">
                                 
                                <form action="{{URL::to('save-profile/'.Auth::user()->admin_id)}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <label class="mb-3"><b>Form </b></label>
                                
                                <div class="form-group form-group-default">
                                    <label>Tên người dùng</label>
                                    <input id="Name" type="text" name="admin_name" value="{{Auth::user()->admin_name}}" class="form-control" >
                                </div>
                                
                                <div class="form-group form-group-default">
                                    <label>Email</label>
                                    <input id="Name" type="email" name="admin_email"  value="{{Auth::user()->admin_email}}" class="form-control" >
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Mật khẩu mới</label>
                                    <input id="Name" type="text" name="admin_newpass" class="form-control" >
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Số điện thoại</label>
                                    <input id="Name" type="text" name="admin_sdt"  value="{{Auth::user()->admin_phone}}" class="form-control" >
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Ảnh đại diện</label>
                                    <input id="Name" type="file"  name="admin_image" class="form-control" >
                                </div>
                                <img  alt="" width="200" height="200">
                               
                               </div>
                              
                            </div>  
                              
                        </div>
                        <div class="card-action">
                            <button type="submit" name=""class="btn btn-info">Lưu</button>
                            <button class="btn btn-danger">Cancel</button>
                        </div>
                        {{-- @endforeach --}}
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <nav class="pull-left">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.themekita.com">
                            ThemeKita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Help
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Licenses
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright ml-auto">
                2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
            </div>				
        </div>
    </footer>
@endsection