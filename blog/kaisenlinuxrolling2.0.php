<?php include('../header.php');?>
<div id="content" class="single-blog">


<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <h1>Kaisen Linux Rolling 2.0 Release Notes</h1>
        <ul class="list-inline mb-50">
          <li class="list-inline-item">Author: Kevin Chevreuil - Kaisen</li>
          <li class="list-inline-item">Date: 2021/12/14</li>
        </ul>
        <img class="img-fluid mb-50" src="../img/screen.png" alt="blog-image">
      </div>
      <div class="col-lg-8 offset-lg-2">
        <div class="post-single-content">
          <h1 id="kaisenlinuxrolling">Kaisen Linux Rolling 2.0 changelog</h1>
<p>First 2.x releases. Major bugs fixed. Lots of improvements.</p>
<p>Codename: Rolling</p><br>
<p>After 4 months of intensive work, here is the 2.0 version of Kaisen Linux, two years to the day after the release of the first alpha version!<br>
This new release is a major revision of the previous rolling versions!</p><br>
<p>Detailled and significant changes:<p></br>
<p>Numerous improvements and bug fixes make this the most stable release ever. That's partly why it is called 2.0, the numerous refactorings justified 
the version number change.<br>
Kaisen is now based on Debian Bookworm (Debian 12), also justifying the version number change.</p><br>
<p>Among the most important things done on this new release, a complete overhaul of the menu with new, nicer and more modern icons, 
simplification of the menu and removal of about 15 launchers among the basic commands (such as mount and umount for example), 
new implementation of BTRFS snapshot tools, new tools dedicated to Cloud engineers!<br>
Many new packages have been packaged for the distribution for this, software such as Terraform, Trivy, Kubernetes, k6, k9s...</p><br>
<p>LXDE has been replaced by LXQT because it is more modern and more compatible with Kaisen configurations such as Conky 
(which is now unique for all interfaces). LXDE is still installable, but will no longer be provided by default via an ISO or installed via the NETINST ISO.
The kaisen-lxde metapackage will no longer be installable and will be removed from the repositories when Kaisen Linux is upgraded to 3.0. 
This will leave at least 1.5 years for users to migrate to another interface.</p><br>
<p>The kaisen-interfaces-common package has appeared and now installs all the tools common to all interfaces as well as the switcher interface, 
entirely redeveloped so that it is common to all interfaces! This also fixes the dpkg error when installing several GUIs on the machine.<p></br>
<p>The ISO CONSOLE has been deleted. The ISO SR eant The SR ISO is now designed to start automatically in console mode and the GUI can be started on 
demand with a single command. Disconnecting from the graphical session allows to return to the console mode. This makes it possible to make a single 
ISO dedicated to system recovery only, and to adapt it to all needs and launch all available tools for system recovery.<br>
The motd message at the start of the SR ISO explaining how to activate the GUI is translated into the 6 languages with which the live can be started.</p><br>
<p>On the SR ISO, following the removal of LXDE as the default provided interface, XFCE is now used as the default GUI for the SR ISO.<p></br>
<p>The entire software installation menu on the NETINST ISO has been translated into French, Spanish, Portuguese, Italian and German. 
The menu has also been updated to accommodate new changes and installation of different metapackages.</p><br>
<p>When no GUI is installed via the NETINST ISO, Bash will be set as default for the user that will be created during the installation because 
the ZSH profile will not be installed. If one of the metapackages installing GUIs or the kaisen-skeleton package is installed, the profile will 
be automatically copied for all users and ZSH will be set as default.<p></br>
<p>The BTRFS snapshot tools are now installed (via the NETINST ISO) or retained (via the live installables), only if BTRFS is used for the / partition 
and the conditions for the snapshot tools to work (subvolume called @ and the mount option subvol=@). Everything is done and checked automatically during 
the installation of Kaisen. It is recommended to keep at least for the / partition the mount options mentioned "defaults" in the installer, because 
everything is set to make BTRFS work efficiently and make snapshots on the system effective and functional.<p></br>
<p>All default interface profiles have been updated. The most important change is XFCE which has a new menu (Whisker menu).
This menu is more modern, intuitive, and more easily customizable.<p></br>
<p>The metapackages kaisen-dhcp-tools, kaisen-dns-tools and kaisen-tls-tools are now installed by the kaisen-sysadmin-tools package. 
It was more logical to put layer 7 tools in the system administration tools.<p></br>
<p>Apparmor and default profiles have been added to the distribution to help secure the distribution. The Apparmor management tools and profiles have 
been integrated by default in the live installs and offered for installation on the NETINST ISO.<p></br>
<p>On the NETINST ISO, the HTTPS protocol is now used as the default protocol for downloading packets.<p></br>
<p>The expert installation mode on all ISOS has been reworked and simplified. Some optional modules that can be loaded have been removed from this mode because
they are not compatible with Kaisen and cannot be loaded correctly. The default choice of a kernel image and the addition of only Kaisen repositories in 
the sources.list have been predefined. There will always be more verbosity than the classic install mode, although some options have been predefined to 
ensure a functional installation of Kaisen.<p></br>
<p>The last 1.x releases could not boot via the persistent live mode because the key could not be made (thanks to the many users who reported this important bug), 
because the construction of the ISO image had bad parameters preventing Linux and software such as fdisk to identify the partition as a hidden 
HPFS/NTFS partition (which could allow the partitioning of the key) ISOS 2.0 includes this fix by default and the procedure for creating persistent 
bootable keys has also been simplified, making the process much easier and safer.<p></br>
<p>An important bug has also been fixed on the NETINST ISO, the bug was in the automated debconf responses (one of the responses prevented the uninstallation 
of the KDE GUI). New answers have also been added with the new tools that can be installed via the tasksel menu.<p></br>
<p>Some software like psensor, kubernetes, qbittorrent and others (sources can be found on GitLab and the GitHub mirror) have been fully packaged or repackaged 
in order to be updated and integrated to Kaisen Linux.<p></br>
<p>The Conky theme had a big improvement on the display of mounted partitions on the system. The Python code handling this feature has been updated allowing 
to fix multiple bugs, for example the disappearance of the / partition when the Docker daemon is activated or Timeshift is used. This update also allows to
take into account partitions that have spaces in their name.<p></br>
<p>All the default profiles have been updated following the updates of the different interfaces as well as to display the virtual office numbers for example (useful to see them on black background).
The KDE menu, as well as the XFCE menu, has also been updated.<p></br>
<p>The VirtualBox modules vboxnetadp and vboxnetflt added in the hook of kaisen-build package and simple-cdd script<p></br>
<p>The Kaisen Linux logo has been added to Neofetch. Thanks to Stefan Kuny for this contribution!<p></br>

