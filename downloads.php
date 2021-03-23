<?php include('./header.php');?>

<div class="slider-top">

    <div class="swiper-container">
      <div class="swiper-wrapper">

        <div href="./img/interfaces/kaisen-linux_plymouth.jpg" target="_blank" class="swiper-slide">
         <img src="./img/interfaces/kaisen-linux_plymouth.jpg" alt="kaisen linux plymouth theme">
          <div class="legend"><p>Plymouth theme</p></div>
        </div>

        <div href="./img/interfaces/kaisen-linux_login_screen.jpg" target="_blank" class="swiper-slide">
         <img src="./img/interfaces/kaisen-linux_login_screen.jpg" alt="kaisen linux login screen">
          <div class="legend"><p>Login screen</p></div>
        </div>

        <div href="./img/interfaces/kaisen-linux_mate_desktop.jpg" target="_blank" class="swiper-slide">
         <img src="./img/interfaces/kaisen-linux_mate_desktop.jpg" alt="kaisen linux desktop with MATE">
          <div class="legend"><p>MATE default desktop</p></div>
        </div>

        <div href="./img/interfaces/kaisen-linux_mate_netadmin_menu.jpg" target="_blank" class="swiper-slide">
         <img src="./img/interfaces/kaisen-linux_mate_netadmin_menu.jpg" alt="kaisen linux mate with network administration tools menu">
          <div class="legend"><p>MATE network administration tools menu</p></div>
        </div>

        <div href="./img/interfaces/kaisen-linux_mate_technicians_menu.jpg" target="_blank" class="swiper-slide">
         <img src="./img/interfaces/kaisen-linux_mate_technicians_menu.jpg" alt="kaisen linux mate with technicians tools menu" >
          <div class="legend"><p>MATE technicians tools menu</p></div>
        </div>

        <div href="./img/interfaces/kaisen-linux_xfce_desktop.jpg" target="_blank" class="swiper-slide">
         <img src="./img/interfaces/kaisen-linux_xfce_desktop.jpg" alt="kaisen linux with XFCE desktop">
          <div class="legend"><p>XFCE default desktop</p></div>
        </div>

        <div href="./img/interfaces/kaisen-linux_xfce_services_menu.jpg" target="_blank" class="swiper-slide">
         <img src="./img/interfaces/kaisen-linux_xfce_services_menu.jpg" alt="kaisen linux xfce with services menu">
          <div class="legend"><p>XFCE services menu</p></div>
        </div>

        <div href="./img/interfaces/kaisen-linux_xfce_logout.jpg" target="_blank" class="swiper-slide">
          <img src="./img/interfaces/kaisen-linux_xfce_logout.jpg" alt="kaisen linux xfce logout">
           <div class="legend"><p>XFCE logout</p></div>
        </div>

        <div href="./img/interfaces/kaisen-linux_lxde_desktop.jpg" target="_blank" class="swiper-slide">
          <img src="./img/interfaces/kaisen-linux_lxde_desktop.jpg" alt="kaisen linux with LXDE desktop">
           <div class="legend"><p>LXDE default desktop</p></div>
        </div>

        <div href="./img/interfaces/kaisen-linux_lxde_sysadmin_menu.jpg" target="_blank" class="swiper-slide">
          <img src="./img/interfaces/kaisen-linux_lxde_sysadmin_menu.jpg" alt="kaisen linux LXDE with sysadmin tools menu">
           <div class="legend"><p>LXDE sysadmin tools menu</p></div>
        </div>

        <div href="./img/interfaces/kaisen-linux_lxde_miscellaneous-menu.jpg" target="_blank" class="swiper-slide">
          <img src="./img/interfaces/kaisen-linux_lxde_miscellaneous-menu.jpg" alt="kaisen linux LXDE with miscellaneous tools menu">
           <div class="legend"><p>LXDE miscellaneous tools menu</p></div>
        </div>

        <div href="./img/interfaces/kaisen-linux_kde_desktop.jpg" target="_blank" class="swiper-slide">
          <img src="./img/interfaces/kaisen-linux_kde_desktop.jpg" alt="kaisen linux with KDE desktop">
           <div class="legend"><p>KDE default desktop</p></div>
        </div>

        <div href="./img/interfaces/kaisen-linux_kde_filesystems.jpg" target="_blank" class="swiper-slide">
          <img src="./img/interfaces/kaisen-linux_kde_filesystems.jpg" alt="kaisen linux KDE with filesystems menu">
           <div class="legend"><p>KDE filesystems menu</p></div>
        </div>

        <div href="./img/interfaces/kaisen-linux_mate_zsh_systemd.jpg" target="_blank" class="swiper-slide">
          <img src="./img/interfaces/kaisen-linux_mate_zsh_systemd.jpg" alt="kaisen linux with ZSH completion for systemd">
           <div class="legend"><p>Use ZSH completion for SystemD</p></div>
        </div>

        <div href="./img/interfaces/kaisen-linux_mate_zsh_apt.jpg" target="_blank" class="swiper-slide">
          <img src="./img/interfaces/kaisen-linux_mate_zsh_apt.jpg" alt="kaisen linux zsh completion for APT">
           <div class="legend"><p>Use ZSH completion for APT</p></div>
        </div>
        
      </div>
    </div>
