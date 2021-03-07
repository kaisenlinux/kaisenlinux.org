<?php include('../header.php');?>
<div id="content" class="single-blog">



<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <h1>Kaisen Linux Rolling 1.2 Release Notes</h1>
        <ul class="list-inline mb-50">
          <li class="list-inline-item">Author: Kaisen</li>
          <li class="list-inline-item">Date: 2020/07/23</li>
        </ul>
        <img class="img-fluid mb-50" src="../img/screen.png" alt="blog-image">
      </div>
      <div class="col-lg-8 offset-lg-2">
        <div class="post-single-content">
          <h1 id="kaisenlinuxrolling">Kaisen Linux Rolling 1.2 changelog</h1>
<p>New revision of the rolling. Lots of work. GUI news. New translations. New file systems supported.</p>
<p>Codename: Rolling</p>
<p>This version is the result of a month and a half of work and many sleepless nights. A lot of changes have been made.</p>
<p>I created official support for three new GUIs, a script that automates the interface change for current users who
want to migrate to any of the interfaces without reinstalling or overloading the system.</p>
<p>I also noticed that Debian now includes a live installer by default. 
I tested and being convinced after a little work, adapted this installer for Kaisen Linux and its configurations.
Note however that if you want to install your system with LUKS, use the installer from the ISO menu. 
The one with calamares works, but LUKS is active before starting GRUB and the keyboard is in qwerty (being French I use AZERTY). 
No problem with the classic installer and is activated with the plymouth as usual.
To counter this problem, I wanted to go through the Debian installer launcher (which launches the Debian installer and not Calamares), but too many problems with the live version making its integration complicated.
I will surely have a solution in the future.</p>
<p>The menu is now fully "dynamic". I added a perl script with several perl libraries designed for APT.
This means that when you uninstall preinstalled software, its launcher on the menu will remove with it.
This was not the case before, and it will be problematic in the future (a netinstall ISO is in preparation for the next versions), so I fixed this problem.</p>
<p>The kaisen-update command has also been enhanced to make APT completely non-interactive, automatically fix problems that may arise with APT, and automatically remove unused packages.</p>
<p>For the main elements that's about it. Here is the detailed and complete changelog:</p>
<ul>
    <li>New Firefox profile with other favorites and links to the Kaisen Linux project.</li>
    <li>Firefox version is now Firefox 78 and not firefox-esr because some websites do not work with firefox-esr.</li>
    <li>Six languages ​​are now supported with Firefox by default. French, English, Spanish, Portuguese, Italian and German.</li>
    <li>All of Kaisen Linux is now translated into 6 languages (menus, launchers, ISO entries...). 
	French and English have been retained. Spanish, Portuguese, Italian and German have been added.</li>
    <li>Kaisen Linux is now available with 4 GUIs: MATE, KDE, LXDE and XFCE.</li>
    <li>Fully dynamic menu, promoting software uninstallation.</li>
    <li>Creation of the "kaisen-interface-switcher" command to quickly and automatically switch between graphical interfaces. 
	Completely purge the current interface and replace it with the one of your choice with the Kaisen Linux configurations.</li>
    <li>Update to Linux version 5.7.6.</li>
    <li>File systems REISER4, VMFS6 and UDF have been added (they were present on the menu but not installed).</li>
    <li>Introduction of the Calamares live installer suitable for Kaisen Linux configurations
	(I've been wanting to set this up for a long time, it's done!).</li>
    <li>Packages providing the configurations for different desktop environments no longer have the Firefox profile.
	It has been replaced by the kaisen-firefox package.)</li>
	<li>Tools additions: crunch, unrar, flashrom, dsniff</li>
	<li>GRUB updated to the latest version present on Debian Testing and several scripts have been created to keep 
	the configurations made on the old Rolling versions without having to reinstall the package kaisen-grub-configuration.</li>
    <li>Exactly 650 packages have been updated since version 1.1.</li>
</ul>
<p>The kaisen-build package has also been improved. 
You no longer need to go to / root, all the contents of the package will copy to /home/* and "variants" have been created to support the 3 new GUIs.
Building your ISO is even easier than before, you can create your own variant, with your own configurations and run the script 
<strong>kaisen-build</strong> at the root of the "kaisen-build" folder to make your custom ISO or use a current variant to simply create a more up-to-date live.</p>
<p>How do I update my system? Do:</p>
<ul>
    <li>sudo apt <strong>kaisen-update</strong> or apt update && apt full-upgrade
	(We recommend kaisen-update because your system will be fully updated without you having to do anything)</li>
</ul>
<p>How do I check if I am in version 1.2? Use this command:</p>
<ul>
    <li><strong>cat /etc/debian-version</strong></li>
</ul>
<p>This command should return "Rolling 1.2". 
If you are using Kaisen Linux only as a live DVD version, download the ISO again rather than doing the updates.
If you are still on the beta versions, adding the repository will not be enough, download this ISO and install the system to take full advantage of the continuous update.</p>

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
