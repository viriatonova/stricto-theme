<?php get_header();?>

<header>

</header>

<main class="w-full h-full">
    <div class="w-full h-full flex px-2 mt-6 mb-6 sm:px-12">

        <section class="w-3/4">
            
            <?php the_content();?>

        </section>


        <aside class="w-1/4">

            <?php if(is_active_sidebar('page-sidebar')):?>
                <?php dynamic_sidebar('page-sidebar');?>
            <?php endif;?>

        </aside>

    </div>
</main>



<?php get_footer();?>