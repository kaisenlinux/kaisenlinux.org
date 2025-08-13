<?php include('../header.php');?>
<div id="content" class="single-blog">


<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <h1>Kaisen Linux Rolling 3.0 Release Notes</h1>
        <ul class="list-inline mb-50">
          <li class="list-inline-item">Author: Kevin Chevreuil - Kaisen</li>
          <li class="list-inline-item">Date: 2025/08/13</li>
        </ul>
        <img class="img-fluid mb-50" src="../img/blog/screen-3.0.jpg" alt="blog-image">
      </div>
      <div class="col-lg-8 offset-lg-2">
        <div class="post-single-content">
          <h1 id="kaisenlinuxrolling">Kaisen Linux Rolling 3.0 changelog</h1>
<p>The ultime and the last release of Kaisen Linux. Major and minor bugs fixed. End of the project.</p></br>
<p>Codename: Rolling</p></br>
<p><strong>I would like to begin this blog post by announcing the end of the Kaisen Linux project with this latest release.<br>
I wish to embark on other professional and personal projects that will take up a considerable amount of my time, and for this reason, I can no longer continue developing Kaisen Linux.
This release will therefore be the last.<br>
However, security updates will still be provided for two years, giving you time to switch to another Linux system and familiarize yourself with your new environment.<br>
I would like to sincerely thank you all for your support over the past six years. This project has been maintained with love and passion for you!
You are amazing, thank you all for your feedback, encouragement, and comments! Thank you to all the contributors for their valuable contributions to the project!</strong></p><br><br>

<p><strong>This release also marks a complete change in Kaisen's visual identity!<br>
I wanted to replace the dragon with a lobster. But why this choice?<br>
Kaisen has several meanings in Japanese, two of which are seafood and network line (depending on the kanji used to write it).
I wanted to get a little closer to the meaning of Kaisen through this release, whether it be on the logos, avatars, or wallpapers!<br>
A huge thank you to @tobas for the new Kaisen logo and the various avatars, and @Cybsemik for the wallpapers!</strong></p><br><br>

<p>This release comes at the same time as the full freeze of Debian Trixie (Debian 13), and makes it possible to put this release on Debian 13.</p></br>
<p>Say hello to our official community Discord server, where we bring together the Kaisen Linux community from all over the world! You can find it <a href="https://discord.gg/H7jbWzFrJ8" target="_blank">here</a>.</p></br>
<p>New tools included by default:
  <ul>
    <li>glab</li>
    <li>tekton-cli</li>
    <li>argo-cd</li>
    <li>openbao</li>
    <li>opentofu</li>
    <li>zfs-dkms</li>
    <li>hyfetch</li>
  </ul>
</p></br>
<p>The complete list of tools removed:
  <ul>
    <li>firmware-microbit-python</li>
    <li>neofetch</li>
    <li>gfio</li>
    <li>git-repair</li>
    <li>isomaster</li>
    <li>clamfs</li>
    <li>qemu-efi</li>
    <li>dmraid</li>
    <li>hddtemp</li>
    <li>scrounge-ntfs</li>
    <li>dnstop</li>
    <li>hping3</li>
    <li>crack</li>
    <li>ceph-fuse</li>
    <li>exfat-fuse</li>
    <li>bonnie++</li>
    <li>bloodhound</li>
    <li>wondershaper</li>
    <li>reiser4progs</li>
</p></br>
<p>Importants updates of softwares:
  <ul>
    <li>Linux 6.12.9</li>
    <li>Minikube 1.36.0</li>
    <li>Kubernetes 1.33.3</li>
    <li>Virtualbox 7.1.12</li>
    <li>Vagrant 2.4.8</li>
    <li>Velero 1.16.2</li>
    <li>Trivy 0.65.0</li>
    <li>Vault 1.20.2</li>
    <li>Terraform 1.12.2</li>
    <li>GNS3 2.2.54</li>
    <li>Helm 3.18.4</li>
    <li>EKSctl 0.212.0</li>
    <li>k6 1.1.0</li>
    <li>Packer 1.14.1</li>
    <li>Docker 26.1</li>
    <li>Docker Compose 2.39.2</li>
    <li>Czkawka 9.0.0</li>
    <li>Rclone 1.70.3</li>
  </ul>
