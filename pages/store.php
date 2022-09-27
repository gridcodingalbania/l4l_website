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
                    <a class=" lg:w-1/4 md:w-1/2 sm:w-1/2 content-center"  href="<?php echo $product['link']; ?>">
                        <div >
                            <img  class="m-auto" src="<?php echo $product['image']; ?>">
                            <div class="px-6 py-4 text-center">
                                <div class="font-bold text-white text-20 mb-2"><?php echo $product['name']; ?></div>
                                <p class="text-white text-base px-10">
                                    <?php echo $product['short_description']; ?>
                                </p>
                                <p><?php echo $product['price']; ?></p>
                                <!-- <div class="action-section">
                                    <a>Wishlist</a>
                                    <a>Add to cart</a>
                                </div> -->
                            </div>
                            
                        </div>
                    </a>
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
        <div class="flex mb-2">
            <div class="content-section w-1/2 m-auto">
                <h1 class="text-[48px]" style="color:#E84246;">Mix & Match</h1>
                <p class="text-white pt-10 w-[60%]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac duis pulvinar eu dignissim non, ut pellentesque massa. 
                    adipiscing elit. Sed ac duis pulvinar eu dignissim non, ut pellentesque massa. 
                </p>
            </div>
            <div class="image-section w-1/2">
            <img src="<?php echo get_image('MIX&Match.png');?>">
            </div>
        </div>
    </div>
</div>

<!-- Banner Section -->
<div class="second-section bg-white px-10 py-20">
        <div>
            <h1 class="text-[48px] pb-10 " style="color:#E84246;">Banner 1</h1>
        </div>
        <!-- Images Section -->
        <div class="w-full flex flex-row mb-3 space-x-10">
            <div class="w-1/3">
                <div class="h-[345px]" style="background-color:#F8BDB1;"></div>
                <h2 class="text-[20px] py-5 font-bold w-[60%]">Lorem ipsum dolor</h2>
                <p class="w-[80%]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra lectus facilisi ut nec sit tincidunt et, penatibus.</p>
            </div>
            <div class="w-1/3">
                <div class="h-[345px]" style="background-color:#F8BDB1;"></div>
                <h2 class="text-[20px] py-5 font-bold w-[60%]">Lorem ipsum dolor</h2>
                <p class="w-[80%]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra lectus facilisi ut nec sit tincidunt et, penatibus.</p>
            </div>
            <div class="w-1/3">
                <div class="h-[345px]" style="background-color:#F8BDB1;"></div>
                <h2 class="text-[20px] py-5 font-bold w-[60%]">Lorem ipsum dolor</h2>
                <p class="w-[80%]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra lectus facilisi ut nec sit tincidunt et, penatibus.</p>
            </div>
        </div>
</div>
<!-- Banner 4 Section -->
<div class="third-section h-[600px] px-10 py-20" style="background-color:#90A7B7;">
        <div>
            <h1 class="text-[48px] " style="color:#E84246;">Banner 4</h1>
        </div>
        <div class="w-full h-full text-center">
            <p class="m-auto text-white text-[30px] pt-[150px]">Enviroment</p>
        </div>
</div>
<!-- Accessories Section -->
<div class="accessories px-10 py-20" style="background-color:#f7f7f5;">
    <div class="text-section w-full">
        <h1 class="text-[48px]" style="color:#9C9883;">Accessories</h1>
        <h2 class="text-[28px]" style="color:#707070;">Accessories Overview</h2>
    </div>
</div>
<!-- RoarID Section -->
<div class="roarid px-10 py-20 " style="background-color: linear-gradient(168.58deg, #D2CDB1 2.76%, #9D9982 97.7%);">
    <h1 class="text-black text-[48px]">RoarID</h1>
    <div class="flex mb-2">
        <div class="image-section w-1/2">
            <img src="<?php echo get_image('MIX&Match.png');?>">
        </div>
        <div class="content-section w-1/2 m-auto text-center">
            <p class="text-center text-[28px]" style="color:#707070;">key message</p>
            <div class="buttons-section pt-[150px]">
                <!-- View More Button -->
                <button class="bg-transparent w-48 text-black font-semibold  py-2 px-4 border border-black rounded text-center">
                    View More
                </button>
                <!-- Download Button -->
                <div class="flex m-auto mt-3 w-48 h-14 bg-black text-white rounded-xl items-center justify-center">
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