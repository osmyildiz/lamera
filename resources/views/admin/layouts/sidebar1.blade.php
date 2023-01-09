<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>
                <li >
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-home"></i>
                        <span key="t-crypto">Homepage</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/admin-slider" key="t-slider">Slider</a></li>
                        <li><a href="/admin-testimonial" key="t-testimonials">Testimonials</a></li>

                    </ul>

                </li>

                <li >
                    <a href="/admin-about">
                        <i class="bx  bxs-user-detail"></i>
                        <span key="t-crypto">About Us</span>
                    </a>

                </li>

                <li >
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-contact"></i>
                        <span key="t-crypto">Contact</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/admin-contact" key="t-whoweare">Page Content</a></li>
                        <li><a href="/admin-contactforms" key="t-whoweare">Contact Forms</a></li>
                        <li><a href="/admin-subscribers" key="t-whoweare">Subscribers</a></li>
                    </ul>

                </li>

                <li >
                    <a href="/admin-bookings">
                        <i class="bx bxs-user"></i>
                        <span key="t-crypto">Bookings</span>
                    </a>

                </li>

                <li >
                    <a href="/admin-photos">
                        <i class="bx bx-photo-album"></i>
                        <span key="t-crypto">Gallery</span>
                    </a>

                </li>
                <li >
                    <a href="/admin-menu/0">
                        <i class="bx bx-food-menu"></i>
                        <span key="t-crypto">Menu</span>
                    </a>

                </li>
                <li >
                    <a href="/admin-seo">
                        <i class="bx bx-analyse"></i>
                        <span key="t-crypto">Seo</span>
                    </a>

                </li>

                <li>

                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('frm-logout').submit();" class="waves-effect"><i class="bx bx-log-out"></i>
                            <span key="t-dashboards">Logout</span></a>
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>




                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->

