
<head>
<link rel="shortcut icon" type="image/png" href="{{ asset('img/logoPVE.png') }}">
<script src="//code.jquery.com/jquery-1.12.3.js"></script>
     @include('fast.estilos')
     @stack('css')
     
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
    var elem = document.documentElement;
  function openFullScreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  }
}
</script>

</head>
    <body >
    
        <div class="wrapper mywrap">
            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper ">
            @yield('content')
            </div>
         </div>

        
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
  

   @stack('js')

    </body>

