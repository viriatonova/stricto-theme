
    <div class="w-full h-full flex flex-col space-y-6">
        <?php if( have_posts() ) : while( have_posts() ): the_post();?>

            <article class="w-full h-full mt-6">
                <div class="w-full h-full p-2 flex flex-col">   

                    <h3 class="text-2xl py-2 tracking-wider border-b boder-light-gray-900 text-purple-900"><?php the_title();?></h3>
                    <div class="sm:flex p-2 mt-2">
                        <img class="mt-6"><?php echo get_the_post_thumbnail( get_the_ID(), 'stricto-small' );?></img>
                        <div class="archive-post-excerpt w-full sm:w-1/2 h-auto py-2 mt-12 sm:ml-8">
                            <?php the_excerpt();?>
                            <div class="py-2"></div>
                            <a class="w-6 h-6 py-px px-2 mt-4
                            border border-gray-600 rounded-xl hover:bg-purple-700 hover:text-white
                            text-sm text-gray-700 tracking-wide leading-relaxed" 
                            href="<?php the_permalink();?>"
                            >Continue Lendo
                            </a>
                        </div>
                    </div>
                    

                </div>
            </article>

        <?php endwhile; else: endif; ?>
    </div>



