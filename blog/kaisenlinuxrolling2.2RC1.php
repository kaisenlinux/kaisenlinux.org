<?php include('../header.php');?>
<div id="content" class="single-blog">


<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <h1>Kaisen Linux Rolling 2.2RC1 Release Notes</h1>
        <ul class="list-inline mb-50">
          <li class="list-inline-item">Author: Kevin Chevreuil - Kaisen</li>
          <li class="list-inline-item">Date: 2022/08/20</li>
        </ul>
        <img class="img-fluid mb-50" src="../img/blog/screen-2.1.x.png" alt="blog-image">
      </div>
      <div class="col-lg-8 offset-lg-2">
        <div class="post-single-content">
          <h1 id="kaisenlinuxrolling">Kaisen Linux Rolling 2.2RC1 changelog</h1>
<p>Major bugs fixed with live systems. New cloud tools. Improvements of the GUI defaults profiles.</p>
<p>Codename: Rolling</p><br>
<p>This release is the first and the last release candidate before the 2.2 version releasing.</p>
<p>Her exist because some bugs can only be fixed with new ISOS, and it couldn't wait for the 2.2 release. For example, encrypted persistence did not work on live systems before these ISOS.</p>
<p>The other changes improve the netinstaller and GUI implementation. The default profiles are now installed in the /etc/xdg folder, to make it easier to reset user settings and integrate them for newly created users.<p>
<p>List of detailled changes:
  <ul>
    <li>Some minor bugs fixed</li>
    <li>Fix no present nm-applet on XFCE (fix also wifi not being able to be configured in the SR)</li>
    <li>Deletion of the kaisen-update-skel command (because default profiles are now installed in the /etc/xdg folder)</li>
    <li>Fix encrypted persistence did not work on live systems</li>
    <li>Add the openstack-client tool</li>
    <li>Improvements of XFCE and KDE default GUI</li>
    <li>Creation of default Kaisen theme for KDE</li>
    <li>Addition of more of 700 manpages to improve the documentation provided with Kaisen</li>
    <li>Improvements of the user documentation</li>
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
