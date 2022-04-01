<article class="w-full h-auto mt-8 px-2 py-6 sm:border-t sm:boder-light-gray-900">
    
    <div class="inline-flex mb-4">
        <p class="center text-normal text-red-500">Colunas & Opinião</p>
    </div>

    <?php query_posts('showposts=2&category_name=Opinião');?>
    <?php if( have_posts() ) : while( have_posts() ): the_post();?>

       
        <div class="w-full h-auto flex flex-col lg:flex-row  py-4">
            <div class="w-full h-auto flex flex-col justify-start">
                <p  class="text-sm text-normal text-purple-500 uppercase">
                    <?php $FirstName = get_the_author_meta('first_name'); $LastName = get_the_author_meta('last_name');?>
                    <?php echo $FirstName;?> <?php echo $LastName;?> 
                </p>
                <a id="stricto-title" class="stricto-title-aside" href="<?php the_permalink();?>">
                    <?php the_title();?>
                </a>
            </div>
            <div class="stricto-avatar ml-4">
                <?php echo get_avatar( get_the_author_email(), '100' ); ?>
            </div>
        </div>
        <div class="w-full sm:border-t sm:boder-light-gray-900"></div>
            

    <?php endwhile; else: endif; ?>
    <?php wp_reset_query();?>


</article>