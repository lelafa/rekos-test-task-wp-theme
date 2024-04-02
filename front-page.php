<?php
/*
Template Name: Rekos Template
*/
// Get the field values

$hero_overview_image = get_field('hero_overview_image');
$hero_image_mobile = get_field('hero-image-mobile');
$hero_title_highlight = get_field('hero_title_highlight');
$hero_title = get_field('hero_title');
$hero_description = get_field('hero_description');
$hero_start_button = get_field('hero_start_button');
$section_2_title = get_field('section_2_title');
$section_2_description = get_field('section_2_description');
$section_2_button_text = get_field('section_2_button_text');
$section_2_button_text_mobile = get_field('section_2_button_text_mobile');
$section_2_image_1 = get_field('section_2_image_1');
$section_2_image_2 = get_field('section_2_image_2');
$section_2_image_3 = get_field('section_2_image_3');
$section_2_solution_for_1 = get_field('section-2-solution-for-1');
$section_2_solution_for_2 = get_field('section-2-solution-for-2');
$section_2_solution_for_3 = get_field('section-2-solution-for-3');
$section_3_title_1 = get_field('section-3-title-1');
$section_3_title_2 = get_field('section-3-title-2');
$section_3_title_3 = get_field('section-3-title-3');
$section_3_title_4 = get_field('section-3-title-4');
$section_3_description_1 = get_field('section-3-description-1');
$section_3_description_2 = get_field('section-3-description-2');
$section_3_description_3 = get_field('section-3-description-3');
$section_3_description_4 = get_field('section-3-description-4');

?>
<? get_header(); ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<section class="section-one">
    <div class="section-one-left">
        <h1>
            <?php 
                echo $hero_title_highlight ? '<span class="section-one-highlight">' . $hero_title_highlight . '</span> ' : ''; 
                echo $hero_title ? $hero_title : ''; 
            ?>
        </h1>
        <span class="hero-description">
            <?php echo $hero_description ?   $hero_description   : ''; ?>
        </span>
        <div class="section-one-btn-wrap">
            <div class="section-one-curvature-one"></div>
            <div class="section-one-curvature-one-overlap"></div>
            <a href="#" class="section-one-btn">
                <span class="section-one-inner-wrap">
                    <h4 class="section-one-btn-title">
                        <?php if ( $hero_start_button ) : 
                            echo $hero_start_button;
                        endif;
                        ?>
                    </h4>
                    <p class="section-one-btn-subtitle">
                        It’s Free
                    </p>
                </span>
                <img class="section-one-btn-img" src="<?php site_url(); ?>/rekos/wp-content/themes/twentytwentyfour/assets/rekos-img/Frame 1171276255.png" alt="">
            </a>
            <div class="section-one-curvature-two"></div>
            <div class="section-one-curvature-two-overlap"></div>
        </div>
    </div>
    <div class="section-one-right" style="background-image:url('<?php echo $hero_overview_image ? $hero_overview_image : ''; ?>');">
        <img src="<?php echo $hero_image_mobile ? $hero_image_mobile : ''; ?>" alt="" class="hero-image-mobile">
        <img src="<?php site_url() ?>/rekos/wp-content/themes/twentytwentyfour/assets/rekos-img/Frame 3860.png" alt="" class="section-one-statistics">
        <img src="<?php site_url(); ?>/rekos/wp-content/themes/twentytwentyfour/assets/rekos-img/Frame 3842.png" alt="" class="section-one-delivery">
        <img src="<?php site_url(); ?>/rekos/wp-content/themes/twentytwentyfour/assets/rekos-img/shadow 1.png" alt="" class="section-one-shadow">
    </div>
