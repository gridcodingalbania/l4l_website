<?php
/**
 * Template Name: Discovery-Pages
 */
?>
<style>
<?php include 'app.css'; ?>
</style>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Arimo" />
<link href="http://fonts.cdnfonts.com/css/dm-serif-display" rel="stylesheet">
<div>
    <div class="w-full">
        <ul style="border-bottom: 1px solid #9C9883;" class="flex items-center justify-between w-full px-4 pb-3 pt-4  px-20	">
            <li class="mr-6">
                <a class="fArimo font-normal leading-5 hover:text-red-600 text-xl text-black" href="#" onClick="toggleDiv('cream')">Cream to Powder</a>
            </li>
            <li class="mr-6">
                <a class="fArimo font-normal leading-5 hover:text-red-600 text-xl text-black" href="#" onClick="toggleDiv('velvet')">Velvet</a>
            </li> 
            <li class="mr-6"> 
                <a class="fArimo font-normal leading-5 hover:text-red-600 text-xl text-black"  href="#" onClick="toggleDiv('metallic')">Metallic</a>
            </li> 
            <li class="mr-6"> 
                <a class="fArimo font-normal leading-5 hover:text-red-600 text-xl text-black" href="#" onClick="toggleDiv('accessories')">Accessories</a>
            </li> 
            <li class="mr-6"> 
                <a class="fArimo font-normal leading-5 hover:text-red-600 text-xl text-black" href="#" onClick="toggleDiv('roarid')">Roar iD</a>
            </li>
        </ul>
    </div>
<!-- Cream to Powder -->
    <div class="pages pb-32	" id="cream">
        <div class="w-full topic-section pt-6  text-center">
            <p class="text-5xl	fDSD text-red-600">Topic 8</p>
            <p class="text-2xl fArimo leading-9 font-bold my-6">Discovery product overview</p>
        </div>
        <img class="w-full h-[563px]" src="<?php the_field('dcpt8'); ?>"/>
        <div class="w-full topic-section text-center pt-40 pb-20">
            <p class="text-5xl	fDSD text-red-600">Topic 9</p>
        </div>
        <img class="w-full h-[563px]" src="<?php the_field('dcpt9'); ?>"/>
        <div class="w-full topic-section text-center pt-40 pb-20">
            <p class="text-5xl	fDSD text-red-600">Banner 5</p>
        </div>
        <img class="w-full h-[563px]" src="<?php the_field('dcpbanner5'); ?>"/>
        <div class="w-full topic-section text-center pt-40 pb-20">
            <p class="text-5xl	fDSD text-red-600">Topic 10</p>
        </div>
        <img class="w-full h-[563px]" src="<?php the_field('dcpt10'); ?>"/>
        <div class="w-full topic-section text-center pt-40 pb-20">
            <p class="text-5xl	fDSD text-red-600">Banner 6</p>
        </div>
        <img class="w-full h-[563px]" src="<?php the_field('dcpbanner6'); ?>"/>
    </div>

