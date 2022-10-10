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
<div style="background: linear-gradient(0deg, rgba(156, 152, 131, 0.08), rgba(156, 152, 131, 0.08)), #FFFFFF;">
    <div class="w-full">
        <ul style="border-bottom: 1px solid #9C9883;" class="flex items-center justify-between w-full pb-3 pt-4  2xl:px-20 xl:px-20 lg:px-20 md:px-20 sm:px-8 px-5">
            <li class="2xl:mr-6 xl:mr-6 lg:mr-6 md:mr-6 sm:mr-2  mr-1 ">
                <a id="creamA" style="color: red;" class="fArimo font-normal leading-5 hover:text-red-600 2xl:text-xl xl:text-xl lg:text-xl md:text-xl sm:text-lg text-xs text-black" href="#" onClick="toggleDiv('cream')">Cream to Powder</a>
            </li>
            <li class="2xl:mr-6 xl:mr-6 lg:mr-6 md:mr-6 sm:mr-2  mr-1 ">
                <a id="velvetA" class="fArimo font-normal leading-5 hover:text-red-600 2xl:text-xl xl:text-xl lg:text-xl md:text-xl sm:text-lg text-xs text-black" href="#" onClick="toggleDiv('velvet')">Velvet</a>
            </li> 
            <li class="2xl:mr-6 xl:mr-6 lg:mr-6 md:mr-6 sm:mr-2  mr-1 "> 
                <a id="metallicA" class="fArimo font-normal leading-5 hover:text-red-600 2xl:text-xl xl:text-xl lg:text-xl md:text-xl sm:text-lg text-xs text-black"  href="#" onClick="toggleDiv('metallic')">Metallic</a>
            </li> 
            <li class="2xl:mr-6 xl:mr-6 lg:mr-6 md:mr-6 sm:mr-2  mr-1 "> 
                <a id="accessoriesA" class="fArimo font-normal leading-5 hover:text-red-600 2xl:text-xl xl:text-xl lg:text-xl md:text-xl sm:text-lg text-xs text-black" href="#" onClick="toggleDiv('accessories')">Accessories</a>
            </li> 
            <li class="2xl:mr-6 xl:mr-6 lg:mr-6 md:mr-6 sm:mr-2  mr-1 "> 
                <a id="roaridA" class="fArimo font-normal leading-5 hover:text-red-600 2xl:text-xl xl:text-xl lg:text-xl md:text-xl sm:text-lg text-xs text-black" href="#" onClick="toggleDiv('roarid')">Roar iD</a>
            </li>
        </ul>
    </div>
