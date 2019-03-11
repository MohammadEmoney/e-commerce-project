<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->

        <!--<div class="user-panel">
          <div class="pull-left image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Alexander Pierce</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>-->

        <!-- search form -->
        <!--<form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                  <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                  </button>
                </span>
          </div>
        </form>-->
        <!-- /.search form -->

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">

            <!--<li class="header">MAIN NAVIGATION</li>-->

            <li class="active treeview">
                <a href="{{ route('admin.index') }}">
                    <i class="fa fa-dashboard"></i> <span> خلاصه وضعیت</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <!--<ul class="treeview-menu">
                  <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                  <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                </ul>-->

                <!--</li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Layout Options</span>
                    <span class="label label-primary pull-right">4</span>
                  </a>-->

                <!--<ul class="treeview-menu">
                  <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                  <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                  <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                  <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                </ul>
              </li>-->

                <!--<li>
                  <a href="pages/widgets.html">
                    <i class="fa fa-th"></i> <span>Widgets</span>
                    <small class="label pull-right bg-green">new</small>
                  </a>
                </li>-->

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>مدیریت فروشگاه </span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    {{--@can('List_products')--}}
                    <li><a href="{{ route('products.index') }}"><i class="fa fa-circle-o"></i>مدیریت محصولات </a></li>
                    {{--@endcan--}}
                    <li><a href="{{ route('products.create') }}"><i class="fa fa-plus"></i> ایجاد محصول جدید</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>مدیریت کاربران</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('users.index') }}"><i class="fa fa-circle-o"></i>لیست کاربران</a></li>
                    <li><a href="{{ route('users.create') }}"><i class="fa fa-circle-o"></i>افزودن کاربر جدید</a></li>

                    <li><a href="{{ route('roles.index') }}"><i class="fa fa-circle-o"></i> لیست سطوح دسترسی</a></li>
                    <li><a href="{{ route('roles.create') }}"><i class="fa fa-circle-o"></i> افزودن سطح جدید</a></li>

                    <li><a href="{{ route('permissions.index') }}"><i class="fa fa-circle-o"></i>لیست دسترسی ها </a></li>
                    <li><a href="{{ route('permissions.create') }}"><i class="fa fa-circle-o"></i>افزودن دسترسی جدید </a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>دسته بندی ها</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('categories.index') }}"><i class="fa fa-circle-o"></i>مدیریت دسته بندی ها </a></li>
                    <li><a href="{{ route('categories.create') }}"><i class="fa fa-circle-o"></i>دسته بندی جدید </a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-filter"></i> <span>فیلتر ها</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('filters.create') }}"><i class="fa fa-circle-o"></i> ایجاد فیلتر جدید</a></li>
                    <li><a href="{{ route('filters.index') }}"><i class="fa fa-circle-o"></i> لیست فیلتر ها </a></li>
                </ul>
            </li>
            <li>

                <!--<a href="pages/calendar.html">
                  <i class="fa fa-calendar"></i> <span>Calendar</span>
                  <small class="label pull-right bg-red">3</small>
                </a>
              </li>
              <li>
                <a href="pages/mailbox/mailbox.html">
                  <i class="fa fa-envelope"></i> <span>Mailbox</span>
                  <small class="label pull-right bg-yellow">12</small>
                </a>
              </li>-->

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>حساب کاربری</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> مشخصات فردی</a></li>
                    <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> تغییر کلمه رمز</a></li>
                    <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> مدیریت کارمندان </a></li>
                    <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> ارتقا سطح کاربری</a></li>
                    <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> سایر تنظیمات </a></li>
                    <!--<li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                    <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                    <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                    <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>-->
                </ul>
            </li>

            <!--<li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Multilevel</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>
            </li>

            <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>

            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
          </ul>-->

    </section>
    <!-- /.sidebar -->
</aside>