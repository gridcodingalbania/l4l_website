<?php
/**
 * Template Name: Store
 */
?>
<?php get_header(); ?>
<div class="store w-full bg-black py-20">
    <h1 class="text-[48px] pl-8 py-10" style="color:#E84246;">Store</h1>
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
        <div class="button-section w-full content-center">
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
<?php get_footer(); ?>