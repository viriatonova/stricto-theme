<section class="w-full h-auto flex px-2 py-2 mb-4 border-t border-gray-900">
    <div class="w-full">
        <article class="w-full h-auto py-6">
            <div class="inline-flex py-px mb-2">
                <p class="center text-normal text-red-500">Web histórias</p>
            </div>
            <div class="flex flex-col sm:flex-row mt-4">
                <?php query_posts('showposts=3&category_name=Web');?>
                <?php if( have_posts() ) : while( have_posts() ): the_post();?>
    
                    <div class="w-full sm:w-1/3 mt-4 sm:mt-0 px-2 h-auto" id="artigo_capa">
                        <h3 class="block text-lg text-black uppercase">
                            <a id="stricto-title" class="stricto-title" href="<?php the_permalink();?>">
                                <?php the_title();?>
                            </a>
                        </h3>
                        <p class="block text-sm text-normal text-purple-500">Por:
                            <?php $FirstName = get_the_author_meta('first_name'); $LastName = get_the_author_meta('last_name');?>
                            <?php echo $FirstName;?> <?php echo $LastName;?> 
                        </p>
                        <div class="web-excerpt mb-4 sm:mb-0"><?php the_excerpt();?></div>
                        <a class="web-image" href="<?php the_permalink();?>">
                            <?php echo get_the_post_thumbnail( get_the_ID(), 'stricto-small' );?>
                        </a>
                    </div>
    
                <?php endwhile; else: endif; ?>
                <?php wp_reset_query();?>
            </div>
        </article>
        <article class="w-full h-full mt-2 mx-2  py-4 border-t border-light-gray-900 ">

            <div class="inline-flex py-px mb-2 mt-6">
                <p class="center text-normal text-red-500">Arte & Cultura</p>
            </div>
            
            <div class="flex mt-4">
                <div class="w-full flex flex-col sm:flex-row">
					
					<?php query_posts('showposts=2&category_name=ArteCultura');?>
					<?php if( have_posts() ) : while( have_posts() ): the_post();?>

					<div class="w-full px-2">
						<a id="arte-image" href="<?php the_permalink();?>">
							<?php echo get_the_post_thumbnail( get_the_ID(), 'stricto-small' );?>
						</a>
						<div class="arte-ultimas w-full flex flex-col mt-2 items-start">
							<a  class="stricto-title-art" href="<?php the_permalink();?>">
								<?php the_title();?>
							</a>
							<div class="flex mt-2 items-center ">
								<div class="block text-sm text-normal text-purple-500">Por:
									<?php $FirstName = get_the_author_meta('first_name'); $LastName = get_the_author_meta('last_name');?>
									<?php echo $FirstName;?> <?php echo $LastName;?> 
								</div>
								<div class="ml-4 text-gray-700 text-sm font-extralight tracking-wide"><?php echo get_the_date('');?></div> 
							</div>

							<div class="web-excerpt mb-4 sm:mb-0"><?php the_excerpt();?></div>
						</div>
					</div>

					<?php endwhile; else: endif; ?>
					<?php wp_reset_query();?>
					
				
                </div>
            </div>

        </article>    
    </div>
</section>