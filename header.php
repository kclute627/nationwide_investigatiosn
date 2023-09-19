<!DOCTYPE html>
<html id="body" class="overflow-x-hidden relative font-display z-0 bg-white" <?php language_attributes() ?>>

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

<body class="overflow-x-hidden relative " <?php body_class() ?>>




    <div class="flex h-[5rem] bg-white shadow-lg md:hidden z-50 ">
        <div class="flex justify-start items-center h-full ml-3 z-10">
            <div class="left ">
                <a href="<?php site_url() ?>/" class="pt-10">
                    <img class="w-[10rem]" src="<?php echo get_template_directory_uri()?>/Assets/logo22.png" alt="">
                    <!-- <div class="tracking-tighter text-xs mt-4 w-3/4 -translate-y-3">
                                    Process Serving Across the Map, On the Mark. Trust Nationwide Investigations.
                                </div> -->


                </a>
            </div>

        </div>

    </div>


    <div class="absolute right-5 top-5 space-y-1 cursor-pointer transition-all duration-1000 md:hidden z-[200] p-3"
        id="ham">
        <div class="h-0.5 w-10 bg-black transition-all duration-300 rounded-full" id="ham1"></div>
        <div class="h-0.5 w-8 bg-black transition-all duration-300 rounded-full" id="ham2"></div>
        <div class="h-0.5 w-10 bg-black transition-all duration-300 rounded-full" id="ham3"></div>
    </div>
    <div class="bg-black h-screen w-full translate-x-full transition-all duration-300  absolute top-0 z-[100]"
        id="drawer">
        <div class="bg-white w-[20rem] h-full absolute right-0">
            <div class="flex flex-col justify-center items-center w-full">
                <a href="<?php site_url() ?>/" class="pt-20">
                    <img class="w-[14rem]" src="<?php echo get_template_directory_uri()?>/Assets/logo22.png" alt="">
                    <!-- <div class="tracking-tighter text-xs mt-4 w-3/4 -translate-y-3">
                                    Process Serving Across the Map, On the Mark. Trust Nationwide Investigations.
                                </div> -->

                    <div class="h-0.5 w-3/3 bg-secondaryGold mt-4 "></div>


                </a>
                <div class="right flex flex-col space-y-2 justify-end items-end text-xl w-full mr-8 mt-6">


                    <!-- Home -->
                    <a href="<?php echo site_url() ?>/" class="relative">
                        <div class="<?php if(is_front_page()){
                                echo "font-bold";
                            } ?> js-scroll slide-right">
                            Home
                        </div>
                        <?php if(is_front_page()){
                                echo '<div class="h-1 w-10 bg-secondaryGold rounded-lg absolute -bottom-1 left-0 js-scroll fade-in"></div>';
                            } ?>


                    </a>

                    <!-- services -->
                    <a href="<?php echo site_url() ?>/services" class="relative">
                        <div class="<?php if(is_page($services_page_id) || wp_get_post_parent_id($post->ID) == $services_page_id){
                                echo "font-bold ";
                            } ?> js-scroll slide-right-1">
                            Services
                        </div>
                        <?php if(is_page($services_page_id) || wp_get_post_parent_id($post->ID) == $services_page_id){
                                echo '<div class="h-1 w-10 bg-secondaryGold rounded-lg absolute -bottom-1 left-0 js-scroll fade-in"></div>';
                            } ?>

                    </a>

                    <!-- contact us -->

                    <a href="<?php echo site_url() ?>/contact" class="relative transition-all">
                        <div class="<?php if(is_page($contact_page_id) || wp_get_post_parent_id($post->ID) == $contact_page_id){
                                echo "font-bold transition-all duration-1000 js-scroll slide-right";
                            } ?> js-scroll slide-right-2">
                            Contact Us
                        </div>
                        <?php if(is_page($contact_page_id) || wp_get_post_parent_id($post->ID) == $contact_page_id){
                                echo '<div class="h-1 w-10 bg-secondaryGold rounded-lg absolute -bottom-1 left-0 "></div>';
                            } ?>

                    </a>

                    <!-- /submit Job -->

                    <a target="_blank" href="https://www.processservers.com/forms/nationwide-investigations">
                        <div class=" transition-all duration-300 js-scroll slide-right-3">
                            Submit A Job
                        </div>

                    </a>





                </div>
                <div class="flex justify-center items-center flex-col mt-10">
                    <address class="text-sm text-primaryGray text-center">
                        <div>
                            333 S. Wabash #2700

                        </div>
                        <div class="">
                            Chicago, IL 60604

                        </div>
                        <div class="">
                            info@nationwide-investigations.com
                        </div>
                        <div class="">
                            Lic. #117-001790
                        </div>
                    </address>
                </div>


                <div class="flex justify-center items-center space-x-4 mt-4">
                    <a href="" class="">
                        <img src="<?php echo get_theme_file_uri("/Assets/xlogo.png") ?>" alt="" class="h-8 w-8">
                    </a>

                    <a href="" class="">
                        <svg class="h-8 w-8" fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 97.75 97.75" xml:space="preserve">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <path
                                        d="M48.875,0C21.882,0,0,21.882,0,48.875S21.882,97.75,48.875,97.75S97.75,75.868,97.75,48.875S75.868,0,48.875,0z M67.521,24.89l-6.76,0.003c-5.301,0-6.326,2.519-6.326,6.215v8.15h12.641L67.07,52.023H54.436v32.758H41.251V52.023H30.229V39.258 h11.022v-9.414c0-10.925,6.675-16.875,16.42-16.875l9.851,0.015V24.89L67.521,24.89z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a href="" class="">
                        <svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M6.5 8C7.32843 8 8 7.32843 8 6.5C8 5.67157 7.32843 5 6.5 5C5.67157 5 5 5.67157 5 6.5C5 7.32843 5.67157 8 6.5 8Z"
                                    fill="#0F0F0F"></path>
                                <path
                                    d="M5 10C5 9.44772 5.44772 9 6 9H7C7.55228 9 8 9.44771 8 10V18C8 18.5523 7.55228 19 7 19H6C5.44772 19 5 18.5523 5 18V10Z"
                                    fill="#0F0F0F"></path>
                                <path
                                    d="M11 19H12C12.5523 19 13 18.5523 13 18V13.5C13 12 16 11 16 13V18.0004C16 18.5527 16.4477 19 17 19H18C18.5523 19 19 18.5523 19 18V12C19 10 17.5 9 15.5 9C13.5 9 13 10.5 13 10.5V10C13 9.44771 12.5523 9 12 9H11C10.4477 9 10 9.44772 10 10V18C10 18.5523 10.4477 19 11 19Z"
                                    fill="#0F0F0F"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M20 1C21.6569 1 23 2.34315 23 4V20C23 21.6569 21.6569 23 20 23H4C2.34315 23 1 21.6569 1 20V4C1 2.34315 2.34315 1 4 1H20ZM20 3C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3H20Z"
                                    fill="#0F0F0F"></path>
                            </g>
                        </svg>
                    </a>
                </div>





            </div>

        </div>

    </div>




    <div class="main-content relative h-[7rem] w-full shadow-lg bg-white js-scroll fade-in z-10 hidden md:block">


        <!-- //mobile header -->



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

                    <div class="right flex space-x-6 justify-center items-center font-thin text-xl relative z-10">


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
                        <a href="<?php echo site_url() ?>/services" class="relative ">
                            <div class="<?php if(is_page($services_page_id) || wp_get_post_parent_id($post->ID) == $services_page_id){
                                echo "font-bold";
                            } ?> relative ">
                                <div class="" id="services">
                                    Services

                                </div>







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

                        <div class=" flex-col justify-center absolute top-[4px] left-[1rem] opacity-0 invisible transition-opacity duration-300 ease-out flex "
                            id="service-box">
                            <div class=" arrow-up  border-b-[50px] border-b-gray-100">
                            </div>

                            <div class=" w-[14rem] -translate-y-8 -translate-x-6 bg-gray-100   flex flex-col justify-start items-start pl-2 pr-0 py-3 pb-4 space-y-4 shadow-xl"
                                id="servicesBox">

                                <a href="" class="relative">
                                    Process Service
                                    <div class=" bg-secondaryGold h-0.5 w-24 absolute -bottom-1 left-0  
                                    "></div>
                                </a>
                                <a href="" class="relative">
                                    Document Retrieval
                                    <div class=" bg-secondaryGold h-0.5 w-24 absolute -bottom-1 left-0  
                                    "></div>
                                </a>
                                <a href="" class="relative">
                                    Private Investigations
                                    <div class=" bg-secondaryGold h-0.5 w-24 absolute -bottom-1 left-0  
                                    "></div>
                                </a>

                            </div>

                        </div>







                    </div>



                </div>


            </div>
            <div class="flex-auto"></div>
        </div>






    </div>