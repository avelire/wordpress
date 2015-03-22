<?php
/**
 * Created by PhpStorm.
 * User: Val Ng
 * Date: 03/22/15
 * Time: 09:32 AM
 * @package ThinkUp
 *
 * The "sidebar" containing the widget area in each category header area.
 */
?>
<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
    <div class="widget-cat-area" role="complementary">
<?php dynamic_sidebar( 'sidebar-4' ); ?>
    </div><!-- #secondary -->
<?php endif; ?>