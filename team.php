<?php include('./header.php');?>

<?php
$members = [
    [
        'img' => 'img/team/labrute.jpg',
        'name' => 'Mehdi Lecomte',
        'nickname' => 'LaBrute!',
        'job' => 'Core developer',
        'text' => 'Linux sysadmin, he is the core developer of Kaisen Linux. Package and infrastructure maintainer, He is also in charge of user support. He also participates in the decision making on the evolution of Kaisen.',
        'linkedin_url' => 'https://www.linkedin.com/in/b12644a6/'
    ],
    [
        'img' => 'img/team/tobas.jpg',
        'name' => 'Tomi Bequet',
        'nickname' => 'tobas',
        'job' => 'Graphic designer',
        'text' => 'Freelance graphic designer for several years, he provides us with our wallpapers as well as his expertise on the user experience. He is the one who reworked our official logo.',
        'linkedin_url' => 'https://www.linkedin.com/in/tomibequet/'
    ],
    [
        'img' => 'img/contributors/kaisen.jpg',
        'name' => 'Arnaud Cormier',
        'nickname' => 'Magiknono',
        'job' => 'Manpages maintainer',
        'text' => 'Freelance Linux sysadmin and webdev. He contributed a lot on Kaisen Linux with videos. Today, he is maintainer of &#x3C;a href=&#x22;manpages/&#x22;&#x3E;manpages&#x3C;/a&#x3E; documentation.',
        'linkedin_url' => 'https://www.linkedin.com/in/arnaudcormier/'
    ],
];
?>

<!-- Team Members START -->
<div class="section-block-grey">
  <div class="container">
    <div class="section-heading center-holder">
      <h3>Team</h3>
      <p>We are first and foremost a team of enthusiasts,</p>
      <p>and we are delighted to be able to provide you with a
         complete tool like this.</p>
    </div>
    <div class="row mt-50 justify-content-sm-center">
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="team-member">
          <div class="team-member-img">
            <img src="img/team/kaisen.jpg" alt="img">
          </div>
          <div class="team-member-text">
            <h4>Kevin Chevreuil<br><small>Kaisen</small></h4>
            <span>Founder & team leader</span>
            <p>Linux sysadmin, he is the main developer of Kaisen Linux, blog and documentation editor. 
               He also takes care of the putting into production of updates of packages and repositories.</p>
            <ul>
              <li><a href="https://www.linkedin.com/in/kevinchevreuil/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-50 justify-content-sm-center">
        <?php foreach ($members as $member): ?>
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="team-member">
                <div class="team-member-img">
                    <img src="<?php echo($member['img']);?>" alt="img">
                </div>
                <div class="team-member-text">
                    <h4><?php echo($member['name']);?><br><small><?php echo($member['nickname']);?></small></h4>
                    <span><?php echo($member['job']);?></span>
                    <p><?php echo(html_entity_decode($member['text']));?><p>
                    <ul>
                        <li><a href="<?php echo($member['linkedin_url']);?>" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
  </div>
</div>
<!-- Team Members END -->
<?php include('./footer.php');?>
