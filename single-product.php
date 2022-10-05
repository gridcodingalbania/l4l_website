<?php get_header(); ?>
    <?php while(have_posts()) : the_post(); ?>
        <?php $product = App\Model\Product::toSingle(get_the_ID()); ?>
        <div class="w-full px-10 py-10">
			<!-- Name&Buttons&Price Section -->
			<div class="w-full flex ">
				<!-- Name Section -->
				<div class="w-2/4">
					<h1 class="text-[48px]"><?php echo $product['name']; ?></h1>
					<h2 class="text-[64px]" style="color:#9C9883;">Blue Are You</h2>
					<p class="text-[18px] pt-16"><span class="font-bold">SH210w •</span> Effetto Metallic — Iridescent</p>
					<p class="text-[18px] pb-2">6.3 ml • 0.213 fl.oz. ℮</p>
				</div>
				<!-- Buttons Section -->
				<div class="w-2/4 space-x-32 relative">
					<div class="absolute bottom-0" >
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
				</div>
				<!-- Price Section -->
				<div class="w-1/4">
					<h1 class="text-[24px]"><?php echo $product['price']; ?></h1>
				</div>		
			</div>
			<!-- Product Image Section -->
			<div class="w-full flex">
				<div class="w-1/3" >
					<div class="bg-black">
						<img  class="m-auto" src="<?php echo $product['image']; ?>">
					</div>
					
					<div class="pb-10  border-b-2">
						<p class="py-4 text-[14px] w-[60%] m-auto"><span class="font-bold">Makeup Agile Multi-Funzionale</span> Rossetto • Blush • Illuminante • Contour Ombretto • Eyeliner • Sopracciglia</p>
						<p class="py-2 text-[14px]  w-[60%] m-auto"><span class="font-bold">Arricchito con estratto di</span> Himanthalia Elongata (alga marina)</p>
					</div>
				</div>
				<!-- Gallery&Custom Fields -->
				<div class="w-2/3">
					<!-- Custom Fields -->
					<div class="px-20">
						<!-- Descrizione Colore -->
						<div class="py-4 border-b-2 border-black">
							<?php
								$field = get_field_object('descrizione_colore');
							?>
							<button class="flex flex-row items-center w-full justify-between" onclick="toggleField(1)">
								<h1 class="text-bold"><?php echo $field['label']; ?></h1>
								<div>
									<img id="shigjeta1" src="<?php echo get_image('shigjeta.svg');?>">
								</div>
								
							</button>
							<div id="toggle-field1" style="display:none;">
								<p class="py-2"><?php echo $field['value']; ?></p>
							</div>
						</div>
						<!-- Descrizione prodotto -->
						<div class="py-4 border-b-2 border-black">
							<?php
								$field = get_field_object('descrizione_prodotto');
							?>
							<button class="flex flex-row items-center w-full justify-between" onclick="toggleField(2)">
								<h1 class="text-bold"><?php echo $field['label']; ?></h1>
								<div>
									<img id="shigjeta2" src="<?php echo get_image('shigjeta.svg');?>">
								</div>
								
							</button>
							<div id="toggle-field2" style="display:none;">
								<p class="py-2"><?php echo $field['value']; ?></p>
							</div>
						</div>
						<!-- Principi attivi e Tecnologia -->
						<div class="py-4 border-b-2 border-black">
							<?php
								$field = get_field_object('principi_attivi_e_tecnologia');
							?>
							<button class="flex flex-row items-center w-full justify-between" onclick="toggleField(3)">
								<h1 class="text-bold"><?php echo $field['label']; ?></h1>
								<div>
									<img id="shigjeta3" src="<?php echo get_image('shigjeta.svg');?>">
								</div>
								
							</button>
							<div id="toggle-field3" style="display:none;">
								<p class="py-2"><?php echo $field['value']; ?></p>
							</div>
						</div>
						<!-- Consigli d'uso-->
						<div class="py-4 border-b-2 border-black">
							<?php
								$field = get_field_object('consigli_duso');
							?>
							<button class="flex flex-row items-center w-full justify-between" onclick="toggleField(4)">
								<h1 class="text-bold"><?php echo $field['label']; ?></h1>
								<div>
									<img id="shigjeta4" src="<?php echo get_image('shigjeta.svg');?>">
								</div>
								
							</button>
							<div id="toggle-field4" style="display:none;">
								<p class="py-2"><?php echo $field['value']; ?></p>
							</div>
						</div>
						<!-- Inci-->
						<div class="py-4 border-b-2 border-black">
							<?php
								$field = get_field_object('inci');
							?>
							<button class="flex flex-row items-center w-full justify-between" onclick="toggleField(5)">
								<h1 class="text-bold"><?php echo $field['label']; ?></h1>
								<div>
									<img id="shigjeta5" src="<?php echo get_image('shigjeta.svg');?>">
								</div>
								
							</button>
							<div id="toggle-field5" style="display:none;">
								<p class="py-2"><?php echo $field['value']; ?></p>
							</div>
						</div>
					</div>
				</div>
				<!-- Gallery -->
				<div class="gallery flex flex-wra p hidden  ">
            		<?php view('single-product.gallery', ['gallery' => $product['gallery']]); ?>
				</div>
			</div>
			
        </div>
    <?php endwhile; ?>
<?php get_footer(); ?>
<script>
	function toggleField(num) {
            var text = document.getElementById("toggle-field" + num);
			var shigjeta = document.getElementById("shigjeta"+num);
            if (text.style.display === "none") {
                text.style.display = "block";
                shigjeta.style.display = "none";
            } else {
                text.style.display = "none";
                shigjeta.style.display = "block";
            }
}
</script>