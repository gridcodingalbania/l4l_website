<?php get_header(); ?>
    <?php while(have_posts()) : the_post(); ?>
        <?php $product = App\Model\Product::toSingle(get_the_ID()); ?>
        <div class="w-full px-10 py-10">
			<!-- Name&Buttons&Price Section -->
			<div class="w-full flex ">
				<!-- Name Section -->
				<div class="w-1/4">
					<h1 class="text-[48px]"><?php echo $product['name']; ?></h1>
					<h2 class="text-[64px]" style="color:#9C9883;">Blue Are You</h2>
					<p class="text-[18px]">SH210w • Effetto Metallic — Iridescent</p>
					<p class="text-[18px]">6.3 ml • 0.213 fl.oz. ℮</p>
				</div>
				<!-- Buttons Section -->
				<div class="w-2/4 space-x-32">
					<button class="bg-white text-black font-semibold  py-2 px-8 border rounded">
						<a href="<?php echo $product['add_to_cart_url']; ?>">
							ADD TO WISHLIST
						</a>
            		</button>
					<button class="bg-black text-white font-semibold  py-2 px-8 border rounded">
						<a href="<?php echo $product['add_to_cart_url']; ?>">
							AGGIUNGI AL CARRELLO
						</a>
            		</button>
				</div>
				<!-- Price Section -->
				<div class="w-1/4">
					<h1 class="text-[24px]">45$<?php echo $product['price']; ?></h1>
				</div>		
			</div>
			<!-- Product Image Section -->
			<div class="w-full flex">
				<div class="w-1/3" >
					<div class="bg-black">
						<img  class="m-auto" src="<?php echo $product['image']; ?>">
					</div>
					
					<div class="pb-10  border-b-2">
						<p class="py-4 w-[60%] m-auto"><span class="font-bold">Makeup Agile Multi-Funzionale</span> Rossetto • Blush • Illuminante • Contour Ombretto • Eyeliner • Sopracciglia</p>
						<p class="py-4  w-[60%] m-auto"><span class="font-bold">Arricchito con estratto di</span> Himanthalia Elongata (alga marina)</p>
					</div>
				</div>
				<div class="w-2/3">
					aaaa
				</div>


			</div>
			
            <?php view('single-product.gallery', ['gallery' => $product['gallery']]); ?>
        </div>
    <?php endwhile; ?>
<?php get_footer(); ?>