<?php include('../header.php');?>
<div id="content" class="single-blog">


<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <h1>Kaisen Linux Rolling 1.8 Release Notes</h1>
        <ul class="list-inline mb-50">
          <li class="list-inline-item">Author: Kevin Chevreuil - Kaisen</li>
          <li class="list-inline-item">Date: 2021/08/04</li>
        </ul>
        <img class="img-fluid mb-50" src="../img/blog/screen-1.1.x.png" alt="blog-image">
      </div>
      <div class="col-lg-8 offset-lg-2">
        <div class="post-single-content">
          <h1 id="kaisenlinuxrolling">Kaisen Linux Rolling 1.8 changelog</h1>
<p>New revision of the rolling. Real final 1.x release. Revision of the NETINST ISO.</p>
<p>Codename: Rolling</p>
<p>This release is in fact a "1.7.1". There are no changes to the distribution except 
for some updates and additions and updates to the default profile.<br>
When updating the tasksel tool which allows here to integrate the selection of tools as 
well as the deactivation of services directly in the installer, the configurator was 
removed and "broke" some things offered by the old configurator (launched post-installation).<br>
The disabling of services as well as the complete installation of guests and the activation 
of VirtualBox at startup if installed, can no longer be done via the tools provided for 
Kaisen unless you update the ISO, which is done here.<br>
This is the only reason and the only change since 1.7.<br>
The lives systems have not had any changes except for the default profile which has been updated.<br>
<p>Changes made to the default profile and softwares installed with interfaces:</p>

	<ul>
	<li>Removal of visible dotfiles on Thunar (on the XFCE interface)</li>
    <li>Add a launcher on the taskbar of the default text editor of each interface</li>
    <li>Added gedit to the XFCE interface to provide a graphical text editor by default</li>

	</ul>
</p>

<p>The next release will be the 2.x series (really this time), based on the future Debian 12!</p>

<p>How to properly update the system?</p>
<ul>
	<li>sudo kaisen-update</li>
</ul>

<p>This is by no means mandatory, but I also recommend that you use the kaisen-update-skel command to put the entire 
	contents of /etc/skel on the directory for all users. However this will make you lose your personalization on 
	your desktop environment, use it as a precaution.</p>

<p>How do I check if I am in version 1.8? Use this command:</p>
<ul>
    <li><strong>cat /etc/debian-version</strong></li>
</ul>
<p>This command should return "Rolling 1.8".
If you are using Kaisen Linux only as a live DVD version, download the ISO again rather 
than doing the updates.<br>

<p>Thank you all for your support, thank you for using Kaisen Linux and for being part 
of this wonderful adventure!</p>

<p>You can report bugs on the forum available at <a href="https://forum.kaisenlinux.org" target="_blank">here</a></p>

        </div>

      </div>
    </div>
  </div>
</section>

</div><!-- end Contact Area -->
<?php include('../footer.php');?>
