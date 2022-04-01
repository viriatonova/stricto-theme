<?php
    get_header();
?>
    <main class="w-full h-full flex justiify-start bg-white">

        <section class="w-full lg:w-2/3 h-full">

            <?php get_template_part('includes/section', 'principal');?>
            
            <?php get_template_part('includes/section', 'secundaria');?>
			
			<!-- <?php //get_template_part('includes/section', 'anterior');?> -->
            
        </section>

        <aside class="w-1/3 h-full ml-4 hidden lg:flex flex-col">

            <?php get_template_part('includes/section', 'asideprincipal');?>

            <!-- <?php //get_template_part('includes/section', 'servicos');?> -->
            
            <?php get_template_part('includes/section', 'colunas');?>
            
            <?php get_template_part('includes/section', 'asidesecund');?>
			
		
        </aside>
        
    </main>
<?php
    get_footer();
?>

        
    
