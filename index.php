<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
    <section class="industries">
        <h1>Industries</h1>
        <div class="four-columns">
            <div class="col">
                <div class="image-box">
                    <img src="../img/Group_2077.svg" alt="icon">
                </div>
                <div class="text-holder">
                    <strong class="title">CPG</strong>
                    <p>Track consumer demand, analyze shopper behavior, and refine search strategies to win in the eCommerce world.</p>
                </div>
            </div>
            <div class="col">
                <div class="image-box">
                    <img src="../img/Group_4603.svg" alt="icon">
                </div>
                <div class="text-holder">
                    <strong class="title">Retail</strong>
                    <p>Get game-changing insights on leading marketplaces, benchmark your performance against the competition,
                        and quantify potential threats.</p>
                </div>
            </div>
            <div class="col">
                <div class="image-box">
                    <img src="../img/Group_4602.svg" alt="icon">
                </div>
                <div class="text-holder">
                    <strong class="title">Agencies & Consultancies</strong>
                    <p>Help clients grow their brands across marketplaces by identifying performance issues, optimizing search strategies, and increasing ROI on their spend.</p>
                </div>
            </div>
            <div class="col">
                <div class="image-box">
                    <img src="../img/Frame_2678.svg" alt="icon">
                </div>
                <div class="text-holder">
                    <strong class="title">Media & Publishers</strong>
                    <p>Fine-tune content and SEO strategies based on consumer product demand,
                        and maximize revenue from
                        eCommerce affiliate programs.</p>
                </div>
            </div>
            <div class="col">
                <div class="image-box">
                    <img src="../img/Frame_2678.svg" alt="icon">
                </div>
                <div class="text-holder">
                    <strong class="title">Media & Publishers</strong>
                    <p>Fine-tune content and SEO strategies based on consumer product demand,
                        and maximize revenue from
                        eCommerce affiliate programs.</p>
                </div>
            </div>

        </div>
    </section>
<?php
get_footer();