<!-- Cream to Powder -->
    <div class="pages pb-32	" id="cream">
        <div class="w-full topic-section 2x:pt-6 sm:pt-6 pt-0  text-center">
            <p class="2xl:text-5xl sm:text-5xl text-3xl fDSD 2xl:text-red-600 sm:text-red-600 text-black 2xl:relative sm:relative absolute 2xl:pl-0 sm:pl-0 pl-5 2xl:pt-0 sm:pt-0 pt-2  ">Topic 8</p>
            <p class="2xl:block xl:block lg:block md:block sm:block hidden text-2xl fArimo leading-9 font-bold my-6">Discovery product overview</p>
        </div>
        <img class="w-full 2xl:h-[563px] sm:h-[563px] h-[282px]" src="<?php the_field('dcpt8'); ?>"/>
        <div style="border-bottom: 1px solid #C4C4C4;" class="mx-5 my-20 2xl:hidden sm:hidden block"></div>
        <div class="w-full topic-section text-center 2xl:pt-40 sm:pt-40 pt-0 2xl:pb-20 sm:pb-20 pb-2">
            <p class="2xl:text-5xl sm:text-5xl text-3xl	fDSD 2xl:text-red-600 sm:text-red-600 text-white 2xl:relative sm:relative absolute 2xl:pl-0 sm:pl-0 pl-10 2xl:pt-0 sm:pt-0 pt-6">Topic 9</p>
        </div>
        <img class="2xl:block sm:block hidden w-full 2xl:h-[563px] sm:h-[563px] h-[240px]" src="<?php the_field('dcpt9'); ?>"/>

        <div id="scrollbar" class="2xl:hidden sm:hidden block inline-flex whitespace-nowrap overflow-auto gap-1 w-full poiner" style="grid-gap: 2rem!important;"> 
             <img class="w-[181px] h-[267px] rounded-xl	ml-5" src="<?php the_field('dcpt9mobile1'); ?>"/>
             <img class="w-[181px] h-[267px] rounded-xl	" src="<?php the_field('dcpt9mobile2'); ?>"/>
             <img class="w-[181px] h-[267px] rounded-xl	" src="<?php the_field('dcpt9mobile3'); ?>"/>
             <img class="w-[181px] h-[267px] rounded-xl	" src="<?php the_field('dcpt9mobile4'); ?>"/>
        </div>
       
        <div style="border-bottom: 1px solid #C4C4C4;" class="mx-5 my-20 2xl:hidden sm:hidden block"></div>
        <div class="w-full topic-section text-center 2xl:pt-40 sm:pt-40 pt-0 2xl:pb-20 sm:pb-20 pb-2">
            <p class="2xl:text-5xl sm:text-5xl text-3xl	fDSD 2xl:text-red-600 sm:text-red-600 text-white 2xl:relative sm:relative absolute 2xl:pl-0 sm:pl-0 pl-5 2xl:pt-0 sm:pt-0 pt-6">Banner 5</p>
            <p class="2xl:hidden sm:hidden block text-white font-bold fArimo text-lg mt-[200px] text-center w-full absolute">Traciability Description</p>
        </div>
        <img class="w-full 2xl:h-[563px] sm:h-[563px] h-[261px]" src="<?php the_field('dcpbanner5'); ?>"/>
        <div style="border-bottom: 1px solid #C4C4C4;" class="mx-5 my-20 2xl:hidden sm:hidden block"></div>
        <div class="w-full topic-section text-center 2xl:pt-40 sm:pt-40 pt-0  2xl:pb-20 sm:pb-20 pb-2">
            <p class="2xl:text-5xl sm:text-5xl text-3xl	fDSD 2xl:text-red-600 sm:text-red-600 text-white 2xl:relative sm:relative absolute 2xl:pl-0 sm:pl-0 pl-10 2xl:pt-0 sm:pt-0 pt-6">Topic 10</p>
        </div>
        <img class="2xl:block sm:block hidden w-full 2xl:h-[563px] sm:h-[563px] h-[240px]" src="<?php the_field('dcpt10'); ?>"/>
        <div  id="scrollbar" class="2xl:hidden sm:hidden block inline-flex whitespace-nowrap overflow-auto gap-1 w-full poiner" style="grid-gap: 2rem!important;"> 
             <img class="w-[181px] h-[267px] rounded-xl	ml-5" src="<?php the_field('dcpt10mobile1'); ?>"/>
             <img class="w-[181px] h-[267px] rounded-xl	" src="<?php the_field('dcpt10mobile2'); ?>"/>
             <img class="w-[181px] h-[267px] rounded-xl	" src="<?php the_field('dcpt10mobile3'); ?>"/>
             <img class="w-[181px] h-[267px] rounded-xl	" src="<?php the_field('dcpt10mobile4'); ?>"/>
        </div>
        <div style="border-bottom: 1px solid #C4C4C4;" class="mx-5 my-20 2xl:hidden sm:hidden block"></div>
        <div class="w-full topic-section text-center 2xl:pt-40 sm:pt-40 pt-0 2xl:pb-20 sm:pb-20 pb-2">
            <p class="2xl:text-5xl sm:text-5xl text-3xl	fDSD 2xl:text-red-600 sm:text-red-600 text-white 2xl:relative sm:relative absolute 2xl:pl-0 sm:pl-0 pl-5 2xl:pt-0 sm:pt-0 pt-6">Banner 6</p>
            <p class="2xl:hidden sm:hidden block text-white font-bold fArimo text-lg mt-[200px] text-center w-full absolute">Clean Beauty</p>
        </div>
        <img class="w-full 2xl:h-[563px] sm:h-[563px] h-[261px]" src="<?php the_field('dcpbanner6'); ?>"/>
    </div>

