<?php
/**
 * Template Name: Store
 */
?>
<?php get_header(); ?>
<div class="store w-full bg-black py-20">
    <h1 class="text-[48px] pl-8 pb-10" style="color:#E84246;">Store</h1>
    <div class="px-10">
        <?php 
        $args = [
            'post_type' => 'product',
            'posts_per_page' => 12
        ];
        $posts = get_posts($args); ?>
        <?php if($posts) : ?>
            <div class="flex lg:mb-4 flex-wrap md:mb-2 sm:mb-2  items-center">
                <?php foreach($posts as $post) : ?>
                    <?php $product = App\Model\Product::toCard($post->ID); ?>
                    <div class=" lg:w-1/4 md:w-1/2 sm:w-1/2 py-8 content-center">
                            <a   href="<?php echo $product['link']; ?>">
                                <div >
                                    <img  class="m-auto" src="<?php echo $product['image']; ?>">
                                    <div class="px-6 py-4 text-center">
                                        <div class="font-bold text-white text-20 mb-2"><?php echo $product['name']; ?></div>
                                        <p class="text-white text-base px-10">
                                            <?php echo $product['short_description']; ?>
                                        </p>
                                    </div> 
                                </div>
                            </a>
                            <!-- Wishlist Cart Section -->
                            <div class="flex justify-center space-x-4">
                
                                    <a href="<?php echo $productt['add_to_cart_url']; ?>"><img src="<?php echo get_image('wishlist.svg');?>"></a>
                    
                                    <a href="<?php echo $productt['add_to_cart_url']; ?>"> <img src="<?php echo get_image('carticon.svg');?>"></a>
                                
                            </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <!-- Button Section -->
        <div class="button-section w-full text-center py-10 pt-20 ">
            <button class="bg-white text-black font-semibold  py-2 px-4 border rounded">
                 View More
            </button>
        </div>
        <!-- Mix&Match Section -->
        <div class="lg:flex lg:flex-row md:flex md:flex-row sm:flex-col mb-2">
            <div class="content-section lg:w-1/2 md:w-1/3 m-auto">
                <h1 class="lg:text-[48px]  sm:text-[38px] xxs:text-[30px]" style="color:#E84246;">Mix & Match</h1>
                <p class=" text-white pt-10 lg:w-[60%] md:w-full lg:block md:block sm:hidden xxs:hidden">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac duis pulvinar eu dignissim non, ut pellentesque massa. 
                    adipiscing elit. Sed ac duis pulvinar eu dignissim non, ut pellentesque massa. 
                </p>
            </div>
            <div class="image-section lg:w-1/2 md:w-2/3">
            <img src="<?php echo get_image('MIX&Match.png');?>">
            <p class=" text-white  pt-10 w-full m-auto lg:hidden md:hidden ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac duis pulvinar eu dignissim non, ut pellentesque massa. 
                    adipiscing elit. Sed ac duis pulvinar eu dignissim non, ut pellentesque massa. 
            </p>
            </div>
        </div>
    </div>
</div>

<!-- Banner Section -->
<div class="second-section bg-white px-10 py-20 sm:block xxs:hidden">
        <div>
            <h1 class="text-[48px] pb-10 " style="color:#E84246;">Banner 1</h1>
        </div>
        <!-- Images Section -->
        <div class="w-full flex flex-row mb-3 space-x-10">
            <div class="w-1/3">
                <div class="h-[345px]" style="background-color:#F8BDB1;"></div>
                <h2 class="lg:text-[20px] md:text-[15px] py-5 font-bold lg:w-[60%] md:w-full">Lorem ipsum dolor</h2>
                <p class="lg:w-[80%] md:w-full">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra lectus facilisi ut nec sit tincidunt et, penatibus.</p>
            </div>
            <div class="w-1/3">
                <div class="h-[345px]" style="background-color:#F8BDB1;"></div>
                <h2 class="lg:text-[20px] md:text-[15px] py-5 font-bold lg:w-[60%] md:w-full">Lorem ipsum dolor</h2>
                <p class="lg:w-[80%] md:w-full">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra lectus facilisi ut nec sit tincidunt et, penatibus.</p>
            </div>
            <div class="w-1/3">
                <div class="h-[345px]" style="background-color:#F8BDB1;"></div>
                <h2 class="lg:text-[20px] md:text-[15px] py-5 font-bold lg:w-[60%] md:w-full">Lorem ipsum dolor</h2>
                <p class="lg:w-[80%] md:w-full">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra lectus facilisi ut nec sit tincidunt et, penatibus.</p>
            </div>
        </div>
