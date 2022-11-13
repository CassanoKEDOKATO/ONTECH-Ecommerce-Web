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
                            <div class="card-title">THÔNG TIN VẬN CHUYỂN</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                               <div class=" col-md-9 col-lg-9">
                               <form>
                                    @csrf 
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Chọn thành phố</label>
                                      <select name="city" id="city" class="form-control input-sm m-bot15 choose city">
                                    
                                            <option value="">--Chọn tỉnh thành phố--</option>
                                        @foreach($city as $key => $ci)
                                            <option value="{{$ci->matp}}">{{$ci->name_city}}</option>
                                        @endforeach
                                            
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Chọn quận huyện</label>
                                      <select name="province" id="province" class="form-control input-sm m-bot15 province choose">
                                            <option value="">--Chọn quận huyện--</option>
                                           
                                    </select>
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Chọn xã phường</label>
                                      <select name="wards" id="wards" class="form-control input-sm m-bot15 wards">
                                            <option value="">--Chọn xã phường--</option>   
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Phí vận chuyển</label>
                                    <input type="text" name="fee_ship" class="form-control fee_ship" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                               
                                <button type="button" name="add_delivery" class="btn btn-info add_delivery">Thêm phí vận chuyển</button>
                                </form>
                    </div>
                </div>
            </div>
            <div id="load_delivery">
                   
            </div>
        </div>
    </div>
    
@endsection