<?php get_header(); ?>

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="page-title"><?php echo get_the_title(); ?></h2>
                <div class="thumbnail-image">
                    <?php 
                    the_post_thumbnail('full',[
                        'class' => 'img-responsive page_thumbnail'
                    ]);
                    ?>
                </div>
                <section class="page-content">
                    <?php echo get_the_content(); ?>
                </section>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>