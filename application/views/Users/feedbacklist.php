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
<div class="container" style="margin-top:20px;">
<h1><?= $title;  ?></h1>
<div class="table-responsive">
    <table class="table table-hover tablesorter">
        <thead>
            <tr>
                <th class="header">S.no</th>
                <th class="header">Full Name</th>                           
                <th class="header">Email</th>                      
                <th class="header">Feedback</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $ctr=0;
            foreach($feedbackInfo as $row)
                {
                    $ctr++;
                    ?>
                    <tr>
                     <td><?php echo $ctr; ?></td>
                        <td><?php echo $row->name; ?></td>   
                        <td><?php echo $row->email; ?></td> 
                        <td><?php echo $row->feedback1; ?></td>                       
                        
                    </tr>
                  
            <?php } ?>

        </tbody>
    </table>
  <div align="center">
    <form method="post" action="<?php echo base_url('index.php/'); ?>export/createXLS">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
   </div>


  <!--   <a class="pull-right btn btn-primary btn-xs" href="<?php echo base_url()?>export/createxls"><i class="fa fa-file-excel-o"></i> Export Data</a> -->
</div> 
</div>
