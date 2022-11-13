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
                            <div class="card-title">THÊM BÀI VIẾT MỚI</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                               <div class=" col-md-9 col-lg-9">
                                <form action="{{URL::to('save-blog')}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <label class="mb-3"><b>Form Group Default</b></label>
                                <div class="form-group form-group-default">
                                    <label>Tiêu đề bài viết</label>
                                    <input id="Name" type="text" name="blog_title" class="form-control">
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Ảnh</label>
                                    <input id="Name" type="file" name="blog_image" class="form-control" placeholder="Fill Name">
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Nội dung bài viết</label>
                                    <textarea   name="blog_content" class="form-control" ></textarea>
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Trạng thái</label>
                                    <select class="form-control"  name="blog_status" id="formGroupDefaultSelect">
                                        <option value="1">Hiện</option>
                                        <option value="0">Ẩn</option> 
                                    </select>
                                </div>
                               </div>
                            </div>    
                        </div>
                        <div class="card-action">
                            <button type="submit" name="add_blog"class="btn btn-info">Thêm</button>
                            <button class="btn btn-danger">Cancel</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection