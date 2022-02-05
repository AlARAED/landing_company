<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <!-- END SIDEBAR TOGGLER BUTTON -->
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->

            <li class="nav-item start">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">لوحة تحكم</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>

            </li>


            <li class="nav-item start">
                <a href=" {{ url('admin/index') }}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">الرئيسية</span>

                </a>

            </li>

            <li class="nav-item   ">
                <a href="{{ url('admin/account/setting') }}" class="nav-link nav-toggle">
                    <i class="icon-settings"></i>
                    <span class="title">بيانات حسابى</span>
                    <span class="selected"></span>
                </a>

            </li>
            <li class="nav-item  ">
                <a href="{{ url('admin/about_us') }}" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">من نحن</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{ url('admin/Service') }}" class="nav-link nav-toggle">
                    <i class="icon-puzzle"></i>
                    <span class="title">خدماتنا</span>
                </a>

            </li>
            <li class="nav-item  ">
                <a href="{{ url('admin/Serviceitem') }}" class="nav-link nav-toggle">
                    <i class="icon-settings"></i>
                    <span class="title">بنود خدماتنا</span>
                </a>

            </li>
            <li class="nav-item  ">
                <a href="{{ url('admin/choiceus') }}" class="nav-link nav-toggle">
                    <i class="icon-bulb"></i>
                    <span class="title">ميزاتنا</span>

                </a>

            </li>
            <li class="nav-item  ">
                <a href="{{ url('admin/choiceitem') }}" class="nav-link nav-toggle">
                    <i class="icon-briefcase"></i>
                    <span class="title">بنود ميزاتنا</span>
                </a>

            </li>
            <li class="nav-item  ">
                <a href="{{ url('admin/workus') }}" class="nav-link nav-toggle">
                    <i class="icon-wallet"></i>
                    <span class="title">أعمالنا</span>  </a>

            </li>
            <li class="nav-item  ">
                <a href="{{ url('admin/workusitem') }}" class="nav-link nav-toggle">
                    <i class="icon-bar-chart"></i>
                    <span class="title">نماذج أعمال</span>
                </a>

            </li>
            <li class="nav-item  ">
                <a href="{{ url('admin/partner') }}" class="nav-link nav-toggle">
                    <i class="icon-pointer"></i>
                    <span class="title">شركاؤنا</span>
                </a>

            </li>

            <li class="nav-item  ">
                <a href="{{ url('admin/partnerimage') }}" class="nav-link nav-toggle">
                    <i class="icon-layers"></i>
                    <span class="title">شعارات الشركاء</span>

                </a>

            </li>
            <li class="nav-item  ">
                <a href="{{ url('admin/Review') }}" class="nav-link nav-toggle">
                    <i class="icon-feed"></i>
                    <span class="title">رأى العملاء</span>

                </a>

            </li>

            <li class="nav-item  ">
                <a href="{{ url('admin/category') }}" class="nav-link nav-toggle">
                    <i class=" icon-wrench"></i>
                    <span class="title">تصنيفات</span>

                </a>

            </li>


            <li class="nav-item  ">
                <a href="{{ url('admin/order') }}" class="nav-link nav-toggle">
                    <i class=" icon-wrench"></i>
                    <span class="title"><span class="badge badge-danger"><?php
                            $order = \App\Order::all();
                            echo count($order);?>
                        </span> الطلبات</span>

                </a>



            </li>

            <li class="nav-item  ">
                <a href="{{ url('admin/contact') }}" class="nav-link nav-toggle">
                    <i class=" icon-wrench"></i>
                    <span class="title"><span class="badge badge-danger">
                            <?php
                            $Contact = \App\Contact::all();
                            echo count($Contact);?>

                        </span> طلبات اتصل بنا</span>

                </a>



            </li>


            <li class="nav-item  ">
                <a href="{{ route('logout') }}" class="dropdown-toggle"    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <i class="icon-logout"></i>خروج

                </a>

            </li>


        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
