<?php include('../header.php');?>
<div id="content" class="single-blog">


<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <h1>Kaisen Linux Rolling 1.4 Release Notes</h1>
        <ul class="list-inline mb-50">
          <li class="list-inline-item">Author: Kevin Chevreuil - Kaisen</li>
          <li class="list-inline-item">Date: 2020/08/30</li>
        </ul>
        <img class="img-fluid mb-50" src="../img/screen.png" alt="blog-image">
      </div>
      <div class="col-lg-8 offset-lg-2">
        <div class="post-single-content">
          <h1 id="kaisenlinuxrolling">Kaisen Linux Rolling 1.4 changelog</h1>
<p>New revision of the rolling. End summer release. New tools and renew conky. Bugs fixed.</p>
<p>Codename: Rolling</p> 
<p>This review is by far the most technical I have done (with the 1.3 revision).<br>
	It is a continuation of revision 1.3 and now the entire project has been reworked. 
	All system configurations that were previously managed by scripts are now managed by conffiles allowing
	the user to better control his system and not be dependent on the default customization.<br>
	I wasn't planning on releasing revision 1.4 right away, but during those 10 days, I did a lot of things 
	on the project, and some of them unintentionally caused a bug with the Calamares live installer. Indeed, 
	as I updated, the GRUB customization package (kaisen-grub-configuration), Calamares no longer finding it, 
	crashed during installation.<br>
	Other than that, no bugs reported or found, but I continued my areas of improvement by imagining myself as a user and more as a developer and do a lot of things to allow users to fully customize the OS.
	For example, Conky has been revised a second time to provide more additional information on the system, 
	the network status (what interfaces are connected), the icons have all been moved to a single place 
	(allows you to keep the menu icons, if the user were to add a custom icon theme). Other more technical things 
	were done, and I also worked on new packages, like sslscan and apfs-fuse.<br>
	Debian does an amazing job and is one of the most bundled distributions out of the box. However, some tools are not packaged, and I have to do it myself.
	This was currently the case for sslscan, bettercap, bettercap-ui, bettercap-caplets, packetsender
	(recently arrived in testing, but I packaged it before, so I kept my package and its settings) and apfs-fuse.<br>
	Debian provides a FUSE driver for APFS, but has not been updated for almost 2 years, and this is problematic on 
	recent versions of MacOS. So I found an alternative, and I packaged it then I replaced the driver provided by Debian,
	and this is completely transparent for the user, the menu always shows him the commands, even if the tool changes,
	you are informed :-).<br>
	SSLscan is useful for parsing different SSL/TLS certificates, and it is in my opinion more complete than the tools
	provided by Debian (which already do the job very well), it can be useful for some tests.<br>
	PacketSender was created to replace the PacketSender in AppImage in /opt which was integrated during the 
	construction of the ISO. The fact of packaging it, in addition to being a "cleaner" solution, will allow 
	the software to be updated automatically via APT.<br><br>
	This revision is probably the most stable I have done so far, it is now that I really consider Kaisen Linux stable.<br>
	I also corrected the kaisen-services-management package, as well as the systemd hook when building the ISOS, 
	the system has improved performance and consumes less RAM.<br>
	The timeshift tool has also been added, allowing you to take snapshots of your system whenever you want. 
	The CLI version as well as the GUI are installed (this can be useful in case of problem), however, it is necessary 
	to create BTRFS sub-volumes and this requires some manual operations, you can refer to the documentation to know how 
	to proceed.</p>
    <p>Despite all these changes, the entire system can be updated with APT without any problem.</p>

<p>Now that the full details on this revision have been given, here is a detailed changelog, 
	changes made to achieve this result:</p>
<ul>
	<li>New Linux 5.7.17</li>
	<li>Reworked Conky.</li>
	<li>All menus icons move on /usr/share/pixmaps/kaisen (and are no longer copied on defaults interface themes).</li>
	<li>Kaisen Linux GRUB configuration is now conffile.</li>
	<li>Firefox update at 80.</li>
	<li>This tools are now included: cifs-tools, sslscan (home package), bettercap-ui (home package), bettercap-caplets (home-package), apfs-fuse (home package), apfsutil (home package),
	postgresqlbackup, timeshift, awscli</li>
	<li>This tools are now removed: libfsapfs (replace by apfs-fuse and apfsutil), dwagent (Python 2.7 is depreciated)</li>
	<li>The kaisen-services-management package are reworked to reduce RAM used on post installation.</li>
	<li>Memtest86+ entries on GRUB installed are now removed.</li>
	<li>Calamares live installation GRUB are now fixed.</li>
	<li>The locate tool are replaced by mlocate (most securely)</li>
	<li>Add lightdm-gtk-greeter-settings tool to easily personnalise lightdm</li>
</ul>

<p>How to properly update the system?</p>
<ul>
	<li>sudo kaisen-update</li>
</ul>

<p>For LXDE and MATE users:</p>
<p>To copy the new conky, issue the following command:</p>
<ul>
	<li>cp /etc/skel/.conkyrc $HOME</li>
</ul>

<p>You can also copy the new conky theme to LXDE. KDE and XFCE do not have a conky preinstalled by default.</p>
<p>This is by no means mandatory, but I also recommend that you use the kaisen-update-skel command to put the entire 
	contents of /etc/skel on the directory for all users. However this will make you lose your personalization on 
	your desktop environment, use it as a precaution.</p>

<p>How do I check if I am in version 1.4? Use this command:</p>
<ul>
    <li><strong>cat /etc/debian-version</strong></li>
</ul>
<p>This command should return "Rolling 1.4".
<p>Now Conky can give you in real time (if the base-files package is updated) your version number. 
	You can also look at the value after OS Version, which should now return "Kaisen Rolling 1.4" normally.</p>
If you are using Kaisen Linux only as a live DVD version, download the ISO again rather than doing the updates.<br>
If you are still on the beta versions, adding the repository will not be enough, download this ISO and install the system to take full advantage of the continuous update.

<p>Thank you all for your support, thank you for using Kaisen Linux and for being part of this wonderful adventure!</p>

<p>You can report bugs on Discord or by email at support[at]kaisen-linux[dot]org</p>
<p>Do not hesitate to vote for the integration of Kaisen Linux on Distrowatch on the following 
<a href="https://distrowatch.com/dwres.php?waitingdistro=553&resource=links" target="_blank">link</a> if you are satisfied with our work!</p>

        </div>

      </div>
    </div>
  </div>
</section>

</div><!-- end Contact Area -->
<?php include('../footer.php');?>
