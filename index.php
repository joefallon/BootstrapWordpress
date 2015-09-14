<!DOCTYPE html>
<!--index.php-->
<html lang="en">
<?php get_header(); ?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="heading">
                    Heading
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div id="main-content">
                    <?php if(have_posts()): ?>
                        <?php while(have_posts()) : the_post(); ?>
                            <h2>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <?php the_excerpt(); ?>
                        <?php endwhile;
                        wp_reset_query(); ?>
                    <?php else: ?>
                        <h2>No posts found</h2>
                    <?php endif; ?>

                    <?php global $wp_query; ?>
                    <?php if($wp_query->max_num_pages > 1) : ?>
                        <div class="prev-post">
                            <?php next_posts_link('&larr; Older posts'); ?>
                        </div>
                        <div class="next-post">
                            <?php previous_posts_link('Newer posts &rarr;'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <?php get_footer(); ?>
            </div>
        </div>
    </div>

</body>
</html>
