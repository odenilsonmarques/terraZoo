<?php get_header(); ?>

<div id="content" class="site-content">
    <div id="primary" class="content-area mt-5">
        <div class="container">
            <?php
            while (have_posts()) : the_post();
            ?>
                <article>
                    <header>
                        <h1><?php the_title(); ?></h1>
                    </header>
                    <!-- exibe o conteudo do post -->
                    <?php the_content(); ?>
                </article>
            <?php
            endwhile;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>