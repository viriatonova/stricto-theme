<article class="hidden sm:flex flex-col w-full h-auto mt-4 py-2 px-4">

        <div class="inline-flex mb-4">
            <p class="center text-normal text-red-500">Edição Anterior</p>
        </div>

        <?php query_posts('showposts=2&year=$current_year&monthnum=$current_month&order=DESC');?>
        <?php if( have_posts() ) : while( have_posts() ): the_post();?>

        <div class="capa-ultimas py-2">
            <a class="stricto-article-title3"href="<?php the_permalink();?>">
                <?php the_title();?>
            </a>
            <div class="flex mt-2 items-center ">
                <div id="autorartigo" class="stricto-autor-artigo">Por:
                    <?php $FirstName = get_the_author_meta('first_name'); $LastName = get_the_author_meta('last_name');?>
                    <?php echo $FirstName;?> <?php echo $LastName;?> 
                </div>
                <div class="stricto-article-date"><?php echo get_the_date('');?></div> 
            </div>
            <div class="stricto-excerpt"><?php the_excerpt();?></div>
        </div>
        
        <?php endwhile; else: endif; ?>
        <?php wp_reset_query();?>
        
</article>