</div>

<!-- Slider END -->

<!-- Projects Section START -->
<div class="section-block">
  <div class="container">


    <div class="row">
    
      <div class="section-heading col-md-4 col-sm-4 col-12">
        <h4>Downloads</h4>
        <div class="text-content-big mt-20">
          <p>Architecture: amd64 (Intel and AMD processors)<br>
          Default desktop environment: MATE<br>
          Others desktop environments: KDE, XFCE, LXDE<br>
          Latest version: <?php echo $release_version; ?><br>
          Live credentials: <span>kaisen/kaisen</span><br>
          Old versions: <a href="https://iso.kaisenlinux.org" target="_blank">here</a><br>
          All checksums <a href="https://kaisenlinux.org/checksums.txt" target="_blank">here</a><br>
          Last changelog <a href="https://kaisenlinux.org/blog/kaisenlinuxrolling1.5.html" target="_blank">here</a><br>
          Vote on <a href="https://distrowatch.com/dwres.php?waitingdistro=553&resource=links" target="_blank">Distrowatch</a>
          (your click automatically vote)
          </div>
        <div class="section-heading-line-left"></div>
      </div>




      <div class="row mt-30 col-md-8 col-sm-8 col-12">


      <?php 
      foreach ($links_download as $key => $d) { ?>

        <div class="col-md-3 col-sm-6 col-sd-5 col-6">
          <div class="project-grid">
            <div class="project-grid-img">
              <img src="<?php echo $d['img']; ?>" alt="img">
            </div>
            <div class="project-grid-overlay">
              <div class="down">
                <div class="title"><?php echo $key; ?></div>
                <div class="int">
                <?php foreach ($d['links'] as $key => $down) { ?>
                  <a href="<?php echo $down['link']; ?>"><?php echo $down['name']; ?></a>
                <?php }; ?>
              </div>
              </div>
              <p>Size: <?php echo $d['size']; ?></p>
              <span><?php echo $d['include']; ?></span>
            </div>
          </div>
        </div>



      <?php }; ?>



    </div>

  </div>
</div>
</div>
<!-- Projects Section END -->
<script type="text/javascript">
  
  var mySwiper = new Swiper('.swiper-container', {
    direction: 'horizontal',
    loop: true,
    spaceBetween: 0,

    speed: 600,

    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },

    slidesPerView: 2,
    centeredSlides: true,
    spaceBetween: 100,
    grabCursor: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },

    keyboard: {
      enabled: true,
      onlyInViewport: false,
    },


  })

</script>

<?php include('./footer.php');?>