<!-- Velvet -->
    <div class="pages pb-32" id="velvet" style="display:none;">
    <div class="w-full topic-section 2x:pt-6 sm:pt-6 pt-0  text-center">
            <p class="2xl:text-5xl sm:text-5xl text-3xl fDSD 2xl:text-red-600 sm:text-red-600 text-black 2xl:relative sm:relative absolute 2xl:pl-0 sm:pl-0 pl-5 2xl:pt-0 sm:pt-0 pt-2  ">Topic 8</p>
            <p class="2xl:block xl:block lg:block md:block sm:block hidden text-2xl fArimo leading-9 font-bold my-6">Discovery product overview</p>
        </div>
        <img class="w-full 2xl:h-[563px] sm:h-[563px] h-[282px]" src="<?php the_field('dvt8'); ?>"/>
        <div style="border-bottom: 1px solid #C4C4C4;" class="mx-5 my-20 2xl:hidden sm:hidden block"></div>
        <div class="w-full topic-section text-center 2xl:pt-40 sm:pt-40 pt-0 2xl:pb-20 sm:pb-20 pb-2">
            <p class="2xl:text-5xl sm:text-5xl text-3xl	fDSD 2xl:text-red-600 sm:text-red-600 text-white 2xl:relative sm:relative absolute 2xl:pl-0 sm:pl-0 pl-5 2xl:pt-0 sm:pt-0 pt-6">Banner 8</p>
            <p class="2xl:hidden sm:hidden block text-white font-bold fArimo text-lg mt-[200px] text-center w-full absolute">Enviroment Description</p>
        </div>
        <img class="w-full 2xl:h-[563px] sm:h-[563px] h-[261px]" src="<?php the_field('dvbanner8'); ?>"/>
        <div style="border-bottom: 1px solid #C4C4C4;" class="mx-5 my-20 2xl:hidden sm:hidden block"></div>
        <div>
            <div class="w-full topic-section text-center 2xl:pt-40 sm:pt-40 pt-0 2xl:pb-20 sm:pb-20 pb-2">
                <p class="2xl:text-5xl 2xl:pl-0 sm:pl-0 pl-5 sm:text-5xl text-3xl	fDSD text-left  text-red-600">Support to select SKU color</p>
                <p class="2xl:block md:block hidden fArimo font-bold text-2xl pt-3">Shades Overview</p>
                <p class="2xl:hidden md:hidden block fArimo text-xl pt-3">“Key Message”</p>
                <p class="2xl:block md:block hidden  pt-2 fArimo text-xl 2xl:w-[27%] md:w-[50%] pt-2 m-auto tracking-tight"><?php the_field('discover_velvet_text'); ?></p>
            </div>
            <div class="w-full h-[560px] flex flex-row ">
            <div class="image-section w-[40%] 2xl:block md:block hidden ">
            <img class="mx-auto float-right" src="<?php the_field('imagevelvet'); ?>"/>
            </div>
            <div class="w-full 2xl:mt-28 md:mt-28 mt-14">
                <div class="flex content-center 2xl:justify-center sm:justify-center justify-between 2xl:px-0 sm:px-0 px-8 space-x-10 ">
                    <p class="fArimo font-bold 2xl:text-xl sm:text-xl text-base mr-10">Usa filtri Beauty Wallet</p>
                    <label for="default-toggle" class="inline-flex relative items-center cursor-pointer">
                        <input type="checkbox" value="" id="default-toggle" class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                    </label>
                </div>
                <div class="grid grid-cols-3 mt-20">
                <span class="m-auto ">
                        <button class="previous-button mr-24"><img src="<?php the_field('previousimage'); ?>"/></button>
                    </span>
                    <span class="pr-20 mx-auto scene">
                        <div class="carousel">
                            <div class="carousel__cell"><img class="" src="<?php the_field('carousel_image1'); ?>"/></div>
                            <div class="carousel__cell"><img class="" src="<?php the_field('carousel_image2'); ?>"/></div>
                            <div class="carousel__cell"><img class="" src="<?php the_field('carousel_image1'); ?>"/></div>
                            <div class="carousel__cell"><img class="" src="<?php the_field('carousel_image2'); ?>"/></div>
                            <div class="carousel__cell"><img class="" src="<?php the_field('carousel_image1'); ?>"/></div>
                            <div class="carousel__cell"><img class="" src="<?php the_field('carousel_image2'); ?>"/></div>
                            <div class="carousel__cell"><img class="" src="<?php the_field('carousel_image1'); ?>"/></div>
                            <div class="carousel__cell"><img class="" src="<?php the_field('carousel_image2'); ?>"/></div>
                            <div class="carousel__cell"><img class="" src="<?php the_field('carousel_image1'); ?>"/></div>
                        </div>
                    </span>
                    <span class="m-auto ">
                        <button class="next-button ml-24"><img src="<?php the_field('nextimage'); ?>"/></button>
                    </span>
                </div>
                    <p class="2xl:hidden text-center sm:hidden block fArimo font-bold text-lg pt-3">Shades Overview</p>
                  <div class="w-fit mx-auto mt-9" >
                  <button class="bg-black hover:bg-blue-700  font-bold py-2 px-4 border rounded">
                        <p class="text-white fArimo text-sm	px-14	">SHOP</p>
                    </button>
                  </div>
                </div>
            </div>  
        </div>

        <div style="border-bottom: 1px solid #C4C4C4;" class="mx-5 my-20 2xl:hidden sm:hidden block"></div>
        <div class="w-full topic-section text-center 2xl:pt-40 sm:pt-40 pt-0 2xl:pb-20 sm:pb-20 pb-2">
            <p class="2xl:text-5xl sm:text-5xl text-3xl	fDSD 2xl:text-red-600 sm:text-red-600 text-white 2xl:relative sm:relative absolute 2xl:pl-0 sm:pl-0 pl-10 2xl:pt-0 sm:pt-0 pt-6">Topic 5</p>
            <p class="2xl:hidden sm:hidden block text-white font-bold fArimo text-lg mt-[200px] text-center w-full absolute">Clean Beauty</p>
        </div>
        <img class="w-full 2xl:h-[563px] sm:h-[563px] h-[261px]" src="<?php the_field('dvt5'); ?>"/>
        <div style="border-bottom: 1px solid #C4C4C4;" class="mx-5 my-20 2xl:hidden sm:hidden block"></div>
        <div class="w-full topic-section text-center 2xl:pt-40 sm:pt-40 pt-0 2xl:pb-20 sm:pb-20 pb-2">
            <p class="2xl:text-5xl sm:text-5xl text-3xl	fDSD 2xl:text-red-600 sm:text-red-600 text-white 2xl:relative sm:relative absolute 2xl:pl-0 sm:pl-0 pl-5 2xl:pt-0 sm:pt-0 pt-6">Banner 11</p>
            <p class="2xl:hidden sm:hidden block text-white font-bold fArimo text-lg mt-[200px] text-center w-full absolute">Traciability Description</p>
        </div>
        <img class="w-full 2xl:h-[563px] sm:h-[563px] h-[261px]" src="<?php the_field('dvbanner11'); ?>"/>
    </div>