<!-- Velvet -->
    <div class="pages pb-32" id="velvet" style="display:none;">
        <div class="w-full topic-section pt-6  text-center">
            <p class="text-5xl	fDSD text-red-600">Topic 8</p>
            <p class="text-2xl fArimo leading-9 font-bold my-6">Discovery product overview</p>
        </div>
        <img class="w-full h-[563px]" src="<?php the_field('dvt8'); ?>"/> 
        <div class="w-full topic-section text-center pt-40 pb-20">
            <p class="text-5xl	fDSD text-red-600">Banner 8</p>
        </div>
        <img class="w-full h-[563px]" src="<?php the_field('dvbanner8'); ?>"/>
        <div>
            <div class="w-full topic-section text-center pt-40 pb-20">
                <p class="text-5xl	fDSD text-red-600">Support to select SKU color</p>
                <p class="fArimo font-bold text-2xl pt-3">Shades Overview</p>
                <p class="pt-2 fArimo text-xl w-[27%] pt-2 m-auto tracking-tight"><?php the_field('discover_velvet_text'); ?></p>
            </div>
            <div class="w-full h-[560px] flex flex-row ">
            <div class="image-section w-[40%]">
            <img class="mx-auto float-right" src="<?php the_field('imagevelvet'); ?>"/>
            </div>
            <div class="w-full mt-28">
                <div class="flex content-center justify-center space-x-10">
                    <p class="fArimo font-bold text-xl mr-10">Usa filtri Beauty Wallet</p>
                    <label for="default-toggle2" class="inline-flex relative items-center cursor-pointer">
                        <input type="checkbox" value="" id="default-toggle2" class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                    </label>
                </div>
                <div class="scene">
                    <div class="carousel">
                        <div class="carousel__cell"><img class="mx-auto float-right" src="<?php the_field('carousel_image1'); ?>"/></div>
                        <div class="carousel__cell"><img class="mx-auto float-right" src="<?php the_field('carousel_image2'); ?>"/></div>
                        <div class="carousel__cell"><img class="mx-auto float-right" src="<?php the_field('carousel_image1'); ?>"/></div>
                        <div class="carousel__cell"><img class="mx-auto float-right" src="<?php the_field('carousel_image2'); ?>"/></div>
                        <div class="carousel__cell"><img class="mx-auto float-right" src="<?php the_field('carousel_image1'); ?>"/></div>
                        <div class="carousel__cell"><img class="mx-auto float-right" src="<?php the_field('carousel_image2'); ?>"/></div>
                        <div class="carousel__cell"><img class="mx-auto float-right" src="<?php the_field('carousel_image1'); ?>"/></div>
                        <div class="carousel__cell"><img class="mx-auto float-right" src="<?php the_field('carousel_image2'); ?>"/></div>
                        <div class="carousel__cell"><img class="mx-auto float-right" src="<?php the_field('carousel_image1'); ?>"/></div>
                    </div>
                    </div>
                    <p style="text-align: center;">
                    <button class="previous-button">Previous</button>
                    <button class="next-button">Next</button>
                    </p>
                <!-- <div class="pt-9">
                <div id="drag-container">
                    <div id="spin-container">
                    <img class="mx-auto float-right" src="<?php the_field('carousel_image1'); ?>"/>
                    <img class="mx-auto float-right" src="<?php the_field('carousel_image2'); ?>"/>
                    <img class="mx-auto float-right" src="<?php the_field('carousel_image1'); ?>"/>
                    <img class="mx-auto float-right" src="<?php the_field('carousel_image2'); ?>"/>
                    <img class="mx-auto float-right" src="<?php the_field('carousel_image1'); ?>"/>
                    <img class="mx-auto float-right" src="<?php the_field('carousel_image2'); ?>"/>
                    </div>
                    <div id="ground"></div>
                    </div>
                    <div id="music-container"> 
                    </div>
                </div>   -->
                  <div class="w-fit mx-auto mt-9" >
                  <button class="bg-black hover:bg-blue-700  font-bold py-2 px-4 border rounded">
                        <p class="text-white fArimo text-sm	px-14	">SHOP</p>
                    </button>
                  </div>
                </div>
            </div>  
        </div>
        <div class="w-full topic-section text-center pt-40 pb-20">
            <p class="text-5xl	fDSD text-red-600">Topic 5</p>
        </div>
        <img class="w-full h-[563px]" src="<?php the_field('dvt5'); ?>"/>
        <div class="w-full topic-section text-center pt-40 pb-20">
            <p class="text-5xl	fDSD text-red-600">Banner 11</p>
        </div>
        <img class="w-full h-[563px]" src="<?php the_field('dvbanner11'); ?>"/>
    </div>
