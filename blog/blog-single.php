<?php 
  include('./header.php');
  include('./__blog.php');

  if(  isset( $_GET['id'] ) ){
    $id = (int)$_GET['id'];

    if(is_int($id) && is_numeric($id)){
      $b = $blog[ $_GET['id'] ];
    }else{
      echo $id;
      // header('Location:https://kaisenlinux.org/');
    }
  }


?>

<div class="section-block head">
  <div class="container">
    <div class="row">

    <div class="col-md-12 col-sm-12 col-12 text-center">
      <h1><?php echo $b['title']; ?></h1>
      <h2>Author : <?php echo $b['author']; ?> - Date : <?php echo $b['date']; ?> </h2>
    </div>
  </div>
</div>
</div>


<div class="section-block slider-home">
  <div class="container">


    <div class="project-single-bottom-text ol-md-12 col-sm-12 col-12" >
      <div class="section-single-heading">
        <div class="text-content-">
          <?php echo $b['content']; ?>
        </div>
        </div>
      </div>

  </div>
</div>

<?php include('./footer.php');?>