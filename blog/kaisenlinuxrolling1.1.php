<?php include('../header.php');?>

<div id="content" class="single-blog">


<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <h1>Kaisen Linux Rolling 1.1 Release Notes</h1>
        <ul class="list-inline mb-50">
          <li class="list-inline-item">Author: Kaisen</li>
          <li class="list-inline-item">Date: 2020/06/15</li>
        </ul>
        <img class="img-fluid mb-50" src="../img/screen.png" alt="blog-image">
      </div>
      <div class="col-lg-8 offset-lg-2">
        <div class="post-single-content">
          <h1 id="kaisenlinuxrolling">Kaisen Linux Rolling 1.1 changelog</h1>
<p>Rolling revision. Fix a lot of bad construction and added new tools. New logo and new wallpapers.</p>
<p>Codename: Rolling</p>
<p>This version is a revision of version 1.0 with new packages, a SysOps section has been created, many bugs fixed ...</p>
<p>Although usable as it is, our first rolling version had a lot of design errors, causing problems with certain packages when they were updated. 
We also reworked the default profile a lot, as the updates were not practical.</p>
<p>We also reworked our logo and added new wallpapers. 
I would like to personally thank Tobas, our recently arrived graphic designer for his magnificent work on the wallpapers as well as the retouching of our logo in the image of the message that we wish to convey on Kaisen Linux.</p>
<p>Many consider Kaisen Linux as a "System Rescue", because that is how we "sold" it since its creation, which is not exactly the case. 
Kaisen Linux is not just a System Rescue, but is a distribution dedicated to all IT professionals. Which includes IT technicians, system administrators, infrastructure engineers, etc.
This is why our new logo and our wallpapers mention "for IT professionals".
This therefore includes the complete tool arsenal dedicated to system rescue, but since the first version of the network diagnostic tools, containerization, virtualization etc ...</p>
<p>So here is the detailed changelog of this revision of the continuous version of Kaisen Linux (called rolling/stable):</p>
<ul>
    <li>Adding SysOps section with this tools: kubectl, docker, lxc, ansible, vagrant, jmeter</li>
    <li>Service menu reworked and "concatenated". For example the vmware and virtualbox services are in "Virtualization". LXC and Docker in Containairization etc...</li>
    <li>Graphic installer updated with our new logo</li>
    <li>Linux upgrade to 5.6.17 version</li>
    <li>Removal of automysqlbackup, kaisen-testdisk and kaisen-photorec packages (replaced by Debian testdisk package)</li>
    <li>Correction of the bug "ghost packages" occurring during the update of packages</li>
    <li>Creation of the command "kaisen-update-skel" allowing to update all the user's default profile when the "kaisen-mate-default-profile" package is updated.</li>
    <li>Default profile reworked. The Firefox profile is now created by configuration files in /usr/share/firefox-esr and is no longer installed by /etc/skel.
    This allows you to update the default profile without overwriting user favorites, browsing history and others.</li>
    <li>Introduction of remmina and grsync, which are graphical tools for RDP and file backup/synchronization</li>
    <li>Over 500 updated packages including vlc, libreoffice and many others</li>
    <li>Kaisen icon theme has been reworked to correct certain pixelated logos (such as that of MATE on About MATE)</li>
    <li>The bug of incorrect configuration of incoming directories on bluetooth has also been corrected</li>
    <li>We have removed all the wallpapers of the sbeta version to give a revival to the project</li>
    <li>Adding glusterfs as fuse driver</li>
</ul>
<p>Read this part of the <a href="https://docs.kaisen-linux.org/index.php?title=How_to_update_default_profile_%3F" target="_blank">documentation</a> 
for more details on the use of the "kaisen-update-skel" command and the "risks" associated with the use of this command.</p>
<p>We have also created a package called "kaisen-build" which integrates the configurations and files allowing us to build the ISO. 
This has the primary objective of creating a live system by integrating your own tools and/or creating more up-to-date live music while waiting for our official ISO images.
To avoid any problem, please keep your personal images for yourself. Always check the provenance of an ISO image before using it by referring to the checksum present on the download page of our site.
We have not integrated it by default in ISO because it is an optional feature. If you want to create your ISOs, install the kasien-build package and go to / root / kaisen-build and make your own configurations.
We are not going to redo all the live-build documentation (the official Debian ISO creation tool that we also use), refer to Debian for more documentation on the functioning of the tool.</p>
<p>How do I update my system? Do:</p>
<ul>
    <li>sudo apt kaisen-update (or apt update && apt upgrade)</li>
    <li>sudo apt install --reinstall kaisen-services-management kaisen-dwagent kaisen-bettercap kaisen-update (for fix bug "ghosts packages"</li>
    <li>sudo apt autoremove (for remove old kaisen packages)</li>
</ul>
<p>How do I check if I am in version 1.1? Use this command:</p>
<ul>
    <li>cat /etc/debian-version</li>
</ul>
<p>This command should return "Rolling 1.1". 
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
