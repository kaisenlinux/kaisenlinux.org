<?php include('../header.php');?>
<div id="content" class="single-blog">


<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <h1>Kaisen Linux Rolling 1.6 Release Notes</h1>
        <ul class="list-inline mb-50">
          <li class="list-inline-item">Author: Kevin Chevreuil - Kaisen</li>
          <li class="list-inline-item">Date: 2021/03/31</li>
        </ul>
        <img class="img-fluid mb-50" src="../img/blog/screen-1.1.x.png" alt="blog-image">
      </div>
      <div class="col-lg-8 offset-lg-2">
        <div class="post-single-content">
          <h1 id="kaisenlinuxrolling">Kaisen Linux Rolling 1.6 changelog</h1>
<p>New revision of the rolling. Lot ameliorations. New tools and new conky theme. Bugs fixed.</p>
<p>Codename: Rolling</p>
<p>After more than 2 and a half months of work, Kaisen Linux Rolling has just arrived in
revision 1.6! This revision brings great new features, both in functionality and bug fixes. 
We are proud to present to you all the changes made to this revision.<p>
<p>This revision is above all marked by the total overhaul of our infrastructure, so we had 
to change the official domain.<br>
We also did a complete overhaul of the blog and documentation which is now generated through 
an Elixir project and is no longer a wiki.<br>
This is intended to facilitate contributions to documentation maintenance.<br>
Thanks to this, we were able to set up a forum for our community, and the address of the 
package repository is now a subdomain of the main domain and is faster than the previous one.
This new ISO therefore takes advantage of the new address of the package repository and a 
lot of things have also been changed on the distribution, here is the changelog.</p>
	<ul>
	<li>Addition of 30 new tools including almost ten packaged by the team</li>
    <li>Conky ported to the 4 graphical interfaces</li>
    <li>Conky theme automatically updated on all users of the system when updating the 
	kaisen-mate, kaisen-kde, kaisen-lxde or kaisen-xfce package</li>
    <li>Addition as of the installation of the system in automatic partitioning 
	(obligatorily BTRFS since 1.0) or manual (if BTRFS is chosen) of the subvolumes 
	allowing to create system snapshots</li>
	<li>Automatic snapshots when using APT</li>
	<li>Linux updated to 5.10</li>
	<li>Redesign of the default profile of LXDE (addition of 4 virtual desktops, addition of 
	a disconnect button at the bottom right of the taskbar)</li>
	<li>The launchers of the services menu are now available if the tool installing the 
	service is installed, and the launchers are no longer displayed by the presence of the 
	kaisen-services-management package (fully dynamic services menu)</li>
	<li>Addition of the services menu on the SR branch</li>
	<li>Full transparency of Conky on the wallpaper on all interfaces (the borders of his 
	window are no longer visible)</li>
	<li>Optimization of the default KDE profile (and correction of the bug of the default 
	use of the French language on live English, Spanish, Portuguese, Italian or German which 
	was linked to the construction of the default KDE profile that we have fact)</li>
	<li>New management of metapackages, the packages installed by the metapackets are now 
	completely independent of each other, to facilitate the uninstallation of a tool by the 
	user without having to uninstall everything else in autoremove (executed automatically 
	by kaisen-update ). The preinstalled packages can now be uninstalled therefore by an 
	apt remove.</li>
	<li>The conky and the "additional" software packages installed by the GUI metapackages 
	are now completely uninstallable (like Conky)</li>
	<li>Interface switcher have been greatly improved and packages are now removed using a 
	regex to uninstall all dependencies for each interface which limits the risk of crash</li>
	<li>The dhclient command has been integrated on the interface switcher to renew the DHCP 
	lease of a machine (to alleviate the problems of uninstalling network-manager, 
	no problem with static addresses however)</li>
	<li>Addition of alternatives on Kaisen Linux secondary themes and addition of the default 
	Plymouth theme of the Kaisen theme (before it was the Debian one which was forked)</li>
	<li>Documentation and manpages packaged and available directly offline and directly 
	accessible via the various tools menu</li>
	<li>Removed TeamViewer and Anydesk by default</li>
	<li>Services menu deleted via a dpkg trigger if the scripts are deleted by hand and not 
	by uninstalling the kaisen-services-management package (if the package is uninstalled or 
	the scripts deleted by hand, the services menu will also disappear)</li>
	<li>Added the cryptsetup-nuke-password offensive security tool to strengthen the 
	security provided by LUKS</li>
	<li>Over 1000 packages have been upgraded</li>
	</ul>
</p>

<p>Bugs fixed:</p>
<p>Importants bugs are fixed. Here is the list:</p>
<ul>
	<li>Default profile now installed on the root session</li>
	<li>KDE default profile purged to fix live issue only in French</li>
	<li>Fixed non-dynamic service menu</li>
	<li>KDE and double launch of Conky corrected (at session start)</li>
	<li>Over a hundred launchers in the menu returned return codes other than 0</li>
</ul>

<p>How to properly update the system?</p>
<ul>
	<li>sudo kaisen-update</li>
</ul>

<p>This is by no means mandatory, but I also recommend that you use the kaisen-update-skel command to put the entire 
	contents of /etc/skel on the directory for all users. However this will make you lose your personalization on 
	your desktop environment, use it as a precaution.</p>

<p>How do I check if I am in version 1.6? Use this command:</p>
<ul>
    <li><strong>cat /etc/debian-version</strong></li>
</ul>
<p>This command should return "Rolling 1.6".
If you are using Kaisen Linux only as a live DVD version, download the ISO again rather 
than doing the updates.<br>

<p>Thank you all for your support, thank you for using Kaisen Linux and for being part 
of this wonderful adventure!</p>

<p>You can report bugs on the forum available at <a href="https://forum.kaisenlinux.org" target="_blank">here</a></p>
<p>Do not hesitate to vote for the integration of Kaisen Linux on Distrowatch on the following 
<a href="https://distrowatch.com/dwres.php?waitingdistro=553&resource=links" target="_blank">link</a> if you are satisfied with our work!</p>

        </div>

      </div>
    </div>
  </div>
</section>

</div><!-- end Contact Area -->
<?php include('../footer.php');?>
