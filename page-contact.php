<?php 
get_header();
?>
<div class="flex mt-3 p-3">
    <div class="flex-auto"></div>
    <div class="container">
        <div class="flex space-x-2 ">
            <a href="/">Home</a>
            <div class=""> > </div>
            <div class="font-bold">Contact</div>
        </div>
    </div>
    <div class="flex-auto"></div>
</div>
<div class="flex">
    <div class="flex-auto"></div>
    <div class="container">
        <div class="header flex justify-center relative items-center">
            <div class="flex ">
                <div class="">
                    <div class="header relative flex justify-center items-center">

                        <div class=" text-4xl xl:text-3xl relative">
                            <div class="">
                                Contact Us

                            </div>
                            <div class="absolute top-[1.75rem] bg-secondaryGold h-3 w-[4rem] xl:top-6 -z-10"></div>


                        </div>
                    </div>

                </div>


            </div>


        </div>
        <div class="px-4 mt-[1rem] pb-[3rem] flex justify-center items-center w-full">

            <?php 
                include(get_template_directory() . '/contact/contact-main.php');
            ?>


        </div>
    </div>
    <div class="flex-auto"></div>
</div>

<?php 
get_footer()
?>