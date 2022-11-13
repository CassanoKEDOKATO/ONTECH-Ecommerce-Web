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
                            <div class="card-title">THÊM DANH MỤC SẢN PHẨM</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                               <div class=" col-md-9 col-lg-9">
                                <form action="{{URL::to('save-category')}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <label class="mb-3"><b>Form Group Default</b></label>
                                <div class="form-group form-group-default">
                                    <label>Tên danh mục</label>
                                    <input id="Name" type="text" name="category_product_name" class="form-control" placeholder="Tên danh mục">
                                </div>
                                @error('category_product_name')
                                <span style="color:red;">{{$message}}</span>
                                @enderror
                            
                                <div class="form-group form-group-default">
                                    <label>Ảnh</label>
                                    <input id="Name" type="file"  name="category_product_image" class="form-control" placeholder="Fill Name">
                                </div>
                                @error('category_product_image')
                                <span style="color:red;">{{$message}}</span>
                                @enderror
                                <div class="form-group form-group-default">
                                    <label>Trạng thái</label>
                                    <select class="form-control" id="formGroupDefaultSelect"  name="category_product_status">
                                        <option value="1">Hiện</option>
                                        <option value="0">Ẩn</option> 
                                    </select>
                                </div>
                               </div>
                     
                            </div>    
                        </div>
                        <div class="card-action">
                           
                            </script>
                            <button type="submit" name="add_category_product"class="btn btn-info" >Thêm</button>
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