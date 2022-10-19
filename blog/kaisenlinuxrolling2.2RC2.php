<?php include('../header.php');?>
<div id="content" class="single-blog">


<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <h1>Kaisen Linux Rolling 2.2RC2 Release Notes</h1>
        <ul class="list-inline mb-50">
          <li class="list-inline-item">Author: Kevin Chevreuil - Kaisen</li>
          <li class="list-inline-item">Date: 2022/10/03</li>
        </ul>
        <img class="img-fluid mb-50" src="../img/blog/screen-2.1.x.png" alt="blog-image">
      </div>
      <div class="col-lg-8 offset-lg-2">
        <div class="post-single-content">
          <h1 id="kaisenlinuxrolling">Kaisen Linux Rolling 2.2RC2 changelog</h1>
<p>Bugs fixed with updates and snapshots. New cloud and DevOps tools. Improvements of hardware support.</p>
<p>Codename: Rolling</p><br>
<p>This release is the second release candidate before the 2.2 version releasing.</p>
<p>It exists because some bugs exist when launching an update, for example with APT snapshots and the raspi-firmware package which causes an error when rebuilding the initramfs.</p>
<p>These bugs have been fixed via APT since the release of 2.1, as the raspi-firmware package has been removed, and APT snapshots no longer have problems.<p>
<p>List of important changes (detailled changes will be announced in final 2.2):
  <ul>
    <li>Some minor bugs fixed</li>
    <li>Say hello to kaisen-timeshift-apt! The kaisen-timeshift-apt package replaces apt-btrfs-snapshot for APT snapshots!
    This package aims to fix performance issues with APT snapshots and be able to delete restored snapshots! 
    What was previously not possible is now a thing of the past!</li>
    <li>Linux 5.19</li>
    <li>Replaced firmware-* packages with linux-firmware-* packages designed by the Kaisen Linux team to fix the problem with the raspi-firmware package
      and provide improved hardware support combined with Linux 5.19</li>
    <li>The linux-firmware-* packages are also a complete package of the linux-firmware repository found on kernel.org to provide the latest firmware and better support for Wi-Fi and Mellanox drivers in their most recent versions.</li>
    <li>Add few tools as lazydocker, lazygit, jq and yq</li>
    <li>Restoring snapshots is now possible directly via GRUB thanks to the grub-btrfs package. Thanks to this, snapshots can be restored simply by booting from a snapshot.</li>
    <li>Improved dependencies in packages for some tools like Minikube and VirtualBox. This ensures that the tools work better if they are installed outside the metapackages provided by Kaisen.</li>
    <li>Kubectl is now in the 1.25 version</li>
    <li>The CVE-2007-4559 in the gns3-gui package is fixed. Thanks to the Trellix company to the report!</li>
  </ul>
</p>

<p>Thank you all for your support, thank you for using Kaisen Linux and for being part of this wonderful adventure!</p>

<p>You can report bugs on the forum available at <a href="https://forum.kaisenlinux.org" target="_blank">here</a>.</p>

        </div>

      </div>
    </div>
  </div>
</section>

</div><!-- end Contact Area -->
<?php include('../footer.php');?>
