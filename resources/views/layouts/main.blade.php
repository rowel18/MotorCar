<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Dashboard</title>

  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/style.css">

  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-primary navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <router-link to="/registration" class="btn btn-success">
                    <i class="fas fa-user-plus"></i>
                    <span id="register">Register</span> 
                </router-link>
            </li>
        </ul>
    </nav>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('home') }}" class="brand-link">
            <img src="./img/logo.png" alt="Dashboard Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">SuperAdmin</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="./img/rsilogo.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="{{ route('home') }}" class="d-block">{{ Auth::user()->name }}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <router-link to="/dashboard" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/profile" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>Profile</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/chat" class="nav-link">
                            <i class="nav-icon fas fa-comments"></i>
                            <p>Chat</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/setting" class="nav-link">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>Setting</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/report" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>Report</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/download" class="nav-link">
                            <i class="nav-icon fas fa-download"></i>
                            <p>Download</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="nav-icon fas fa-power-off"></i>
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <router-view></router-view>
            </div>
        </div>
    </div>

  

        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
            Anything you want
            </div>
            <strong>Copyright &copy; 2019-2021 <a href="">Iristech.ph</a>.</strong> All rights reserved.
        </footer>
    </div>

    <!-- REQUIRED SCRIPTS -->
    <script src="/js/app.js"></script>

</body>
</html>
