
<html>
    <head>
        <title>
            articallist
</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Admin Panel</a>
   


  </div>
  <?php
  if($this->session->userdata('id'))
  {
  ?>
  <li> <?=anchor('admin/logout','Logout')?><li>
  <?php
  }
  ?>
</nav>

<div class="container" style="margin-top:50px;">
<div class="row">
<a href="adduser" class="btn btn-lg btn-primary">Add Articles</a>

</div>

<?php if($error=$this->session->flashdata('msg')) :
  $msg_class=$this->session->flashdata('msg_class') ?>
<div class="row">
  <div class="col-lg-6">
    <div class="alert <?=$msg_class ?>">
      <?php echo $error;?>
</div>
</div>
</div>
<?php endif; ?>



</div>


<div class="container" style="margin-top:50px;">
<div class="table">
<table>
<th>
<tr>
<th>Article Title</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</th>
<tbody>
<?php if(count($articles)): ?>
<?php foreach ($articles as $art): ?>
<tr>

<td><?php echo $art->article_title; ?></td>
<td><?=  anchor("admin/edituser/{$art->id}",'Edit',['class'=>'btn btn-default']);  ?></td>

<td>
<?=
form_open('admin/delarticles'),
form_hidden('id',$art->id),
form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
form_close();


?>

</tr>
<?php endforeach; ?>
<?php else:?>
<tr>
<td colspan="3"> No Data Available</td>
</tr>
<?php endif; ?>
</tbody>


</table>


<?= $this->pagination->create_links(); ?> 




</div>


</div>
</html>