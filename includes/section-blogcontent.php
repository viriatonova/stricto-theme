<?php if( have_posts() ) : while( have_posts() ): the_post();?>


    <h2 class="stricto-title-blog"><?php the_title();?></h2>
    <h3 class="stricto-excerpt-blog"> <?php the_excerpt();?></h3>

   <div class="w-full flex justify-center"><?php echo get_the_post_thumbnail( get_the_ID() );?></div>


    <div class="w-full h-full mt-px sm:mt-8 py-2 flex border-b boder-red-900">

        <div class="w-full h-auto sm:mt-4 py-2 sm:flex sm:justify-center">
            <div class="stricto-wrap-autor-blog">
                <div class="stricto-avatar">
                    <?php echo get_avatar( get_the_author_email(), '90' ); ?>
                </div>
                <div class="ml-6">
                    <p class="w-full flex tracking-wider text-purple-900 fonte-semibold">
                        <?php $FirstName = get_the_author_meta('first_name'); $LastName = get_the_author_meta('last_name');?>
                        <?php echo $FirstName;?> <?php echo $LastName;?> 
                    </p>
                    <p class="text-gray-500 text-sm font-extralight tracking-wide"><?php echo get_the_date('');?></p> 
                </div>
            </div>
            <div class="w-full sm:w-1/3 flex mt-6 sm:mt-0 justify-start items-end">
                <div class="w-full mt-2 sm:mt-0 flex justify-center items-center">
                    <?php $categories = get_the_category(); foreach($categories as $cat): ?>
                        <a class="w-auto h-auto ml-2 px-2 py-px text-gray-900 border border-gray-600 rounded-lg hover:bg-purple-700 hover:text-white" 
                        href="<?php echo get_category_link($cat->term_id);?>"> <?php echo $cat->name;?></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <span class="hidden w-1/3 sm:flex flex-row justify-end items-end">
                <a href="https://www.facebook.com/strictodigital" target="_blank" class="w-10 h-10 p-2 flex justify-center items-center stricto-bt-social">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <!-- <a href="#" class="w-10 h-10 p-2 ml-3 flex justify-center items-center stricto-bt-social">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                </a> -->
                <a href="https://www.instagram.com/strictodigital" target="_blank" class="w-10 h-10 p-2 ml-3 flex justify-center items-center stricto-bt-social">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
            </span>
            
        </div>

    </div>

    <div class="stricto-content">

        <?php the_content();?>

    </div>

    <div class="mt-12 flex items-end">
        
        <span class="mr-6">Tags: </span>
        <div class="w-full sm:w-1/2 mt-2 sm:mt-0 flex justify-start items-center">
            <?php $tags = get_the_tags(); foreach($tags as $tag): ?>
                <a class="ml-2 px-2 py-px text-gray-900 border border-gray-600 rounded-lg hover:bg-purple-700 hover:text-white" 
                href="<?php echo get_tag_link($tag->term_id);?>"><?php echo $tag->name;?></a> 
            <?php endforeach;?>
        </div>
    
    </div>
    <h3 class="mt-12 text-2xl border-b border-gray-900">Comentários</h3>   
    <footer class="w-full h-auto mt-4 mb-12 stricto-post-footer">
         
        <?php comments_template();?>

    </footer>

    
    

<?php endwhile; else: endif; ?>