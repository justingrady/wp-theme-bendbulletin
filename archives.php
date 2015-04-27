<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<?php get_search_form(); ?>

<div class="archiveList">
        <div class="content">
            <h2>Archives by Month:</h2>
            <ul>
            <?php wp_get_archives('type=monthly'); ?>
            </ul> 
        </div>
</div>
<div class="archiveList">
        <div class="content">
            <h2>Archives by Subject:</h2>
            <ul>
            <?php wp_list_categories(); ?>
            </ul>
        </div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
