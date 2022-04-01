<section class="w-full h-auto flex px-2 py-2 mb-4 border-t border-gray-900">
    <div class="w-full">
        <article class="w-full h-auto py-6">
            <div class="inline-flex py-px mb-2">
                <p class="center text-normal text-red-500">Web histórias</p>
            </div>
            <div class="flex flex-col sm:flex-row mt-4">
                <?php query_posts('showposts=1&category_name=WebHistorias');?>
                <?php if( have_posts() ) : while( have_posts() ): the_post();?>
    
                    <div class="w-full h-full flex flex-col sm:flex-row mt-4 sm:mt-0 px-2" id="artigo_capa">
                        <a class="" href="<?php the_permalink();?>">
                            <?php echo get_the_post_thumbnail( get_the_ID(), 'stricto-small' );?>
                        </a>
                        <div class="w-full sm:w-1/2 h-full sm:ml-4 sm:px-4">
                            <h3 class="mt-6 sm:mt-0">
                                <a id="" class="stricto-article-title2" href="<?php the_permalink();?>">
                                    <?php the_title();?>
                                </a>
                            </h3>
                            <div class="flex items-end">
                                <p class="stricto-autor-artigo">Por:
                                    <?php $FirstName = get_the_author_meta('first_name'); $LastName = get_the_author_meta('last_name');?>
                                    <?php echo $FirstName;?> <?php echo $LastName;?> 
                                </p>
                                <div class="block stricto-article-date ml-4"><?php echo get_the_date('');?></div> 
                            </div>
                            <div class="stricto-excerpt mt-6 mb-4 sm:mb-0"><?php the_excerpt();?></div>
                        </div>
                    </div>
    
                <?php endwhile; else: endif; ?>
                <?php wp_reset_query();?>
            </div>
        </article>
        <article class="w-full h-full mt-2 mx-2 py-4 border-t border-light-gray-900 ">

            <div class="inline-flex py-px mb-2 mt-6">
                <p class="center text-normal text-red-500">Arte & Cultura</p>
            </div>
            
            <div class="flex mt-4">
                <div class="w-full flex flex-col sm:flex-row">
					
					<?php query_posts('showposts=1&category_name=ArteCultura');?>
					<?php if( have_posts() ) : while( have_posts() ): the_post();?>

					<div class="w-full px-2 flex flex-col sm:flex-row">
						<a id="arte-image" href="<?php the_permalink();?>">
							<?php echo get_the_post_thumbnail( get_the_ID(), 'stricto-small' );?>
						</a>
						<div class="w-full sm:w-1/2 flex flex-col sm:ml-4 sm:px-4 items-start">
							<a  class="stricto-title-art2 mt-6 sm:mt-0" href="<?php the_permalink();?>">
								<?php the_title();?>
							</a>
							<div class="flex items-center ">
								<div class="stricto-autor-artigo">Por:
									<?php $FirstName = get_the_author_meta('first_name'); $LastName = get_the_author_meta('last_name');?>
									<?php echo $FirstName;?> <?php echo $LastName;?> 
								</div>
								<div class="stricto-article-date ml-4"><?php echo get_the_date('');?></div> 
							</div>

							<div class="stricto-excerpt mt-4 mb-4 sm:mb-0"><?php the_excerpt();?></div>
						</div>
					</div>

					<?php endwhile; else: endif; ?>
					<?php wp_reset_query();?>
					
				
                </div>
            </div>

        </article>    
    </div>
</section>