</section>
<section class="section-two">
    <div class="section-two-front-wrap">
        <div class="section-two-left">
                <h2><?php echo $section_2_title ? $section_2_title : ''; ?></h2>
                <p><?php echo $section_2_description ? $section_2_description : ''; ?></p>
            <a href="#" class="section-two-btn">
                <?php echo $section_2_button_text ? $section_2_button_text : ''; ?>
            </a>
            <a href="#" class="section-two-btn-mobile">
                <?php echo $section_2_button_text_mobile ? $section_2_button_text_mobile : ''; ?>
            </a>
        </div>
        <div class="section-two-right">
            <img src="<?php site_url(); ?>/rekos/wp-content/themes/twentytwentyfour/assets/rekos-img/Frame 1171276361 (1) (1).png" alt="" class="section-two-guy">
            <img src="<?php site_url(); ?>/rekos/wp-content/themes/twentytwentyfour/assets/rekos-img/Frame 1171276377.png" alt="" class="section-two-guy-mobile">
        </div>
    </div>

    <div class="section-two-columns-wrap">
        <div class="section-two-column-one section-two-column-single">
            <div class="section-two-column-img-wrap">
                <img src="<?php echo $section_2_image_1 ? $section_2_image_1 : ''; ?>" alt="">
            </div>
            <span class="section-two-column-btn-wrap">
                <p>Solution for</p>
                <a href="#" class="section-two-column-btn-inner-wrap">
                    <?php echo $section_2_solution_for_1 ? $section_2_solution_for_1 : ''; ?>
                    <div class="section-two-svg-wrap">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12.5" cy="12" r="11" fill="#222831" stroke="#222831" stroke-width="2"/>
                        <path d="M10.3208 7.82078C10.7741 7.36747 11.5091 7.36747 11.9624 7.82078L15.6793 11.5377C16.1326 11.991 16.1326 12.7259 15.6793 13.1793C15.226 13.6326 14.491 13.6326 14.0377 13.1793L10.3208 9.46233C9.86752 9.00903 9.86752 8.27408 10.3208 7.82078Z" fill="white"/>
                        <path d="M10.3209 16.897C9.8676 16.4436 9.8676 15.7087 10.3209 15.2554L14.0378 11.5385C14.4911 11.0852 15.2261 11.0852 15.6794 11.5385C16.1327 11.9918 16.1327 12.7267 15.6794 13.18L11.9625 16.897C11.5092 17.3503 10.7742 17.3503 10.3209 16.897Z" fill="white"/>
                        </svg>
                    </div>
                </a>
            </span>
        </div>
        <div class="section-two-column-two section-two-column-single">
            <div class="section-two-column-img-wrap">
                <img src="<?php echo $section_2_image_2 ? $section_2_image_2 : ''; ?>" alt="">
            </div>
            <span class="section-two-column-btn-wrap">
                <p>Solution for</p>
                <a href="#" class="section-two-column-btn-inner-wrap">
                    <?php echo $section_2_solution_for_2 ? $section_2_solution_for_2 : ''; ?>
                    <div class="section-two-svg-wrap">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12.5" cy="12" r="11" fill="#222831" stroke="#222831" stroke-width="2"/>
                        <path d="M10.3208 7.82078C10.7741 7.36747 11.5091 7.36747 11.9624 7.82078L15.6793 11.5377C16.1326 11.991 16.1326 12.7259 15.6793 13.1793C15.226 13.6326 14.491 13.6326 14.0377 13.1793L10.3208 9.46233C9.86752 9.00903 9.86752 8.27408 10.3208 7.82078Z" fill="white"/>
                        <path d="M10.3209 16.897C9.8676 16.4436 9.8676 15.7087 10.3209 15.2554L14.0378 11.5385C14.4911 11.0852 15.2261 11.0852 15.6794 11.5385C16.1327 11.9918 16.1327 12.7267 15.6794 13.18L11.9625 16.897C11.5092 17.3503 10.7742 17.3503 10.3209 16.897Z" fill="white"/>
                        </svg>
                    </div>
                </a>
            </span>
        </div>
        <div class="section-two-column-three section-two-column-single">
            <div class="section-two-column-img-wrap">
                <img src="<?php echo $section_2_image_3 ? $section_2_image_3 : ''; ?>" alt="">
            </div>
            <span class="section-two-column-btn-wrap">
                <p>Solution for</p>
                <a href="#" class="section-two-column-btn-inner-wrap">
                    <?php echo $section_2_solution_for_3 ? $section_2_solution_for_3 : ''; ?>
                    <div class="section-two-svg-wrap">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="11" fill="white" stroke="white" stroke-width="2"/>
                            <path d="M9.82082 7.82078C10.2741 7.36747 11.0091 7.36747 11.4624 7.82078L15.1793 11.5377C15.6326 11.991 15.6326 12.7259 15.1793 13.1793C14.726 13.6326 13.991 13.6326 13.5377 13.1793L9.82082 9.46233C9.36752 9.00903 9.36752 8.27408 9.82082 7.82078Z" fill="#222831"/>
                            <path d="M9.8209 16.897C9.3676 16.4436 9.3676 15.7087 9.8209 15.2554L13.5378 11.5385C13.9911 11.0852 14.7261 11.0852 15.1794 11.5385C15.6327 11.9918 15.6327 12.7267 15.1794 13.18L11.4625 16.897C11.0092 17.3503 10.2742 17.3503 9.8209 16.897Z" fill="#222831"/>
                        </svg>
                    </div>
                </a>
            </span>
        </div>
    </div>

