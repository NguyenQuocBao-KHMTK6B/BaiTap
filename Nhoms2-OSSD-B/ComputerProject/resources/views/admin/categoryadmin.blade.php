
<div id="sidebar" class="nav-collapse">
    <!-- sidebar menu start-->
    <div class="leftside-navigation">
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="active" href="index.html">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-book"></i>
                    <span>Product Management</span>
                </a>
                <ul class="sub">
                    <li><a href="{{route("listProduct")}}">list products</a></li>
                    <li><a href="{{route("admin.addProduct")}}">add products</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-tasks"></i>
                    <span>user management</span>
                </a>
                <ul class="sub">
                    <li><a href="{{route("listUser")}}">list user</a></li>
                    <li><a href="{{route("admin.addUser")}}">add user</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="{{route("/")}}">
                    <i class="fa fa-envelope"></i>
                    <span>Home </span>
                </a>
            </li>
           
        </ul>            
    </div>
    <!-- sidebar menu end-->
</div>