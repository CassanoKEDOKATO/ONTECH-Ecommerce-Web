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
                            <div class="card-title">DANH SÁCH NỘI DUNG SẢN PHẨM</div>
                        </div>
                        <div class="alert alert-success" role="alert">
                            <?php 
                            $message = Session::get('message');
                         if ($message){
                              echo '<p style="color:rgb(75, 226, 75)"> '. $message.'</p>';
                              $message = Session::put('message',null);
                                   }    
                           ?>  
                            </div>
                        <div class="card-body">
                            <div class="row"> 
                              <div class="col-md-12 col-lg-12 col-sm-12">
                                <table class="table table-hover"  id="myTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Tên </th>
                                            <th scope="col">Ảnh</th>
                                            {{-- <th scope="col">Giá</th> --}}
                                            <th scope="col">Nội dung</th>
                                            <th scope="col">Mô tả</th>
                                            {{-- <th scope="col">Danh mục</th>
                                            <th scope="col">Thương hiệu</th>
                                            <th scope="col">Trạng thái</th> --}}
                                            <th scope="col">Sửa/Xoá</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($all_product as $key => $item_show)
                                            <td>{{$item_show->product_id}}</td>
                                            <td>{{$item_show->product_name}}</td>
                                            <td><img src="public/upload/productImage/{{$item_show->product_image}}" alt="" height="100" width="100"></td> 
                                            {{-- <td>{{number_format($item_show->product_price)}}</td> --}}
                                            <td>{{$item_show->product_content}}</td>
                                            <td>{{$item_show->product_desc}}</td>
                                            {{-- <td>{{$item_show->category_name}}</td>
                                            <td>{{$item_show->brand_name}}</td>
                                            <td>
                                                <?php 
                                                if ($item_show->product_status == 0)
                                                {
                                                ?>
                                                    <a href="{{URL::to('/unactive-product/'.$item_show->product_id)}}" ><span class="fas fa-eye-slash" style=" color:rgb(230, 57, 57);"></span>
                                                    <?php
                                                }  else{
                                                ?>
                                                <a href="{{URL::to('/active-product/'.$item_show->product_id)}}"><span class="fas fa-eye" style=" color:rgb(83, 224, 83);"></span>
                                                    <?php
                                                }
                                                ?>
                                            </td> --}}
                                            <td>
                                                <a href="{{URL::to('edit-product/'.$item_show->product_id)}}" class="btn btn-warning  btn-sm"><i class="fas fa-pen"></i></a>
                                                <a  onclick="return confirm('Are you sure to delete?')" href="{{URL::to('delete-product/'.$item_show->product_id)}}"class="btn btn-danger btn-sm"><i class="fas fa-times"></i></a>
                                            </td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                                <a href="{{URL::to('/add-product')}}" class="btn btn-success">Thêm sản phẩm mới</a>
                              </div>
                            </div>    
                        </div> 
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