</section>
<section class="section-three">
    <h2>
    Why Our Academy?
    </h2>
    <div class="section-three-content-wrap">
        <div class="section-three-div-one-wrap section-three-div-wrap">
            <div class="section-three-div-inner-wrap">
                <h4>
                    <?php echo $section_3_title_1 ? $section_3_title_1 : ''; ?>
                </h4>
                <p>
                    <?php echo $section_3_description_1 ? $section_3_description_1 : ''; ?>
                </p>
            </div>
            <div class="section-three-div-dot section-three-div-one-dot"></div>
            <svg width="78" height="105" viewBox="0 0 78 105" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M72.577 98C68.1849 57.7645 52.7825 24.5 3.76737 7" stroke="#C3DD6E" stroke-width="2" stroke-linecap="round"/>
                <ellipse cx="6.59819" cy="7" rx="6.59819" ry="7" transform="matrix(-1 0 0 1 77.29 91)" fill="#C3DD6E"/>
                <path d="M-0.00310707 7.5C-0.00310707 11.366 2.951 14.5 6.59508 14.5C10.2392 14.5 13.1933 11.366 13.1933 7.5C13.1933 3.63401 10.2392 0.5 6.59508 0.5C2.951 0.5 -0.00310707 3.63401 -0.00310707 7.5Z" fill="#C3DD6E"/>
            </svg>
        </div>
        <div class="section-three-div-two-wrap section-three-div-wrap">
            <div class="section-three-div-dot section-three-div-two-dot"></div>
            <svg width="120" height="88" viewBox="0 0 120 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.07553 79C19.0151 51.3333 51.3776 6.5 113.589 6.5" stroke="#E7DC91" stroke-width="2" stroke-linecap="round"/>
                <ellipse cx="6.60423" cy="81" rx="6.59819" ry="7" fill="#E7DC91"/>
                <ellipse cx="113.118" cy="7" rx="6.59819" ry="7" fill="#E7DC91"/>
            </svg>
            <div class="section-three-div-inner-wrap">
                <h4>
                    <?php echo $section_3_title_2 ? $section_3_title_2 : ''; ?>
                </h4>
                <p>
                    <?php echo $section_3_description_2 ? $section_3_description_2 : ''; ?>
                </p>
            </div>
        </div>
        <div class="section-three-div-three-wrap section-three-div-wrap">
            <div class="section-three-div-inner-wrap">
                <h4>
                    <?php echo $section_3_title_3 ? $section_3_title_3 : ''; ?>
                </h4>
                <p>
                    <?php echo $section_3_description_3 ? $section_3_description_3 : ''; ?>
                </p>
            </div>
            <div class="section-three-div-dot section-three-div-three-dot"></div>
            <svg width="85" height="78" viewBox="0 0 85 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M77.8338 70C72.824 35.6615 43.1504 8 8.08157 8" stroke="#3B843D" stroke-width="2" stroke-linecap="round"/>
                <ellipse cx="6.59819" cy="7" rx="6.59819" ry="7" transform="matrix(-1 0 0 1 84.432 64)" fill="#3B843D"/>
                <ellipse cx="6.59819" cy="7" rx="6.59819" ry="7" transform="matrix(-1 0 0 1 13.7372 0)" fill="#3B843D"/>
            </svg>
        </div>
        <div class="section-three-div-four-wrap section-three-div-wrap">
            <div class="section-three-div-dot section-three-div-four-dot"></div>
            <svg width="126" height="79" viewBox="0 0 126 79" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.45015 72.5C18.3897 44.8334 57.7275 -7.09997 119.562 6.50003" stroke="#5ED1D3" stroke-width="2" stroke-linecap="round"/>
                <ellipse cx="6.92143" cy="72" rx="6.59819" ry="7" fill="#5ED1D3"/>
                <ellipse cx="119.091" cy="7" rx="6.59819" ry="7" fill="#5ED1D3"/>
            </svg>
            <div class="section-three-div-inner-wrap">
                <h4>
                    <?php echo $section_3_title_4 ? $section_3_title_4 : ''; ?>
                </h4>
                <p>
                    <?php echo $section_3_description_4 ? $section_3_description_4 : ''; ?>
                </p>
            </div>
        </div>
    </div>
</section>

<? get_footer(); ?>