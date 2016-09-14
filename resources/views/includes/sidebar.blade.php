<?php
/**
 * Created by PhpStorm.
 * User: Amedora
 * Date: 10/12/15
 * Time: 10:24 AM
 */
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="{{url()}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-building"></i> <span>Companies</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url()}}/company/index"><i class="fa fa-circle-o"></i>Listing</a></li>
                    <!--<li><a href="{{url()}}/company/branches"><i class="fa fa-circle-o"></i>Branches</a></li>-->
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cog"></i> <span>Setting</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url()}}/settings/paper"><i class="fa fa-paperclip"></i>Print Papers</a></li>
                    <li><a href="{{url()}}/settings/jobs"><i class="fa fa-print"></i>Jobs</a></li>
                    <li class="<?php echo (isset($companies) && !empty($companies)) ?  "treeview" :"" ;?>"><a href="#"<i class="fa fa-money"></i>Job Prices</a>
                    @if(isset($companies))
                        <ul class="treeview-menu">
                    @foreach($companies as $company)
                    <li><a href="{{url()}}/settings/price/{{$company->id}}"><i class="fa fa-money"></i>{{$company->name}}</a></li>
                    @endif
                        </ul>
                    @endif
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cog"></i> <span>Administrator</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url()}}/administrators/index"><i class="fa fa-group"></i>Users</a></li>
                    <li><a href="{{url()}}/privileges/index"><i class="fa fa-lock"></i>Roles and Privileges</a></li>
                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
