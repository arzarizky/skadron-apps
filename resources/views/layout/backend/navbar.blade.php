<nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background-color:#0070B2  ">

    <!-- Top Navbar Left -->
    <ul class="navbar-nav">
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{ asset('template/backend/sb-admin-2') }}/img/skradone-logo.png" style="width: 27%; height:auto;" alt="">
                <span class="d-none d-lg-inline text-gray-100 ml-2 mt-2"><h3><b>Skadron</b></h3></span>
            </a>  
        </li>
    </ul>

    <!-- Topbar Navbar Right -->
    <ul class="navbar-nav ml-auto">
        @can('admin')
        <!-- Manage User -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="{{ route('admin') }}">
                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-100"></i>
                <span class="d-none d-lg-inline text-gray-100 small">Manage User</span>
            </a>  
        </li>
        @endcan

        <!--Bold Face -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-cloud-sun fa-sm fa-fw mr-2 text-gray-100"></i>
                <span class="d-none d-lg-inline text-gray-100 small">Bold Face</span>
            </a>
            <!-- Kategori Bold Face -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('bold.face.200') }}">
                    <i class="fas fa-cloud-sun fa-sm fa-fw mr-2 text-gray-400"></i> 
                    Bold Face 200
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('bold.face.400') }}">
                    <i class="fas fa-cloud-sun fa-sm fa-fw mr-2 text-gray-400"></i>
                    Bold Face 400
                </a>
            </div>
        </li>

         <!--HURT -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="{{ route('hurt') }}">
                <i class="fas fa-plane-arrival fa-sm fa-fw mr-2 text-gray-100"></i>
                <span class="d-none d-lg-inline text-gray-100 small">HURT</span>
            </a>  
        </li>

        <!-- EET -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="{{ route('eet') }}">
                <i class="fas fa-plane-departure fa-sm fa-fw mr-2 text-gray-100"></i>
                <span class="d-none d-lg-inline text-gray-100 small">EET</span>
            </a>  
        </li>

        <!-- EOD -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="{{ route('eod.index') }}">
                <i class="fas fa-plane fa-sm fa-fw mr-2 text-gray-100"></i>
                <span class="d-none d-lg-inline text-gray-100 small">EOD</span>
            </a>  
        </li>

        <!-- CRM -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="{{ route('crm.index') }}">
                <i class="fas fa-fighter-jet fa-sm fa-fw mr-2 text-gray-100"></i>
                <span class="d-none d-lg-inline text-gray-100 small">CRM</span>
            </a>  
        </li>

     
        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-100 small">{{ Auth::user()->name }}</span>
                <img class="img-profile rounded-circle"
                    src="{{ asset('template/backend/sb-admin-2') }}/img/user.jpg">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('profile') }}">
                    <i class="fas fa-fw fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>