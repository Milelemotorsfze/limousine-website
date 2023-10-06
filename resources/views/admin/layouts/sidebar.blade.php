<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="brand-link">
        <img src="{{asset('images/car_rental_logo.png')}}" alt="AdminLTE Logo" class="brand-image " style="opacity: .8">
        <span class="brand-text font-weight-light">Car Rental</span>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{{ asset('images/user1-128x128.jpg') }}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('enquires.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                           Enquires
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('contacts.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-phone"></i>
                        <p>
                            Contacts
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('subscriptions.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-play"></i>
                        <p>
                           Subscriptions
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-user"></i>
                        <p>
                            User
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}" class="nav-link">
                                @csrf
{{--                            <a href="{{ route('profile.edit') }}" class="nav-link">--}}
                                <i class="fa fa-power-off  nav-icon"></i>
                                <a onclick="event.preventDefault();
                                        this.closest('form').submit();">Log Out</a>
{{--                            </a>--}}
                            </form>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
