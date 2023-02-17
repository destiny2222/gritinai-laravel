<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="/assets/img/logo.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="/assets/img/logo.png" alt="" height="20">
            </span>
        </a>

        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="/assets/img/logo.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="/assets/img/logo.png" alt="" height="20">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('admin.home') }}"  class="{{  (request()->route()->getName() == 'dashboard-khe')?'active':''  }}">
                        <i class="uil-home-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="" class="waves-effect">
                        <i class="uil-comments-alt"></i>
                        <span>My Profile</span>
                    </a>
                </li>

                <li class="menu-title">Apps</li>

                <li>
                    <a href="{{ route('admin.blog.index') }}" class=" waves-effect">
                        <i class="uil-comments-alt"></i>
                        <span>Blog</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.partners.index') }}" class=" waves-effect">
                        <i class="uil-comments-alt"></i>
                        <span>Partner</span>
                    </a>
                </li>
                

                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-file-alt"></i>
                        <span>Utility</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter.html">Starter Page</a></li>
                        <li><a href="pages-maintenance.html">Maintenance</a></li>
                        <li><a href="pages-comingsoon.html">Coming Soon</a></li>
                        <li><a href="pages-timeline.html">Timeline</a></li>
                        <li><a href="pages-faqs.html">FAQs</a></li>
                        <li><a href="pages-pricing.html">Pricing</a></li>
                        <li><a href="pages-404.html">Error 404</a></li>
                        <li><a href="pages-500.html">Error 500</a></li>
                    </ul>
                </li> --}}



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>