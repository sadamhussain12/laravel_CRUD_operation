<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet"  />
<script src="{{ url('public/js/bootstrap.min.js') }}"></script>
<script src="{{ url('public/jquery-1.11.2.js') }}"></script>

</head>

<body style="background-color:#CFF;  margin-top:50px; margin-bottom:150px; margin-left:200px; margin-right:350px; padding-top:50px; padding-bottom:50px; padding-left:200px;  > 
<div class="container">
<div style="background-color:#CFC; border-radius:60px; padding-left:100px; padding-top:100px; padding-bottom:100px;">


 <legent ><h1>Admin Login</h1></legent>
      @if(isset(Auth::user()->emai))
      <script>  window.location="/main/successlogin";  </script>
      @endif


   
       @if($message = Session::get('error'))
       <div class="alert alert-danger" style="margin-right:60px;"><strong >{{ $message }}</strong></div>
       @endif

     @if(count($errors ) > 0)
     <div class="alert lert-danger">
     <ul>
         @foreach($errors->all() as $error )
           <li>  {{  $error}}  </li>
         @endforeach
     </ul>
     @endif
<form action="{{ url('/main/checklogin') }}" method="post" class="form-horizontal"  >
  {{ csrf_field() }}
 <div class="form-group ">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-5">

<input type="email" name="email" class="form-control"  />
</div></div>
 <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-5">

<input  class="form-control" type="password" name="password"  />
</div>
    </div>
   
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
<input type="submit" name="submit" value="Login >>" class="btn btn-primary"  />
</div></div>
</form>
</div></div>
</body>
</html>
