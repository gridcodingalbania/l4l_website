<?php foreach($products as $product) : ?>
    <div class=" lg:w-1/4 md:w-1/2 sm:w-1/2 py-8 content-center">
        <a href="<?php echo $product['link'];?>">
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
            <a href="<?php echo $product['add_to_cart_url']; ?>"><img src="<?php echo get_image('wishlist.svg');?>"></a>
            <a href="<?php echo $product['add_to_cart_url']; ?>"> <img src="<?php echo get_image('carticon.svg');?>"></a>
        </div>
    </div>
<?php endforeach; ?>