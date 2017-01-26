<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vertu2017
 */

if ( ! is_active_sidebar( 'footer-1' ) && ! is_active_sidebar( 'footer-2' ) && ! is_active_sidebar( 'footer-3' ) && ! is_active_sidebar( 'footer-4' ) ) {
	return;
}
?>
<style>
    @media (min-width:960px){
        .v-row{
            display: table;
            table-layout: fixed;
            width: 100%;
        }
        .v-column{
            display: table-cell;
            vertical-align: top;
        }
    }
</style>
<aside id="secondary" class="widget-area v-row" role="complementary">
	<?php
    if(is_active_sidebar('footer-1')){
    ?>
    <section class="v-column">
    <?php
        dynamic_sidebar( 'footer-1' );
    ?>
    </section>
    <?php
    }
    ?>
    <?php
    if(is_active_sidebar('footer-2')){
        ?>
        <section class="v-column">
            <?php
            dynamic_sidebar( 'footer-2' );
            ?>
        </section>
        <?php
    }
    ?>
    <?php
    if(is_active_sidebar('footer-3')){
        ?>
        <section class="v-column">
            <?php
            dynamic_sidebar( 'footer-3' );
            ?>
        </section>
        <?php
    }
    ?>
    <?php
    if(is_active_sidebar('footer-4')){
        ?>
        <section class="v-column">
            <?php
            dynamic_sidebar( 'footer-4' );
            ?>
        </section>
        <?php
    }
    ?>
</aside><!-- #secondary -->
