<?php include('../header.php');?>
<div id="content" class="single-blog">


<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <h1>Kaisen Linux Rolling 1.5 Release Notes</h1>
        <ul class="list-inline mb-50">
          <li class="list-inline-item">Author: Kevin Chevreuil - Kaisen</li>
          <li class="list-inline-item">Date: 2020/12/13</li>
        </ul>
        <img class="img-fluid mb-50" src="../img/screen.png" alt="blog-image">
      </div>
      <div class="col-lg-8 offset-lg-2">
        <div class="post-single-content">
          <h1 id="kaisenlinuxrolling">Kaisen Linux Rolling 1.5 changelog</h1>
<p>New revision of the rolling. Lot ameliorations. New tools and design. Bugs fixed.</p>
<p>Codename: Rolling</p>
<p>Happy birthday Kaisen! Kaisen Linux have one year now!</p> 
<p>After 4 months of work, the project went into revision 1.5. I will detail here what has been done during these many months.</p>
<p>Revision 1.5 is marked by three our partnership with <a href="https://www.ldnr.fr/" target="_blank">LDNR formation</a> <a href="https://scalarx.com/" target="_blank">ScalarX</a> and <a href="https://digital-network.net/" target="_blank">Digital Network.</a><br>
	LDNR formation is a French training organization whose vocation is to train technicians and system and network 
	administrators. LDNR having tested and approved Kaisen Linux, train their students on our distribution!
	In return, I provide them with full support when needed and ISO images at their request and adapted to their needs.
	Thank you for their trust!<br>
	ScalarX is an international company specialized in the research, development and application of innovative technological solutions in the fields of technologies and sciences like :
    Cloud, IT, security, communications, biotechnology, robotic, AI,  nanotechnology, engineering, cybernetic, energy, astronomy, etc.
    ScalarX is now our official sponsor! I personally thank ScalarX.<br>
    Digital Network is a company specialized in Linux infrastructures hosting and outsourcing.
    Digital Network graciously offers us our IT infrastructure for Kaisen Linux! I personally thank Digital Network.</p>
<p>We also completely redesigned our main website to make it more presentable, clear, and attractive.</p>
<p>The last important news is the arrival of an ISO entirely dedicated to system rescue. It is an ISO under LXDE, 
	embedding only the tools dedicated to the maintenance of computers, and does not have an installer. 
	The objective was to obtain a lighter ISO for older machines by limiting the preinstalled tools, 
	and thus have a rescue system (this is one of the possible uses of Kaisen Linux) that is efficient, 
	up to date and providing extensive support filesystems and drivers.</p>
<p>On top of that, over 1000 packages have been updated and big changes and new tools are present, here they are:</p>
<p>
	<ul>
	<li>Full Kerberos support for Windows authentication (eg for SAMBA shares) is included.</li>
	<li>VPN IP section added in Conky.</li>
	<li>Puppet is now included in SysOps tools.</li>
	<li>Tools added : Veracrypt (packaging for Kaisen Linux)<br>
		Complete GNS3 tools packaged for Kaisen Linux(dynamips, vpcs, GNS3 client and server, ubridge)<br>
		KVM and libvirt is now included<br>
		Woeusb (create Windows bootable USB key) is packaged, but not included by default,
		because woeusb depend grub-pc-bin to work, and is conflict with UEFI installation<br>
		Bloodhound to testing Active Directory security and neo4j server (bloodhound dependancy)</li>
	<li>Important updated:<br>
		Linux is updated in 5.9.11 version<br>
		Powershell is updated in 7.1<br>
		Services menu is reworked. Bacula, ClamAV have now only launcher for all daemons.
		2ping, Arpalert and HDDtemp is now included.<br>
		This is completely transparent to the user, but most of the packages like the different interfaces as well as 
		the metapackages for installing the tools have a single common source, kaisen-tools for the tools and 
		kaisen-interfaces for the GUIs. This makes it possible to have the same version numbers of packages for each 
		update, and facilitates the maintenance of our packages.<br>
		KDE is now installed with lightdm, for the sake of standardization as well as correct some problems related to SDDM.<br>
		Complete redesign of the graphical installer interface.</li>
	</ul>
</p>

<p>Important details:</p>
<p>I want to highlight, although this is optional for the proper functioning of the distribution, two points on which 
	I have worked a lot. This is important for users who want to make their own versions of Kaisen Linux as well as 
	users who want to switch GUIs.<br>
	Let's start with kaisen-build:<br>
	The package for building official ISO images for the project has been updated many times to bring the following:
	<ul>
		<li>Creation of the variant/CUSTOM folder dedicated to users wishing to do their ISOs.</li>
		<li>The CUSTOM folder is not altered, nor deleted in case of update of the package or even an accidental uninstallation.</li>
		<li>Creation of the SR branch, dedicated to the rescue system, and without an installer.</li>
	</ul></p>
<p>News on kaisen-interface-switcher:</p>
<p>Before, the script delivered with the graphical interface that you installed, was content to simply delete your 
	current graphical interface and replace it with the one of your choice (among the 4 official ones supported).<br>
	There was no error management, nor essential checks, such as access to the package download for example which could 
	leave you without a graphical interface (a manual reinstallation was necessary).<br>
	A while back, KDE was also problematic, because it wrote in users GTK folders its own settings, which conflicted with other GUIs.<br>
	After the various user feedback, and my own observations, I worked on the following points:<br>
	<ul>
		<li>Addition of the internet accessibility check, as well as the connection interface (wifi, ethernet, USB modem etc).</li>
		<li>Automatic saving of the graphical parameters of each user per interface (for example, if the interface 
			switcher version MATE is started, it will save all the profile linked to MATE) of the system having a /home 
			directory, which will be reapplied automatically in the event of rollback on this interface.</li>
	</ul>
	I work on this a lot because I think it's important to make it easy to install other GUIs on your system without 
	having to reinstall or break anything.
</p>
<p>Bugs fixed:</p>
<p>Importants bugs are fixed. Here is the list:</p>
<ul>
	<li>KDE menu not updating has been fixed</li>
	<li>The missing icons and wallpapers on XFCE have been fixed</li>
	<li>The script kaisen-interface-switcher have been fixed</li>
	<li>Linux updates broken persistence USB key. This problem is now fixed.</li>
</ul>

<p>How to properly update the system?</p>
<ul>
	<li>sudo kaisen-update</li>
</ul>

<p>For KDE users:<br>
	I advice you to use ligthdm. For switch to lightdm use this command:
<ul>
	<li>sudo dpkg-reconfigure lightdm</li>
</ul>
	After, select lightdm and reboot your system. You will be on lightdm.</p>

<p>For LXDE and MATE users:</p>
<p>To copy the new conky, issue the following command:</p>
<ul>
	<li>cp /etc/skel/.conkyrc $HOME</li>
</ul>

<p>You can also copy the new conky theme to LXDE. KDE and XFCE do not have a conky preinstalled by default.</p>
<p>This is by no means mandatory, but I also recommend that you use the kaisen-update-skel command to put the entire 
	contents of /etc/skel on the directory for all users. However this will make you lose your personalization on 
	your desktop environment, use it as a precaution.</p>

<p>How do I check if I am in version 1.5? Use this command:</p>
<ul>
    <li><strong>cat /etc/debian-version</strong></li>
</ul>
<p>This command should return "Rolling 1.5".
<p>Now Conky can give you in real time (if the base-files package is updated) your version number. 
	You can also look at the value after OS Version, which should now return "Kaisen Rolling 1.5" normally.</p>
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
