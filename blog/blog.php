<?php include('../header.php');?>
<?php include('./__blog.php');?>



<!-- Blog Grid START -->
<div class="section-block-grey blogging">
  <div class="container">
    <div class="section-heading">
      <h4>Latest News</h4>
      <div class="section-heading-line-left"></div>
    </div>
    
    <div class="row mt-30">



    <?php foreach ($blog as $key_b => $b) { ?>
      <div class="col-md-4 col-sm-6 col-12">

        <div class="blog-grid-simple">
      
        <img src="<?php echo $b['visuel']; ?>">

        <h4><?php echo $b['title']; ?></h4>
        <p><?php echo $b['extract']; ?></p>
        <div class="blog-grid-simple-content">
          <div class="row blog-grid-simple-date">
            <div class="col-2 pr-0">
              <i class="fa fa-calendar"></i>
            </div>
            <div class="col-5 pl-0">
              <h5><?php echo $b['date']; ?></h5>
            </div>
            <div class="col-5 right-holder">
              <a href="./<?php echo $b['link']; ?>">Read on blog</a>
              </div>
            </div>
          </div>
        </div>
      </div>


    <?php  } ?>







    </div>
  </div>
</div>
<!-- Blog Grid END -->

</div>
<!-- Project Detail Section END -->

<script type="text/javascript"> var mySwiper = new Swiper('.swiper-container', { direction: 'horizontal' })</script>

<?php include('../footer.php');?>
