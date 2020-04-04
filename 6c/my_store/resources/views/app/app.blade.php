<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>My Store | Home</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{url('template')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('template')}}/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style type="text/css">
    .c-app{
      color: #3F69D0;
    }
    .form-control{
      border-color:rgba(78,73,163,0.6); 
    }
    .b-app{
      background-color: #3F69D0;
      border-radius: 20px;
      color: white;
      font-size:18px;
      font-weight:600;
      transition: 0.5s;
      height: 45px;
    }
    .b-app:hover{
      color: #3F69D0;
      border:1px solid #3F69D0;
      background-color: white;
    }
    .jdl{
      font-family: forte;color: #3F69D0;font-size: 60px;
    }
    .jdl2{
      color: #3F69D0;font-weight: bold;
    }


    @media (max-width: 500px) {
      .ilus{
        top: -300px;
        position: absolute;
        z-index: 0;
        right: 0px;
        opacity: 0.5;
      }
      .pos{
        position: relative;
        z-index: 2;
      }
      .jdl{
      font-family: forte;color: #3F69D0;font-size: 50px;
    }
    .jdl2{
      font-size: 30px;
    }
/*    .text{
      display: block;
      width: 100%;
      background-color: rgba(0,0,0,0.2);
      color: white;
    }*/

    }

  </style>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white ">
    <div class="container">
      <a href="index3.html" class="navbar-brand">
        <label class="c-app text-bold"><i>Welcome to My Store</i></label>
      </a>
      
      <a class="navbar-toggler order-1 border-0" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-list text-gray"></i>
      </a>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link">Transaction</a>
          </li>
          <li class="nav-item">
            <a href="{{route('others')}}" class="nav-link">Others</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- /.navbar -->

  @yield('content')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer" style="background-color: #3F69D0;color: white;">
   <div class="container">
      <!-- Default to the left -->
   <!--  <span class="d-block text-bold">Hubungi kami di</span>
    <span class="d-block"><i class="fas fa-envelope"></i> Email : desaPanjalu@gmail.com</span>
    <span class="d-block"><i class="fas fa-comments"></i> Whatsapp : 089273927990 ( Redi )</span>
    <br> -->
    <strong>Copyright &copy; 2020 Redi.</strong>
   </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{url('template')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url('template')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('template')}}/dist/js/adminlte.min.js"></script>
<script type="text/javascript">
  $('.editC').on('click', function(){
    var id = $(this).attr('data-id');
    var name = $('#C'+id).text();
    $('#idCategory').val(id);
    $('#nameCategory').val(name);
  });

  $('.editCa').on('click', function(){
    var id = $(this).attr('data-id');
    var name = $('#Ca'+id).text();
    $('#idCashier').val(id);
    $('#nameCashier').val(name);
  })
</script>
</body>
</html>
