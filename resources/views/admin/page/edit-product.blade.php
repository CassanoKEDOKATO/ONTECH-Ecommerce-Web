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
                            <div class="card-title">CHỈNH SỬA SẢN PHẨM</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                               <div class=" col-md-9 col-lg-9">
                                @foreach ($edit_product as $key => $item)
                                <form role="form" method="post" action="{{URL::to('/update-product/'.$item->product_id)}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <label class="mb-3"><b>Form Group Default</b></label>
                                <div class="form-group form-group-default">
                                    <label>Tên sản phẩm</label>
                                    <input id="Name" type="text" name="product_name" class="form-control" value="{{$item->product_name}}">
                                </div>
                                <div class="form-group ">
                                    <label for="exampleInputPassword1">Giá</label>
                                    <input type="text" name="product_price" class="form-control"  value="{{$item->product_price}}">
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Ảnh : {{$item->product_image}}</label>
                                    <input id="Name" type="file" name="product_image" class="form-control" value="">
                                </div>
                                <img src="{{asset('public/upload/productImage/'.$item->product_image)}}" alt="" width="200" height="200">
                                <div class="form-group form-group-default">
                                    <label>Ảnh : {{$item->product_image2}}</label>
                                    <input id="Name" type="file" name="product_image2" class="form-control" value="">
                                </div>
                                <img src="{{asset('public/upload/productImage/'.$item->product_image2)}}" alt="" width="200" height="200">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung</label>
                                    <textarea name="product_content" class="form-control" >{{$item->product_content}}</textarea>
                                </div>
                                <div class="form-group ">
                                    <label for="exampleInputPassword1">Mô tả</label>
                                    <textarea type="text" name="product_desc" class="form-control"  >{{$item->product_desc}}</textarea>
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Danh mục</label>
                                    <select class="form-control" name="product_cate" id="formGroupDefaultSelect">
                                        @foreach ($cate_product as $item => $category)
                                        <option value="{{$category->category_id}}">{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Thương hiệu</label>
                                    <select class="form-control" name="product_brand" id="formGroupDefaultSelect">
                                        @foreach ($brand_product as $item => $brand)
                                        <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group form-group-default">
                                    <label>Trạng thái</label>
                                    <select class="form-control" name="product_status" id="formGroupDefaultSelect">
                                        <option value="1">Hiện</option>
                                        <option value="0">Ẩn</option> 
                                    </select>
                                </div>
                               </div>
                               @endforeach
                            </div>    
                        </div>
                        <div class="card-action">
                            <button type="submit" name="add_product" class="btn btn-success">Submit</button>
                            <button class="btn btn-danger">Cancel</button>
                        </div>
                        <form>
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