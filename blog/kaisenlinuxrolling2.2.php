<?php include('../header.php');?>
<div id="content" class="single-blog">


<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <h1>Kaisen Linux Rolling 2.2 Release Notes</h1>
        <ul class="list-inline mb-50">
          <li class="list-inline-item">Author: Kevin Chevreuil - Kaisen</li>
          <li class="list-inline-item">Date: 2022/12/14</li>
        </ul>
        <img class="img-fluid mb-50" src="../img/blog/screen-2.1.x.png" alt="blog-image">
      </div>
      <div class="col-lg-8 offset-lg-2">
        <div class="post-single-content">
          <h1 id="kaisenlinuxrolling">Kaisen Linux Rolling 2.2 changelog</h1>
<p>The three years old release. Minor bugs fixed. Many improvements of the GUI. Adding the exegol tool!</p><br>
<p>Codename: Rolling</p><br>
<p>This release is the final of the 2.2 revision of Kaisen Linux Rolling.</p><br>
<p>To begin with, let's wish Kaisen Linux a happy birthday! Kaisen Linux is now three years old! 
  As tradition dictates, the 2.2 release and its batch of new features and the specifications of the features planned for 2.2 are available for the 3 years of the project!</p><br>
<p>This changelog will resume the changelog of the 2.2RC1 and the 2.2RC2 releases (Release Candidate of the 2.2 version) and will add all changes after the releasing of the 2.2RC2 version.</p><br>
<p>The big news of this release is the arrival of the Exegol tool on Kaisen Linux!</p><br>
<p>Exegol is a french tool to deploy Docker containers very quickly to have a hacking environment with over 300 tools installed! 
  Kaisen is not intended to provide dedicated tools for slotters by default, for this reason only the Python wrapper is installed. 
  The integration of Exegol into Kaisen Linux is there to meet the needs of our growing community of people who work as system administrators, but need to do more extensive security testing than with dedicated administrator tools. 
  Useful also for our users who are fans of CTF (like Kaisen developers ^^). The HTML documentation of the Exegol tool is also included by default in Kaisen.</p><br>
<p>The Kaisen Linux team is growing too! A new developer has joined our ranks, notably to maintain the integration of Exegol in Kaisen!</p><br>
<p>New tools are now included by default:
  <ul>
    <li>lazydocker</li>
    <li>lazygit</li>
    <li>jq</li>
    <li>yq</li>
    <li>ansible-lint</li>
    <li>tflint</li>
  </ul>
</p>
<p>Importants updates of softwares:
  <ul>
    <li>Linux 6.0.7</li>
    <li>GRUB 2.06 (os-proper is still active)</li>
    <li>Minikube 1.28</li>
    <li>Kubernetes 1.25</li>
    <li>Virtualbox 7.0.4</li>
    <li>Vagrant 2.3.3</li>
    <li>Velero 1.10.0</li>
    <li>Trivy 0.35.0</li>
    <li>Shadow 4.13</li>
  </ul>
