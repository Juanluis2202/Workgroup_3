<?php
function generateTreatmentSection() {
    
    $treatments = [
        [
            'img_src' => 'images/t1.png',
            'title' => 'Nephrologist Care',
            'description' => 'Alteration in some form, by injected humour, or randomised words which don\'t look even slightly e sure there isn\'t anything',
            'link' => '#'
        ],
        [
            'img_src' => 'images/t2.png',
            'title' => 'Eye Care',
            'description' => 'Alteration in some form, by injected humour, or randomised words which don\'t look even slightly e sure there isn\'t anything',
            'link' => '#'
        ],
        [
            'img_src' => 'images/t3.png',
            'title' => 'Pediatrician Clinic',
            'description' => 'Alteration in some form, by injected humour, or randomised words which don\'t look even slightly e sure there isn\'t anything',
            'link' => '#'
        ],
        [
            'img_src' => 'images/t4.png',
            'title' => 'Parental Care',
            'description' => 'Alteration in some form, by injected humour, or randomised words which don\'t look even slightly e sure there isn\'t anything',
            'link' => '#'
        ]
    ];

    
    $html = '<section class="treatment_section layout_padding">
        <div class="side_img">
          <img src="images/treatment-side-img.jpg" alt="">
        </div>
        <div class="container">
          <div class="heading_container heading_center">
            <h2>
              Hospital <span>Treatment</span>
            </h2>
          </div>
          <div class="row">';

    
    foreach ($treatments as $treatment) {
        $html .= '<div class="col-md-6 col-lg-3">
            <div class="box ">
              <div class="img-box">
                <img src="' . htmlspecialchars($treatment['img_src']) . '" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  ' . htmlspecialchars($treatment['title']) . '
                </h4>
                <p>
                  ' . htmlspecialchars($treatment['description']) . '
                </p>
                <a href="' . htmlspecialchars($treatment['link']) . '">
                  Read More
                </a>
              </div>
            </div>
          </div>';
    }


    $html .= '</div>
        </div>
      </section>';

    return $html;
}


echo generateTreatmentSection();
?>
