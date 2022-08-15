<div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="{{url('/admin/home')}}"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active ">
                            <a href="{{url('/admin/home')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class="sidebar-link">
                                <i class="bi bi-stack"></i>
                                <span>Stock</span>
                            </a>
                            <ul class="submenu" style="display: none;">
                                <li class="submenu-item ">
                                    <a href="{{url('/admin/stock/house-blend')}}">House Blend</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{url('/admin/stock/floral-tone')}}">Floral Tone</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{url('/admin/stock/fruity-tone')}}">Fruity Tone</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{url('/admin/stock/nutty-tone')}}">Nutty Tone</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{url('/admin/stock/winey-tone')}}">Winey Tone</a>
                                </li>

                            </ul>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{url('/admin/order')}}" class="sidebar-link">
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Order</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{url('/admin/detail')}}" class="sidebar-link">
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Detail</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{url('/admin/contact')}}" class="sidebar-link">
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Contact</span>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="sidebar-link" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="bi bi-stack"></i>
                                    <span>ชื่อ {{ Auth::user()->name }}</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                </div>
                            </li>

            </div>
        </div>
