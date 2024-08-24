    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
            <a class="app-brand-link">
            <span class="app-brand-logo demo">
            <img src="{{asset('/template/assets/img/favicon/logoletris2.png')}}" alt="..." width="200px"/>
            </span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item ">
            <a href="/" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
            </li>

            <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
            </li>

            <li class="menu-item">
            <a href="/data" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Support">Data Alumni</div>
            </a>
            </li>
            <li class="menu-header small text-uppercase">
            <span class="menu-header-text">OTHER</span>
            </li>
            <li class="menu-item" >
                <a class="menu-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                <i class="bx bx-power-off me-3"></i>
                    {{ __(' Log Out') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
        </aside>
        
@include('sweetalert::alert')