<!-- metallic -->
    <div class="pages" id="metallic" style="display:none;">
        <div class="w-full topic-section 2x:pt-6 sm:pt-6 pt-0  text-center">
            <p class= "2xl:text-5xl  sm:text-5xl text-3xl	fDSD 2xl:text-red-600 sm:text-red-600 text-black 2xl:relative sm:relative absolute 2xl:pl-0 sm:pl-0 pl-10 2xl:pt-0 sm:pt-0 pt-6">Topic 8</p>
            <p class="2xl:block xl:block lg:block md:block sm:block hidden text-2xl fArimo leading-9 font-bold my-6">Discovery product overview</p>
        </div>
        <img class="w-full 2xl:h-[563px] sm:h-[563px] h-[282px]" src="<?php the_field('dmt8'); ?>"/>
        <div style="border-bottom: 1px solid #C4C4C4;" class="mx-5 my-20 2xl:hidden md:hidden block"></div>
        <div>
            <div class="w-full topic-section text-center 2xl:pt-40 md:pt-40 pt-0 2xl:pb-20 md:pb-20 pb-2">
                <p class="2xl:text-5xl 2xl:pl-0 md:pl-0 pl-5 sm:text-5xl text-3xl	fDSD 2xl:text-center md:text-center text-left  text-red-600">Support to select SKU color</p>
                <p class="2xl:block md:block hidden fArimo font-bold text-2xl pt-3">Shades Overview</p>
                <p class="2xl:hidden md:hidden block 2xl:pl-0 md:pl-0 pl-5 text-left fArimo text-xl pt-3">“Key Message”</p>
                <p class="2xl:block md:block hidden  pt-2 fArimo text-xl 2xl:w-[27%] md:w-[50%] pt-2 m-auto tracking-tight"><?php the_field('discover_velvet_text'); ?></p>
            </div>
            <div class="w-full h-[560px] flex flex-row ">
            <div class="image-section w-[40%] 2xl:block md:block hidden ">
            <img class="mx-auto float-right" src="<?php the_field('imagevelvet'); ?>"/>
            </div>
            <div class="w-full 2xl:mt-28 sm:mt-28 mt-14">
                <div class="flex content-center 2xl:justify-center sm:justify-center justify-between 2xl:px-0 sm:px-0 px-8 space-x-10 ">
                    <p class="fArimo font-bold 2xl:text-xl sm:text-xl text-base mr-10">Usa filtri Beauty Wallet</p>
                    <label for="default-toggle2" class="inline-flex relative items-center cursor-pointer">
                        <input type="checkbox" value="" id="default-toggle2" class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                    </label>
                </div>
                <div class="grid grid-cols-3 mt-20">
                <span class="m-auto ">
                        <button class="previous-button2 mr-24"><img src="<?php the_field('previousimage'); ?>"/></button>
                    </span>
                    <span class="pr-20 mx-auto scene">
                        <div class="carousel2">
                            <div class="carousel__cell2"><img class="" src="<?php the_field('carousel_image1'); ?>"/></div>
                            <div class="carousel__cell2"><img class="" src="<?php the_field('carousel_image2'); ?>"/></div>
                            <div class="carousel__cell2"><img class="" src="<?php the_field('carousel_image1'); ?>"/></div>
                            <div class="carousel__cell2"><img class="" src="<?php the_field('carousel_image2'); ?>"/></div>
                            <div class="carousel__cell2"><img class="" src="<?php the_field('carousel_image1'); ?>"/></div>
                            <div class="carousel__cell2"><img class="" src="<?php the_field('carousel_image2'); ?>"/></div>
                            <div class="carousel__cell2"><img class="" src="<?php the_field('carousel_image1'); ?>"/></div>
                            <div class="carousel__cell2"><img class="" src="<?php the_field('carousel_image2'); ?>"/></div>
                            <div class="carousel__cell2"><img class="" src="<?php the_field('carousel_image1'); ?>"/></div>
                        </div>
                    </span>
                    <span class="m-auto ">
                        <button class="next-button2 ml-24"><img src="<?php the_field('nextimage'); ?>"/></button>
                    </span>
                </div>
                    <p class="2xl:hidden text-center sm:hidden block fArimo font-bold text-lg pt-3">Shades Overview</p>
                  <div class="w-fit mx-auto mt-9" >
                  <button class="bg-black hover:bg-blue-700  font-bold py-2 px-4 border rounded">
                        <p class="text-white fArimo text-sm	px-14	">SHOP</p>
                    </button>
                  </div>
                </div>
            </div>  
        </div>
        <div style="border-bottom: 1px solid #C4C4C4;" class="mx-5"></div>
        <div class="w-full topic-section pt-[49px] text-center">
            <p class="2xl:text-5xl md:text-5xl text-3xl fDSD 2xl:text-center md:text-center text-left 2xl:pl-0 md:pl-0 pl-10 2xl:pt-0 md:pt-0 pt-6 text-red-600">Banner 1</p>
            <p class="2xl:block md:block hidden pt-14 fArimo text-xl w-[27%] pt-2 m-auto tracking-tight"><?php the_field('discover_metalic_banner_1_main_text'); ?></p>
            <p class="2xl:hidden md:hidden block text-left 2xl:pl-0 md:pl-0 pl-10 font-bold fArimo text-xl">Ingredient Description</p>
        </div>
        <div class="2xl:flex md:flex hidden  justify-between  w-full -mt-14">
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
        <div class="2xl:hidden md:hidden block">
            <img class="w-full mt-[-25%]" src="<?php the_field('dmbanner1firstmobile'); ?>"/>
            <img class="w-full mt-[-35%] " src="<?php the_field('dmbanner1secondmobile'); ?>"/>
            <img class="mt-[-48%] ml-[65%]" src="<?php the_field('discover_metalic_banner_1_line'); ?>"/>
            <p class="float-right w-[40%] text-sm absolute p-6 right-0"><?php the_field('discover_metalic_banner_1_text_in_second_image'); ?></p>
            <div style="border-bottom: 1px solid #C4C4C4;" class="mx-5 mt-80 mb-12"></div>
        </div>
        <div class="w-full topic-section text-center">
            <p class="2xl:text-5xl md:text-5xl text-3xl fDSD 2xl:text-center md:text-center text-left 2xl:pl-0 md:pl-0 pl-10 2xl:pt-28 md:pt-28 pt-6 text-red-600">Topic 7</p>
            <div class="grid grid-cols-3 2xl:gap-28 md:gap-28 gap-5 2xl:py-20 md:py-20 mt-5 pb-24 2xl:px-60 xl:px-5 md:px-5 px-5">
                <div>
                    <img class="2xl:w-auto md:w-auto w-[180px] 2xl:h-auto md:h-auto h-[269px] rounded-lg" src="<?php the_field('dmt7first'); ?>"/>
                    <p class="2xl:block md:block hidden pt-11 pb-7 text-left font-bold fArimo text-xl">Lorem ipsum dolor </p>
                    <p class="2xl:block md:block hidden fArimo text-lg text-left"><?php the_field('_discovery_metallic_topic_7_first_image_text'); ?></p>
                </div>
                <div>
                    <img class="2xl:w-auto md:w-auto w-[180px] 2xl:h-auto md:h-auto h-[269px] rounded-lg" src="<?php the_field('dmt7second'); ?>"/>
                    <p class="2xl:block md:block hidden pt-11 pb-7 text-left font-bold fArimo text-xl">Lorem ipsum dolor </p>
                    <p class="2xl:block md:block hidden fArimo text-lg text-left"><?php the_field('_discovery_metallic_topic_7_second_image_text'); ?></p>
                   
                </div>
                <div>
                    <img class="2xl:w-auto md:w-auto w-[180px] 2xl:h-auto md:h-auto h-[269px] rounded-lg" src="<?php the_field('dmt7third'); ?>"/>
                    <p class="2xl:block md:block hidden pt-11 pb-7 text-left font-bold fArimo text-xl">Lorem ipsum dolor </p>
                    <p class="2xl:block md:block hidden fArimo text-lg text-left"><?php the_field('_discovery_metallic_topic_7_third_image_text'); ?></p>
                  
                </div>
            </div>
        </div>
    </div>
