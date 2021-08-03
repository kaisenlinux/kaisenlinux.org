<?php include('../header.php');?>
<div id="content" class="single-blog">
    


<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <h1>Kaisen Linux 20200206 Release Notes</h1>
        <ul class="list-inline mb-50">
          <li class="list-inline-item">Author: Kevin Chevreuil - Kaisen</li>
          <li class="list-inline-item">Date: 2020/04/03</li>
        </ul>
        <img class="img-fluid mb-50" src="../img/screen.png" alt="blog-image">
      </div>
      <div class="col-lg-8 offset-lg-2">
        <div class="post-single-content">
          <h1 id="kaisenlinux20200206">Kaisen Linux 20200206 changelog</h1>
<p>This new release is revision of version 20200114. Full UEFI support. Fix importants bugs. Lots of new things.</p>
<p>Codename: Titanic</p>
<p>Softwares updates:</p>
<ul>
<li>teamviewer (15.1 to 15.2)</li>
<li>virtualbox (6.1 to 6.1.2)</li>
<li>powershell (6.3.4 to 6.4.2)</li>
</ul>
<p>Fix importants bugs:</p>
<ul>
<li>UEFI full support and UEFI installer problem resolved and functional</li>
<li>Problem of the loss of tty resolved when the commands "sudo su user", "sudo su - user", "su user", 
"su - user" are entered in the terminal to connect to another user</li>
<li>Root reset on a default bash terminal to correct the following message when trying to chroot: 
"/bin/zsh" command not found</li>
<li>Removal of the lsb-release package automatically installed by live-build (causing the 2nd bug on UEFI installation)</li>
<li>Removal of the woeusb tool (caused the first bug when installing GRUB in UEFI on the installer)</li>
</ul>
<p>Added softwares and hardware support:</p>
<ul>
<li>firmware-adi</li> 
<li>firmware-bnx2</li> 
<li>firmware-ivtv</li> 
<li>firmware-qlogic</li> 
<li>firmware-amd-graphics</li> 
<li>firmware-bnx2x</li> 
<li>firmware-iwlwifi (update)</li> 
<li>firmware-ralink</li>
<li>firmware-ath9k-htc</li> 
<li>firmware-brcm80211</li> 
<li>libertas-firmware</li> 
<li>firmware-misc-nonfree</li> 
<li>firmware-realtek (update)</li> 
<li>firmware-ath9k-htc-dbgsym</li> 
<li>firmware-Cavium</li> 
<li>firmware-Myricom</li> 
<li>firmware-samsung</li> 
<li>atheros-firmware</li>
<li>firmware-intel-sound</li> 
<li>firmware-Netronome</li> 
<li>firmware-siano</li> 
<li>firmware-b43-installer (update)</li> 
<li>firmware-intelwimax</li> 
<li>firmware-NetXen</li> 
<li>firmware-ti-connectivity</li> 
<li>firmware-ipw2x00</li> 
<li>firmware-QCOM-media</li> 
<li>firmware-ZD1211</li>
<li>gftp (supports self-signed TLS certificates)</li>
</ul>
<p>Graphical interface:</p>
<ul>
<li>Addition of the "Services" menu in the Kaisen Linux menu to easily activate and deactivate services. 
Additional services (software added on Kaisen Linux only) are disabled by default to save resources and work 
better on small configurations</li>
<li>Addition of the launcher for the scp tool</li>
</ul>
<p>Added/adapted features:</p>
<ul>
<li>Security removed from .bashrc (history automatically deleted, line HISTSIZE and HISTFILESIZE default delivery)</li>
<li>ZSH is now defined by default when a user is added via the adduser command (recompiled adduser package)</li>
<li>When using the deluser command, the directory in /home associated with the user will be automatically deleted 
with (recompiled adduser package)</li>
<li>Terminal automatically cleaned if connected to another shell such as bash</li>
</ul>
<p>Live system:</p>
<ul>
<li>Addition of forensic mode (allows to automatically deactivate amd and nvidia graphics cards and makes it easier 
to detect faults as well as automatic mounting of external devices is disabled by default in this mode)</li>
</ul>
<p>System installation:</p>
<ul>
<li>Modification of the preseed file to prevent the complete wipe of the disk during an installation in LVM with LUKS</li>
<li>Commands executed at the end of the installation to allow customization of GRUB entries (change Debian to Kaisen) 
via the installation of the script lsb-release-install.sh (only present on the live, deleted after installation via 
the file of preseed, does the same as apt install lsb-release, but allows you to install it (the Debian installer does 
not support the dpkg command) after GRUB has created all the entries, which avoids the conflict with UEFI firmware 
(caused the message "minimal BASH-like is supported and only has access to a command prompt" and to normal GRUB entries, 
even if the configurations and installation went well ) in /opt and deletion of the file /root/packages.chroot</li>
</ul>
        </div>
        

      </div>
    </div>
  </div>
</section>

</div><!-- end Contact Area -->
<?php include('../footer.php');?>