</p>
<p>List of detailled changes:
  <ul>
    <li>Almost 100 menu launchers have been improved or fixed.</li>
    <li>Since the 2.2RC2, say hello to kaisen-timeshift-apt! The kaisen-timeshift-apt package replaces apt-btrfs-snapshot for APT snapshots! 
      This package aims to fix performance issues with APT snapshots and be able to delete restored snapshots!  What was previously not possible is now a thing of the past!</li>
    <li>The kaisen-timeshift-apt package provides a timer and a service systemd units files to automatically delete all snapshots that are 7 days old or more to the second! 
      This timer runs randomly every hour to maximize the chances to remove snapshots that are 7 days old or more. 
      For example, it will run after 9 minutes after the last run, another time, it will run after 30 minutes, another time, it will run after 15 secondes...</li>
    <li>Replaced firmware-* packages with linux-firmware-* packages designed by the Kaisen Linux team to fix the problem with the raspi-firmware package and provide improved hardware support combined with Linux 6.0.</li>
    <li>The linux-firmware-* packages are also a complete package of the linux-firmware repository found on kernel.org to provide the latest firmware and better support for Wi-Fi and Mellanox drivers in their most recent versions.</li>
    <li>With the powershell package, the package gss-ntlmssp is also installed for the NTLM connections.</li>
    <li>Chrony is now the default NTP client/server for Kaisen Linux instead of ntpsec</li>
    <li>All live entries are now used the level 4 for the log kernel to keep a majority quiet messages of the kernel. Mainly to improve the user experience of the SR users.</li>
    <li>Restoring snapshots is now possible directly via GRUB thanks to the grub-btrfs package. Thanks to this, snapshots can be restored simply by booting from a snapshot. 
      The integration of this tool in Kaisen has been done by us and is combined to work with Timeshift. 
      Indeed, when Timeshift is executed for any reason, systemd unit files have been created to automatically update GRUB if a change in snapshots has been detected. 
      This allows to automatically update the menu entries when a snapshot is taken automatically with APT, or deleted, and even when manual actions are performed with Timeshift. 
      We therefore advise you to use Timeshift as much as possible for APT snapshots.</li>
    <li>APT snapshots can be exported to a SAMBA or NFS share using the btrbk tool, installed by default when installing the BTRFS snapshot tools that come with BTRFS support on Kaisen Linux.</li>
    <li>Improved dependencies in packages for some tools like Minikube and VirtualBox. This ensures that the tools work better if they are installed outside the metapackages provided by Kaisen.</li>
    <li>The CVE-2007-4559 in the gns3-gui package is fixed. Thanks to the Trellix company to the report!</li>
    <li>On the live systems and the system installed, the plocate command now knows all files included in the system</li>
    <li>On KDE, the application of the GTK3 setting for the default dark theme on applications is now disabled to fix bugs with GUI applications with KDE.</li>
    <li>The services menu was updated and improved</li>
    <li>The BTRFS quotas not enabled error message is now fixed (quotas are enabled by default at the installation of Kaisen)</li>
    <li>On the live systems, the user kaisen is now integrated to the vboxsf group by default to activate the shared folders</li>
    <li>When VirtualBox is installed or updated, all users will be added to the vboxusers to allow the user to use the host's USB devices in the VM.</li>
    <li>The daemons of guests hypervisors are no longer disabled by default. The kaisen-live-guest-additions package was created to disable and stop all installed and unused guests hypervisors. 
      For example, if you use virtualbox, the guests for QEMU/KVM, HyperV and VMWare will be disable and shutdown. If you are not using any hypervisor, all guests hypervisors will be disable and shutdown.</li>
    <li>Firefox was updated to the version 107.</li>
    <li>When a live system is installed, the packages live-tools and user-setup will be removed to fix the packages marked as rc at the installation.</li>
    <li>Fix no present nm-applet on XFCE (fix also wifi not being able to be configured in the SR)</li>
    <li>A majority of the default profile configuration files for the 4 GUIs officially supported by Kaisen Linux have their configuration in the /etc/xdg folder instead of the /etc/skel folder. 
      Deviations to potential existing files have been created to avoid conflicts. 
      This has mainly allowed to allow a finer management of the default profile configuration files, deletion of useless files, and especially to avoid conflicts between the different graphical interfaces.</li>
    <li>Deletion of the kaisen-update-skel command (because default profiles are now installed in the /etc/xdg folder)</li>
    <li>Fix encrypted persistence did not work on live systems</li>
    <li>Add the openstack-client tool</li>
    <li>Improvements of the XFCE and the KDE default GUI</li>
    <li>Creation of the default Kaisen theme for KDE</li>
    <li>Addition of more of 700 manpages to improve the documentation provided with Kaisen. Today with the 2.2 release, 1300 manpages are available from the centralized manpages.</li>
    <li>Improvements of the user documentation</li>
  </ul>
</p>

<p>How do I check if I am in version 2.2? Use this command:
<ul>
    <li><strong>cat /etc/debian_version</strong></li>
</ul>
</p>

<p>This command should return "Rolling 2.2".
If you are using Kaisen Linux only as a live DVD version, download the ISO again rather 
than doing the updates.</p><br>

<p>Thank you all for your support, thank you for using Kaisen Linux and for being part of this wonderful adventure!</p>

<p>You can report bugs on the forum available at <a href="https://forum.kaisenlinux.org" target="_blank">here</a>.</p>

        </div>

      </div>
    </div>
  </div>
</section>

</div><!-- end Contact Area -->
<?php include('../footer.php');?>
