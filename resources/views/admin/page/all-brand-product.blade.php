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
                            <div class="card-title">DANH SÁCH THƯƠNG HIỆU SẢN PHẨM</div>
                          
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
                              <div class="col-md-12 col-lg-12">
                                <table class="table table-hover"  id="myTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Tên thương hiệu</th>
                                            <th scope="col">Hình ảnh</th>
                                            <th scope="col">Trạng thái</th>
                                            <th scope="col">Ngày thêm</th>
                                            <th scope="col">Chỉnh sửa/Xoá</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($show_all_products as $key => $value_show)
                                            
                                     
                                        <tr>
                                            <td>{{$value_show->brand_id}}</td>
                                            <td>{{$value_show->brand_name}}</td>
                                            <td><img src="{{asset('public/upload/brandImage/'.$value_show->brand_image)}}" alt="" width="100" height="100"></td>
                                            <td>
                                                <?php 
                                                if ($value_show->brand_status == 0)
                                                {
                                                ?>
                                                    <a href="{{URL::to('/unactive-brand-product/'.$value_show->brand_id)}}" ><span class="fas fa-eye-slash" style=" color:rgb(230, 57, 57);"></span>
                                                    <?php
                                                }  else{
                                                ?>
                                                <a href="{{URL::to('/active-brand-product/'.$value_show->brand_id)}}"><span class="fas fa-eye" style=" color:rgb(83, 224, 83);"></span>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <td>{{$value_show->created_at}}</td>
                                            <td>
                                              <a href="{{URL::to('edit-brand/'.$value_show->brand_id)}}" class="btn btn-warning  btn-sm"><i class="fas fa-pen"></i></a>
                                              <a  onclick="return confirm('Are you sure to delete?')" href="{{URL::to('delete-brand/'.$value_show->brand_id)}}" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></a>
                                            </td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                                <a href="{{URL::to('/add-brand')}}" class="btn btn-success">Thêm thương hiệu</a>
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