<!-- metallic -->
    <div class="pages" id="metallic" style="display:none;">
        <div class="w-full topic-section pt-6  text-center">
            <p class="text-5xl	fDSD text-red-600">Topic 8</p>
            <p class="text-2xl fArimo leading-9 font-bold my-6">Discovery product overview</p>
        </div>
        <img class="w-full h-[563px]" src="<?php the_field('dmt8'); ?>"/>
        <div>
            <div class="w-full topic-section text-center pt-40 pb-20">
                <p class="text-5xl	fDSD text-red-600">Support to select SKU color</p>
                <p class="fArimo font-bold text-2xl pt-3">Shades Overview</p>
                <p class="pt-2 fArimo text-xl w-[27%] pt-2 m-auto tracking-tight"><?php the_field('discover_metalic_text_at_support_to_select_sku_color'); ?></p>
            </div>
            <div class="w-full h-[560px] flex flex-row ">
            <div class="image-section w-[40%]">
            <img class="mx-auto float-right" src="<?php the_field('imagevelvet'); ?>"/>
            </div>
            <div class="w-full mt-28">
                <div class="flex content-center justify-center space-x-10">
                    <p class="fArimo font-bold text-xl mr-10">Usa filtri Beauty Wallet</p>
                    <label for="default-toggle" class="inline-flex relative items-center cursor-pointer">
                        <input type="checkbox" value="" id="default-toggle" class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                    </label>
                </div>
                <div class="scene">
                    <div class="carousel2">
                        <div class="carousel__cell2"><img class="mx-auto float-right" src="<?php the_field('carousel_image1'); ?>"/></div>
                        <div class="carousel__cell2"><img class="mx-auto float-right" src="<?php the_field('carousel_image2'); ?>"/></div>
                        <div class="carousel__cell2"><img class="mx-auto float-right" src="<?php the_field('carousel_image1'); ?>"/></div>
                        <div class="carousel__cell2"><img class="mx-auto float-right" src="<?php the_field('carousel_image2'); ?>"/></div>
                        <div class="carousel__cell2"><img class="mx-auto float-right" src="<?php the_field('carousel_image1'); ?>"/></div>
                        <div class="carousel__cell2"><img class="mx-auto float-right" src="<?php the_field('carousel_image2'); ?>"/></div>
                        <div class="carousel__cell2"><img class="mx-auto float-right" src="<?php the_field('carousel_image1'); ?>"/></div>
                        <div class="carousel__cell2"><img class="mx-auto float-right" src="<?php the_field('carousel_image2'); ?>"/></div>
                        <div class="carousel__cell2"><img class="mx-auto float-right" src="<?php the_field('carousel_image1'); ?>"/></div>
                    </div>
                    </div>
                    <p style="text-align: center;">
                    <button class="previous-button2">Previous</button>
                    <button class="next-button2">Next</button>
                    </p>
                <!-- <div class="pt-9">
                <div id="drag-container">
                    <div id="spin-container">
                    <img class="mx-auto float-right" src="<?php the_field('carousel_image1'); ?>"/>
                    <img class="mx-auto float-right" src="<?php the_field('carousel_image2'); ?>"/>
                    <img class="mx-auto float-right" src="<?php the_field('carousel_image1'); ?>"/>
                    <img class="mx-auto float-right" src="<?php the_field('carousel_image2'); ?>"/>
                    <img class="mx-auto float-right" src="<?php the_field('carousel_image1'); ?>"/>
                    <img class="mx-auto float-right" src="<?php the_field('carousel_image2'); ?>"/>
                    </div>
                    <div id="ground"></div>
                </div>
                    <div id="music-container"> 
                    </div> -->
                  </div>  
                  <div class="w-fit mx-auto mt-9" >
                  <button class="bg-black hover:bg-blue-700  font-bold py-2 px-4 border rounded">
                        <p class="text-white fArimo text-sm	px-14	">SHOP</p>
                    </button>
                  </div>
            </div>
            </div>  
        </div>
        <div style="border-bottom: 1px solid #C4C4C4;" class="mx-20 mt-24"></div>
        <div class="w-full topic-section pt-16 text-center">
            <p class="text-5xl	fDSD text-red-600">Banner 1</p>
            <p class="pt-14	 fArimo text-xl w-[27%] pt-2 m-auto tracking-tight"><?php the_field('discover_metalic_banner_1_main_text'); ?></p>
        </div>
        <div class="flex justify-between  w-full -mt-14">
            <div>
                <img class="w-[65%]" src="<?php the_field('dmbanner1first'); ?>"/>
                <img class="ml-[60%] mt-[-60%]" src="<?php the_field('discover_metalic_banner_1_line'); ?>"/>
                <p class=" fArimo text-xl w-[70%] pl-[41%] pt-2 m-auto tracking-tight"><?php the_field('discover_metalic_banner_1_text_in_first_image'); ?></p>
            </div>
            <div>
                <img class=" mt-[-15%] " src="<?php the_field('dmbanner1second'); ?>"/>
                <img class="ml-[75%] mt-[-40%]" src="<?php the_field('discover_metalic_banner_1_line'); ?>"/>
                <p class="float-right w-[12%] absolute right-0"><?php the_field('discover_metalic_banner_1_text_in_second_image'); ?></p>
            </div>
        </div>
        <div class="w-full topic-section pt-56  text-center">
            <p class="text-5xl	fDSD text-red-600">Topic 7</p>
            <div class=" grid grid-cols-3 gap-28 my-20 px-60">
                <div>
                    <img src="<?php the_field('dmt7first'); ?>"/>
                    <p class="pt-11 pb-7 text-left font-bold fArimo text-xl">Lorem ipsum dolor </p>
                    <p class="fArimo text-lg text-left"><?php the_field('_discovery_metallic_topic_7_first_image_text'); ?></p>
                </div>
                <div>
                    <img src="<?php the_field('dmt7second'); ?>"/>
                    <p class="pt-11 pb-7 text-left font-bold fArimo text-xl">Lorem ipsum dolor </p>
                    <p class="fArimo text-lg text-left"><?php the_field('_discovery_metallic_topic_7_second_image_text'); ?></p>
                   
                </div>
                <div>
                    <img src="<?php the_field('dmt7third'); ?>"/>
                    <p class="pt-11 pb-7 text-left font-bold fArimo text-xl">Lorem ipsum dolor </p>
                    <p class="fArimo text-lg text-left"><?php the_field('_discovery_metallic_topic_7_third_image_text'); ?></p>
                  
                </div>
            </div>
        </div>
    </div>
