<html>
    <head>
        <title>
            articallist
</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>



<div class="container" style="margin-top:20px;">
<h1>Register Form</h1>

<?php if($user=$this->session->flashdata('user')) :
  $user_class=$this->session->flashdata('user_class') ?>
<div class="row">
  <div class="col-lg-6">
    <div class="alert <?=$user_class ?>">
      <?php echo $user;?>
</div>
</div>
</div>
<?php endif; ?>



 <?php echo form_open('admin/sendemail'); ?>
 <div class="row">
 <div class="col-lg-6">
  <div class="form-group">
    <label for="Username">Username:</label>
   <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'username','value'=>set_value('username')]);  ?>
  </div>
  </div>
  <div class="col-lg-6" style="margin-top:40px;">
   <?php  echo form_error('username');  ?>
  </div>
  </div>
 <div class="row">
 <div class="col-lg-6">
  <div class="form-group">
    <label for="pwd">Password:</label>
  
   <?php  echo form_password(['class'=>'form-control','type'=>'password','placeholder'=>'Enter Password','name'=>'password','value'=>set_value('password')]); ?>
   </div>
   </div>
   <div class="col-lg-6" style="margin-top:40px;">
   <?php  echo form_error('password');  ?>
  </div>
   </div>
   <div class="row">
 <div class="col-lg-6">
  <div class="form-group">
    <label for="First name">First Name:</label>
   <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter First Name','name'=>'firstname','value'=>set_value('firstname')]);  ?>
  </div>
  </div>
  <div class="col-lg-6" style="margin-top:40px;">
   <?php  echo form_error('firstname');  ?>
  </div>
  </div>
   <div class="row">
 <div class="col-lg-6">
  <div class="form-group">
    <label for="last name">Last Name:</label>
   <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Last Name','name'=>'lastname','value'=>set_value('lastname')]);  ?>
  </div>
  </div>
  <div class="col-lg-6" style="margin-top:40px;">
   <?php  echo form_error('lastname');  ?>
  </div>
  </div>
   <div class="row">
 <div class="col-lg-6">
  <div class="form-group">
    <label for="Username">Email:</label>
   <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Email','name'=>'email','value'=>set_value('email')]);  ?>
  </div>
  </div>
  <div class="col-lg-6" style="margin-top:40px;">
   <?php  echo form_error('email');  ?>
  </div>
  </div>
  <?php  echo form_submit(['type'=>'submit','class'=>'btn btn-default','value'=>'Submit']);  ?>
 <?php  echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'Reset']);  ?>
 
</div>
</body>
</html>