<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}" />
</head>

<body>
<div class="container">
<caption><h1>Police Record</h1></caption>
 @if(session()->has("Message"))
               
               <div class="alert alert-success">
                <p  align="center" >{{ session()->get("Message") }}</p>
                </div>
                @endif
<table class="table">
<a class="btn btn-primary btn-lg pull-right" href="police/create">+ Add</a>
   <tr>
      <th>S #</th>
      <th>Polincce station</th>
      <th>Location</th>
      <th>Contact</th>
      <th>Image</th>
      <th>Action</th>
   </tr>
   <tr>
      <tbody>
      <?php $cont= 1;?>
      @foreach($police as $police)
          <td>{{ $cont++ }}</td>
          <td>{{ strtoupper($police->sho) }}</td>
          <td>{{ ucfirst($police->location) }}</td>
          <td>{{  $police->contact}}</td>
          <td><img src="{{url('upload/'.$police->image)}}" width="50" height="50"  /></td>
          <td>  <a class="btn btn-success" href="{{ url('police/'.$police->id.'/edit')}}">Edit</a>
               <form method="post" action="/police/{{$police->id}}">
                       {{ csrf_field()}}
                       {{method_field('DELETE')}}
                       <button style="margin-top:-35px;" class="btn btn-danger pull-right">Delete</button>
                     </form> 
               
              </td>
      </tbody>
      
   </tr>
   @endforeach
</table>
</div>
</body>
</html>
