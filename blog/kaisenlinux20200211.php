<?php include('../header.php');?>
<div id="content" class="single-blog">


<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <h1>Kaisen Linux 20200211 Release Notes</h1>
        <ul class="list-inline mb-50">
          <li class="list-inline-item">Author: Kevin Chevreuil - Kaisen</li>
          <li class="list-inline-item">Date: 2020/04/03</li>
        </ul>
        <img class="img-fluid mb-50" src="../img/screen.png" alt="blog-image">
      </div>
      <div class="col-lg-8 offset-lg-2">
        <div class="post-single-content">
          <h1 id="kaisenlinux20200211">Kaisen Linux 20200211 changelog</h1>
<p>This new release is revision of version 20200206. Minors fix. Minors updates. Menus reworked.</p>
<p>Codename: Titanic</p>
<p>Softwares updates:</p>
<ul>
<li>Linux updated to 5.3.9 version</li>
<li>balenaetcher to 1.5.76 version</li>
<li>Addition Kaisen Linux website in bookmarks pages at Mozilla Firefox default profile</li>
</ul>
<p>Added softwares and hardware support:</p>
<ul>
<li>The asciidoc package was introduced to manage as much as possible the dependencies necessary for 
compiling fuse drivers (example: vmfs-fuse)</li> 
</ul>
<p>Graphical interface:</p>
<ul>
<li>The syslinux and grub start menus have been reworked and 3 entries are now displayed with their 
corresponding entries as submenu (example: Kaisen Linux Live (en), will contain all the configurations of 
version 20200206 for support of live in English etc). We can call this a category creation.</li>
</ul>
<p>Minor fix:</p>
<ul>
<li>The .zshrc file has been modified to set the zsh variable to $HOME and more to /etc/skel (same on /root)</li>
<li>The os-variant file has been reintroduced to keep the customization of grub if the Debian base-files package 
is updated (lsb_release reads entries from /etc/os-variant and more from /etc/os-release which can change with 
Debian updates)</li>
<li>Bug of the "ghost" menu corrected (clear line removed on .zshrc and .bashrc files, same on /root, bug automatically 
erasing the terminal when using a launcher displaying a help page on the terminal)</li>
</ul>
        </div>

      </div>
    </div>
  </div>
</section>

</div><!-- end Contact Area -->
<?php include('../footer.php');?>
