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
                            <div class="card-title">THÊM USER</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                               <div class=" col-md-9 col-lg-9">
                                <form action="{{URL::to('save-user')}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <label class="mb-3"><b>Form Group Default</b></label>
                                <div class="form-group form-group-default">
                                    <label>Tên User</label>
                                    <input id="Name" type="text" name="user_name" class="form-control" placeholder="Tên thương hiệu">
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Email</label>
                                    <input id="Name" type="text" name="user_email" class="form-control" placeholder="Tên thương hiệu">
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Số Điện Thoại</label>
                                    <input id="Name" type="text" name="user_phone" class="form-control" placeholder="Tên thương hiệu">
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Mật khẩu</label>
                                    <input id="Name" type="text" name="user_pass" class="form-control" placeholder="Tên thương hiệu">
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Ảnh</label>
                                    <input id="Name" type="file" name="user_image" class="form-control" placeholder="Fill Name">
                                </div>
                              
                               </div>
                            </div>    
                        </div>
                        <div class="card-action">
                            <button type="submit" name="add_user"class="btn btn-info">Thêm</button>
                            <button class="btn btn-danger">Cancel</button>
                        </div>
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