<!-- accessories -->

    <div class="pages" id="accessories" style="display:none;">
        <div class="w-full topic-section 2x:pt-6 sm:pt-6 pt-0  text-center">
            <p class= "2xl:text-5xl  sm:text-5xl text-3xl	fDSD 2xl:text-red-600 sm:text-red-600 text-black 2xl:relative sm:relative absolute 2xl:pl-0 sm:pl-0 pl-10 2xl:pt-0 sm:pt-0 pt-6">Topic 8</p>
            <p class="2xl:block xl:block lg:block md:block sm:block hidden text-2xl fArimo leading-9 font-bold my-6">Discovery product overview</p>
        </div>
        <img class="w-full 2xl:h-[563px] sm:h-[563px] h-[282px]" src="<?php the_field('dat8'); ?>"/>
        <div style="border-bottom: 1px solid #C4C4C4;" class="mx-5 my-20 2xl:hidden sm:hidden block"></div>
        <div class="2xl:block sm:block hidden w-full topic-section text-center pt-40">
            <p class="text-5xl	fDSD text-red-600">Accessories</p>
            <p class="text-2xl fArimo leading-9 font-bold my-6">Lorem ipsum dolor </p>
            <p class="pt-2 fArimo text-xl w-[27%] pt-2 m-auto tracking-tight"><?php the_field('discovery_accessories_main_text'); ?></p>
        </div>
        <img class="2xl:flex sm:flex hidden mx-auto" src="<?php the_field('daaccessories'); ?>"/>
        <div class="2xl:hidden sm:hidden block">
            <div class="w-full topic-section text-center 2xl:pt-40 sm:pt-40 pt-0 2xl:pb-20 sm:pb-20 pb-2">
                <p class="text-3xl fDSD text-left text-white absolute pl-5 pt-6 leading-6">Support to select size/shape/use</p>
                <p class="text-black fArimo text-lg text-left pl-5 pt-20 absolute ">“Key Message”</p>
            <p class="text-white font-bold fArimo text-lg mt-[200px] text-right w-full absolute pr-5">Tools Overview</p>
            </div>
            <img class="w-full 2xl:h-[563px] sm:h-[563px] h-[261px]" src="<?php the_field('dasupport_to_select_sizeshapeuse_image_mobile'); ?>"/>
        </div>
        <div class="flex m-auto  justify-center">
            <div class="2xl:flex sm:flex hidden w-fit mt-9" >
                <button class="font-bold py-2">
                    <p class="text-black fArimo text-sm	px-14">LEARN MORE</p>
                </button>
            </div>
                <div class="w-fit  2xl:mt-9 sm:mt-9 mt-20" >
                <button class="bg-black hover:bg-blue-700  font-bold py-2 px-4 border rounded">
                    <p class="text-white fArimo text-sm	px-14 ">SHOP</p>
                </button>
            </div>
        </div>
        <div style="border-bottom: 1px solid #C4C4C4;" class="mx-5 my-20 2xl:hidden md:hidden block"></div>
        <div class="2xl:hidden sm:hidden block w-full topic-section text-center">
            <p class="text-3xl fDSD text-left absolute pl-10 pt-6 text-white">Topic 2</p>
            <div class="grid grid-cols-2 2xl:gap-28 md:gap-28 gap-5  ">
                <div>
                    <img class="rounded-lg w-full" src="<?php the_field('dat2mobilefirstimage'); ?>"/>
                </div>
                <div>
                    <img class="rounded-lg w-full" src="<?php the_field('dat2mobilesecondimage'); ?>"/>
                </div>
            </div>
        </div>
        <div style="border-bottom: 1px solid #C4C4C4;" class="mx-5 my-20 2xl:hidden sm:hidden block"></div>    
        <div class="2xl:block sm:block hidden w-full topic-section text-center pt-20 pb-20">
            <p class="text-5xl	fDSD text-red-600">Topic 2</p>
        </div>
        <img class="2xl:block sm:block hidden w-full h-[563px]" src="<?php the_field('dat2'); ?>"/>

        <div class="w-full topic-section text-center 2xl:pt-40 md:pt-40 pt-0 2xl:pb-20 sm:pb-20 pb-2">
            <p class="2xl:text-5xl sm:text-5xl text-3xl	fDSD 2xl:text-red-600 sm:text-red-600 text-white 2xl:relative sm:relative absolute 2xl:pl-0 sm:pl-0 pl-5 2xl:pt-0 sm:pt-0 pt-6">Banner 11</p>
            <p class="2xl:hidden sm:hidden block text-white font-bold fArimo text-lg mt-[200px] text-center w-full absolute">Supply Chain</p>
        </div>
        <img class="w-full 2xl:h-[563px] sm:h-[563px] h-[261px]" src="<?php the_field('dabanner11'); ?>"/>
        <div style="border-bottom: 1px solid #C4C4C4;" class="mx-5 my-20 2xl:hidden sm:hidden block"></div>       
        <div class="w-full topic-section text-center">
            <p class="2xl:text-5xl md:text-5xl text-3xl fDSD 2xl:text-center md:text-center text-left 2xl:pl-0 md:pl-0 pl-10 2xl:pt-28 md:pt-28 pt-6 text-red-600">Topic 7</p>
            <div class="grid grid-cols-3 2xl:gap-28 md:gap-28 gap-5 2xl:py-20 md:py-20 mt-5 pb-24 2xl:px-60 xl:px-5 md:px-5 px-5">
                <div>
                    <img class="2xl:w-auto md:w-auto w-[180px] 2xl:h-auto md:h-auto h-[269px] rounded-lg" src="<?php the_field('dat7first'); ?>"/>
                    <p class="2xl:block md:block hidden pt-11 pb-7 text-left font-bold fArimo text-xl">Lorem ipsum dolor </p>
                    <p class="2xl:block md:block hidden fArimo text-lg text-left"><?php the_field('discovery_accessories_first_image_text'); ?></p>
                </div>
                <div>
                    <img class="2xl:w-auto md:w-auto w-[180px] 2xl:h-auto md:h-auto h-[269px] rounded-lg" src="<?php the_field('dat7second'); ?>"/>
                    <p class="2xl:block md:block hidden pt-11 pb-7 text-left font-bold fArimo text-xl">Lorem ipsum dolor </p>
                    <p class="2xl:block md:block hidden fArimo text-lg text-left"><?php the_field('discovery_accessories_second_image_text'); ?></p>
                   
                </div>
                <div>
                    <img class="2xl:w-auto md:w-auto w-[180px] 2xl:h-auto md:h-auto h-[269px] rounded-lg" src="<?php the_field('dat7third'); ?>"/>
                    <p class="2xl:block md:block hidden pt-11 pb-7 text-left font-bold fArimo text-xl">Lorem ipsum dolor </p>
                    <p class="2xl:block md:block hidden fArimo text-lg text-left"><?php the_field('discovery_accessories_third_image_text'); ?></p>
                  
                </div>
            </div>
        </div>
    </div>
    
