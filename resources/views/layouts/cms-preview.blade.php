<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SIADEV {{ $page_title }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="SIADEV">
    <meta name="keyword" content="cms, creative, dashboard, admin, theme">
    <link rel="shortcut icon" href="/favicon.png">

    <title>SIADEV | CMS Dashboard</title>

    <link rel="stylesheet" href="{{ elixir('css/cms-ui.min.css') }}">
    <link rel="stylesheet" href="{{ elixir('css/effects.min.css') }}">

</head>
<body>
<section style="height: 1000px">
    <!--sidebar begin-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="active">
                    <a class="" href="index.html">
                        <i class="icon_house_alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_document_alt"></i>
                        <span>Forms</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="form_component.html">Form Elements</a></li>
                        <li><a class="" href="form_validation.html">Form Validation</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_desktop"></i>
                        <span>UI Fitures</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="general.html">Elements</a></li>
                        <li><a class="" href="buttons.html">Buttons</a></li>
                        <li><a class="" href="grids.html">Grids</a></li>
                    </ul>
                </li>
                <li>
                    <a class="" href="widgets.html">
                        <i class="icon_genius"></i>
                        <span>Widgets</span>
                    </a>
                </li>
                <li>
                    <a class="" href="chart-chartjs.html">
                        <i class="icon_piechart"></i>
                        <span>Charts</span>

                    </a>

                </li>

                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_table"></i>
                        <span>Tables</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="basic_table.html">Basic Table</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_documents_alt"></i>
                        <span>Pages</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="profile.html">Profile</a></li>
                        <li><a class="" href="login.html"><span>Login Page</span></a></li>
                        <li><a class="" href="blank.html">Blank Page</a></li>
                        <li><a class="" href="404.html">404 Error</a></li>
                    </ul>
                </li>

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    @yield('content')

</section>
    @yield('scripts')
</body>
</html>
