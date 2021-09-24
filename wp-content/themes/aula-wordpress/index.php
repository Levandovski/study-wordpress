<?php
/**
 * O tema do Jessé
 *
 *Bla bla
 * @link localhost
 *
 * @package Jessé
 * @subpackage Aula Wordpress
 * @since Twenty Nineteen 1.0
 */

get_header();

?>
<h1>Theme Name: Aula Worpress</h1>
    <?php 
        $args = array(
            'post_type' => 'aula',
            'posts_per_page' => 6,
        );
        $query = new WP_QUERY($args);
        while($query->have_posts()) : $query->the_post(); 
    ?>

        <a href="<?= get_permalink(); ?>">
            <?php 
                echo the_title();
                echo the_content();
            ?>
        </a>
        <!--post-->
        <!-- <div class="col-md-4">
            <div class="post post-sm">
                <a class="post-img" href="<?= get_permalink(); ?>"><img src="<?= get_the_post_thumbnail_url(); ?>" alt=""></a>
                <div class="post-body">
                    <div class="post-category">
                        <?php foreach(get_the_category() as $category){ ?>
                            <a href="<?= get_category_link($category); ?>"><?= $category->name; ?></a>
                        <?php } ?>
                    </div>
                    <h3 class="post-title">
                        <a href="<?= get_permalink(); ?>"><?= the_title(); ?><a>
                        <ul class="post-meta">
                            <li><?= get_the_date(); ?></li>
                        </ul>
                    </h3>
                </div>
                </div>
            </div>
        </div> -->
    <?php endwhile; ?>
<?php 

    get_footer();

?>