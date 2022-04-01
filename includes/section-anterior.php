<section id="section-news" class="hidden w-full h-auto sm:flex flex-col border-t border-gray-900">

    <div class="inline-flex ml-2 mb-2 mt-6">
        <p class="mr-4 text-normal text-red-500">Edição Anterior</p>
    </div>

    <div class="w-full h-full flex py-4">
        <?php query_posts('showposts=4&category_name=EdiçãoAnterior');?>
        <?php if( have_posts() ) : while( have_posts() ): the_post();?>
    
          
            <div id="news" class="w-full h-auto flex px-4">
                <a id="stricto-title" class="w-1/2 stricto-title" href="<?php the_permalink();?>">
                    <?php the_title();?>
                </a>
                <div class="w-1/2 ml-4">
                    <p id="autorartigo" class="block text-sm text-normal text-purple-500">Por:
                        <?php $FirstName = get_the_author_meta('first_name'); $LastName = get_the_author_meta('last_name');?>
                        <?php echo $FirstName;?> <?php echo $LastName;?> 
                    </p>
                    <p class="text-gray-700 text-sm font-extralight tracking-wide"><?php echo get_the_date('');?></p> 
                    <div class="web-excerpt mb-4 mt-4 sm:mb-0"><?php the_excerpt();?></div>
                </div>
            </div>
            
        
    
        <?php endwhile; else: endif; ?>
        <?php wp_reset_query();?>
    </div>

</section>
