<?php include('./header.php');?>
<?php include('./__blog.php');?>

<div class="section-block head">
  <div class="container">
    <div class="row">

    <div class="col-md-12 col-sm-12 col-12 text-center">
      <h1>Welcome to Kaisen Linux</h1>
      <h2>The distribution for professional IT.</h2>
    </div>
  </div>
</div>
</div>

<!-- Project Detail Section START -->
<div class="section-block slider-home">
  <div class="container">

      <div class="widget-slider col-md-8 col-sm-12 col-12">
        <div class="project-single-box-img">

          <div class="mockup"><div class="int" style="background:url(./img/index/mockup-laptop-index2.png) no-repeat center center; "></div></div>

          <div class="swiper-container">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="int">
                  <video width="620" height="500" controls loop autoplay>
                    <source src="./vid/prez.mp4" type="video/mp4">
                  </video>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="widget-description col-sm-12 col-md-3">

        <div class="project-single-box-info">
          <div class="project-info-shortcode">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-12  pr-0">
                <div class="project-info-shortcode-icon">
                  <i class="fa fa-history"></i>
                </div>
              </div>
              <div class="col-md-9 col-sm-9 col-12 pl-0">
                <div class="project-info-shortcode-text">
                  <h5>First release</h5>
                  <p>14 december 2019</p>
                </div>
              </div>
            </div>
          </div>

          <div class="project-info-shortcode">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-12  pr-0">
                <div class="project-info-shortcode-icon">
                  <i class="fa fa-bullseye"></i>
                </div>
              </div>
              <div class="col-md-9 col-sm-9 col-12 pl-0">
                <div class="project-info-shortcode-text">
                  <h5>Based on</h5>
                  <p>Debian testing</p>
                </div>
              </div>
            </div>
          </div>

          <div class="project-info-shortcode">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-12  pr-0">
                <div class="project-info-shortcode-icon">
                  <i class="fa fa-download"></i>
                </div>
              </div>
              <div class="col-md-9 col-sm-9 col-12 pl-0">
                <div class="project-info-shortcode-text">
                  <h5>Release mode</h5>
                  <p>Rolling release</p>
                </div>
              </div>
            </div>
          </div>

          <div class="project-info-shortcode">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-12  pr-0">
                <div class="project-info-shortcode-icon">
                  <i class="fa fa-globe"></i>
                </div>
              </div>
              <div class="col-md-9 col-sm-9 col-12 pl-0">
                <div class="project-info-shortcode-text">
                  <h5>Origin</h5>
                  <p>French</p>
                </div>
              </div>
            </div>
          </div>

          <div class="project-info-shortcode">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-12  pr-0">
                <div class="project-info-shortcode-icon">
                  <i class="fa fa-info-circle"></i>
                </div>
              </div>
              <div class="col-md-9 col-sm-9 col-12 pl-0">
                <div class="project-info-shortcode-text">
                  <h5>Objective</h5>
                  <p>Complete toolbox for network and systems administrators</p>
                </div>
              </div>
            </div>
          </div>

          <a href="./downloads.php" class="project-info-shortcode project-info-shortcode-download">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-12  pr-0">
                <div class="project-info-shortcode-icon">
                  <i class="fa fa-download"></i>
                </div>
              </div>
              <div class="col-md-9 col-sm-9 col-12 pl-0">
                <div class="project-info-shortcode-text">
                  <h5>Download</h5>
                  <p>Go to download page</p>
                </div>
              </div>
            </div>
          </a>

        </div>
      </div>

    <div class="project-single-bottom-text mt-50 col-md-8 col-sm-8 col-12" >
      <div class="section-single-heading">
        <h4>Project Description</h4>
        <div class="text-content-big mt-20">
          <p><b>Kaisen Linux</b> is a distribution for <b>IT professional</b> based on the Debian GNU/Linux distribution.
            It is a complete operating system whose originality is to provide a set of tools dedicated to system 
            administration and covering all the needs for diagnosing and dealing with faults or failures of an installed 
            system and its components. The most important system tools are available. It is thus possible to modify the 
            partitioning of hard disks, to save the data or the system, to repair the file system and to recover lost data, 
            or to reactivate the boot manager, to carry out a deep formatting of a hard drive, diagnostics of networks 
	    at several levels and on many protocols, creation and management of PKI, virtualization, automation, 
            containerization, network lab with GNS3 and many others!</p>
          <p>Kaisen Linux also integrates a good number of wifi/video/sound and bluetooth drivers in addition to those 
            contained in the kernel to provide improved hardware support and ensuring that you do not have to install 
            anything more after installation. You can start the live distribution, as well as install it on your computer.
            ISO manages the BIOS / UEFI in 64bits. The live, contains a "toram" mode allowing to load the whole live system 
            in the RAM memory of the machine, allowing you to save a USB port (useful for example for computers having only 
            two USB ports and which you need of these two ports)! You will understand, this distribution is designed to meet 
            the maximum of possible needs!</p>
        </div>
        </div>
      </div>
    </div>
  </div>

<!-- Blog Grid START -->
<div class="section-block-grey">
  <div class="container">
    <div class="section-heading">
      <h4>Latest Consulting News</h4>
      <div class="section-heading-line-left"></div>
    </div>
    <div class="row mt-30">

    <?php  for ($i=0; $i < $blog_home_visible; $i++) { $b=$blog[$i]; ?>
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
              <a href="./blog/<?php echo $b['link']; ?>">Read on blog</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    <?php } ?>

    <?php foreach ($blog as $key_b => $b) { ?>


    <?php  } ?>



    </div>
  </div>
</div>
<!-- Blog Grid END -->

</div>
<!-- Project Detail Section END -->

<script type="text/javascript"> var mySwiper = new Swiper('.swiper-container', { direction: 'horizontal' })</script>

<?php include('./footer.php');?>
