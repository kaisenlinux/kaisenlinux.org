<?php include('../header.php');?>
<div id="content" class="single-blog">
    

<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <h1>Kaisen Linux 20200114 Release Notes</h1>
        <ul class="list-inline mb-50">
          <li class="list-inline-item">Author: Kaisen</li>
          <li class="list-inline-item">Date: 2020/04/03</li>
        </ul>
        <img class="img-fluid mb-50" src="../img/screen.png" alt="blog-image">
      </div>
      <div class="col-lg-8 offset-lg-2">
        <div class="post-single-content">
          <h1 id="kaisenlinux20200114">Kaisen Linux 20200114 changelog</h1>
<p>This new release is revision at 20191229 release. UEFI partial support. More features for live system. First beta version.</p>
<p>Codename: Impossible</p>
<p>Added softwares and hardware support:</p>
<ul>
<li>guymager</li> 
<li>rtl-firmware (.deb)</li>
<li>b43-firmware (.deb)</li>
</ul>
<p>Added/adapted features:</p>
<ul>
<li>Support for booting on UEFI (without secure boot)</li>
<li>Creation of the "base-files-kaisen" package</li>
<li>Deletion of the file /usr/lib/os-variant and its symlink /etc/os-variant (replaced by the base-files-kaisen package)</li>
<li>Removal of the clamav daemon to relieve system resources (tool still present)</li>
<li>Deletion of the modified lsb_release.py file (replaced by the base-files-kaisen package)</li>
<li>Addition of contrib and non-free repositories in sources.list</li>
<li>Change of default deposit to http://deb.debian.org/debian/ (replaces http://ftp.fr.debian/org/debian)</li>
</ul>
<p>ISO:</p> 
<ul>
<li>Redesign of ISO menus (entries addition)</li>
</ul>
<p>Live system:</p>
<ul>
<li>Addition of USB persistence (keep your data during a live session)</li>
<li>Addition of encrypted persistence (encryption of persistent data)</li>
<li>Addition of the possibility to fully load your system in RAM (8GB RAM minimum)</li>
<li>Adding English in addition to French</li>
<li>Default password for the live: kaisen (replaces the blank password which prevented the session from being 
unlocked when the station was locked or put on standby live)</li>
</ul>
<p>System installation:</p>
<ul>
<li>Addition of the installer in expert and rescue mode</li>
<li>Disable network configuration (everything is contained in ISO and can be installed offline)</li>
<li>Deactivation of missing firmware message</li>
<li>Modification of the installer to deactivate the network configuration</li>
<li>Default hostname on kaisenlinux</li>
<li>No possibility to create root password during installation</li>
<li>Automatic restart at the end of installation</li>
</ul>
        </div>

      </div>
    </div>
  </div>
</section>

</div><!-- end Contact Area -->
<?php include('../footer.php');?>
