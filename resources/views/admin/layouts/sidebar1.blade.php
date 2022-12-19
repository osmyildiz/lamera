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
                        <li><a href="/admin-hello" key="t-hello">Hello</a></li>
                        <li><a href="/admin-testimonial" key="t-testimonials">Testimonials</a></li>

                    </ul>

                </li>

                <li >
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-crypto">ORI ARTIST MENTORING</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/admin-oriartistmentoring" key="t-whoweare">Page Content</a></li>
                        <!--<li><a href="/admin-services" key="t-hello">Services</a></li>-->
                    </ul>

                </li>
                <li >
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-paperclip"></i>
                        <span key="t-crypto">BECOME AN ORI ARTIST</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/admin-joinuspage" key="t-whoweare">Page Content</a></li>
                        <!--<li><a href="/admin-joinusforms" key="t-hello">Applicants</a></li>-->
                    </ul>

                </li>
                <li >
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-archive"></i>
                        <span key="t-crypto">Book Ori Artist</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/admin-bookoriartistpage" key="t-whoweare">Page Content</a></li>
                        <!--<li><a href="/admin-bookartistforms" key="t-hello">Applicants</a></li>-->
                    </ul>

                </li>
                <li >
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-contact"></i>
                        <span key="t-crypto">Contact</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/admin-contact" key="t-whoweare">Page Content</a></li>
                        <li><a href="/admin-contactforms" key="t-hello">Applicants</a></li>
                    </ul>

                </li>

                <li >
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user"></i>
                        <span key="t-crypto">Artists</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/admin-artists" key="t-whoweare">All Artists</a></li>
                        <li><a href="/artist-add-page" key="t-hello">Add New Artist</a></li>
                    </ul>

                </li>

                <li >
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-archive"></i>
                        <span key="t-crypto">What we offer Client</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/whatweoffer-client" key="t-whoweare">Page Content</a></li>
                        <li><a href="/packages-client" key="t-hello">Packages</a></li>
                    </ul>

                </li>
                <li >
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-archive"></i>
                        <span key="t-crypto">What we offer Artist</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="/whatweoffer-artist" key="t-whoweare">Page Content</a></li>
                        <li><a href="/packages-artist" key="t-hello">Packages</a></li>
                    </ul>

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

