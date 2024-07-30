
<?php
function generateAboutSection($imageSrc, $headingText, $paragraphText, $linkHref) {
    return '
    <section class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="' . htmlspecialchars($imageSrc) . '" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                About <span>Hospital</span>
                            </h2>
                        </div>
                        <p>
                            ' . htmlspecialchars($paragraphText) . '
                        </p>
                        <a href="' . htmlspecialchars($linkHref) . '">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>';
}


$imageSrc = 'images/about-img.jpg';
$headingText = 'About Hospital';
$paragraphText = 'has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors';
$linkHref = '';

echo generateAboutSection($imageSrc, $headingText, $paragraphText, $linkHref);
?>