<!-- accessories -->

    <div class="pages" id="accessories" style="display:none;">
        <div class="w-full topic-section pt-6  text-center">
            <p class="text-5xl	fDSD text-red-600">Topic 8</p>
            <p class="text-2xl fArimo leading-9 font-bold my-6">Discovery product overview</p>
        </div>
        <img class="w-full h-[563px]" src="<?php the_field('dat8'); ?>"/>
        <div class="w-full topic-section text-center pt-40">
            <p class="text-5xl	fDSD text-red-600">Accessories</p>
            <p class="text-2xl fArimo leading-9 font-bold my-6">Lorem ipsum dolor </p>
            <p class="pt-2 fArimo text-xl w-[27%] pt-2 m-auto tracking-tight"><?php the_field('discovery_accessories_main_text'); ?></p>
        </div>
        <img class="mx-auto" src="<?php the_field('daaccessories'); ?>"/>
        <div class="flex m-auto w-[30%] justify-between">
            <div class="w-fit mt-9" >
                <button class="font-bold py-2">
                    <p class="text-black fArimo text-sm	px-14">LEARN MORE</p>
                </button>
            </div>
                <div class="w-fit  mt-9" >
                <button class="bg-black hover:bg-blue-700  font-bold py-2 px-4 border rounded">
                    <p class="text-white fArimo text-sm	px-14 ">SHOP</p>
                </button>
            </div>
        </div>
        <div style="border-bottom: 1px solid #C4C4C4;" class="mx-20 mt-24"></div>
        <div class="w-full topic-section text-center pt-20 pb-20">
            <p class="text-5xl	fDSD text-red-600">Topic 2</p>
        </div>
        <img class="w-full h-[563px]" src="<?php the_field('dat2'); ?>"/>
        <div class="w-full topic-section text-center pt-40 pb-20">
            <p class="text-5xl	fDSD text-red-600">Banner 11</p>
        </div>
        <img class="w-full h-[563px]" src="<?php the_field('dabanner11'); ?>"/>
        <div class="w-full topic-section pt-56  text-center">
            <p class="text-5xl	fDSD text-red-600">Topic 7</p>
            <div class=" grid grid-cols-3 gap-28 my-20 px-60">
                <div>
                    <img src="<?php the_field('dmt7first'); ?>"/>
                    <p class="pt-11 pb-7 text-left font-bold fArimo text-xl">Lorem ipsum dolor </p>
                    <p class="fArimo text-lg text-left"><?php the_field('discovery_accessories_first_image_text'); ?></p>
                </div>
                <div>
                    <img src="<?php the_field('dmt7second'); ?>"/>
                    <p class="pt-11 pb-7 text-left font-bold fArimo text-xl">Lorem ipsum dolor </p>
                    <p class="fArimo text-lg text-left"><?php the_field('discovery_accessories_second_image_text'); ?></p>
                   
                </div>
                <div>
                    <img src="<?php the_field('dmt7third'); ?>"/>
                    <p class="pt-11 pb-7 text-left font-bold fArimo text-xl">Lorem ipsum dolor </p>
                    <p class="fArimo text-lg text-left"><?php the_field('discovery_accessories_third_image_text'); ?></p>
                  
                </div>
            </div>
        </div>
    </div>
    
