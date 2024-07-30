<?php

include 'team_data.php'; 

function generateTeamSection($teamMembers) {
    $html = '
    <section class="team_section layout_padding">
      <div class="container">
        <div class="heading_container heading_center">
          <h2>
            Our <span>Doctors</span>
          </h2>
        </div>
        <div class="carousel-wrap">
          <div class="owl-carousel team_carousel">
    ';

    foreach ($teamMembers as $member) {
        $html .= '
            <div class="item">
              <div class="box">
                <div class="img-box">
                  <img src="' . htmlspecialchars($member['image']) . '" alt="" />
                </div>
                <div class="detail-box">
                  <h5>' . htmlspecialchars($member['name']) . '</h5>
                  <h6>' . htmlspecialchars($member['degree']) . '</h6>
                  <div class="social_box">
                    <a href="' . htmlspecialchars($member['socialLinks']['facebook']) . '">
                      <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="' . htmlspecialchars($member['socialLinks']['twitter']) . '">
                      <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="' . htmlspecialchars($member['socialLinks']['linkedin']) . '">
                      <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                    <a href="' . htmlspecialchars($member['socialLinks']['instagram']) . '">
                      <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
        ';
    }

    $html .= '
          </div>
        </div>
      </div>
    </section>
    ';

    return $html;
}


echo generateTeamSection($teamMembers);
?>
