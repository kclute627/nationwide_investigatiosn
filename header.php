<!DOCTYPE html>
<html class="overflow-x-hidden relative font-display" <?php language_attributes() ?> id="body ">

<head>
    <meta charset="<?php bloginfo("charset") ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php 
    wp_head(); 
    $services_page_id = get_page_by_path('services')->ID;
                    $contact_page_id = get_page_by_path('contact')->ID;
                    global $post;
    
    ?>
</head>

<body id="body" class="overflow-x-hidden relative" <?php body_class() ?>>
    <div class="main-content relative h-[7rem] w-full shadow-lg bg-white js-scroll fade-in z-10 ">


        <!-- //mobile header -->

        <div class="absolute right-10 top-10 space-y-1 cursor-pointer transition-all duration-1000 md:hidden z-20" id="ham">
            <div class="h-0.5 w-10 bg-black transition-all duration-300 rounded-full" id="ham1"></div>
            <div class="h-0.5 w-8 bg-black transition-all duration-300 rounded-full" id="ham2"></div>
            <div class="h-0.5 w-10 bg-black transition-all duration-300 rounded-full" id="ham3"></div>
        </div>
        <div class="bg-black h-screen w-full translate-x-full transition-all duration-300  fixed" id="drawer">
            <div class="bg-white w-[20rem] h-full absolute right-0">

            </div>

        </div>


        <div class="flex">
            <div class="flex-auto"></div>
            <div class="container  ">


                <!-- large header -->
                <?php
                    $services_page_id = get_page_by_path('services')->ID;
                    $contact_page_id = get_page_by_path('contact')->ID;
                    global $post;

                    ?>

                <div class="header justify-between items-center hidden md:flex h-[7rem]">
                    <div class="left">
                        <a href="<?php site_url() ?>/" class="pt-10">
                            <img class="w-[15rem]" src="<?php echo get_template_directory_uri()?>/Assets/logo22.png"
                                alt="">
                            <!-- <div class="tracking-tighter text-xs mt-4 w-3/4 -translate-y-3">
                                Process Serving Across the Map, On the Mark. Trust Nationwide Investigations.
                            </div> -->


                        </a>
                    </div>

                    <div class="right flex space-x-6 justify-center items-center font-thin text-xl">


                        <!-- Home -->
                        <a href="<?php echo site_url() ?>/" class="relative">
                            <div class="<?php if(is_front_page()){
                                echo "font-bold";
                            } ?>">
                                Home
                            </div>
                            <?php if(is_front_page()){
                                echo '<div class="h-1 w-10 bg-secondaryGold rounded-lg absolute -bottom-1 left-0 js-scroll fade-in"></div>';
                            } ?>


                        </a>

                        <!-- services -->
                        <a href="<?php echo site_url() ?>/services" class="relative">
                            <div class="<?php if(is_page($services_page_id) || wp_get_post_parent_id($post->ID) == $services_page_id){
                                echo "font-bold";
                            } ?> ">
                                Services
                            </div>
                            <?php if(is_page($services_page_id) || wp_get_post_parent_id($post->ID) == $services_page_id){
                                echo '<div class="h-1 w-10 bg-secondaryGold rounded-lg absolute -bottom-1 left-0 js-scroll fade-in"></div>';
                            } ?>

                        </a>

                        <!-- contact us -->

                        <a href="<?php echo site_url() ?>/contact" class="relative transition-all">
                            <div class="<?php if(is_page($contact_page_id) || wp_get_post_parent_id($post->ID) == $contact_page_id){
                                echo "font-bold transition-all duration-1000";
                            } ?>">
                                Contact Us
                            </div>
                            <?php if(is_page($contact_page_id) || wp_get_post_parent_id($post->ID) == $contact_page_id){
                                echo '<div class="h-1 w-10 bg-secondaryGold rounded-lg absolute -bottom-1 left-0 js-scroll fade-in"></div>';
                            } ?>

                        </a>

                        <!-- /submit Job -->

                        <a target="_blank" href="https://www.processservers.com/forms/nationwide-investigations">
                            <div
                                class="bg-primaryBlue py-2 px-6 rounded-full shadow-xl text-white transition-all duration-300 hover:-translate-y-2">
                                Submit A Job
                            </div>

                        </a>





                    </div>


                </div>


            </div>
            <div class="flex-auto"></div>
        </div>






    </div>