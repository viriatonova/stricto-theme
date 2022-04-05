<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    wp_head();
    ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Antic+Didone&display=swap" rel="stylesheet">
</head>
<body class="w-full h-full flex px-2 2xl:px-28 ">

    <!--toogle SideBar-->
    <div id="sidebar" aria-hidden="true" class="hidden w-screen h-screen sm:w-full sm:h-full fixed left-0 bg-black bg-opacity-50 text-white">  
        <div class="w-full sm:w-1/3 h-full px-4 bg-black">
            <button id="btn-close" class="mt-4 mb-10 p-2 hover:bg-purple-700 ">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
            </button>
            <head class="w-auto py-2 mt-6 border-b border-gray-500">
                <h1 class="stricto-sitename">
                    <a href="<?php echo home_url();?>"><?php echo get_bloginfo('name');?></a>
                </h1>
                <h2 class="stricto-sitedescription">
                    <a href="<?php echo home_url();?>"><?php echo get_bloginfo('description');?></a>
                </h2>
            </head> 
            <div class="w-auto h-auto mt-6 lex flex-col py-2 justify-center items-start">
                <h3 class="text-xs sm:text-sm">Contate nossa redação</h3>
                <a class=" mt-px" href="mailto:jornalismo@strictodigital.com.br"><p class="text-purple-300 tracking-wide text-xs sm:text-sm sm:text-md">jornalismo@strictodigital</p></a>
            </div>
            <div class="w-auto h-auto mt-4 lex flex-col py-2 justify-center items-start">
                <h3 class="mt-6 py-2 border-b border-gray-500">Categorias & Paginas</h3>
                <div class="w-full h-full flex py-4 justify-start items-start text-sm sm:text-md font-medium tracking-wider">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location ' => 'side-menu',
                                'menu_class' => 'stricto-menu'
                            )
                        );
                    ?>
                </div>
            </div>
        </div>
    </div>


    <!-- principal-->
    <div id="corpo" class="w-full h-full flex flex-col mx-auto px-2">

        <header class="w-full h-auto flex flex-col sm:px-4 lg:px-10 items-center border-b border-gray-900">
            <nav class="w-full h-auto mb-2 flex flex-col sm:flex-row">
                
                <!--menu esquerda-->
                <div class="w-1/4 h-auto mr-4 flex flex-col sm:flex-row justify-start items-start sm:items-center bg-white">
                    <button id="btn-side" class="w-10 h-auto p-2 mr-4 hover:bg-gray-100">
                        <svg  class="fill-current hover:text-purple-700" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
                    </button>
                    <button id="btn-search" class="hidden w-10 h-auto mr-4 p-2 lg:flex hover:bg-gray-100">
                        <svg class="fill-current hover:text-purple-700" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
                    </button>
                    <div id="search-box" class="hidden stricto-searchbox">
                        <?php get_search_form();?>
                    </div>

                    <!-- menu paginas
                    <div class="hidden sm:flex flex-col justify-center items-start ml-2">
                        <ul class="flex">
                            <li><a class="menu-paginas" href="">Anuncie</a></li>
                            <li><a class="menu-paginas" href="">Sobre</a></li>
                            <li><a class="menu-paginas" href="">Blogs & Colunas</a></li>
                        </ul>
                    </div> -->
                </div>
                
                <!--menu direita-->
                <div id="menu2" class="hidden w-full h-auto sm:flex justify-end items-center">
                    <ul class="flex stricto-menutop">
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'desk-menu',
                                    'menu_class' => 'menu-paginas'
                                )
                            );
                        ?>
                    </ul>

                </div>
            </nav>
            
            <div class="w-full h-auto flex py-2 items-center">
                <div id="lDate" class="stricto-time"></div>
                <!--Logo-->
                <div class="w-full h-auto flex flex-col tems-center justify-center text-center">
                    <h1 class="stricto-sitename">
                        <a href="<?php echo home_url();?>"><?php echo get_bloginfo('name');?></a>
                    </h1>
                    <h2 class="stricto-sitedescription">
                        <a href="<?php echo home_url();?>"><?php echo get_bloginfo('description');?></a>
                    </h2>
                </div>
                <div class="w-52 h-8 hidden sm:flex justify-end items-center"><a href="<?php echo site_url('/apoie'); ?>" class="btn-apoie">Apoie</a></div>
            </div>

        </header>
