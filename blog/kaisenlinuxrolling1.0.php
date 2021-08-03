<?php include('../header.php');?>

<div id="content" class="single-blog">
 

<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <h1>Kaisen Linux Rolling 1.0 Release Notes</h1>
        <ul class="list-inline mb-50">
          <li class="list-inline-item">Author: Kevin Chevreuil - Kaisen</li>
          <li class="list-inline-item">Date: 2020/05/19</li>
        </ul>
        <img class="img-fluid mb-50" src="../img/screen.png" alt="blog-image">
      </div>
      <div class="col-lg-8 offset-lg-2">
        <div class="post-single-content">
          <h1 id="kaisenlinux20200325">Kaisen Linux Rolling 1.0 changelog</h1>
<p>This first stable version. Continuous updating thanks to the repository and custom packages.</p>
<p>Codename: Rolling</p>
<p>IMPORTANT: You must download this ISO and to benefit from continuous updates (the construction of the system 
is completely different from beta versions), doing an upgrade just by adding the repository in your sources.list will only work partially.</p>
<p>After a month and a half of development, the stable version of Kaisen Linux has finally seen the light of day!
This version brings a lot of things, here is the exhaustive list:</p>
<ul>
    <li>No need to reinstall the OS to update!</li>
    <li>Based at Debian Testing (beta based at buster)</li>
    <li>Official repository: https://kaisen.lf.je/kaisen (another backup link is planned for the coming months)</li>
    <li>Linux kernel in 5.5</li>
    <li>Many metapackages for install all Kaisen Linux tools !</li>
    <li>Much lighter ISO, due to installation of only necessary packages</li>
    <li>Addition of more than 30 tools</li>
    <li>Removal of startup repair tools, zenmap, sslstrip and disk-manager as no longer supported by Debian testing</li>
    <li>MATE is on its latest version, correcting many graphic bugs</li>
    <li>Fully customized graphical installer</li>
    <li>The default file system is now BTRFS with partman-auto (BTRFS permit snapshot your system)</li>
    <li>All source here: https://gitlab.com/KaisenLinuxOS (will be filled soon)</li>
    <li>Package "kaisen-update" for update faster</li>
    <li>Package "kaisen-basemenu-purge" for keep base menu clean (delete duplicate icons in case of update with cron)</li>
    <li>Package "kaisen-mate" for install complete Kaisen Linux environment (menus, launchers, themes, icons, default user profile ...)</li>
    <li>Package "kaisen-grub-configuration" for personnalize GRUB (adding bootsplash and wallpaper even disk encrypted</li>
    <li>Miscellaneous tools added to menu (locate, gpg, mc and others)</li>
    <li>Adding gimp, qbittorrent, vlc, thunderbird by default</li>
    <li>We leave you other surprises :-)</li>
</ul>

<p>You can report bugs on Discord or by email at support[at]kaisen-linux[dot]org</p>
<p>Do not hesitate to vote for the integration of Kaisen Linux on Distrowatch on the following 
<a href="https://distrowatch.com/dwres.php?waitingdistro=553&resource=links" target="_blank">link</a> if you are satisfied with our work!</p>

<p>We are due this stable version, on behalf of the whole team, we thank you for bringing this project to life,
this motivates us to always go further!</p>

        </div>

      </div>
    </div>
  </div>
</section>

</div><!-- end Contact Area -->
<?php include('../footer.php');?>
