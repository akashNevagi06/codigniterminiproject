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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Admin Panel</a>
   


  </div>
</nav>





<!-- this is form  -->
<div class="container" style="margin-top:80px;">
    <h1>Adimin Form</h1>
    <?php if($error=$this->session->flashdata('Login_failed')) : ?>
<div class="row">
  <div class="col-lg-6">
    <div class="alert alert-danger">
      <?php echo $error;?>
</div>
</div>
</div>
<?php endif; ?>
<?php echo form_open('Admin/index'); ?>
<div class="row">
    <div class="col-lg-6">
       <div class="form-group">
         <label for="Username">Username</label>
         <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter user name','name'=>'uname','value'=>set_value('uname')]); ?>
       </div>
    </div>
          <div class="col-lg-6"><br><br>
              <?php echo form_error('uname'); ?>
         </div>
</div>


<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
           <label for="PWD">Password</label>
           <?php echo form_password(['class'=>'form-control','type'=>'password','placeholder'=>'Enter password','name'=>'pass']); ?>

       </div>
    </div>

      <div class="col-lg-6"><br><br>
        <?php echo form_error('pass'); ?>
      </div>
</div>
  
  <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'Submit']); ?>

  <?php echo form_submit(['type'=>'reset','class'=>'btn btn-danger','value'=>'Reset']); ?>

  <?php echo anchor('admin/register/','Sign up?','class="link-class"')?>

</div>


</body>
    </html>