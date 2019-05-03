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
    <h1>Edit Articles</h1>


<?php echo form_open("admin/updatearticle/{$article->id}"); ?>
<!-- <?php echo form_hidden('article_id',$article->id);?> -->
<div class="row">
    <div class="col-lg-6">
       <div class="form-group">
         <label for="Username">Article Title</label>
         <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Article Title',
         'name'=>'article_title','value'=>set_value('article_title',$article->article_title)]); ?>
       </div>
    </div>
          <div class="col-lg-6"><br><br>
              <?php echo form_error('article_title'); ?>
         </div>
</div>


<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
           <label for="body">Article Body</label>
           <?php echo form_textarea(['class'=>'form-control','placeholder'=>'Enter Article Body',
           'name'=>'article_body','value'=>set_value('article_body',$article->article_body)]); ?>

       </div>
    </div>

      <div class="col-lg-6"><br><br>
        <?php echo form_error('article_body'); ?>
      </div>
</div>
  
  <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'Submit']); ?>

  <?php echo form_submit(['type'=>'reset','class'=>'btn btn-danger','value'=>'Reset']); ?>


</div>


</body>
    </html>