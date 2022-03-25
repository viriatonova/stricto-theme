<article id="capa" class="w-full h-auto flex flex-col sm:flex-row mt-4 ">
    <div class="w-full h-auto py-2 mb-2">
        <div class="inline-flex ml-2 mb-2">
            <p class="mr-4 text-normal text-red-500">Especial</p>
        </div>
        <div class="w-full h-auto flex flex-col-reverse lg:flex-row px-2 mt-2">
            
                <?php query_posts('showposts=1&category_name=Especial');?>
                <?php if( have_posts() ) : while( have_posts() ): the_post();?>

                    <div id="artigo-capa" class="block w-full h-auto mt-6 px-2 sm:mt-0 sm:w-1/2 sm:px-4">

                        <a class="stricto-title" href="<?php the_permalink();?>">
                            <?php the_title();?>
                        </a>
                        <div class="flex mt-2 items-center ">
                            <p id="autorartigo" class="block text-sm text-normal text-purple-500">Por:
                                <?php $FirstName = get_the_author_meta('first_name'); $LastName = get_the_author_meta('last_name');?>
                                <?php echo $FirstName;?> <?php echo $LastName;?> 
                            </p>
                            <p class="ml-4 text-gray-700 text-sm font-extralight tracking-wide"><?php echo get_the_date('');?></p> 
                        </div>
                        
                        <div class="web-excerpt mb-10 mt-2 sm:mt-6 sm:mb-0"><?php the_excerpt();?></div>
                    </div>
                    
                    <a class="capa-image" href="<?php the_permalink();?>">
                        <?php echo get_the_post_thumbnail( get_the_ID(), 'stricto-normal' );?>
                    </a>
                
                <?php endwhile; else: endif; ?>
                <?php wp_reset_query();?>

        </div>
    </div>
</article>
