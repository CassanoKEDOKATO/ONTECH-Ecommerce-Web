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
                            <div class="card-title">DANH SÁCH MÃ GIẢM GIÁ</div>
                          
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
                                <table class="table table-hover" id="myTable">
                                    <thead>
                                        <tr>
                                           
                                            <th>Tên mã giảm giá</th>
                                            <th>Mã giảm giá</th>
                                            <th>Số lượng giảm giá</th>
                                            <th>Điều kiện giảm giá</th>
                                            <th>Số giảm</th>
                                            <th scope="col">Xoá</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($coupon as $key => $cou)
                                            
                                     
                                        <tr>
                                            <td>{{ $cou->coupon_name }}</td>
                                            <td>{{ $cou->coupon_code }}</td>
                                            <td>{{ $cou->coupon_time }}</td>
                                            <td>
                                                <?php
                                                if($cou->coupon_condition==1){
                                                 ?>
                                                 Giảm theo %
                                                 <?php
                                                  }else{
                                                 ?>  
                                                 Giảm theo tiền
                                                 <?php
                                                }
                                               ?>
                                            </td>
                                            <td>
                                                <?php
                                            if($cou->coupon_condition==1){
                                                ?>
                                                Giảm {{$cou->coupon_number}} %
                                                <?php
                                                }else{
                                                ?>  
                                                Giảm {{$cou->coupon_number}} k
                                                <?php
                                            }
                                            ?>
                                            </td>
                                            <td>
                                              <a  onclick="return confirm('Are you sure to delete?')" href="{{URL::to('/delete-coupon/'.$cou->coupon_id)}}" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></a>
                                            </td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                               
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