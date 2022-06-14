<?php include('../header.php');?>
<div id="content" class="single-blog">


<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <h1>Kaisen Linux Rolling 2.1 Release Notes</h1>
        <ul class="list-inline mb-50">
          <li class="list-inline-item">Author: Kevin Chevreuil - Kaisen</li>
          <li class="list-inline-item">Date: 2022/06/14</li>
        </ul>
        <img class="img-fluid mb-50" src="../img/blog/screen-2.1.x.png" alt="blog-image">
      </div>
      <div class="col-lg-8 offset-lg-2">
        <div class="post-single-content">
          <h1 id="kaisenlinuxrolling">Kaisen Linux Rolling 2.1 changelog</h1>
<p>Lots of improvements on the design. New cloud and tech tools. Improvements of the packages and confs.</p>
<p>Codename: Rolling</p><br>
<p>After 6 months of intensive work, here is the 2.1 version of Kaisen Linux. This release marks above all the arrival of a new official wallpaper, after more than 2 years of improvements on the first one!<br>
<p>Big graphic improvements on logos, menus and plymouth theme have been done.</p></br>
<p>Detailled and significant changes:<p>
<p>ZSH is no longer the default terminal for Kaisen Linux! It was since the first release of Kaisen Linux the default terminal, but the majority of users asked for the return of Bash by default, 
which has been done on this release. Several polls on the different social network pages have been done for this.
However, it is still installed as it was before (with oh-my-zsh), and it is possible to reset it to the default. The documentation is here: <a href="https://kaisenlinux.org/documentation/zsh.html" target="_blank">ZSH on Kaisen Linux</a>.</p></br>
<p>The Conky theme is no longer installed by default with the GUIs, but is a separate package named kaisen-conky, which is no longer installed by default. 
The reason for this is that user feedback was not unanimous about the default presence of Conky on Kaisen Linux and therefore it is now considered a "goodie" and can be installed optionally.</p></br>
<p>Each logo added for the launchers or menus has been enlarged as much as possible in order to make the menus as uniform as possible and have logos of a similar size.</p></br>
<p>The complete logo of Kaisen Linux has been enlarged on the Plymouth theme so that it can occupy more space on the screen.</p></br>
<p>The icons in the menu launching a terminal now have their official logo instead of a terminal logo<p></br>
<p>Password management tools like apg, keepassxc and pwgen are now installed with the miscellaneous tools and are listed as such on the menu.</p></br>
<p>VirtualBox packages have been forked and reworked to install the /etc/modules-load.d/virtualbox.conf file when VirtualBox packages are installed. 
This allows to have the modules loaded automatically at startup without installing the whole metapackage providing VirtualBox.</p></br>
<p>Docker will now use the overlay2 storage driver by default. Docker used to use the BTRFS storage driver when BTRFS is used on Kaisen Linux.
This caused a considerable lack of space due to BTRFS snapshots of containers. Using the Docker overlay2 driver fixes this problem without having to specifically repartition your system for Docker.
The conffile managing this parameter is located in /etc/docker/daemon.json.</p></br>
<p>An in-house tool named kaisen-winkey-recovery has been developed to recover the Windows OEM key present in the motherboard of computers and is integrated by default with the hardware tools.
The purpose of this tool is to recover this key for reinstalling Windows. Kaisen Linux or myself cannot be responsible for any illegal use of this key recovered with this tool.</p></br>
<p>Use the breeze mouse pointer for all interfaces instead of the redglass mouse pointer.</p></br>
<p>MATE is now in version 1.26.0</br>KDE is now in version 5.24.5</p></br>
<p>The menu services scripts are now located in /usr/share instead of /opt.</p></br>
<p>The HTML pages of the offline documentation and the offline manpages are now in /usr/share instead of /opt.</p></br>
<p>Improved default profiles such as uniform fonts, terminal themes...</p></br>
<p>The installer no longer displays a message when automatic partitioning is executed and does not create a swap partition.</p></br>
<p>Removed Kaisen Terminal and Firefox launchers from the desktop to create the /home/user/desktop folder in the user's language.</p></br>
<p>This new release on live versions also fixes CVE-2021-3560 (Polkit) and CVE-2022-0492 (Linux Cgroups).</p></br></br>