<p>New tools:
	<ul>
	  <li>Added alsa and atmel firmwares to improve hardware support for sound as well as improved wifi support</li>
    <li>Added etcdctl, mariadb and psql tools (binaries clients)</li>
    <li>Added eksctl, trivy, buildhah, helm, k6, k9s, minikube, podman</li>
    <li>Added virtualbox-ext-pack</li>
    <li>Added sysstat package</li>
	</ul>
</p>

<p>Tools removed:
  <ul>
	  <li>kismet</li>
    <li>fusesmb</li>
    <li>lockdown</li>
    <li>virtualbox-guest-dkms</li>
    <li>logrotate</li>
	</ul>
</p>

<p>Metapackages removed:
	<ul>
	  <li>kaisen-cli-tools (used by old CONSOLE ISO)</li>
    <li>kaisen-zip-tools (tools integrated in the kaisen-miscellaneous-tools metapackage)</li>
    <li>kaisen-mount (tools integrated in the kaisen-filesystems metapackage)</li>
    <li>kaisen-various-analysis (tools integrated in the kaisen-filesystems metapackage)</li>
	</ul>
</p></br></br>

<p>At the infrastructure level, the Kaisen Linux repositories got a redesign and the kaisen-rolling-snapshot repository was created. The purpose of this 
repository is to re-inject into the kaisen-rolling repository any potential packages removed by Debian that can be installed by several Kaisen Linux 
metapackages. This will ensure real stability as well as the availability at all times of all tools, even via installation with the NETINST. 
The NETINST always installing what is up to date on the servers, did not guarantee until now that all the tools are present. 
The presence of the kaisen-rolling-snapshot repository fixes this problem.
How repositories work is explained here: https://gitlab.com/kaisenlinux/reprepro/-/blob/master/conf-prod/README<p></br>

