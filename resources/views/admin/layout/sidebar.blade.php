<style>
    .sidebar li .submenu {
        list-style: none;
        margin: 0;
        padding: 0;
        padding-left: 1rem;
        padding-right: 1rem;
    }
</style>
<nav class="sidebar sidebar-offcanvas fixed-nav" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                {{-- <div class="profile-image">
                          <img src="images/faces/face5.jpg" alt="image" />
                      </div> --}}
                <div class="profile-name">
                    <p class="name">
                        Welcome Admin
                    </p>
                    {{-- <p class="designation">
                              Super Admin
                          </p> --}}
                </div>
            </div>
        </li>
        {{-- @if (in_array('dashboard', $data_for_url)) --}}
        {{-- <li class="{{ request()->is('dashboard*') ? 'nav-item active' : 'nav-item' }}">
            <a class="{{ request()->is('dashboard*') ? 'nav-link active' : 'nav-link' }}"
                href="{{ route('/dashboard') }}">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li> --}}
        {{-- @endif           --}}

        <li class="nav-item active">
            <a class="nav-link active" data-toggle="collapse" href="#master" aria-expanded="false"
                aria-controls="master">
                <i class="fa fa-th-large menu-icon"></i>
                <span class="menu-title">Master</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="master">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item d-none d-lg-block"><a class="nav-link active"
                            href="{{ route('website-contact') }}">Role</a></li>


                    <li  href="{{ route('list-location-address') }}" class="nav-item d-none d-lg-block"><a class="nav-link active" href="">Location Address</a>
                    </li>

                </ul>
            </div>
        </li>

        <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#adminssion" aria-expanded="false" aria-controls="master">
                <i class="fa fa-th-large menu-icon"></i>
                <span class="menu-title">Admission</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="adminssion">
                <ul class="nav flex-column sub-menu">

                    <li class="nav-item d-none d-lg-block"><a class="nav-link active"
                            href="{{ route('website-contact') }}">Admission Form</a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link active" href="">Scolarship</a></li>

                    <li class="nav-item d-none d-lg-block"><a class="nav-link active" href="">Fees Payment</a>
                    </li>

                </ul>
            </div>
        </li>

    </ul>
</nav>
<!-- partial -->

<script></script>