<p>Kaisen Linux also comes with several new tools for sysadmins, cloud engineers, technicians, various tools...</p></br>

<p>The list below are the new filesystems tools availables on Kaisen Linux:
	<ul>
	  <li>ntfs-3g</li>
    <li>gvfs</li>
    <li>gvfs-fuse</li>
    <li>wimtools</li>
	</ul>
</p>

<p>The list below are the new tools available for technicians on Kaisen Linux:
  <ul>
    <li>iotop</li>
    <li>czkawka (find duplicates files)</li>
    <li>dc3dd</li>
    <li>dupeguru (find duplicates files)</li>
    <li>gtkstresstesting</li>
    <li>nvme-cli</li>
    <li>qphotorec (home repackaging of testdisk)</li>
    <li>qt-fsarchiver</li>
    <li>stressapptest</li>
    <li>kaisen-winkey-recovery (find Windows OEM key)</li>
    <li>wipefreespace</li>
    <li>wxfixboot</li>
    <li>hwdata</li>
    <li>whdd</li>
  </ul>
</p>

<p>The list below are the new sysadmins tools availables on Kaisen Linux:
	<ul>
	  <li>borgbackup</li>
    <li>bridge-utils</li>
    <li>rdiff</li>
    <li>smbclient</li>
    <li>rclone</li>
	</ul>
</p>

<p>The list below are the new miscellaneous tools availables on Kaisen Linux:
	<ul>
    <li>fred</li>
    <li>gpa</li>
    <li>isomaster</li>
    <li>btop</li>
	</ul>
</p>

<p>The list below are the new DevOps and cloud tools availables on Kaisen Linux:
	<ul>
	  <li>kind</li>
    <li>krew</li>
    <li>kubectx</li>
    <li>kyverno</li>
    <li>popeye</li>
    <li>tfsec</li>
    <li>vault</li>
    <li>terragrunt</li>
    <li>pdk</li>
    <li>velero</li>
    <li>
	</ul>
</p>

<p>The list below are the new networking tools availables on Kaisen Linux:
	<ul>
	  <li>notwireshark (tshark in python)</li>
    <li>openfortivpn</li>
    <li>linssid</li>
    <li>gtkterm</li>
	</ul>
</p>

<p>Tools no longer installed by default:
  <ul>
	  <li>qtop</li>
    <li>memstat</li>
    <li>irqbalance</li>
    <li>squashfuse</li>
    <li>fuseiso</li>
    <li>fuse-zip</li>
	</ul>
</p>

<p>The following list of tools are the tools that have been updated since release 2.0:
  <ul>
    <li>Linux is now in version 5.17.3</li>
    <li>Packer is now in version 1.8.1</li>
    <li>Puppet is now in version 7.17.0</li>
    <li>Kubernetes is now in version 1.24.1</li>
    <li>GNS3 is now in version 2.2.32</li>
    <li>VirtualBox is now in version 6.1.34</li>
    <li>GTKhash is now in version 1.4</li>
</p></br></br>

<p>If you want to find the old wallpapers, you can find them here : <a href="https://gitlab.com/kaisenlinux/graphisme/backgrounds/-/tree/master/desktop" target="_blank">Old 1.x wallpaper</a>.</p>

<p>We wanted to make this release as close as possible to your expectations in terms of the changes we have made to the design, and we thank you for that!
So we softened the graphic charter on the red color, less present by default and we don't install Conky by default anymore (but reinstallable if needed thanks to the kaisen-conky package).</br>
We hope you enjoy it as much as we enjoyed making it!
</p></br></br>

<p>How do I check if I am in version 2.1? Use this command:</p>
<ul>
    <li><strong>cat /etc/debian_version</strong></li>
</ul>
<p>This command should return "Rolling 2.1".
If you are using Kaisen Linux only as a live DVD version, download the ISO again rather 
than doing the updates.</p><br>

<p>Thank you all for your support, thank you for using Kaisen Linux and for being part 
of this wonderful adventure!</p>

<p>You can report bugs on the forum available at <a href="https://forum.kaisenlinux.org" target="_blank">here</a>.</p>

        </div>

      </div>
    </div>
  </div>
</section>

</div><!-- end Contact Area -->
<?php include('../footer.php');?>
