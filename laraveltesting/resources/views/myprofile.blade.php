
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Metronic | New User Profile | Account</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="..assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="assets/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="assets/css/components.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="assets/css/profile.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="assets/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/default.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-boxed">
        @include('includes.header')
        <?php $sid = Session::get('id');?>
        @include('flash_message')
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                    <div class="container">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>New User Profile | Account
                                <small>user account page</small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                       
                    </div>
                </div>
                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE CONTENT BODY -->
                <div class="page-content">
                    <div class="container">
                        <!-- BEGIN PAGE BREADCRUMBS -->
                        <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <a href="#">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>User</span>
                            </li>
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="row">
                                <div class="col-md-12">
                                            
                                                                      
                                    <!-- BEGIN PROFILE SIDEBAR -->
                                    <div class="profile-sidebar">
                                        <!-- PORTLET MAIN -->
                                        <div class="portlet light profile-sidebar-portlet ">
                                            <!-- SIDEBAR USERPIC -->
                                            @foreach($users as $user)
                                            <div class="profile-userpic">
                                                <img src="assets/images/avatars/{{$user->profile_pic}}" class="img-responsive" alt=""> </div>
                                              
                                            <!-- END SIDEBAR USERPIC -->
                                            <!-- SIDEBAR USER TITLE -->
                                            <div class="profile-usertitle">
                                                <div class="profile-usertitle-name">{{$user->full_name}}</div>
                                               
                                            </div>
                                            <!-- END SIDEBAR USER TITLE -->
                                            <!-- SIDEBAR BUTTONS -->
                                            
                                            <!-- END SIDEBAR BUTTONS -->
                                            <!-- SIDEBAR MENU -->
                                            <div class="profile-usermenu">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="{{ url('aboutusview/'.$user->id) }}">
                                                            <i class="fa fa-user font-green"></i> About Us </a>
                                                    </li>
                                                    <li class="">
                                                       <a href="{{ url('galleryview/'.$user->id) }}">
                                                            <i class="fa fa-image font-green"></i> Gallery </a>
                                                    </li>
                                                  
                                                </ul>
                                            </div>
                                            <!-- END MENU -->
                                          @endforeach
                                        </div>
                                        <!-- END PORTLET MAIN -->
                                       
                                    </div>
                                    <!-- END BEGIN PROFILE SIDEBAR -->
                                    <!-- BEGIN PROFILE CONTENT -->
                                    <div class="profile-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="portlet light ">
                                                    <div class="portlet-title tabbable-line">
                                                        <div class="caption caption-md">
                                                            <i class="icon-globe theme-font hide"></i>
                                                            <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                                        </div>
                                                        <ul class="nav nav-tabs">
                                                            <li class="active">
                                                                <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                                            </li>
                                                            <li>
                                                                <a href="#tab_1_2" data-toggle="tab">Change Profile Pic</a>
                                                            </li>
                                                            <li>
                                                                <a href="#tab_1_3" data-toggle="tab">Change Password</a>
                                                            </li>
                                                             <li>
                                                                <a href="#tab_1_4" data-toggle="tab">Gallery</a>
                                                            </li>
                                                            <li>
                                                                <a href="#tab_1_5" data-toggle="tab">About Us</a>
                                                            </li>

                                                           
                                                        </ul>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="tab-content">
                                                            <!-- PERSONAL INFO TAB -->
                                                            <div class="tab-pane active" id="tab_1_1">
                                                                    @foreach($users as $user)
                                                        
                                                                    <form role="form" action="{{ url('/editprofile') }}" method = "post">
                                                                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token();?>">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Full Name</label>
                                                                        <input type="text" placeholder="" class="form-control" value = "{{ $user->full_name }}" name = "fullname"/> </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label">Email</label>
                                                                        <input type="text" placeholder="" class="form-control" value = "{{ $user->email }}" name = "email"/> </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label">Username</label>
                                                                        <input type="text" placeholder="" class="form-control"  value = "{{ $user->username }}" name = "username"/> </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label">Country</label>
                                                                        <input type="text" placeholder="" class="form-control" value = "{{ $user->country }}" name = "country" /> </div>
                                                                        <input type="hidden" name="id" value="{{ $user->id }}">
                                                                           
                                                                    <div class="margiv-top-10">
                                                                   
                                                                       <button type = "submit" class = "btn green"> <i class = "fa fa-edit"></i> Update Profile </button>
                                                                        <a href="javascript:;" class="btn default"> Cancel </a>
                                                                    </div>
                                                                </form>
                                                                @endforeach
                                                            </div>
                                                            <!-- END PERSONAL INFO TAB -->
                                                            <!-- CHANGE AVATAR TAB -->
                                                            <div class="tab-pane" id="tab_1_2">
                                                               
                                                                <form action="{{ url('fileupload') }}" role="form" method="post" enctype="multipart/form-data">
                                                                {!!csrf_field()!!}
                                                                    <div class="form-group">
                                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                            <div>
                                                                                <span class="btn default btn-file">
                                                                                    <span class="fileinput-new"> Select image </span>
                                                                                    <span class="fileinput-exists"> Change </span>
                                                                                    <input type="file" name="file"> </span>
                                                                                <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="margin-top-10">
                                                                        <button type="submit" class="btn green"> Submit </button>
                                                                        <a href="javascript:;" class="btn default"> Cancel </a>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <!-- END CHANGE AVATAR TAB -->
                                                            <!-- CHANGE PASSWORD TAB -->
                                                            <div class="tab-pane" id="tab_1_3">
                                                                <form action="{{ url('changepassword') }}" role="form" method="post" enctype="multipart/form-data">
                                                                {!!csrf_field()!!}
                                                                    <div class="form-group">
                                                                        <label class="control-label">Current Password</label>
                                                                        <input type="password" class="form-control" name = "password" /> </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label">New Password</label>
                                                                        <input type="password" class="form-control" name = "newpassword" /> </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label">Re-type New Password</label>
                                                                        <input type="password" class="form-control" name = "rpassword"/> </div>
                                                                         <input type="hidden" name="id" value="{{ $sid }}">
                                                                    <div class="margin-top-10">
                                                                        <button type="submit" class="btn green"> Change Password </button>
                                                                        <button type="reset" class="btn default"> Cancel </button>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                            <!-- END CHANGE PASSWORD TAB -->

                                                            <!--START GALLERY TAB-->
                                                             <div class="tab-pane" id="tab_1_4">
                                                                <form action = "{{ url('imageupload') }}" role = "form" 
                                                                method = "post" enctype = "multipart/form-data" />
                                                                {!!csrf_field()!!}
                                                                    <div class="form-group">
                                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                            <div>
                                                                                <span class="btn default btn-file">
                                                                                    <span class="fileinput-new"> Select image </span>
                                                                                    <span class="fileinput-exists"> Change </span>
                                                                                    <input type="file" name="file[]" multiple></span>
                                                                                <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="margin-top-10">
                                                                        <button type="submit" class="btn green"> Submit </button>
                                                                        <a href="javascript:;" class="btn default"> Cancel </a>
                                                                    </div>
                                                                </form>
                                                             </div>     
                                                            <!-- END GALLERY TAB -->

                                                            <!-- START ABOUT US -->

                                                               <div class="tab-pane" id="tab_1_5">
                                                                <form action = "{{ url('/store') }}" role = "form" 
                                                                method = "post" enctype = "multipart/form-data" />
                                                                {!!csrf_field()!!}
                                                                   <textarea class="form-control" id="summary-ckeditor" name = "textabout"></textarea>
                                                                   
                                                                    <div class="margin-top-10">
                                                                        <button type="submit" class="btn green"> Submit </button>
                                                                        <a href="javascript:;" class="btn default"> Cancel </a>
                                                                    </div>
                                                                </form>
                                                             </div>
                                                                  <script src="{{ url('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                                                     <script>
                                                                          CKEDITOR.replace( 'summary-ckeditor' );
                                                                     </script>     
                                                                                                                            
                                                                            <!-- END ABOUT US -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END PROFILE CONTENT -->
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE CONTENT INNER -->
                    </div>
                </div>
                <!-- END PAGE CONTENT BODY -->
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            
        </div>
        <!-- END CONTAINER -->
        @include('includes.footer');
        <!--[if lt IE 9]>
<script src="../assets/plugins/respond.min.js"></script>
<script src="../assets/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="assets/plugins/jquery.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="assets/js/app.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/js/profile.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="assets/js/layout.js" type="text/javascript"></script>
        <script src="assets/js/demo.js" type="text/javascript"></script>
        <script src="assets/js/quick-sidebar.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>