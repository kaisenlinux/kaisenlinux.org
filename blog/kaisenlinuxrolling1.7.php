<?php include('../header.php');?>
<div id="content" class="single-blog">


<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <h1>Kaisen Linux Rolling 1.7 Release Notes</h1>
        <ul class="list-inline mb-50">
          <li class="list-inline-item">Author: Kaisen</li>
          <li class="list-inline-item">Date: 2021/07/19</li>
        </ul>
        <img class="img-fluid mb-50" src="../img/screen.png" alt="blog-image">
      </div>
      <div class="col-lg-8 offset-lg-2">
        <div class="post-single-content">
          <h1 id="kaisenlinuxrolling">Kaisen Linux Rolling 1.7 changelog</h1>
<p>New revision of the rolling. Final 1.x release. Lot of ameliorations. New ISOS.</p>
<p>Codename: Rolling</p>
<p>After 4 months of work, I am proud to present you the final version of the 1.x series!<br>
This is the final release because Debian has now frozen Bullseye and Kaisen has reached a 
real stability and positive feedback from almost all users, which is a good indicator of 
quality for me!<br>
The next release will be the 2.x series, based on the future Debian 12!</p>
<p>This release also marks the arrival of Kaisen on Distrowatch! It's a real pleasure and 
honor to be part of the official Distrowatch lists, it will hopefully allow us to get 
more feedback on the distribution!</p>
<p>I also put 2 new ISOS online, after several candidate releases.<br>
The ISO CONSOLE and NETINST.<br>
The ISO CONSOLE is a fully command line live, without preinstalled GUI or X server.
This mainly allows to have a very fast backup system, on the less performing machines.<br>
The ISO NETINST is an ISO allowing to install a light Kaisen Linux environment and entirely 
configurable according to your desires!<br>
You will be able to select the graphical interface of your choice during the installation 
and to install the configurator provided for this purpose.</p>
<p>The changelog is also substantial, because a lot of work has been done outside of these 
two new ISOS to improve the distribution at all levels, here it is:</p>

	<ul>
	<li>New BTRFS mount options for Kaisen Linux</li>
	<li>Removal of the noatime option to allow the deletion of snapshots 
		(replaced by the relatime option to limit disk writes)</li>
	<li>Removed gksu in favor of a polkit for graphical tool launchers</li>
	<li>Removed unused dependencies on conkycolors</li>
	<li>Added smilies support for openvpn client on all interfaces</li>
	<li>Updated Linux to 5.10.46</li>
	<li>Updated Firefox to version 88</li>
	<li>Guests are now installed by kaisen-build via the common folder, and removed 
		automatically by the installer depending on the environment in which Kaisen is installed 
		(e.g. if you use VMWare you will only have VMWare guests installed, if you don't use any 
		hypervisor, all guests will be removed).</li>
	<li>Tools for administrators categorized in several metapackages in order to install or 
		uninstall only a part of the tools (e.g. just the DNS tools, or the GNS3 stack, 
		SysOps tools and not the complete set)</li>
	<li>Translations as well as the description of a third of the launchers reworked 
		(by putting less generic descriptions and avoiding too many repetitions)</li>
	<li>Removed the cron task for deleting "double" launchers and replaced it with a dpkg 
		trigger launched by kaisen-menu (to avoid depending "unnecessarily" on cron for 
		this, and avoid launching the task without it being necessary)</li>
	<li>Live system only console available</li>
	<li>NETINST ISO available with a configurator running by default after installation, 
		allowing you to install more software via Kaisen Linux preconfigurations at your 
		convenience, and also perform some tasks like installing Linux headers, among others</li>
	<li>Fixed a bug in the skel that removed the .conkyrc file when updating the package</li>
	<li>Replaced Google by DuckDuckGo as default search engine</li>
	<li>Fixed modprobe vboxdrv "bug". The module is now launched by default at startup on 
		the live, and will also be added automatically on the NETINST ISO if VirtualBox is 
		installed via the configurator</li>
	<li>GNS3 client and server update</li>
	<li>Update of the "Material" themes</li>
	<li>Change of the login wallpaper</li>
	<li>Tools for TCP and UDP protocol indexed in the same menu</li>
	<li>Updated the Pluma theme (text editor provided on MATE), applying a dark theme to 
		make it compatible with the themes preinstalled on Kaisen</li>
	<li>Added a patch to allow auto-connection on the KDE live</li>
	<li>Added s3fs, fdupes and cpu-x tools</li>

	</ul>
</p>

<p>How to properly update the system?</p>
<ul>
	<li>sudo kaisen-update</li>
</ul>

<p>This is by no means mandatory, but I also recommend that you use the kaisen-update-skel command to put the entire 
	contents of /etc/skel on the directory for all users. However this will make you lose your personalization on 
	your desktop environment, use it as a precaution.</p>

<p>How do I check if I am in version 1.7? Use this command:</p>
<ul>
    <li><strong>cat /etc/debian-version</strong></li>
</ul>
<p>This command should return "Rolling 1.7".
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
