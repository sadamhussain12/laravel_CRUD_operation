<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="<?php echo e(url('css/bootstrap.min.css')); ?>" />
</head>

<body>
<div class="container">
<caption><h1>Police Record</h1></caption>
 <?php if(session()->has("Message")): ?>
               
               <div class="alert alert-success">
                <p  align="center" ><?php echo e(session()->get("Message")); ?></p>
                </div>
                <?php endif; ?>
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
      <?php $__currentLoopData = $police; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $police): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <td><?php echo e($cont++); ?></td>
          <td><?php echo e(strtoupper($police->sho)); ?></td>
          <td><?php echo e(ucfirst($police->location)); ?></td>
          <td><?php echo e($police->contact); ?></td>
          <td><img src="<?php echo e(url('upload/'.$police->image)); ?>" width="50" height="50"  /></td>
          <td>  <a class="btn btn-success" href="<?php echo e(url('police/'.$police->id.'/edit')); ?>">Edit</a>
               <form method="post" action="/police/<?php echo e($police->id); ?>">
                       <?php echo e(csrf_field()); ?>

                       <?php echo e(method_field('DELETE')); ?>

                       <button style="margin-top:-35px;" class="btn btn-danger pull-right">Delete</button>
                     </form> 
               
              </td>
      </tbody>
      
   </tr>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
</body>
</html>
