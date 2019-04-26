<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add DRC</title>
        
<link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet"  />
</head>
<body>

<legent><h1>{{  Route::currentRouteName()}}</h1>

                @if($errors->any())
                <div class="alert alert-danger container " style="color:white;font-weight:bold;" >
                <ul> @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                
                @endforeach 
                </ul>
                </div>
                @endif
                
                @if(session()->has("Message"))
               
                <div class="alert alert-success">
                <p align="center">{{ session()->get("Message") }}</p>
                </div>
                @endif
                <form class="form-horizontal " role="form"  enctype="multipart/form-data" action="/police/@yield('policeId')" method="post">
             {{ csrf_field()}}
             @section("editMethod")
             @show
             
  <div class="form-group">
     <label class="control-label col-lg-2" for="email">SHO:</label>
   <div class="col-lg-6">
     <input type="text" value="@yield('sho')" class="form-control" name="sho" placeholder="Enter Head Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-lg-2"  for="pwd">Location:</label>
    <div class="col-lg-6">
      <input type="text" class="form-control" value="@yield('location')" name="location"  placeholder="Enter DRC Location" >
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-lg-2"  for="pwd">Contact #:</label>
    <div class="col-lg-6">
      <input type="text" class="form-control" value="@yield('contact')" name="contact" placeholder="Enter Contact Number">
    </div>
  </div>
  </div>
  <div class="form-group">
    <label class="control-label col-lg-2"  for="pwd">Image</label>
    <div class="col-lg-6">
      <input type="file" class="form-control"  name="image" value="@yield('image')" >
    </div>
  </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" value="{{  ucfirst(substr(Route::currentRouteName(),7))}}" name="submit"   class="btn btn-success"  />
	 
    </div>
  </div>

</form>
</legent>
</div>
</body>
</html>