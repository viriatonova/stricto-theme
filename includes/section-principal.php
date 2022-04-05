<article id="capa" class="w-full h-auto flex flex-col sm:flex-row mt-4 ">
    <div class="w-full h-auto py-2 mb-2">
        <div class="inline-flex ml-2 mb-2">
            <p class="mr-4 text-normal text-red-500">Capa</p>
        </div>
        <div class="w-full h-auto flex flex-col-reverse xl:flex-row px-2 mt-2 mb-4">
            
                <?php query_posts('showposts=1&category_name=Capa');?>
                <?php if( have_posts() ) : while( have_posts() ): the_post();?>

                    <div id="artigo-capa" class="block w-full h-auto mt-6 px-2 xl:mt-0 xl:w-1/2 xl:px-4">

                        <a class="stricto-article-title" href="<?php the_permalink();?>">
                            <?php the_title();?>
                        </a>
                        <div class="flex mt-2 items-center ">
                            <div id="autorartigo" class="stricto-autor-artigo">Por:
                                <?php $FirstName = get_the_author_meta('first_name'); $LastName = get_the_author_meta('last_name');?>
                                <?php echo $FirstName;?> <?php echo $LastName;?> 
                            </div>
                            <p class="ml-4 stricto-article-date"><?php echo get_the_date('');?></p> 
                        </div>
                        
                        <div class="stricto-excerpt mb-10 mt-6 sm:mb-0"><?php the_excerpt();?></div>
                    </div>
                    
                    <a class="flex justify-center" href="<?php the_permalink();?>">
                        <?php echo get_the_post_thumbnail( get_the_ID(), 'stricto-normal' );?>
                    </a>
                
                <?php endwhile; else: endif; ?>
                <?php wp_reset_query();?>

        </div>
    </div>
</article>