</p></br>
<p>List of importants detailled changes:
  <ul>
    <li>KDE is now the default interface for Kaisen Linux, and is in version 6!</li>
    <li>SDDM is now the default display manager instead of lightdm. Lightdm was used instead of SDDM due to some missing customization settings, which were introduced with KDE version 6.</li>
    <li>XFCE is now available in version 4.20</li>
    <li>The <strong>apt upgrade</strong> and <strong>apt-get upgrade</strong> commands automatically redirect to <strong>apt full-upgrade</strong> and <strong>apt-get full-upgrade</strong>. 
      This is intended to simplify the update process if the kaisen-update command is not used and to limit the risk of breaking the system through updates.</li>
    <li>The snapshot from which the system was booted can now be restored automatically with a single command: <strong>sudo kaisen-timeshift-fast-restore</strong>.
    This command is intended to simplify the use of bootable BTRFS snapshots as much as possible.</li>
    <li>All translations of the menu have been completely reworked, especially in German! Many thanks to @0n1cOn3 for his work!
      <a href="https://gitlab.com/kaisenlinux/packages/kaisen-menu/-/commit/2aabb47fb321836f7093b64492d7d2b450f41466" target="_blank">Commit of these translations</a></li>
    <li>All ZFS management tools are now supported (zfs kernel module included)</li>
    <li>The SSL/TLS menu displays again.</li>
    <li>There are now four color profiles for the Kaisen terminal (background and text) integrated by default. 
      These profiles can be changed using a key combination (<strong>CTRL + SUPER + M</strong> for the next one or <strong>CTRL + SUPER + Q</strong> for the previous one) or by right-clicking => selecting a profile. 
      The settings can be redefined by you if necessary.</li>
    <li>The user documentation is updated for the v3</li>
    <li>The centralized manpages contains over 1705 manpages. The man5 (configuration files) have been added to the centralized manpages, same for the classement by applications categories.</li>
    <li>Blank pages is fixed in centralized manpages. All bad links were repaired</li>
    <li>To avoid breaking the snapshot feature, the installer's automatic partitioning only offers the separation of <strong>/</strong> and <strong>/home</strong>.
       This is because the snapshot feature does not work properly if other partitions outside of /home (and /boot) are separated from the root.
        For this reason, the assisted partitioning no longer offers other options. It is still possible to use another filesystem or a manual partitioning scheme.</li>
    <li>The GPG keys have been updated to remain functional until 2029</li>
    <li>Say hello to the <strong>kaisen-snapshot</strong> utility! 
      This utility is a bash wrapper for the timeshift command that makes it as easy as possible to use timeshift on a daily basis (similar to the <strong>kaisen-timeshift-fast-restore</strong> command for automatic restoration of the booted snapshot). 
      <a href="https://kaisenlinux.org/documentation/advanced-btrfs-utilization.html#the-kaisen-snapshot-command" target="_blank">Detailed documentation on this subject can be found here</a><li>
    <li>The service menu was entirely updated</li>
    <li>On LXQt, the wallpaper is unique for each screen</li>
    <li>On LXQt, quick shortcuts to the user directory and trash can have been added to the desktop by default</li>
    <li>The LXQt battery icon now displays the battery percentage by default (the icon has also been updated)</li>
    <li>GNS3 was revert to 2.2.x release because the v3 branch is unstable on Kaisen</li>
    <li>Some aliases were added to improve the behaviour of few command like ip (colors will be display automatically)</li>
  </ul>
</p></br>

<p>How do I check if I am in version 3.0? Use this command:
<ul>
    <li><strong>cat /etc/kaisen_version</strong></li>
</ul>
</p>

<p>This command should return "Rolling 3.0".
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
