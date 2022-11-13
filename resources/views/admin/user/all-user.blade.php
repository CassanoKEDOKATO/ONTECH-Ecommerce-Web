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
                            <div class="card-title">DANH SÁCH USER</div>
                          
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
                                            {{-- <th scope="col">id</th> --}}
                                            <th scope="col"> </th>
                                            <th scope="col">Tên User</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            {{-- <th scope="col">Password</th> --}}
                                            <th scope="col">Admin</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Staff</th>
                                            <th scope="col">Assign roles</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($admin as $key => $user)
                                        <form action="{{url('/assign-role')}}" method="POST">
                                            @csrf
                                            <tr>
                                             
                                              <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                                              <td>{{ $user->admin_name }}</td>
                                              <td>{{ $user->admin_email }} <input type="hidden" name="admin_email" value="{{ $user->admin_email }}"></td>
                                              <td>{{ $user->admin_phone }}</td>
                                              {{-- <td>{{ $user->admin_password }}</td> --}}
                                              <td><input type="checkbox" name="admin_role"  {{$user->hasRole('admin') ? 'checked' : ''}}></td>
                                              <td><input type="checkbox" name="author_role" {{$user->hasRole('author') ? 'checked' : ''}}></td>
                                              <td><input type="checkbox" name="staff_role"  {{$user->hasRole('staff') ? 'checked' : ''}}></td>
                              
                                            <td>
                                                
                                                  
                                               <input type="submit" value="Assign roles" class="btn btn-sm btn-default">
                                              
                                            </td> 
                              
                                            </tr>
                                          </form>
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
    
@endsection