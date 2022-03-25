<article class="hidden sm:flex flex-col w-full h-auto mt-4 py-2 px-4">

        <?php query_posts('showposts=1&category_name=Serviços-Capa');?>
        <?php if( have_posts() ) : while( have_posts() ): the_post();?>

        <div class="capa-ultimas mt-6 py-2">
            <a class="stricto-title-art" href="<?php the_permalink();?>">
                <?php the_title();?></a>
            <div class="flex mt-2 items-center ">
                <!-- <div id="autorartigo" class="block text-sm text-normal text-purple-500">Por:
                    <?php $FirstName = get_the_author_meta('first_name'); $LastName = get_the_author_meta('last_name');?>
                    <?php echo $FirstName;?> <?php echo $LastName;?> 
                </div> -->
                <div class="text-gray-700 text-sm font-extralight tracking-wide"><?php echo get_the_date('');?></div> 
            </div>
            <div class="web-excerpt"><?php the_excerpt();?></div>
        </div>
        <a class="image-padrao mt-4" href="<?php the_permalink();?>">
            <?php echo get_the_post_thumbnail( get_the_ID(), 'stricto-small' );?>
        </a>
        

        <?php endwhile; else: endif; ?>
        <?php wp_reset_query();?>
        
</article>