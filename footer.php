<?php wp_footer(); ?>
<script>
var formActionUrl = '<?php echo esc_url($_SERVER['REQUEST_URI']); ?>';
</script>










<footer class="site-footer h-content w-full bg-secondaryRed flex flex-col items-center pt-10 bg-secondaryGray/10"
    id="footer">
    <!-- get our latest Update -->


    <div class="flex w-full">
        <div class="flex-auto">

        </div>
        <div class="container  mb-10 px-5">
            <div class="flex flex-col md:flex-row md:justify-between">
                <div class="left top">
                    <div class="w-[15rem] ">
                        <img class="" src="<?php echo get_theme_file_uri("/Assets/logo22.png") ?>"
                            alt="nationwide investigations logo">

                    </div>
                    <div class="tracking-tighter text-xs mt-4 w-3/4">
                        Process Serving Across the Map, On the Mark. Trust Nationwide Investigations.
                    </div>
                </div>

                <div class="right mt-4 flex  justify-between items-center">
                    <div class="left flex flex-col justify-center  self-start">










                        <?php
                    $services_page_id = get_page_by_path('services')->ID;
                    $contact_page_id = get_page_by_path('contact')->ID;
                    global $post;

                    ?>











                        <a <?php if(is_front_page()){
                            echo 'class = font-bold';
                        }else {
                            echo 'class=""';
                        } ?> href="<?php echo site_url(); ?>/">Home</a>

                        <a <?php if (is_page($services_page_id) || wp_get_post_parent_id($post->ID) == $services_page_id) {
                            echo 'class = font-bold';
                        }
                            ?> href="<?php echo site_url(); ?>/services">Services</a>

                        <a <?php if (is_page($contact_page_id) || wp_get_post_parent_id($post->ID) == $contact_page_id) {
                            echo 'class = font-bold';
                        }
                            ?> href="<?php echo site_url(); ?>/contact">Contact Us
                        </a>

                        <a target="_blank" href="https://www.processservers.com/forms/nationwide-investigations" class="">
                            Submit A Job
                        </a>

                    </div>

                    <div class="flex justify-center items-center space-x-4 mt-4 md:ml-[10rem]">
                        <a href="" class="">
                            <img src="<?php echo get_theme_file_uri("/Assets/xlogo.png") ?>" alt="" class="h-8 w-8">
                        </a>

                        <a href="" class="">
                            <svg class="h-8 w-8" fill="#000000" version="1.1" id="Capa_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 97.75 97.75" xml:space="preserve">
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
            <div class="">
                <div class="right text-sm text-secondaryGray text-center mt-10">
                    <div class="">
                        333 S Wabash #2700
                    </div>
                    <div class="">
                        Chicago, IL 60604
                    </div>
                    <a href="mailto:info@nationwide-investigations.com" class="">
                        info@nationwide-investigations.com
                    </a>
                </div>
            </div>

        </div>


        <div class="flex-auto"></div>
    </div>
    <div class="flex w-full bg-primaryBlue py-4">
        <div class="flex-auto">

        </div>
        <div class="container flex flex-col justify-center items-center ">
            <div class="text-xs text-white px-2">
                Copyright © <span id="year"> </span> Nationwide Investigations
            </div>
            <a href="https://www.hudson-marketing.com/" target="_blank" class="text-xs text-white px-2 mt-2">
                Built and Designed by Hudson Marketing
            </a>

        </div>


        <div class="flex-auto"></div>
    </div>


</footer>



</body>

</html>