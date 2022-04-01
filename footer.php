<footer class="w-full h-32 text-gray-600 body-font mt-6 bg-white">
    
    <section class="px-2 py-4 mx-auto flex items-center sm:flex-row flex-col border-b border-gray-900">
        
        <div class="hidden sm:flex w-16 h-16 justify-center items-center" alt="logo">
            <?php the_custom_logo();?>
        </div>

        <span class="text-xl ml-4">Stricto Digital</span>

        <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© Stricto Digital —
            <a href="https://megaterio.com.br/" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">Megaterio</a>
        </p>
        
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            <a class="stricto-bt-social" href="https://www.facebook.com/strictodigital" target="_blank">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
            </a>
            <!-- <a class="ml-3 stricto-bt-social">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
            </a> -->
            <a class="ml-3 stricto-bt-social" href="https://www.instagram.com/strictodigital" target="_blank">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
            </a>
        </span>

    </section>

    <div class="px-2 py-2 mt-2 sm:mt-4 mx-auto hidden sm:flex items-start sm:flex-row flex-col ">

        <section class="w-2/3 flex flex-col justify-start items-start">
            <div class="w-full px-2 flex ">
                <div class="w-full flex flex-col justify-start px-2">
                    <h3 class="w-full text-xl tracking-wide text-purple-900 font-roboto">Apoie o Jornalismo Independente</h3>
                    <p class="w-full text-sm tracking-wider leading-6 py-6 font-open">
                        O Stricto Digital é um meio de comunicação independete. Para continuar fazendo o trabalho
                        que desempenhamos contamos com sua colaboração. Se quiser saber mais sobre como
                        apoior acesse nossa pagina da apoiadores. Caso deseje fazer uma colaboração direta
                        acesse o QR-code e use o PIX para constribuir. 
                    </p>
                </div>
                <div id="qrcode" class="w-1/3 h-40 ml-2 border boder-gray-500 flex justify-center items-center">
                    QR-code
                </div>
            </div>
            <!-- <div class="w-full flex flex-col px-4">
                <div class="flex">
                    <div class="flex flex-col items-start">
                        <h4 class="text-lg capitalize tracking-wide text-purple-900">Acesse nossa pagina de Apoio</h4>
                        <a href="<?php //echo site_url('/apoie'); ?>" class="w-24 h-8 hidden sm:flex mt-4 btn-apoie ">Apoie</a>
                    </div>
                </div>
            </div> -->
        </section>

        <aside class="w-1/3 h-full flex flex-col justify-end items-start px-4">

            <h3 class="text-lg capitalize tracking-wide text-purple-900 font-roboto">Navegação do Site</h3>
            
            <?php if(is_active_sidebar('footer-sidebar')):?>
                <?php dynamic_sidebar('footer-sidebar');?>
            <?php endif;?>

            <div class="flex flex-col mt-6">
                    <h4 class="text-lg capitalize tracking-wide text-purple-900 font-roboto">Contato</h4>
                    <h5 class="text-xs sm:text-sm mt-4 font-roboto">Contate nossa redação</h5>
                    <a class=" mt-px" href="mailto:jornalismo@strictodigital.com.br"><p class="font-open text-purple-900 tracking-wide text-xs sm:text-sm sm:text-md">jornalismo@strictodigital</p></a>
                </div>

        </aside>
        <div class="w-52 h-8 hidden sm:flex justify-end items-end"><a href="<?php echo site_url('/apoie'); ?>" class="btn-apoie">Apoie</a></div>

    </div>
</footer>
    
    <?php
        wp_footer();
    ?>
</body>
</html>