</div>
<!-- Banner Section Mobile -->
<div class="second-section bg-white px-4 py-20 sm:hidden ">
    <div class="pr-4">
        <h1 class="sm:text-[48px] xxs:text-[38px] pb-10 " style="color:#E84246;">Banner 1</h1>
    </div>
    <!-- Images Section -->
    <div class="w-full ">
            <div class="w-full flex flex-row py-10">
                <div class="w-1/2 h-auto" style="background-color:#F8BDB1;"></div>
                <div class="w-1/2 p-4">
                    <h2 class="font-bold">Lorem ipsum dolor</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra lectus facilisi ut nec sit tincidunt et, penatibus.</p>
                </div>
            </div>
            <div class="w-full flex flex-row py-10">
                <div class="w-1/2 p-4">
                    <h2 class="font-bold">Lorem ipsum dolor</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra lectus facilisi ut nec sit tincidunt et, penatibus.</p>
                </div>
                <div class="w-1/2 h-auto" style="background-color:#F8BDB1;"></div>
            </div>
            <div class="w-full flex flex-row py-10">
                <div class="w-1/2 h-auto" style="background-color:#F8BDB1;"></div>
                <div class="w-1/2 p-4">
                    <h2 class="font-bold">Lorem ipsum dolor</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra lectus facilisi ut nec sit tincidunt et, penatibus.</p>
                </div>
            </div>
    </div>

</div>
<!-- Banner 4 Section -->
<div class="third-section h-[600px] px-10 sm:py-20 xxs:py-10" style="background-color:#90A7B7;">
        <div>
            <h1 class="sm:text-[48px] xxs:text-[38px] " style="color:#E84246;">Banner 4</h1>
        </div>
        <div class="w-full h-full text-center">
            <p class="m-auto text-white text-[30px] pt-[150px]">Enviroment</p>
        </div>
</div>
<!-- Accessories Section -->
<div class="accessories sm:px-10 xxs:px-4 sm:py-20 xxs:py-10" style="background-color:#f7f7f5;">
    <div class="text-section w-full">
        <h1 class="sm:text-[48px] xxs:text-[38px]"  style="color:#9C9883;">Accessories</h1>
        <h2 class="sm:text-[28px] xxs:text-[18px]" style="color:#707070;">Accessories Overview</h2>
        <?php 
        $args = array(
            'category' => array( 'Accessories' ),
        );
        $accessories = wc_get_products( $args ); ?>
        <div class="relative w-full mx-auto">
            <?php if($accessories) : ?>
                <div class="flex lg:mb-4 flex-wrap md:mb-2 sm:mb-2  items-center">
                    <?php foreach($accessories as $accessor) : ?>
                        <?php $product = App\Model\Product::toCard($accessor->get_id()); ?>
                        <div class="slide w-full">
                            <img  class="m-auto" src="<?php echo $product['image']; ?>">
                            <div class="px-6 py-4 text-center">
                                    <div class="font-bold text-black text-20 mb-2"><?php echo $product['name']; ?></div>
                                    <p class="text-black text-base px-10">
                                        <?php echo $product['short_description']; ?>
                                    </p>
                            </div> 
                        </div>

                    <?php endforeach; ?>
                    <!-- The previous button -->
                    <a class="absolute left-0 top-1/2 p-4 -translate-y-1/2 cursor-pointer"
                        onclick="moveSlide(-1)">
                        <img src="<?php echo get_image('leftarrow.svg');?>">
                    </a>

                    <!-- The next button -->
                    <a class="absolute right-0 top-1/2 p-4 -translate-y-1/2 cursor-pointer"
                        onclick="moveSlide(1)">
                        <img src="<?php echo get_image('rightarrow.svg');?>">
                    </a>

                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- RoarID Section -->
<div class="roarid sm:px-10 xxs:px-4 sm:py-20 xxs:py-10 " style="background: linear-gradient(168.58deg, #D2CDB1 2.76%, #9D9982 97.7%);">
    <h1 class="text-black sm:text-[48px] xxs:text-[38px]">RoarID</h1>
    <div class="sm:flex sm:flex-row xxs:flex-col mb-2">
        <div class="image-section sm:w-1/2 xxs:w-full">
            <img src="<?php echo get_image('IPhone13ProImage.png');?>">
        </div>
        <div class="content-section sm:w-1/2 xxs:w-full   sm:m-auto text-center">
            <p class="text-center sm:text-[28px] xxs:text-[18px] sm:pb-0 xxs:pb-4" style="color:#707070;">key message</p>
            <div class="buttons-section sm:pt-[150px] xxs:pt-0">
                <!-- View More Button -->
                <button class="bg-transparent sm:mb-3 xxs:mb-6 w-48 text-black font-semibold  py-2 px-4 border border-black rounded text-center">
                    View More
                </button>
                <!-- Download Button -->
                <div class="flex m-auto sm:mt-3 xxs:mt-4 w-48 h-14 bg-black text-white rounded-xl items-center justify-center">
                    <div class="mr-3">
                        <svg viewBox="0 0 384 512" width="30" >
                            <path fill="currentColor" d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="text-xs">Download on the</div>
                        <div class="text-2xl font-semibold font-sans -mt-1">App Store</div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>

<?php get_footer(); ?>
<script>
        // set the default active slide to the first one
        let slideIndex = 1;
        showSlide(slideIndex);

        // change slide with the prev/next button
        function moveSlide(moveStep) {
            showSlide(slideIndex += moveStep);
        }

        function showSlide(n) {
            let i;
            const slides = document.getElementsByClassName("slide");
            const dots = document.getElementsByClassName('dot');
            
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }

            // hide all slides
            for (i = 0; i < slides.length; i++) {
                slides[i].classList.add('hidden');
            }

            // show the active slide
            slides[slideIndex - 1].classList.remove('hidden');
        }
</script>