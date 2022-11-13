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
                            <div class="card-title">LIỆT KÊ ĐƠN HÀNG</div>
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
                              <div class="col-md-9 col-lg-12 col-sm-12">
                                <table class="table table-hover"  id="myTable">
                                    <thead>
                                        <tr>
                                            <th  scope="col">Thứ tự</th>
                                            <th  scope="col">Mã đơn hàng</th>
                                            <th  scope="col">Ngày tháng đặt hàng</th>
                                            <th  scope="col">Tình trạng đơn hàng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php 
                                        $i = 0;
                                        @endphp
                                        @foreach($order as $key => $ord)
                                          @php 
                                          $i++;
                                          @endphp
                                        <tr>
                                            <td><i>{{$i}}</i></label></td>
                                            <td>{{ $ord->order_code }}</td>
                                            <td>{{ $ord->created_at }}</td>
                                            <td>@if($ord->order_status==1)
                                                    Đơn hàng mới
                                                @else 
                                                    Đã xử lý
                                                @endif
                                            </td>
                                           
                                           
                                            <td>
                                             
                                                <a href="{{URL::to('/view-order/'.$ord->order_code)}}" class="btn btn-success  btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                
                                              <a  onclick="return confirm('Are you sure to delete?')"  href="{{URL::to('/delete-order/'.$ord->order_code)}}" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></a>
                                
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