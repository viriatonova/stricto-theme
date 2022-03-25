<?php get_header();?>
    <main class="w-full h-full flex flex-col">
        
        <h2 class="w-full mt-4 ml-4 text-2xl text-gray-500">Categoria: <?php echo single_cat_title();?></h2>
        

        <div class="flex">
            <section class="w-full sm:w-2/3 h-full">

                <?php get_template_part('includes/section', 'archive');?>

            </section>

            <aside class="hidden sm:flex flex-col w-1/3 h-full px-4 my-8">

                <?php if(is_active_sidebar('archive-sidebar')):?>
                    <?php dynamic_sidebar('archive-sidebar');?>
                <?php endif;?>

            </aside>
        </div>
        

    </main>
<?php get_footer();?>