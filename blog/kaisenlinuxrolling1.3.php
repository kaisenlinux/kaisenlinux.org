<?php include('../header.php');?>
<div id="content" class="single-blog">


<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <h1>Kaisen Linux Rolling 1.3 Release Notes</h1>
        <ul class="list-inline mb-50">
          <li class="list-inline-item">Author: Kevin Chevreuil - Kaisen</li>
          <li class="list-inline-item">Date: 2020/08/20</li>
        </ul>
        <img class="img-fluid mb-50" src="../img/screen.png" alt="blog-image">
      </div>
      <div class="col-lg-8 offset-lg-2">
        <div class="post-single-content">
          <h1 id="kaisenlinuxrolling">Kaisen Linux Rolling 1.3 changelog</h1>
<p>New revision of the rolling. Almost complete overhaul of the system. New tools and new conky.</p>
<p>Codename: Rolling</p> 
<p>This review is by far the most technical I have done. Almost the entire project (3/4) has been reworked. 
	It was the result of a month of work.
	When 1.2 arrived, I had done a lot of things (3 new graphical interfaces) but for me it was all imperfect.<br>
	Since Kaisen Linux is based on Debian, I try to provide exactly the same stability as an original Debian, 
	like any good self-respecting derivative.<br>
	The kaisen-interface-switcher feature, to name but one, reinstalled the default profile on each GUI installation 
	and could be binding for a rollback because users lost all their customization.
	The packages were developed to apply configutations "on the fly" through various scripts. 
	It allowed further customization, but with each package update, the user if he had made a customization 
	(on lightdm for example) he automatically lost it.<br>
	To correct this problem, and this is what was the most complicated, I went over almost all of the configurations 
	(menus, login screen for example) in conffiles. This means that at each update, if the user has modified any of these
	files, dpkg will ask if the custom configurations should be kept or not. This allows you to have better control over 
	your system, and this is what is important for a distribution, the user must have full control.<br>
	More than half of the source packages have been modified and removed. This was intended to simplify development 
	to make it less complex, more easily accessible and above all more stable.</p>

<p>Now that the full details on this revision have been given, here is a detailed changelog, 
	changes made to achieve this result:</p>
<ul>
	<li>All sources for the maintenance tools metapackage have been brought together in the kaisen-technicians-tools 
		metapackage as a single source for all these tools.</li>
	<li>Removed kaisen-*-default-profile packages replaced by kaisen-skeleton, to put the default profile of all 
		interfaces into one package. This allowed the interface switcher to keep the customization of the old interface 
		for a rollback. The default profile no longer needs to be copied from the skel.</li>
	<li>Removed kaisen-*-design, replaced packages whose entire contents were copied to kaisen-mate, kaisen-kde, 
		kaisen-lxde, kaisen-xfce. It just made the package updates easier and less of a job for me.</li>
	<li>Improved kaisen-update command to further reduce the risk of update error.</li>
	<li>Creation of conffiles for the menu as well as for lightdm, sddm.</li>
	<li>Fixed icon bug with XFCE after installing it with interface switcher.</li>
	<li>Installation of a new theme by KDE. More modern and above all much more beautiful.</li>
	<li>Updated conky for adaptation with Conky update 1.11 (older code more compatible, and theme update).</li>
	<li>Firefox update to version 79.</li>
	<li>Updated GRUB to fix BootHole bug (although normally Kaisen Linux was not affected).</li>
	<li>LibreOffice and Thunderbird translation into French, Spanish, Portuguese, Italian and German.</li>
	<li>Replacement of the kaisen-firefox package by kaisen-skeleton (all Firefox configurations have been integrated on kaisen-skeleton).</li>
	<li>Created the kaisen-temperature-analysis package (kaisen-technicians-tools is the source package) to install some tools to check the 
	    temperature of different hardware components.</li>
</ul>

<p>How to properly update the system?</p>
<p>Take for example that you are on kaisen-mate. Do this:</p>
<ul>
	<li>sudo kaisen-update</li>
</ul>

<p>To copy the new conky, issue the following command:</p>
<ul>
	<li>cp /etc/skel/.conkyrc $HOME</li>
</ul>

<p>You can also copy the new conky theme to LXDE. KDE and XFCE do not have a conky preinstalled by default.</p>
<p>This is by no means mandatory, but I also recommend that you use the kaisen-update-skel command to put the entire 
	contents of /etc/skel on the directory for all users. However this will make you lose your personalization on 
	your desktop environment, use it as a precaution.</p>

<p>How do I check if I am in version 1.3? Use this command:</p>
<ul>
    <li><strong>cat /etc/debian-version</strong></li>
</ul>
<p>This command should return "Rolling 1.3". 
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
