  <div id="left-sidebar" class="sidebar">
        <div class="navbar-brand">
            <a href="index.html"><img src="http://www.wrraptheme.com/templates/hexabit/html/assets/images/icon-dark.svg" alt="HexaBit Logo" class="img-fluid logo"><span>HexaBit</span></a>
            <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
        </div>
        <div class="sidebar-scroll">
            <div class="user-account">
                <div class="user_div">
                    <img src="http://www.wrraptheme.com/templates/hexabit/html/assets/images/user.png" class="user-photo" alt="User Profile Picture">
                </div>
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>{{ Auth::guard('admin')->user()->name}}</strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account">
                        <li><a href="#"><i class="icon-user"></i>My Profile</a></li>
                      <!--   <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                        <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li> -->
                        <li class="divider"></li>
                        <li><a href="{{ url('admin/logout')}}"><i class="icon-power"></i>Logout</a></li>
                    </ul>
                </div>
            </div>  
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">

                    <li class="{{ isset($page_title) && $page_title =='Dashboard' ? 'active':''}}">
                        <a href="{{ url('admin/dashboard')}}"><i class="icon-home"></i><span>Dashboard</span></a>
                    </li>

                    <li class="{{ isset($page_title) && $page_title =='Category' || $page_title =='Category create' || $page_title =='Category edit' ? 'active':''}}">
                        <a href="{{ url('admin/category')}}">
                        <i class="icon-envelope"></i>
                        <span>Category</span>
                       </a>
                    </li>

                    <li class="{{ isset($page_title) && $page_title =='Subcategory' || $page_title =='Subcategory create' || $page_title =='Subcategory edit' ? 'active':''}}">
                       <a href="{{ url('admin/subcategory')}}"><i class="icon-bubbles"></i><span>Subcategory</span></a></li>



                    <li class="{{ isset($page_title) && $page_title =='Subsubcategory' || $page_title =='Subsubcategory create' || $page_title =='Subsubcategory edit' ? 'active':''}}">
                       <a href="{{ url('admin/sub-subcategory')}}"><i class="icon-bubbles"></i><span>Sub-subcategory</span></a>
                   </li>


                    <li class="{{ isset($page_title) && $page_title =='Type' || $page_title =='Type create' || $page_title =='Type edit' ? 'active':''}}">
                       <a href="{{ url('admin/type')}}"><i class="icon-bubbles"></i><span>Type</span></a>
                   </li>

                    <li class="{{ isset($page_title) && $page_title =='Size' || $page_title =='Size create' || $page_title =='Type edit' ? 'active':''}}">
                       <a href="{{ url('admin/size')}}"><i class="icon-bubbles"></i><span>Size</span></a>
                   </li>


                    <li class="{{ isset($page_title) && $page_title =='Color' || $page_title =='Color create' || $page_title =='Color edit' ? 'active':''}}">
                       <a href="{{ url('admin/color')}}"><i class="icon-bubbles"></i><span>Color</span></a>
                   </li>



                    <!-- <li><a href="{{ url('admin/size')}}"><i class="icon-bubbles"></i><span>Size</span></a></li> -->
                  <!--   <li>
                        <a href="#Maps" class="has-arrow"><i class="icon-map"></i><span>Maps</span></a>
                        <ul>
                            <li><a href="map-google.html">Google Map</a></li>
                            <li><a href="map-jvectormap.html">jVector Map</a></li>
                            <li><a href="map-yandex.html">Yandex Map</a></li>                            
                        </ul>
                    </li> -->
                </ul>
            </nav>     
        </div>
    </div>
