<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <title> Admin Dashboard</title>
      <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
      <link rel="icon" href="{{asset('backend/assets/img/icon.ico')}}" type="image/x-icon"/>
      <!-- Fonts and icons -->
      <script src="{{asset('backend/assets/js/plugin/webfont/webfont.min.j')}}s"></script>
      <script>
         WebFont.load({
         	google: {"families":["Lato:300,400,700,900"]},
         	custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{asset('backend/assets/css/fonts.min.css')}}']},
         	active: function() {
         		sessionStorage.fonts = true;
         	}
         });
      </script>
       {{-- <script src="https://cdn.ckeditor.com/4.20.0/full/ckeditor.js"></script> --}}
      <!-- CSS Files -->
      <link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('backend/assets/css/atlantis.min.css')}}">
      <!-- CSS Just for demo purpose, don't include it in your project -->
      <link rel="stylesheet" href="{{asset('backend/assets/css/demo.css')}}">
      <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
      <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
      <script src="{{asset('ckeditor/ckeditor.js')}}"></script>

      
   </head>
   <body>
      <div class="wrapper">
         <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">
               <a href="index.html" class="logo">
               <img src="{{asset('backend/assets/img/logo.svg')}}" alt="navbar brand" class="navbar-brand">
               </a>
               <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon">
               <i class="icon-menu"></i>
               </span>
               </button>
               <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
               <div class="nav-toggle">
                  <button class="btn btn-toggle toggle-sidebar">
                  <i class="icon-menu"></i>
                  </button>
               </div>
            </div>
            <!-- End Logo Header -->
            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
               <div class="container-fluid">
                  <div class="collapse" id="search-nav">
                     <form class="navbar-left navbar-form nav-search mr-md-3">
                        <div class="input-group">
                           <div class="input-group-prepend">
                              <button type="submit" class="btn btn-search pr-1">
                              <i class="fa fa-search search-icon"></i>
                              </button>
                           </div>
                           <input type="text" placeholder="Search ..." class="form-control">
                        </div>
                     </form>
                  </div>
                  <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                     <li class="nav-item toggle-nav-search hidden-caret">
                        <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                        <i class="fa fa-search"></i>
                        </a>
                     </li>
                     <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-envelope"></i>
                        </a>
                        <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
                           <li>
                              <div class="dropdown-title d-flex justify-content-between align-items-center">
                                 Messages 									
                                 <a href="#" class="small">Mark all as read</a>
                              </div>
                           </li>
                           <li>
                              <div class="message-notif-scroll scrollbar-outer">
                                 <div class="notif-center">
                                    <a href="#">
                                       <div class="notif-img"> 
                                          <img src="{{asset('backend/assets/img/jm_denis.jpg')}}" alt="Img Profile">
                                       </div>
                                       <div class="notif-content">
                                          <span class="subject">Jimmy Denis</span>
                                          <span class="block">
                                          How are you ?
                                          </span>
                                          <span class="time">5 minutes ago</span> 
                                       </div>
                                    </a>
                                    <a href="#">
                                       <div class="notif-img"> 
                                          <img src="../assets/img/chadengle.jpg" alt="Img Profile">
                                       </div>
                                       <div class="notif-content">
                                          <span class="subject">Chad</span>
                                          <span class="block">
                                          Ok, Thanks !
                                          </span>
                                          <span class="time">12 minutes ago</span> 
                                       </div>
                                    </a>
                                    <a href="#">
                                       <div class="notif-img"> 
                                          <img src="../assets/img/mlane.jpg" alt="Img Profile">
                                       </div>
                                       <div class="notif-content">
                                          <span class="subject">Jhon Doe</span>
                                          <span class="block">
                                          Ready for the meeting today...
                                          </span>
                                          <span class="time">12 minutes ago</span> 
                                       </div>
                                    </a>
                                    <a href="#">
                                       <div class="notif-img"> 
                                          <img src="../assets/img/talha.jpg" alt="Img Profile">
                                       </div>
                                       <div class="notif-content">
                                          <span class="subject">Talha</span>
                                          <span class="block">
                                          Hi, Apa Kabar ?
                                          </span>
                                          <span class="time">17 minutes ago</span> 
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell"></i>
                        <span class="notification">4</span>
                        </a>
                        <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                           <li>
                              <div class="dropdown-title">You have 4 new notification</div>
                           </li>
                           <li>
                              <div class="notif-scroll scrollbar-outer">
                                 <div class="notif-center">
                                    <a href="#">
                                       <div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
                                       <div class="notif-content">
                                          <span class="block">
                                          New user registered
                                          </span>
                                          <span class="time">5 minutes ago</span> 
                                       </div>
                                    </a>
                                    <a href="#">
                                       <div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
                                       <div class="notif-content">
                                          <span class="block">
                                          Rahmad commented on Admin
                                          </span>
                                          <span class="time">12 minutes ago</span> 
                                       </div>
                                    </a>
                                    <a href="#">
                                       <div class="notif-img"> 
                                          <img src="../assets/img/profile2.jpg" alt="Img Profile">
                                       </div>
                                       <div class="notif-content">
                                          <span class="block">
                                          Reza send messages to you
                                          </span>
                                          <span class="time">12 minutes ago</span> 
                                       </div>
                                    </a>
                                    <a href="#">
                                       <div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
                                       <div class="notif-content">
                                          <span class="block">
                                          Farrah liked Admin
                                          </span>
                                          <span class="time">17 minutes ago</span> 
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
                           </li>
                        </ul>
                     </li>
                     <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fas fa-layer-group"></i>
                        </a>
                        <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                           <div class="quick-actions-header">
                              <span class="title mb-1">Quick Actions</span>
                              <span class="subtitle op-8">Shortcuts</span>
                           </div>
                           <div class="quick-actions-scroll scrollbar-outer">
                              <div class="quick-actions-items">
                                 <div class="row m-0">
                                    <a class="col-6 col-md-4 p-0" href="#">
                                       <div class="quick-actions-item">
                                          <i class="flaticon-file-1"></i>
                                          <span class="text">Generated Report</span>
                                       </div>
                                    </a>
                                    <a class="col-6 col-md-4 p-0" href="#">
                                       <div class="quick-actions-item">
                                          <i class="flaticon-database"></i>
                                          <span class="text">Create New Database</span>
                                       </div>
                                    </a>
                                    <a class="col-6 col-md-4 p-0" href="#">
                                       <div class="quick-actions-item">
                                          <i class="flaticon-pen"></i>
                                          <span class="text">Create New Post</span>
                                       </div>
                                    </a>
                                    <a class="col-6 col-md-4 p-0" href="#">
                                       <div class="quick-actions-item">
                                          <i class="flaticon-interface-1"></i>
                                          <span class="text">Create New Task</span>
                                       </div>
                                    </a>
                                    <a class="col-6 col-md-4 p-0" href="#">
                                       <div class="quick-actions-item">
                                          <i class="flaticon-list"></i>
                                          <span class="text">Completed Tasks</span>
                                       </div>
                                    </a>
                                    <a class="col-6 col-md-4 p-0" href="#">
                                       <div class="quick-actions-item">
                                          <i class="flaticon-file"></i>
                                          <span class="text">Create New Invoice</span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="nav-item dropdown hidden-caret">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                           <div class="avatar-sm">
                              <img src="{{asset('public/upload/userImage/'. Auth::user()->admin_image)}}" alt="..." class="avatar-img rounded-circle">
                           </div>
                        </a>
                        <ul class="dropdown-menu dropdown-user animated fadeIn">
                           <div class="dropdown-user-scroll scrollbar-outer">
                              <li>
                                 <div class="user-box">
                                    <div class="avatar-lg"><img src="{{asset('public/upload/userImage/'. Auth::user()->admin_image)}}" alt="image profile" class="avatar-img rounded"></div>
                                    <div class="u-text">
                                       <h4><?php $admin_name = Auth::user()->admin_name; if($admin_name){ echo'<p>'.$admin_name.'</p>'; }?></h4>
                                       <p class="text-muted">{{ Auth::user()->admin_email}}</p>
                                       <a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="dropdown-divider"></div>
                                 <a class="dropdown-item" href="#">My Profile</a>
                                 <a class="dropdown-item" href="#">My Balance</a>
                                 <a class="dropdown-item" href="#">Inbox</a>
                                 <div class="dropdown-divider"></div>
                                 <a class="dropdown-item" href="#">Account Setting</a>
                                 <div class="dropdown-divider"></div>
                                 <a class="dropdown-item" href="{{URL::to('/logout-auth')}}">Logout</a>
                              </li>
                           </div>
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>
            <!-- End Navbar -->
         </div>
         <!-- Sidebar -->
         <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
               <div class="sidebar-content">
                  <div class="user">
                     <div class="avatar-sm float-left mr-2">
                        <img src="{{asset('public/upload/userImage/'. Auth::user()->admin_image)}}" alt="..." class="avatar-img rounded-circle">
                     </div>
                     <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                         <?php $admin_name = Auth::user()->admin_name;
                        //   $admin_id = Session::get('admin_id');
                        $admin_id = Auth::user()->admin_id;


                          if($admin_name){ echo'<p>'.$admin_name.'</p>'; }?>
                        <span class="user-level">Quản trị viên</span>
                        <span class="caret"></span>
                        </span>
                        </a>
                        <div class="clearfix"></div>
                        <div class="collapse in" id="collapseExample">
                           <ul class="nav">
                              <li>
                                 <a href="#profile">
                                 <span class="link-collapse">Hồ sơ của tôi</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="{{URL::to('edit-profile/'.$admin_id)}}">
                                 <span class="link-collapse">Chỉnh sửa hồ sơ</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="#settings">
                                 <span class="link-collapse">Cài đặt</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <ul class="nav nav-primary">
                     <li class="nav-item active">
                        <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                           <a href="{{URL::to('/')}}">  <i class="fas fa-home"></i>
                             <p>Đi tới Website</p></a>
                           <span class="caret"></span>
                        </a>
                     </li>
                     <li class="nav-section">
                        <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Components</h4>
                     </li>
                     <li class="nav-item">
                        <a data-toggle="collapse" href="#category">
                           <i class="fas fa-layer-group"></i>
                           <p>Danh mục sản phẩm</p>
                           <span class="caret"></span>
                        </a>
                        <div class="collapse" id="category">
                           <ul class="nav nav-collapse">
                              <li>
                                 <a href="{{URL::to('add-category')}}">
                                 <span class="sub-item">Thêm danh mục sản phẩm</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="{{URL::to('all-category')}}">
                                 <span class="sub-item">Hiển thị danh mục</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </li>
                     <li class="nav-item">
                        <a data-toggle="collapse" href="#brand">
                           <i class="fas fa-layer-group"></i>
                           <p> Thương hiệu sản phẩm</p>
                           <span class="caret"></span>
                        </a>
                        <div class="collapse" id="brand">
                           <ul class="nav nav-collapse">
                              <li>
                                 <a href="{{URL::to('add-brand')}}">
                                 <span class="sub-item">Thêm thương hiệu sản phẩm</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="{{URL::to('all-brand')}}">
                                 <span class="sub-item">Hiển thị thương hiệu</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </li>
                     <li class="nav-item">
                        <a data-toggle="collapse" href="#product">
                           <i class="fas fa-box"></i>
                           <p>Sản phẩm</p>
                           <span class="caret"></span>
                        </a>
                        <div class="collapse" id="product">
                           <ul class="nav nav-collapse">
                              <li>
                                 <a href="{{URL::to('add-product')}}">
                                 <span class="sub-item">Thêm sản phẩm</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="{{URL::to('all-product')}}">
                                 <span class="sub-item">Hiển thị sản phẩm </span>
                                 </a>
                              </li>
                              <li>
                                 <a href="{{URL::to('all-product-content')}}">
                                 <span class="sub-item">Hiển thị nội dung sản phẩm </span>
                                 </a>
                              </li>
                            
                           </ul>
                        </div>
                     </li>
                     
                     <li class="nav-item">
                        <a data-toggle="collapse" href="#navbar">
                           <i class="fas fa-box"></i>
                           <p>Navigation Bar</p>
                           <span class="caret"></span>
                        </a>
                        <div class="collapse" id="navbar">
                           <ul class="nav nav-collapse">
                              <li>
                                 <a href="{{URL::to('add-navbar')}}">
                                 <span class="sub-item">Thêm navbar</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="{{URL::to('all-navbar')}}">
                                 <span class="sub-item">Hiển thị navbar </span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </li>
                     <li class="nav-item">
                        <a data-toggle="collapse" href="#order">
                           <i class="fas fa-box"></i>
                           <p>Quản lý đơn đặt hàng</p>
                           <span class="caret"></span>
                        </a>
                        <div class="collapse" id="order">
                           <ul class="nav nav-collapse">
                           
                              <li>
                                 <a href="{{URL::to('manage-order')}}">
                                 <span class="sub-item">Hiển thị đơn hàng </span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </li>
                     <li class="nav-item">
                        <a data-toggle="collapse" href="#coupon">
                           <i class="fas fa-box"></i>
                           <p>Quản lý mã giảm giá</p>
                           <span class="caret"></span>
                        </a>
                        <div class="collapse" id="coupon">
                           <ul class="nav nav-collapse">
                              <li>
                                 <a href="{{URL::to('insert-coupon')}}">
                                 <span class="sub-item">Thêm mã giảm giá</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="{{URL::to('list-coupon')}}">
                                 <span class="sub-item">Quản lý mã giảm giá</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </li>
                     <li class="nav-item">
                        <a data-toggle="collapse" href="#delivery">
                           <i class="fas fa-box"></i>
                           <p>Quản lý vận chuyển</p>
                           <span class="caret"></span>
                        </a>
                        <div class="collapse" id="delivery">
                           <ul class="nav nav-collapse">
                              <li>
                                 <a href="{{URL::to('delivery')}}">
                                 <span class="sub-item">Quản lý vận chuyển</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </li>
                     <li class="nav-item">
                        <a data-toggle="collapse" href="#blog">
                           <i class="fas fa-box"></i>
                           <p>Quản lý bài viết </p>
                           <span class="caret"></span>
                        </a>
                        <div class="collapse" id="blog">
                           <ul class="nav nav-collapse">
                              <li>
                                 <a href="{{URL::to('add-new-blog')}}">
                                 <span class="sub-item">Thêm bài viết</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </li>
                     <li class="nav-item">
                        <a data-toggle="collapse" href="#slider">
                           <i class="fas fa-box"></i>
                           <p>Quản lý Slider</p>
                           <span class="caret"></span>
                        </a>
                        <div class="collapse" id="slider">
                           <ul class="nav nav-collapse">
                              <li>
                                 <a href="{{URL::to('add-slider')}}">
                                 <span class="sub-item">Thêm hình ảnh mới</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="{{URL::to('manage-slider')}}">
                                 <span class="sub-item">Hiển thị hình ảnh</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </li>
                     @hasRole(['admin'])
                     <li class="nav-item">
                        <a data-toggle="collapse" href="#user">
                           <i class="fas fa-box"></i>
                           <p>Quản lý User</p>
                           <span class="caret"></span>
                        </a>
                        <div class="collapse" id="user">
                           <ul class="nav nav-collapse">
                              <li>
                                 <a href="{{URL::to('/user')}}">
                                 <span class="sub-item">Liệt kê User</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="{{URL::to('add-user')}}">
                                 <span class="sub-item">Thêm User</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </li>
                     @endhasRole
                     {{-- <li class="nav-item">
                        <a data-toggle="collapse" href="#base">
                           <i class="fas fa-layer-group"></i>
                           <p>Base</p>
                           <span class="caret"></span>
                        </a>
                        <div class="collapse" id="base">
                           <ul class="nav nav-collapse">
                              <li>
                                 <a href="components/avatars.html">
                                 <span class="sub-item">Avatars</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="components/buttons.html">
                                 <span class="sub-item">Buttons</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="components/gridsystem.html">
                                 <span class="sub-item">Grid System</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="components/panels.html">
                                 <span class="sub-item">Panels</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="components/notifications.html">
                                 <span class="sub-item">Notifications</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="components/sweetalert.html">
                                 <span class="sub-item">Sweet Alert</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="components/font-awesome-icons.html">
                                 <span class="sub-item">Font Awesome Icons</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="components/simple-line-icons.html">
                                 <span class="sub-item">Simple Line Icons</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="components/flaticons.html">
                                 <span class="sub-item">Flaticons</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="components/typography.html">
                                 <span class="sub-item">Typography</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </li>
                     <li class="nav-item">
                        <a data-toggle="collapse" href="#sidebarLayouts">
                           <i class="fas fa-th-list"></i>
                           <p>Sidebar Layouts</p>
                           <span class="caret"></span>
                        </a>
                        <div class="collapse" id="sidebarLayouts">
                           <ul class="nav nav-collapse">
                              <li>
                                 <a href="sidebar-style-1.html">
                                 <span class="sub-item">Sidebar Style 1</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="overlay-sidebar.html">
                                 <span class="sub-item">Overlay Sidebar</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="compact-sidebar.html">
                                 <span class="sub-item">Compact Sidebar</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="static-sidebar.html">
                                 <span class="sub-item">Static Sidebar</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="icon-menu.html">
                                 <span class="sub-item">Icon Menu</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </li>
                     <li class="nav-item">
                        <a data-toggle="collapse" href="#forms">
                           <i class="fas fa-pen-square"></i>
                           <p>Forms</p>
                           <span class="caret"></span>
                        </a>
                        <div class="collapse" id="forms">
                           <ul class="nav nav-collapse">
                              <li>
                                 <a href="forms/forms.html">
                                 <span class="sub-item">Basic Form</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </li>
                     <li class="nav-item">
                        <a data-toggle="collapse" href="#tables">
                           <i class="fas fa-table"></i>
                           <p>Tables</p>
                           <span class="caret"></span>
                        </a>
                        <div class="collapse" id="tables">
                           <ul class="nav nav-collapse">
                              <li>
                                 <a href="tables/tables.html">
                                 <span class="sub-item">Basic Table</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="tables/datatables.html">
                                 <span class="sub-item">Datatables</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </li>
                     <li class="nav-item">
                        <a data-toggle="collapse" href="#maps">
                           <i class="fas fa-map-marker-alt"></i>
                           <p>Maps</p>
                           <span class="caret"></span>
                        </a>
                        <div class="collapse" id="maps">
                           <ul class="nav nav-collapse">
                              <li>
                                 <a href="maps/jqvmap.html">
                                 <span class="sub-item">JQVMap</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </li>
                     <li class="nav-item">
                        <a data-toggle="collapse" href="#charts">
                           <i class="far fa-chart-bar"></i>
                           <p>Charts</p>
                           <span class="caret"></span>
                        </a>
                        <div class="collapse" id="charts">
                           <ul class="nav nav-collapse">
                              <li>
                                 <a href="charts/charts.html">
                                 <span class="sub-item">Chart Js</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="charts/sparkline.html">
                                 <span class="sub-item">Sparkline</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </li>
                     <li class="nav-item">
                        <a href="widgets.html">
                           <i class="fas fa-desktop"></i>
                           <p>Widgets</p>
                           <span class="badge badge-success">4</span>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a data-toggle="collapse" href="#submenu">
                           <i class="fas fa-bars"></i>
                           <p>Menu Levels</p>
                           <span class="caret"></span>
                        </a>
                        <div class="collapse" id="submenu">
                           <ul class="nav nav-collapse">
                              <li>
                                 <a data-toggle="collapse" href="#subnav1">
                                 <span class="sub-item">Level 1</span>
                                 <span class="caret"></span>
                                 </a>
                                 <div class="collapse" id="subnav1">
                                    <ul class="nav nav-collapse subnav">
                                       <li>
                                          <a href="#">
                                          <span class="sub-item">Level 2</span>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#">
                                          <span class="sub-item">Level 2</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                              </li>
                              <li>
                                 <a data-toggle="collapse" href="#subnav2">
                                 <span class="sub-item">Level 1</span>
                                 <span class="caret"></span>
                                 </a>
                                 <div class="collapse" id="subnav2">
                                    <ul class="nav nav-collapse subnav">
                                       <li>
                                          <a href="#">
                                          <span class="sub-item">Level 2</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                              </li>
                              <li>
                                 <a href="#">
                                 <span class="sub-item">Level 1</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </li>
                     <li class="mx-4 mt-2">
                        <a href="http://themekita.com/atlantis-bootstrap-dashboard.html" class="btn btn-primary btn-block"><span class="btn-label mr-2"> <i class="fa fa-heart"></i> </span>Buy Pro</a> 
                     </li> --}}
                  </ul>
               </div>
            </div>
         </div>
         <!-- End Sidebar --> 
         <div class="main-panel">
            @yield('content')
           
         </div>
         <!-- Custom template | don't include it in your project! -->
         <div class="custom-template">
            <div class="title">Settings</div>
            <div class="custom-content">
               <div class="switcher">
                  <div class="switch-block">
                     <h4>Logo Header</h4>
                     <div class="btnSwitch">
                        <button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
                        <button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="green"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="white"></button>
                        <br/>
                        <button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
                     </div>
                  </div>
                  <div class="switch-block">
                     <h4>Navbar Header</h4>
                     <div class="btnSwitch">
                        <button type="button" class="changeTopBarColor" data-color="dark"></button>
                        <button type="button" class="changeTopBarColor" data-color="blue"></button>
                        <button type="button" class="changeTopBarColor" data-color="purple"></button>
                        <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
                        <button type="button" class="changeTopBarColor" data-color="green"></button>
                        <button type="button" class="changeTopBarColor" data-color="orange"></button>
                        <button type="button" class="changeTopBarColor" data-color="red"></button>
                        <button type="button" class="changeTopBarColor" data-color="white"></button>
                        <br/>
                        <button type="button" class="changeTopBarColor" data-color="dark2"></button>
                        <button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
                        <button type="button" class="changeTopBarColor" data-color="purple2"></button>
                        <button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
                        <button type="button" class="changeTopBarColor" data-color="green2"></button>
                        <button type="button" class="changeTopBarColor" data-color="orange2"></button>
                        <button type="button" class="changeTopBarColor" data-color="red2"></button>
                     </div>
                  </div>
                  <div class="switch-block">
                     <h4>Sidebar</h4>
                     <div class="btnSwitch">
                        <button type="button" class="selected changeSideBarColor" data-color="white"></button>
                        <button type="button" class="changeSideBarColor" data-color="dark"></button>
                        <button type="button" class="changeSideBarColor" data-color="dark2"></button>
                     </div>
                  </div>
                  <div class="switch-block">
                     <h4>Background</h4>
                     <div class="btnSwitch">
                        <button type="button" class="changeBackgroundColor" data-color="bg2"></button>
                        <button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
                        <button type="button" class="changeBackgroundColor" data-color="bg3"></button>
                        <button type="button" class="changeBackgroundColor" data-color="dark"></button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="custom-toggle">
               <i class="flaticon-settings"></i>
            </div>
         </div>
         <!-- End Custom template -->
      </div>
      <!--   Core JS Files   -->
      <script src="{{asset('backend/assets/js/core/jquery.3.2.1.min.js')}}"></script>
      <script src="{{asset('backend/assets/js/core/jquery.min.js')}}"></script>
      <script src="{{asset('backend/assets/js/core/popper.min.js')}}"></script>
      <script src="{{asset('backend/assets/js/core/bootstrap.min.js')}}"></script>
      <!-- jQuery UI -->
      <script src="{{asset('backend/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.j')}}s"></script>
      <script src="{{asset('backend/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>
      <!-- jQuery Scrollbar -->
      <script src="{{asset('backend/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
      <!-- Chart JS -->
      <script src="{{asset('backend/assets/js/plugin/chart.js/chart.min.js')}}"></script>
      <!-- jQuery Sparkline -->
      <script src="{{asset('backend/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>
      <!-- Chart Circle -->
      <script src="{{asset('backend/assets/js/plugin/chart-circle/circles.min.js')}}"></script>
      <!-- Datatables -->
      <script src="{{asset('backend/assets/js/plugin/datatables/datatables.min.j')}}s"></script>
      <!-- Bootstrap Notify -->
      <script src="{{asset('backend/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
      <!-- jQuery Vector Maps -->
      <script src="{{asset('backend/assets/js/plugin/jqvmap/jquery.vmap.min.js')}}"></script>
      <script src="{{asset('backend/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js')}}"></script>
      <!-- Sweet Alert -->
      <script src="{{asset('backend/assets/js/plugin/sweetalert/sweetalert.min.js')}}"></script>
      <!-- Atlantis JS -->
      <script src="{{asset('backend/assets/js/atlantis.min.js')}}"></script>
      <!-- Atlantis DEMO methods, don't include it in your project! -->
      <script src="{{asset('backend/assets/js/setting-demo.js')}}"></script>
      <script src="{{asset('backend/assets/js/demo.js')}}"></script>
      <script>
         Circles.create({
         	id:'circles-1',
         	radius:45,
         	value:60,
         	maxValue:100,
         	width:7,
         	text: 5,
         	colors:['#f1f1f1', '#FF9E27'],
         	duration:400,
         	wrpClass:'circles-wrp',
         	textClass:'circles-text',
         	styleWrapper:true,
         	styleText:true
         })
         
         Circles.create({
         	id:'circles-2',
         	radius:45,
         	value:70,
         	maxValue:100,
         	width:7,
         	text: 36,
         	colors:['#f1f1f1', '#2BB930'],
         	duration:400,
         	wrpClass:'circles-wrp',
         	textClass:'circles-text',
         	styleWrapper:true,
         	styleText:true
         })
         
         Circles.create({
         	id:'circles-3',
         	radius:45,
         	value:40,
         	maxValue:100,
         	width:7,
         	text: 12,
         	colors:['#f1f1f1', '#F25961'],
         	duration:400,
         	wrpClass:'circles-wrp',
         	textClass:'circles-text',
         	styleWrapper:true,
         	styleText:true
         })
         
         var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');
         
         var mytotalIncomeChart = new Chart(totalIncomeChart, {
         	type: 'bar',
         	data: {
         		labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
         		datasets : [{
         			label: "Total Income",
         			backgroundColor: '#ff9e27',
         			borderColor: 'rgb(23, 125, 255)',
         			data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
         		}],
         	},
         	options: {
         		responsive: true,
         		maintainAspectRatio: false,
         		legend: {
         			display: false,
         		},
         		scales: {
         			yAxes: [{
         				ticks: {
         					display: false //this will remove only the label
         				},
         				gridLines : {
         					drawBorder: false,
         					display : false
         				}
         			}],
         			xAxes : [ {
         				gridLines : {
         					drawBorder: false,
         					display : false
         				}
         			}]
         		},
         	}
         });
         
         $('#lineChart').sparkline([105,103,123,100,95,105,115], {
         	type: 'line',
         	height: '70',
         	width: '100%',
         	lineWidth: '2',
         	lineColor: '#ffa534',
         	fillColor: 'rgba(255, 165, 52, .14)'
         });
      </script>
     
      <script>
       CKEDITOR.replace( 'product_content', {
    on: {
        instanceReady: function( ev ) {
            // Output paragraphs as <p>Text</p>.
            this.dataProcessor.writer.setRules( 'p', {
                indent: false,
                breakBeforeOpen: true,
                breakAfterOpen: false,
                breakBeforeClose: false,
                breakAfterClose: true
            });
        }
    }
} );
CKEDITOR.replace( 'product_desc', {
    on: {
        instanceReady: function( ev ) {
            // Output paragraphs as <p>Text</p>.
            this.dataProcessor.writer.setRules( 'p', {
                indent: false,
                breakBeforeOpen: true,
                breakAfterOpen: false,
                breakBeforeClose: false,
                breakAfterClose: true
            });
        }
    }
} );

