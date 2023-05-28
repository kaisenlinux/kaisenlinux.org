<?php include('../header.php');?>
<div id="content" class="single-blog">


<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <h1>Kaisen Linux Rolling 2.3 Release Notes</h1>
        <ul class="list-inline mb-50">
          <li class="list-inline-item">Author: Kevin Chevreuil - Kaisen</li>
          <li class="list-inline-item">Date: 2023/05/29</li>
        </ul>
        <img class="img-fluid mb-50" src="../img/blog/screen-2.1.x.png" alt="blog-image">
      </div>
      <div class="col-lg-8 offset-lg-2">
        <div class="post-single-content">
          <h1 id="kaisenlinuxrolling">Kaisen Linux Rolling 2.3 changelog</h1>
<p>The latest version of the 2.x serie. Major and minor bugs fixed. Immutables snapshots. New cloud tools.</p></br>
<p>Codename: Rolling</p></br>
<p>This release is the final release of the 2.x serie and there's a lot of new stuff!</p></br>
<p>This release comes at the same time as the full freeze of Debian bookworm (Debian 12), and makes it possible to put this release on Debian 12.</p></br>
<p>Say hello to own private torrent tracker to download Kaisen Linux ISO via the P2P protocol (it's can be found <a href="https://torrent.kaisenlinux.org" target="_blank">here</a>)! 
  Only the latest version of Kaisen Linux will be downloadable via the P2P protocol.</p></br>
<p>Say hello to our new official community Discord server, where we bring together the Kaisen Linux community from all over the world! You can find it <a href="https://discord.gg/rCg6jjzPwj" target="_blank">here</a>.</p></br>
<p>One of the great new features of Kaisen Linux 2.3 is the addition of an immutability layer to BTRFS snapshots, when started on GRUB!</br>
Indeed, version 2.2 contained a major bug when snapshots were restored and then deleted, GRUB would point to the snapshot's sub-volume... 
This bug has been fixed and the overall behavior of grub-btrfs has been improved. Many of our patches have now been integrated upstream into grub-btrfs!</br>
The immutability of snapshots is made possible by the use of overlayfs. 
Overlayfs replaces the BTRFS system (which is still active, but in the lower layer), to provide this immutability, and is loaded directly with it when initramfs is loaded.</p></br>
<p>As part of our ongoing commitment to Kaisen's hardware and software support, it's now possible to format a device in APFS! APFS repair is also possible directly from Kaisen (via the fsck.apfs command)!</p></br>
<p>New tools included by default:
  <ul>
    <li>apfsprogs</li>
    <li>kubeshark</li>
    <li>lxd</li>
    <li>simple-scan</li>
    <li>sedutil</li>
  </ul>
</p></br>
<p>The complete list of tools removed:
  <ul>
    <li>notwireshark</li>
    <li>terraform-docs</li>
</p></br>
<p>Importants updates of softwares:
  <ul>
    <li>Linux 6.1.15</li>
    <li>Minikube 1.29</li>
    <li>Kubernetes 1.25.9</li>
    <li>Virtualbox 7.0.6</li>
    <li>Vagrant 2.3.6</li>
    <li>Velero 1.11.0</li>
    <li>Trivy 0.41.0</li>
    <li>Vault 1.12.6</li>
    <li>Terraform 1.4.6</li>
    <li>GNS3 2.2.39</li>
    <li>Helm 3.12.0</li>
    <li>EKSctl 0.141.0</li>
  </ul>
</p></br>
<p>List of detailled changes:
  <ul>
    <li>All BTRFS snapshots started from the GRUB are immutables.</li>
    <li>The LXD daemon is now included as a complement at LXC.</li>
    <li>Non-starting spice-vdagent service resolved.</li>
    <li>Global BTRFS performances were improved. The relatime mount option was replaced by noatime and nodiratime mount options.
      These mountoptions are enhance the performance of BTRFS Because indexes are only file accesses, they are no longer updated on disk and require much less disk writing. 
      This means CoW works much faster. 
      The application of these mounting options was made possible by our new APT snapshot system, kaisen-timeshift-apt, which does not make it impossible to restore snapshots with the noatime and/or nodiratime options.</li>
    <li>The discard=async mount options is the default new discard mount option for BTRFS. This option frees up unused blocks on the file system when the system requires less performance to run optimally.
This is the default behavior included in Linux 6.2, but we've gone one step further to make BTRFS as efficient as possible.</li>
    <li>BTRFS quotas were disabled by default during the installation because the btrfs-transaction ans btrfs-cleaner cause many severe performances issues</li>
    <li>We maintain own version of Timeshift to works with disable BTRFS quotas</li>
    <li>In the SR release, all tools to manage the firmware EFI are now included.</li>
    <li>Log improvements for the kaisen-interface-switcher script</li>
    <li>The apt upgrade command will execute automatically the apt full-upgrade command instead because the apt upgrade command may breaks the system</li>
    <li>The veracrypt GUI launcher is now rootless</li>
    <li>The zulucrypt GUI launcher is now rootless</li>
    <li>The zulumount GUI launcher is now rootless</li>
    <li>The f2fstat launcher will execute the f2fstat -h command</li>
    <li>The systemd bettercap daemon now works</li>
    <li>The docker daemon is now the secondary group for the first user created on the system (during the installation)</li>
    <li>The libvirt daemon is now the secondary group for the first user created on the system (during the installation)</li>
    <li>The gns3 group is now the secondary group for the first user created on the system (during the installation)</li>
    <li>The integration on Kaisen of the exegol python wrapper is enhanced. Few patchs were added on our package</li>
    <li>The krew home directory is now included on the PATH by default to make it easier the utilization of kubectl plugins</li>
    <li>The mate-media package is included by default for MATE to display the sound icon (see <a href="https://forum.kaisenlinux.org/t/where-are-the-settings-for-sound-audio-in-kaisen-linux-2-2-mate/309/7" target="_blank">forum</a>)</li>
    <li>The ibt firmwares were moved in the /lib/firmware/intel instead of /lib/firmware (see <a href="https://forum.kaisenlinux.org/t/firmware-failed-to-load-intel-ibt-19-0-4-sfi-ddc/313" target="_blank">forum</a>)</li>
    <li>The libvirt services scripts bugs fixed (libvirt-daemon failed to start)</li>
    <li>The issue no fs defined in the installer when /, /home, /var and /tmp were separated is solved</li>
    <li>The default /etc/apt/sources.list file includes fewer comments by default after the installation</li>
    <li>The CDROM will eject automatically after the installation for the NETINST ISO and MATE, KDE, XFCE and LXQT ISO</li>
    <li>The /etc/debian_version file was replaced by the /etc/kaisen_version file</li>
    <li>The user documentation is updated</li>
    <li>The centralized manpages contains over 1618 manpages. The man5 (configuration files) have been added to the centralized manpages</li>
    <li>The kaisen-timeshift-apt software now disable by default BTRFS quotas to enhancing BTRFS performances</li>
    <li>The plocate databse is updated directly during the installation</li>
    <li>LXQt no longer installs automatically if not selected in the install menu (for the NETINST ISO only)</li>
  </ul>
</p></br>

<p>How do I check if I am in version 2.3? Use this command:
<ul>
    <li><strong>cat /etc/kaisen_version</strong></li>
</ul>
</p>

<p>This command should return "Rolling 2.3".
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