<p>Except in exceptional cases, each new ISO will be released every 6 months, allowing for a more up-to-date live. It is planned to release 4 revisions per 
major version (1, 2...). This is to give me more time to port Kaisen Linux to Raspebrry Pi! And the project having reached a real stability, 
will always be maintained but less important modifications on the operation of the distribution will require new ISOS, APT will be able to update everything.<p></br>

<p>The kaisen-update command is now a package (the command is no longer installed by the kaisen-miscellaneous-tools metapackage) you will have to reinstall 
the command if you want to continue using it. You will need to install kaisen-update after the update.<br>
The BTRFS snapshot tools being no longer installed by default will be automatically uninstalled 
(if you are using BTRFS and still want to have snapshots, reinstall this metapackage). You will need to install kaisen-btrfs-snapshot after the upgrade.<br>
The tools from the SysOps menu (now DevOps and Cloud), will also be uninstalled because they are no longer installed by the 
kaisen-sysadmin-tools metapackage and is a category of tools independent of the system administrator tools.
You will need to install kaisen-sysops-tools after the upgrade.<br><br>
<p>The entire distribution can be updated via APT, but due to the major changes in 2.0, some manual actions have to be redone.
Here are the commands to perform.<p><br>
<p>Reinstall all tools:
<ul>
	<li>sudo kaisen-update && sudo apt install kaisen-update kaisen-btrfs-snapshot kaisen-sysops-tools</li>
</ul>
<p>If you not use BTRFS filesystem for the partition /:<p>
<ul>
	<li>sudo kaisen-update && sudo apt install kaisen-update kaisen-sysops-tools</li>
</ul>
</p></br>

<p>This is by no means mandatory, but I also recommend that you use the kaisen-update-skel command to put the entire 
	contents of /etc/skel on the directory for all users. However this will make you lose your personalization on 
	your desktop environment, use it as a precaution.</p></br></br>

<p>To VirtualBox users!<p>
Newer versions of Linux now install VirtualBox guest add-ons by default.
To avoid error messages when updating VirtualBox (which does not prevent you from being able to update VirtualBox),
you should uninstall the following packages with this command:
<ul>
	<li>sudo apt autoremove -y --purge virtualbox-guest-dkms virtualbox-guest-source</li>
</ul>
</p></br></br>

<p>To LXDE users!<p>
It is recommended to change the GUI, although the LXDE metapackage is still present in the repositories. It will not be updated anymore, and its default 
profile has been removed in the skel, and no more interface switcher for the LXDE version.<br>
This is to switch to a more modern and user-friendly interface and compatible with the new Kaisen Linux graphic charts.<br>
Do this with an Ethernet cable or with a USB Ethernet adapter. The complete uninstallation of LXDE will remove network-manager which manages the wifi.<p></br>

<p>To change the GUI, and use KDE instead do this:
<ul>
	<li>sudo apt autoremove -y `dpkg -l | grep lxde | cut -d \  -f 3` && dhclient 2> /dev/null && sudo apt install kaisen-kde -y</li>
</ul>
</p>

<p>To change the GUI, and use LXQT instead do this:
<ul>
	<li>sudo apt autoremove -y `dpkg -l | grep lxde | cut -d \  -f 3` && dhclient 2> /dev/null && sudo apt install kaisen-lxqt -y</li>
</ul>
</p>

<p>To change the GUI, and use MATE instead do this:
<ul>
	<li>sudo apt autoremove -y `dpkg -l | grep lxde | cut -d \  -f 3` && dhclient 2> /dev/null && sudo apt install kaisen-mate -y</li>
</ul>
</p>

<p>To change the GUI, and use XFCE instead do this:
<ul>
	<li>sudo apt autoremove -y `dpkg -l | grep lxde | cut -d \  -f 3` && dhclient 2> /dev/null && sudo apt install kaisen-xfce -y</li>
</ul>
</p></br></br>

<p>How do I check if I am in version 2.0? Use this command:</p>
<ul>
    <li><strong>cat /etc/debian_version</strong></li>
</ul>
<p>This command should return "Rolling 2.0".
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