<!-- roarid -->
    <div class="pages" id="roarid" style="display:none;">
        <div class="w-full topic-section 2xl:pl-0 md:pl-0 pl-10 pt-62 xl:text-center md:text-center text-left 2xl:mt-0 md:mt-0 mt-10 ">
            <p class="2xl:text-5xl md:text-5xl text-3xl fDSD text-red-600 ">Mobile App</p>
            <p class="2xl:hidden md:hidden block text-left fArimo text-xl pt-3">“Key Message”</p>
        </div>
        <div class="grid 2xl:grid-cols-2 md:grid-cols-2 grid-cols-1 2xl:px-44 xl:px-20 px-10 2xl:mt-0 md:mt-0 mt-[-18%]">
            <div>
                <img class="float-right" src="<?php the_field('drmobileapp'); ?>"/>
            </div>
            <div class="text-center m-auto">
                <p class="2xl:block md:block hidden fArimo font-bold text-xl mr-10">Shades Overview</p>
                <p class="2xl:block md:block hidden pt-2 fArimo text-xl 2xl:w-[50%] xl:w-[70%%] w-[70%] pt-5 m-auto tracking-tight"><?php the_field('discovery_roarid_main_text'); ?></p>
                <img class="mx-auto 2xl:pt-16 md:pt-16 pt-0" src="<?php the_field('dr_download_on_app_store_'); ?>"/>
            </div>
        </div>
        <div style="border-bottom: 1px solid #C4C4C4;" class="mx-20 mt-24"></div>
        <div class="w-full topic-section text-center pt-20 pb-20">
            <p class="2xl:text-5xl md:text-5xl text-3xl fDSD text-red-600  2xl:pl-0 md:pl-0 pl-10 ">Discovery Features</p>
        </div>
        <img class=" w-full h-[563px]" src="<?php the_field('drdiscoveryfeatures'); ?>"/>
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
</div>
<script>
      window.onbeforeunload = function () {
            window.scrollTo(0, 0);
        }; 
       
        var carousel = document.querySelector('.carousel');
        var cellCount = 9;
        var selectedIndex = 0;

        function rotateCarousel() {
        var angle = selectedIndex / cellCount * -360;
        carousel.style.transform = 'translateZ(-288px) rotateY(' + angle + 'deg)';
        // for(var i=1; i<= cellCount+1 ; i++){
        //    var tmp = document.querySelector('.carousel__cell:nth-child('+ i+')');
        //    console.log(tmp.style.transform.replace(/[^\d.]/g, ""));
        //    tmp.style.transform = 'rotateY(' + 40 + 'deg)';
        // }
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
        function toggleDiv(target){
            hideAllPages();
            document.getElementById(target).style.display = 'block';
            document.getElementById(target + 'A').style.color = 'red';
            return false;
        }
        function hideAllPages(){
            var pages = document.getElementsByClassName("pages");
            console.log(pages);
            for(var i = 0; i < pages.length; i++){
                pages[i].style.display = 'none';
                document.getElementById(pages[i].id + 'A').style.color = 'black';
            }
        }
    </script>
<?php  get_footer(); ?>