CKEDITOR.replace( 'blog_content', {
    on: {
        instanceReady: function( ev ) {
            // Output paragraphs as <p>Text</p>.
            this.dataProcessor.writer.setRules( 'p', {
                indent: false,
                breakBeforeOpen: true,
                breakAfterOpen: false,
                breakBeforeClose: false,
                breakAfterClose: true
            });
        }
    }
} );
        </script>
        <script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
     <script type="text/javascript">
      $(document).ready(function(){
  
          fetch_delivery();
  
          function fetch_delivery(){
              var _token = $('input[name="_token"]').val();
               $.ajax({
                  url : '{{url('/select-feeship')}}',
                  method: 'POST',
                  data:{_token:_token},
                  success:function(data){
                     $('#load_delivery').html(data);
                  }
              });
          }
          $(document).on('blur','.fee_feeship_edit',function(){
  
              var feeship_id = $(this).data('feeship_id');
              var fee_value = $(this).text();
               var _token = $('input[name="_token"]').val();
              // alert(feeship_id);
              // alert(fee_value);
              $.ajax({
                  url : '{{url('/update-delivery')}}',
                  method: 'POST',
                  data:{feeship_id:feeship_id, fee_value:fee_value, _token:_token},
                  success:function(data){
                     fetch_delivery();
                  }
              });
  
          });
          $('.add_delivery').click(function(){
  
             var city = $('.city').val();
             var province = $('.province').val();
             var wards = $('.wards').val();
             var fee_ship = $('.fee_ship').val();
              var _token = $('input[name="_token"]').val();
             // alert(city);
             // alert(province);
             // alert(wards);
             // alert(fee_ship);
              $.ajax({
                  url : '{{url('/insert-delivery')}}',
                  method: 'POST',
                  data:{city:city, province:province, _token:_token, wards:wards, fee_ship:fee_ship},
                  success:function(data){
                     fetch_delivery();
                  }
              });
  
  
          });
          $('.choose').on('change',function(){
              var action = $(this).attr('id');
              var ma_id = $(this).val();
              var _token = $('input[name="_token"]').val();
              var result = '';
              // alert(action);
              //  alert(matp);
              //   alert(_token);
  
              if(action=='city'){
                  result = 'province';
              }else{
                  result = 'wards';
              }
              $.ajax({
                  url : '{{url('/select-delivery')}}',
                  method: 'POST',
                  data:{action:action,ma_id:ma_id,_token:_token},
                  success:function(data){
                     $('#'+result).html(data);     
                  }
              });
          }); 
      })
  
  
  </script>
  
    <script>
      $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>

    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "108574702071011");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v15.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
   </body>
</html>