<!-- roarid -->
    <div class="pages" id="roarid" style="display:none;">
        <div class="w-full topic-section pt-6  text-center">
            <p class="text-5xl	fDSD text-red-600">Mobile App</p>
        </div>
        <div class="grid grid-cols-2 px-44">
            <div>
                <img class="float-right" src="<?php the_field('drmobileapp'); ?>"/>
            </div>
            <div class="text-center m-auto">
                <p class="fArimo font-bold text-xl mr-10">Shades Overview</p>
                <p class="pt-2 fArimo text-xl w-[50%] pt-5 m-auto tracking-tight"><?php the_field('discovery_roarid_main_text'); ?></p>
                <img class="mx-auto pt-16" src="<?php the_field('dr_download_on_app_store_'); ?>"/>
            </div>
        </div>
        <div style="border-bottom: 1px solid #C4C4C4;" class="mx-20 mt-24"></div>
        <div class="w-full topic-section text-center pt-20 pb-20">
            <p class="text-5xl	fDSD text-red-600">Discovery Features</p>
        </div>
        <img class="w-full h-[563px]" src="<?php the_field('drdiscoveryfeatures'); ?>"/>
        <div class="w-full topic-section text-center pt-40 pb-20">
            <p class="text-5xl	fDSD text-red-600">Banner 12</p>
        </div>
        <img class="w-full h-[563px]" src="<?php the_field('drbanner12'); ?>"/>
        <div class="w-full topic-section text-center pt-20 pb-20">
            <p class="text-5xl	fDSD text-red-600">Visual</p>
        </div>
        <div class="grid grid-cols-2">
            <div class="text-center mt-24">
                <p class="fArimo font-bold text-xl mr-10">Flow Overview</p>
                <p class="pt-2 fArimo text-xl w-[50%] pt-5 m-auto tracking-tight"><?php the_field('discovery_roarid_visual_text'); ?></p>
            </div>
            <div>
                <img class="w-full mt-[-20%]" src="<?php the_field('drvisual'); ?>"/>
            </div>
        </div>
        <div style="border-bottom: 1px solid #C4C4C4;" class="mx-20 "></div>
        <div class="w-full topic-section text-center pt-20 pb-20">
            <p class="text-5xl	fDSD text-red-600">Discovery support</p>
        </div>
        <img class="w-full h-[563px]" src="<?php the_field('drdiscoverysupport'); ?>"/>
    </div>

