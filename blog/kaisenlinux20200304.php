<?php include('../header.php');?>

<div id="content" class="single-blog">
    


<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <h1>Kaisen Linux 20200304 Release Notes</h1>
        <ul class="list-inline mb-50">
          <li class="list-inline-item">Author: Kevin Chevreuil - Kaisen</li>
          <li class="list-inline-item">Date: 2020/04/03</li>
        </ul>
        <img class="img-fluid mb-50" src="../img/screen.png" alt="blog-image">
      </div>
      <div class="col-lg-8 offset-lg-2">
        <div class="post-single-content">
          <h1 id="kaisenlinux20200304">Kaisen Linux 20200304 changelog</h1>
<p>This new release is revision of version 20200301. The exfat filesystem is now supported. Important bug fixed.</p>
<p>Codename: Armageddon</p>
<p>Softwares updates:</p>
<ul>
<li>Linux upgrade to 5.4.9 version (with most optimisation)</li>
</ul>
<p>Added softwares and hardware support:</p>
<ul>
<li>exfat driver supported (experimental)</li>
<li>etherape (thanks to jergud for suggestion)</li>
<li>vscode</li>
<li>arpwatch</li>
<li>arpalert</li>
<li>wakeonlan</li>
<li>driftnet</li>
<li>ettercap</li>
</ul>
<p>Graphical interface:</p>
<ul>
<li>arpwatch section added in services menu</li>
</ul>
<p>Fix bugs:<p>
<ul>
<li>Failsafe mode fixed (initrd not charging because nolapic and nomodeset not functional in 5.x kernel) 
in default and charging in RAM mode</li>
</ul>
        </div>

    </div>
  </div>
</section>

</div><!-- end Contact Area -->
<?php include('../footer.php');?>
