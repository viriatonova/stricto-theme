<?php get_header();?>
    <main class="w-full h-full flex flex-col">
        
        <h2 class="w-full mt-4 ml-4 text-2xl text-gray-500">Categoria: <?php echo single_cat_title();?></h2>
        

        <div class="flex">
            <section class="w-full sm:w-2/3 h-full">

                <?php get_template_part('includes/section', 'archive');?>

            </section>

        </div>
        

    </main>
<?php get_footer();?>