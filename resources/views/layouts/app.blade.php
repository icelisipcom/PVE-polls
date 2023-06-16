<x-laravel-ui-adminlte::adminlte-layout>
<head>
<link rel="shortcut icon" type="image/png" href="{{ asset('img/logoPVE.png') }}">
<script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script
    src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet"
    href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet"
    href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <style>
        th{
            background-color: {{ Auth::user()->color }};
            color: white;
        }
        .content-wrapper {
   
   background: url("{{asset('img/Fondo2.jpg')}}") 50% 0 no-repeat fixed;
    background-size: cover;
    font-weight: bold;
  size: 60px;
  color: #cdc8d8;
}
.wrapper {
   
   background: #343A40;
    
}
     </style>
     @stack('css')
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
    <body class="hold-transition sidebar-mini layout-fixed"  >
        <div class="wrapper">
            <!-- Main Header -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background:#343A40; color:white;">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars" style="color:white"></i></a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('img/logoPVE.png')}}"
                                class="user-image img-circle elevation-2" alt="User Image">
                            <span class="d-none d-md-inline" style="color:white;"> 
                                <!-- aki iba el nombre de usuario pero lo quite  -->
                                {{ Auth::user()->name }}

                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <!-- User image -->
                            <li class="user-header ">
                                <img src="{{asset('img/logoPVE.png')}}"
                                    class="img-circle elevation-2" alt="User Image">
                                <p>
                                    {{ Auth::user()->name }}
                                    <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                                <a href="#" class="btn btn-default btn-flat float-right"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Sign out
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <!-- Left side column. contains the logo and sidebar -->
            @include('layouts.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div>

            <!-- Main Footer -->
            <footer class="main-footer" style="background:#343A40">
                <div class="float-right d-none d-sm-block" >
                    <b>Version</b> 3.1.0
                </div>
                <strong>Copyright &copy; 2022-2023 <a href="https://www.pveu.unam.mx/">PVE-UNAM</a>.</strong> All rights
                reserved.
            </footer>
        </div>

        
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
  

        @stack('js')
    </body>
</x-laravel-ui-adminlte::adminlte-layout>