</div>
<script>
        var carousel = document.querySelector('.carousel');
        var cellCount = 9;
        var selectedIndex = 0;

        function rotateCarousel() {
        var angle = selectedIndex / cellCount * -360;
        carousel.style.transform = 'translateZ(-288px) rotateY(' + angle + 'deg)';
        }

        var prevButton = document.querySelector('.previous-button');
        prevButton.addEventListener( 'click', function() {
        selectedIndex--;
        rotateCarousel();
        });

        var nextButton = document.querySelector('.next-button');
        nextButton.addEventListener( 'click', function() {
        selectedIndex++;
        rotateCarousel();
        });

      windows.onload.scrollTo({
            top: 0,
            behavior: 'instant',
        });
        function toggleDiv(target){
            hideAllPages();
            document.getElementById(target).style.display = 'block';
            return false;
        }
      
        function hideAllPages(){
            var pages = document.getElementsByClassName("pages");
            for(var i = 0; i < pages.length; i++){
                pages[i].style.display = 'none';
            }
        }
        var carousel2 = document.querySelector('.carousel2');
        var cellCount2 = 9;
        var selectedIndex2 = 0;

        function rotateCarousel2() {
        var angle = selectedIndex2 / cellCount2 * -360;
        carousel2.style.transform = 'translateZ(-288px) rotateY(' + angle + 'deg)';
        }

        var prevButton2 = document.querySelector('.previous-button2');
        prevButton2.addEventListener( 'click', function() {
        selectedIndex2--;
        rotateCarousel2();
        });

        var nextButton2 = document.querySelector('.next-button2');
        nextButton2.addEventListener( 'click', function() {
        selectedIndex2++;
        rotateCarousel2();
        });

      windows.onload.scrollTo({
            top: 0,
            behavior: 'instant',
        });
        function toggleDiv(target){
            hideAllPages();
            document.getElementById(target).style.display = 'block';
            return false;
        }
      
        function hideAllPages(){
            var pages = document.getElementsByClassName("pages");
            for(var i = 0; i < pages.length; i++){
                pages[i].style.display = 'none';
            }
        }

        // // // carousel

        // var radius = 240; // how big of the radius
        // var autoRotate = false; // auto rotate or not
        // var rotateSpeed = -60; // unit: seconds/360 degrees
        // var imgWidth = 175; // width of images (unit: px)
        // var imgHeight = 250; // height of images (unit: px)
        
        // // ===================== start =======================
        // // animation start after 1000 miliseconds
        // setTimeout(init, 1000);

        // var odrag = document.getElementById('drag-container');
        // var ospin = document.getElementById('spin-container');
        // var aImg = ospin.getElementsByTagName('img');
        // var aVid = ospin.getElementsByTagName('video');
        // var aEle = [...aImg, ...aVid]; // combine 2 arrays

        // // Size of images
        // ospin.style.width = imgWidth + "px";
        // ospin.style.height = imgHeight + "px";


        // function init(delayTime) {
        // for (var i = 0; i < aEle.length; i++) {
        //     aEle[i].style.transform = "rotateY(" + (i * (360 / aEle.length)) + "deg) translateZ(" + radius + "px)";
        //     aEle[i].style.transition = "transform 1s";
        //     aEle[i].style.transitionDelay = delayTime || (aEle.length - i) / 4 + "s";
        // }
        // }

        // function applyTranform(obj) {
        // // Constrain the angle of camera (between 0 and 180)
        // if(tY > 180) tY = 180;
        // if(tY < 0) tY = 0;

        // // Apply the angle
        // obj.style.transform = "  rotateY(" + (tX) + "deg)";
        // }
        

        // var sX, sY, nX, nY, desX = 0,
        //     desY = 0,
        //     tX = 0,
        //     tY = 10;

        // // setup events
        // document.onpointerdown = function (e) {
        // clearInterval(odrag.timer);
        // e = e || window.event;
        // var sX = e.clientX,
        //     sY = e.clientY;

        // this.onpointermove = function (e) {
        //     e = e || window.event;
        //     var nX = e.clientX,
        //         nY = e.clientY;
        //     desX = nX - sX;
        //     desY = nY - sY;
        //     tX += desX * 0.1;
        //     tY += desY * 0.1;
        //     applyTranform(odrag);
        //     sX = nX;
        //     sY = nY;
        // };

        // this.onpointerup = function (e) {
        //     odrag.timer = setInterval(function () {
        //     desX *= 0.95;
        //     desY *= 0.95;
        //     tX += desX * 0.1;
        //     tY += desY * 0.1;
        //     applyTranform(odrag);
        //     playSpin(false);
        //     if (Math.abs(desX) < 0.5 && Math.abs(desY) < 0.5) {
        //         clearInterval(odrag.timer);
        //         playSpin(true);
        //     }
        //     }, 17);
        //     this.onpointermove = this.onpointerup = null;
        // };

        // return false;
        // };

    </script>
<?php  get_footer(); ?>
