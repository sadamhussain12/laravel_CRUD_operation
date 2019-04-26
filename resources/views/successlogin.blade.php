<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet"  />
<script src="{{ url('public/js/bootstrap.min.js') }}"></script>
<script src="{{ url('public/jquery-1.11.2.js') }}"></script>
</head>

<body>
<h1 align="center">Success Login Page</h1>
  <?php if(isset(Auth::user()->email)) { ?>
  <div class="alert alert-danger success-block" align="center">
  <strong style="color:#00F;">welcome Admin Email => <span style="color:#639; font-size:14px; font-style:italic "> {{ Auth::user()->email }} </span></strong>
  
   <a href="{{ url('/main/logout') }}" class="btn btn-info pull-right">Logout</a>
  </div>
     <?php }else { ?>  
       <script> window.location="/main/";</script>
  <?php } ?>
</body>
</html>
