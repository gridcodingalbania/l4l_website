<?php
/**
 * Template Name: Home-LandingPage
 */
?>

<style>
<?php include 'home-landingpage.css'; ?>
</style>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Arimo" />
<link href="http://fonts.cdnfonts.com/css/dm-serif-display" rel="stylesheet">
<script src="https://www.google.com/recaptcha/api.js"></script>
<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <script src="https://cdn.tailwindcss.com"></script>
    <?php wp_head(); ?>
</head>
<?php 
    $siteKey = '6LfUXRgiAAAAAN-eBt4lGrMO8UqwyPmNQqaYccbP';
    $secretKey = '6LfUXRgiAAAAAL_817HWxnImWorwb0rCkgY5vBIJ'; ?>

<body>
    <header class=" w-full h-16  drop-shadow-lg">
        <div class="px-10 h-full mx-auto flex justify-between items-center">
            <!-- Logo -->
            <a>
                <svg width="84" height="21" viewBox="0 0 84 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="lg:w-[84px] md:w-[60px]">
                <path d="M0.0118324 19.9419V10.6578C-0.0361924 9.04546 0.246275 7.44033 0.841945 5.94063C1.33519 4.74985 2.11628 3.69927 3.11557 2.88254C4.06848 2.14294 5.16178 1.60349 6.3295 1.29673C7.56459 0.95993 8.83967 0.791153 10.1201 0.794986H10.8547V5.92232H9.19449C7.79506 5.92232 6.76292 6.25926 6.08708 6.92948C5.41124 7.59969 5.07699 8.65812 5.07699 10.0974V19.9419H0.0118324Z" fill="white"/>
                <path d="M40.8599 0.000931893H21.5433C20.9295 0.00182575 20.3163 0.0385122 19.7068 0.110803C17.8265 0.325739 16.0972 1.24151 14.8657 2.67447C14.0584 3.61094 13.4778 4.71989 13.1687 5.91568C12.8132 7.18061 12.6315 8.48781 12.6288 9.80147C12.6234 11.3495 12.8424 12.8902 13.2789 14.3758C13.6394 15.7223 14.3908 16.9327 15.4387 17.855C16.5458 18.7867 17.8756 19.4175 19.299 19.6862C20.0221 19.8507 20.7613 19.9343 21.5029 19.9353H40.8452C41.7248 19.9324 42.5998 19.8092 43.4458 19.569C45.2384 19.1806 46.8148 18.1249 47.8534 16.6172C48.4285 15.7527 48.867 14.8053 49.1537 13.8081C49.5154 12.5202 49.6849 11.1862 49.6569 9.84908C49.701 7.93051 49.2801 6.02966 48.4301 4.30789C47.6227 2.583 46.1736 1.23924 44.3897 0.561276C43.2628 0.174528 42.0773 -0.0150452 40.8856 0.000931893H40.8599ZM40.8856 4.21267C41.2601 4.21516 41.6318 4.2757 41.9876 4.39213C42.797 4.70876 43.4726 5.29322 43.9012 6.04753C44.4522 6.91185 44.7277 8.20833 44.7277 9.93697C44.6799 11.8597 44.3604 13.2331 43.791 14.1121C43.3327 14.8826 42.6178 15.4685 41.7709 15.7675C41.4754 15.8413 41.1719 15.8782 40.8673 15.8774H21.5433C21.112 15.8732 20.6842 15.8003 20.2761 15.6613C19.6895 15.4855 19.1648 15.1478 18.7628 14.6871C18.0282 13.8228 17.6192 12.2992 17.536 10.1164V9.57806C17.536 7.65897 17.9927 6.19402 18.906 5.1832C19.3604 4.78395 19.9047 4.5 20.4928 4.3555C20.8348 4.26013 21.1881 4.21086 21.5433 4.20901H40.8856V4.21267Z" fill="white"/>
                <path d="M67.2951 16.8113C66.6933 17.8022 65.8324 18.6112 64.8047 19.1515C63.8069 19.6842 62.7159 20.0211 61.5908 20.1441C60.5954 20.2546 59.5951 20.3145 58.5936 20.3235C56.9655 20.3553 55.3706 19.8621 54.0463 18.9172C52.7461 17.982 52.0959 16.4341 52.0959 14.2733C52.0959 12.2589 52.6861 10.8196 53.8664 9.95531C55.2099 9.02574 56.7584 8.43278 58.3806 8.22666C58.6712 8.22188 58.9606 8.18628 59.2437 8.12045C59.6261 8.04089 60.0122 7.98099 60.4007 7.94099C62.5164 7.65289 63.5755 7.02784 63.5779 6.06585C63.5967 5.73305 63.4928 5.40488 63.2858 5.14315C63.0788 4.88142 62.7829 4.7042 62.454 4.64485C61.787 4.4415 61.0945 4.33301 60.3971 4.32256C59.7827 4.3132 59.1713 4.40984 58.5899 4.60823C58.3332 4.69896 58.0981 4.84183 57.8996 5.0278C57.7011 5.21377 57.5434 5.43879 57.4366 5.68863H52.6028C52.7709 4.2517 53.496 2.93729 54.623 2.02625C55.9257 0.920207 57.7794 0.367188 60.184 0.367188C62.8776 0.367188 64.899 0.823764 66.2483 1.73692C66.9152 2.17226 67.4583 2.77173 67.825 3.47743C68.1918 4.18313 68.3698 4.97121 68.3419 5.76554V12.3139C68.3346 14.233 67.9856 15.7321 67.2951 16.8113ZM63.6477 10.2959C62.7472 10.7103 61.8036 11.0247 60.8342 11.2335L59.1739 11.5997C58.4854 11.751 57.8454 12.0707 57.3117 12.53C56.9932 12.9976 56.8172 13.547 56.8048 14.1121C56.7895 14.4292 56.8393 14.746 56.9511 15.0433C57.0629 15.3405 57.2343 15.6119 57.4549 15.8408C57.9872 16.2583 58.6563 16.4633 59.3319 16.4157C60.6787 16.4157 61.7377 16.0324 62.5091 15.2658C63.2804 14.4967 63.6624 13.4346 63.6624 12.0978L63.6477 10.2959Z" fill="white"/>
                <path d="M71.2692 19.9419V10.6578C71.2211 9.04546 71.5036 7.44033 72.0993 5.94063C72.5899 4.74841 73.3715 3.69724 74.3729 2.88254C75.3258 2.14294 76.4191 1.60349 77.5868 1.29673C78.8219 0.95993 80.097 0.791153 81.3774 0.794986H82.112V5.92232H80.4518C79.0561 5.92232 78.0239 6.25926 77.3481 6.92948C76.6722 7.59969 76.338 8.65812 76.338 10.0974V19.9419H71.2692Z" fill="white"/>
                <path d="M82.6006 20.6027C82.323 20.6035 82.0513 20.522 81.8201 20.3687C81.5889 20.2155 81.4085 19.9972 81.3017 19.7416C81.195 19.4861 81.1666 19.2047 81.2204 18.933C81.2741 18.6614 81.4074 18.4118 81.6035 18.2158C81.7996 18.0197 82.0496 17.8861 82.3219 17.8318C82.5941 17.7776 82.8765 17.8051 83.1331 17.9108C83.3897 18.0166 83.609 18.1959 83.7633 18.4261C83.9177 18.6562 84.0001 18.9269 84.0001 19.2037C84.0006 19.3873 83.9647 19.5691 83.8946 19.7388C83.8245 19.9085 83.7215 20.0628 83.5915 20.1928C83.4615 20.3227 83.3071 20.4258 83.137 20.4962C82.967 20.5665 82.7847 20.6027 82.6006 20.6027ZM82.6006 18.1233C82.3813 18.116 82.1647 18.1742 81.9788 18.2904C81.7928 18.4066 81.6458 18.5756 81.5568 18.7756C81.4677 18.9756 81.4406 19.1976 81.4789 19.413C81.5171 19.6285 81.6191 19.8277 81.7716 19.985C81.9242 20.1424 82.1204 20.2507 82.3351 20.2962C82.5498 20.3416 82.7732 20.3221 82.9767 20.2401C83.1802 20.1582 83.3545 20.0175 83.4773 19.8361C83.6 19.6547 83.6657 19.4409 83.6658 19.222C83.6723 19.0791 83.6495 18.9364 83.5988 18.8026C83.548 18.6687 83.4704 18.5467 83.3707 18.4438C83.271 18.3409 83.1512 18.2595 83.0188 18.2044C82.8864 18.1492 82.7441 18.1217 82.6006 18.1233ZM82.8504 19.9545L82.5786 19.3795H82.4207V19.9545H82.0901V18.4603H82.6961C82.7599 18.4573 82.8236 18.4672 82.8834 18.4894C82.9432 18.5116 82.9979 18.5456 83.0442 18.5893C83.0905 18.6331 83.1275 18.6858 83.1529 18.7442C83.1783 18.8025 83.1916 18.8654 83.192 18.929C83.1914 19.0145 83.1647 19.0978 83.1155 19.1678C83.0663 19.2378 82.9969 19.2912 82.9165 19.3209L83.2287 19.9472L82.8504 19.9545ZM82.6557 18.7349H82.4243V19.1195H82.6557C82.6833 19.1233 82.7113 19.1211 82.738 19.1132C82.7647 19.1053 82.7893 19.0918 82.8103 19.0736C82.8313 19.0553 82.8481 19.0328 82.8596 19.0076C82.8711 18.9824 82.8771 18.9549 82.8771 18.9272C82.8771 18.8995 82.8711 18.8721 82.8596 18.8468C82.8481 18.8216 82.8313 18.7991 82.8103 18.7808C82.7893 18.7626 82.7647 18.7491 82.738 18.7412C82.7113 18.7333 82.6833 18.7311 82.6557 18.7349Z" fill="white"/>
                </svg>
            </a>
                <!-- language -->
                <button type="button" data-dropdown-toggle="language-dropdown-menu" class="inline-flex py-1 text-white cursor-pointer lg:w-[18px] md:w-[14px]">
                    IT
                </button>        
            </div>
        </div>
    </header>

    <div class="desk-show">
        <div  class="relative text-center mx-0  ">
                <img class="w-full" src="<?php echo get_img('mainImage-landingpage.jpg');?>">
            <div id="relat"  class="margAuto absolute inset-y-1.5 right-2.5 text-main-img">
                <p id="fonti" class="main-txt 2xl:text-5xl text-4xl  mt-16 mr-20 2xl:text-center 2xl:w-auto text-main-color font-DM-SERIF font-normal">For those about to Roar,<br> We salute you!</p>
                <p class="font-normal mr-20 2xl:text-xl text-xl leading-9 mt-11   text-center w-auto font-arimo">AUDACIA,VERSATILITÀ, ELEGANZA</p>
                <p id="textSizeP" class=" font-normal margin-top-mainText 2xl:mr-44 mr-28  font-arimo 2xl:text-lg text-center leading-7 max-w-xs ml-auto">
                L’istante in cui nasce Roar® è quando prendono forma la possibilità di un cambio di paradigma nel mondo del beauty e del concetto stesso di cosmetico. Roar® raccoglie la sfida di ridefinire i concetti di “Beauty Routine” consapevole della propria identità.
                <div  id="textSizeP1"  class="italic font-normal margin-top-mainText 2xl:mr-44  mr-28  font-arimo 2xl:text-lg text-center leading-7 max-w-xs ml-auto"><br>Inclusivi, unici e non convenzionali
                    Siamo minimalismo Siamo razionalità  Siamo innovazione tecnologica senza compromessi
                </div>
                <p id="textSizeP" class="italic font-normal margin-top-mainText 2xl:mr-44  mr-28   font-arimo 2xl:text-lg text-center leading-7 max-w-xs ml-auto"> Il nostro “ruggito” ha l’attitudine d’infrangere lo status quo.</p><br>
                    <p  id="textSizeP" class="text-white font-normal margin-top-mainText 2xl:mr-44  mr-28  font-arimo 2xl:text-lg text-center leading-7 max-w-xs ml-auto underline" >
                        <a href="#godown">unisciti alla rivoluzione></a>
</p>
                </p>
            </div>
        </div>
        <div id="disBlo" class="flex justify-between">
            <div id="respTextSec" class=" pl-24 w-full pt-44">
                <p class="font-DM-SERIF font-normal text-4xl leading-10 mb-6 font-color-text">#Redonism</p>
                <p class="hidd font-color-text font-arimo font-normal text-2xl">Chiamami<span class="text-red-500"> Redonism </span>se hai  <br>l’impertinenzadi pronunciare il<br> mio nome. Sono arrogante e<br> sfrontato. Indossami, ruggisci <br>e il tuo sguardo non sarà più il<br> solo a voler catturare <br>quell’immagine riflessa nelle <br>vetrine.
                <p class="hiiddd font-color-text font-arimo font-normal text-2xl">Chiamami<span class="text-red-500"> Redonism </span>se hai l’impertinenzadi pronunciare il mio nome. Sono arrogante e sfrontato. Indossami, ruggisci e il tuo sguardo non sarà più il solo a voler catturare quell’immagine riflessa nelle vetrine.
                </p>
            </div>
            <div class="hidd w-full pt-14 pr-10">
                <img class="secImg m-auto ml-20" src="<?php echo get_img('secondImg-HomeLP.jpg');?>">
            </div>
            <div class=" hidd w-full pt-24">
                <p class="text-main-color text-5xl pr-28 font-DM-SERIF font-normal leading-10 text-center">Roar As You Are</p>
                <p class="font-arimo font-normal text-2xl pr-28 text-center mt-14 w-fit">OSERAI MORDERE LA “MELA” DELLA BELLEZZA?</p>
                <p class="pr-28 mt-11 font-arimo text-center text-lg font-normal">Utilizzami in totale sicurezza e senza limiti su occhi, guance o labbra. Ti prometto versatilità mai sperimentata prima e libertà di creare i look che più desideri. Scoprirai cosa significa non avere più bisogno d’altro. Il Connected Pack' ti garantirà un’esperienza utente—prodotto personalizzata.</p>
            </div>
            <div id="hiidde" class="flex w-full">
                <div class="w-fit pt-14 2xl:pr-10 xl:pr-10 pr-0 sm:w-auto sm:m-auto m-auto">
                <img class=" secImg m-auto 2xl:ml-20 xl:ml-20 lg:ml-20 " src="<?php echo get_img('secondImg-HomeLP.jpg');?>">
                </div>
                <div id="roar-text" class=" m-auto w-96">
                    <p  id="roar-text2"  class="text-main-color text-5xl 2xl:pr-28 xl:pr-28 pr-0 font-DM-SERIF font-normal leading-10 text-left">Roar As You Are</p>
                    <p class="font-arimo font-normal text-2xl text-left mt-14 w-auto">OSERAI MORDERE LA “MELA” DELLA BELLEZZA?</p>
                    <p class="mx-auto	 mt-11 font-arimo text-left text-lg font-normal">Utilizzami in totale sicurezza e senza limiti su occhi, guance o labbra. Ti prometto versatilità mai sperimentata prima e libertà di creare i look che più desideri. Scoprirai cosa significa non avere più bisogno d’altro. Il Connected Pack' ti garantirà un’esperienza utente—prodotto personalizzata.</p>
                </div>
            </div>
        </div>
        <div class="relative text-center mx-0">
                <img class="w-full" src="<?php echo get_img('thirdImg-HomeLP.png');?>">
            <div class="2xl:absolute xl:absolute relative  2xl:top-36 xl:top-12 top-0 2xl:ml-40 xl:ml-10 ml-0 2xl:mb-0 xl:mb-0 my-10 px-10 text-main-img">
                <p class="2xl:text-white xl:text-white text-black text-center font-DM-SERIF text-5xl">AM/PM</p> 
                <p class="font-arimo font-normal text-2xl text-center mt-14 w-auto">UNA QUESTIONE DI AGILITÀ</p>
                <p class=" 2xl:mt-14 lg:mt-10 font-arimo text-center 2xl:text-lg text-lg font-normal">
                Sveliamo AM-PM (Agile Multi-Purpose Makeup): una <br>texture unica “Cream-to-Powder”—da crema a <br>polvere—rivoluzionaria, multiuso e a lunga tenuta che <br>si adatta a tutti i tipi di pelle, etnie ed età.
                <br><br><br><br><b class="mt-10">Makeup Agile Multi-Funzionale</b><br>
                Rossetto • Blush •  Illuminante • Contour<br>
                Ombretto • Eyeliner •  Sopracciglia<br>

                </p>
            </div>
        </div>
        <div style="background-image: url('<?php  echo get_img('fourthImg-HomeLP.jpg');?>');" class="bg-cover relative text-center 2xl:mx-0 sm:mx-0 ">
            
             <div class="w-fit p-10 2xl:top-14 sm:top-10 -top-2 2xl:ml-40 ml-10   text-main-img">
                <p class="text-white text-center font-DM-SERIF 2xl:text-5xl text-4xl">Blue Beauty</p> 
                <p class="font-arimo text-white 2xl:text-lg md:text-sm text-center 2xl:mt-7 md:mt-0 w-auto"><b>Arricchito con estratto</b><br> di Himanthalia Elongata (Alga marina oceanica)</p>
            </div>
        </div>
        <div style="background: #1E1E1E;">
            <div class="pt-20 text-center font-DM-SERIF main-text-discovery text-5xl font-normal">
                TODAY’S HITS
            </div>
             <p class="text-center text-white text-2xl leading-9 pt-3.5 font-arimo ">8 — 24 MASTER PIECES</p>
            <div class="relative mt-14 mb-28  text-center">
            <div>
            <img  src="<?php echo get_img('storeImg-homeLP.jpg');?>">
            </div>
            <div class="mt-16">
                <p class="text-white font-arimo text-center text-2xl">MODULABILI COME MAI PRIMA D’ORA </p>
                <p class="text-white font-arimo text-center text-lg	font-bold mt-7">COLORE avvolgente, passando<br> da vibrante fino a profondo <br>COPERTURA modulabile, da naturale <br>a intenso e da leggero a luminoso 
                   <div class="text-main-color italic text-lg py-20 underline"><a href="#godown">Rimani Sintonizzato ></a> </div> </p>
            </div>
            </div>  
        </div>
        <div>
            <div class="2xl:pt-10 text-center font-DM-SERIF main-text-discovery text-5xl font-normal">
                Rock’n’Roar Playlist
            </div>
            <p class="text-center  font-medium text-2xl leading-9 pt-3.5 font-arimo ">BEST OF TOP OF THE POPS</p>
            <div class="2xl:mx-36 xl:mx-36 md:mx-16 mx-2 grid 2xl:grid-cols-5 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-3 grid-cols-2 2xl:px-20 md:px-20 px-2 gap-4 justify-around mt-12">
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Nothing Compares 2 Nude</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('nudeColor.jpg');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V530w</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Whole Lotta Rose</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('roseColor.jpg');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V120w</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Blushin’ with the Devil</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('devilColor.jpg');?>">                     
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V150w</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Crazy Little Thing Called Rose</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('crazyColor.jpg');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V140w</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Roller Lobster</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('lobsterColor.jpg');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V210w</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Redspect</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('RedspectColor.jpg');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V310c</b><br>Effetto Velvet</p>
                </div>
                
                <div>
                    <p class=" playlist-pops font-DM-SERIF text-center">I Just Can’t Red Enough</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('redColor.jpg');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V320w</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class=" playlist-pops font-DM-SERIF text-center">Redonism</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('RedonismColor.jpg');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V130c</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">I Shot the Cherry</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('CherryColor.jpg');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V410w</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Master of Purples</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('purpleColor.jpg');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V430c</b><br>Effetto Velvet</p>
                </div>
                <span id="dots2"></span>
                <span id="more2">

                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Crimson Callin’</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('img11.png');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V420c</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Smooth Caramel</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('img12.png');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V510w</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Gimme Some Toffee</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('img13.png');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V550c</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Sweet Choco O’ Mine</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('img14.png');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V570w</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Brownie Be Good</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('img15.png');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V580c</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Wish You Were Green</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('img16.png');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V710w</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Blue Are You</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('img17.png');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V810c</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Should I Grey or Should I Ooh</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('img18.png');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V050w</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Black for Good</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('img19.png');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V000c</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Are You Gonna Be My Pearl</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('img20.png');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>SH910c</b><br>Effetto Iridescente – Metallico</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Bright Here, Bright Now</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('img21.png');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>SH950w</b><br>Effetto Iridescente – Metallico</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Gold Save the Queen</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('img22.png');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>SH610w</b><br>Effetto Iridescente – Metallico</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Tangerine Rhapsody</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('img23.png');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>SH210w</b><br>Effetto Iridescente – Metallico</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Go Baby Glow</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('img24.png');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>SH110c</b><br>Effetto Iridescente – Metallico</p>
                </div>
                </span>
            </div>
            <div class="text-center mt-5">
                <button onclick="myFunction(2)" id="myBtn2"><img src="<?php echo get_img('arrow1.png');?>" alt=""></button>
            </div>
        </div>
        <div class="mt-20" style="background: linear-gradient(0deg, rgba(156, 152, 131, 0.08), rgba(156, 152, 131, 0.08)), #FFFFFF;">
             <div class="2xl:pt-20 text-center font-color-text font-DM-SERIF main-text-discovery text-5xl font-normal">
             Roadies
            </div>
            <p class="text-center  font-normal text-2xl leading-9 pt-3.5 font-arimo ">I MAGNIFICI QUATTRO</p>
            <p class="font-arimo font-normal text-center text-lg my-14">
                Nel backstage si vocifera di Glam rock, Funk, Grunge e Punk rock… <br>
                Maestri nel cogliere le più impercettibili sfumature e i precisi dettagli stilistici di ogni singolo ruggito. <br>
                I critici li paragonano ai “fab four”, la crew perfetta per dar voce alla tua identità.<br>
            </p>
            <div class="mx-auto w-fit">
            <img  src="<?php echo get_img('roadies.png');?>">
            </div>
        </div>
        <div class=" grid 2xl:grid-cols-2 lg:grid-cols-1 gap-4 justify-around "  style="background: linear-gradient(0deg, rgba(156, 152, 131, 0.08), rgba(156, 152, 131, 0.08)), #FFFFFF;">
            <div>
            <img  src="<?php echo get_img('iphone.png');?>">
            </div>
            <div>
                <div class="2xl:pt-20 mx-auto text-center font-DM-SERIF main-text-discovery text-5xl font-normal">
                    Roar iD
                </div>
                <p class="text-center  font-normal text-2xl leading-9 pt-3.5 font-arimo ">ESPANDI LA PORTATA DEI TUOI MAKEUP LOOKS</p>
                <p class="w-96 mx-auto font-arimo font-normal text-center text-lg my-14">Il Connected Pack garantisce la tracciabilità della filiera, l'integrità prodotto tramite ePAO (Electronic Period After Opening), in modo semplice e immediato fornisce informazioni sulle referenze, consigli personalizzati, aggiornamenti e ispirazioni per l’utilizzo dei prodotti Rock'n'Roar.</p>
                <div class="mx-auto w-fit">
            <img  src="<?php echo get_img('roarID.png');?>">
                </div>
            </div>
        </div>
        <div id="godown" class="relative text-center 2xl:mx-0 sm:mx-0 mx-8">
            <div  style="background-image: url('<?php  echo get_img('patternBg.png');?>');"class=" m-auto py-20 bg-cover top-16  text-main-img">
                <div class="marginn-l">
                <div class="float-left  mx-auto text-center font-DM-SERIF main-text-discovery text-5xl font-normal">
                     Pronti a Ruggire?
                     <span class="text-black"><br>Registrati</span>
                </div><br>
                <form class="mb-auto pl-4 mt-36 pr-8" id="contact_form">
                <div class="mt-6 w-fit 2xl:mt-12 xl:mt-12 lg:mt-12 md:mt-12 sm:mt-12">
                    <label class="float-left text-black" for="name">Nome</label><br>
                    <input class="bg-transparent mt-4 pb-2 pl-2.5 underline-form1" type="text" id="first_name"  placeholder="Metti il ​​tuo nome" requried>
                    <div class="error text-red-500 text-left text-sm"></div>
                </div>
                <div class="mt-6 w-fit 2xl:mt-12 xl:mt-12 lg:mt-12 md:mt-12 sm:mt-12">
                    <label class="float-left text-black" for="name">Cognome</label><br>
                    <input class="bg-transparent mt-4 pb-2 pl-2.5 underline-form1" type="text" id="last_name"  placeholder="Metti il ​​tuo cognome" requried>
                    <div class="error text-red-500 text-left text-sm"></div>
                </div>
                <div class="mt-8 w-fit">
                    <label class="float-left text-black" for="E-mail">E-mail</label><br>
                    <input class="bg-transparent mt-4 pb-2 pl-2.5 underline-form1" type="text" id="email"  placeholder="Metti la tua email" requried>
                    <div class="error text-red-500 text-left text-sm"></div>
                </div>
                <div class="mt-10">
                    <div class="round">
                        <input type="checkbox" id="privacy"/>
                        <label for="privacy"></label>
                    </div>
                    <div class="ml-10 w-5/12 -mt-3 text-left">
                    <label for="privacy">Accetto di ricevere informazioni via e-mail su offerte, servizi, prodotti ed eventi di Roar Cosmetics, in conformità con la nostra Informativa sulla privacy.</label>
                    <div class="error text-red-500 text-left text-sm"></div>
                </div>
                <div class="g-recaptcha mt-4 pb-2 ml-10" data-sitekey="<?php echo $siteKey; ?>"></div><script src='https://www.google.com/recaptcha/api.js?hl=fa'></script>
                </div>
            </div>
                <div class="mt-20 w-fit mx-auto ">
                    <button class="rounded-md bg-black gap-3 font-normal w-44 font-bold text-base text-white uppercase p-4 text-center button-form-contact " id="nextStep">invia</button>
                </div>
            </form>
            </div>
        </div>
</div>
<div class="mobile-show">
        <div class="relataive text-center mx-0  ">
            <img class="w-full" src="<?php echo get_img('MobImg1.png');?>">
            <div class="absolute inset-y-1.5 right-2.5 text-main-img">
                <p  class="text-3xl mobile-top text-main-color font-DM-SERIF font-normal text-align-center">For those about to Roar,<br> We salute you!</p>
                <p class="font-normal mt-5 text-base leading-6 text-center  font-arimo">AUDACIA,VERSATILITÀ, ELEGANZA</p>
                <p class="mx-16	">
                    L’istante in cui nasce Roar® è quando prendono forma la possibilità di un cambio di paradigma nel mondo del beauty e del concetto stesso di cosmetico. Roar® raccoglie la sfida di ridefinire i concetti di “Beauty Routine”.<br>
                    Il nostro “ruggito” ha l’attitudine d’infrangere lo<span class="italic"> status quo.</span>
                    <br>
                    <p class="mrTop underline text-white"><a href="#godown2">unisciti alla rivoluzione></a></p>
                </p>
            </div>
        </div>
        <div id="disBlo" class="flex justify-between">
                <div class=" m-auto">
                    <p class="text-main-color mt-10 text-3xl font-DM-SERIF font-normal leading-10 text-center">Roar As You Are</p>
                    <p class="font-arimo font-normal text-base text-center mt-4 mx-8">OSERAI MORDERE LA “MELA” DELLA BELLEZZA?</p>
                    <p class="mx-16 mt-8 font-arimo text-center text-base	font-normal">Utilizzami in totale sicurezza e senza limiti su occhi, guance o labbra. Ti prometto versatilità mai sperimentata prima e libertà di creare i look che più desideri. Scoprirai cosa significa non avere più bisogno d’altro. Il Connected Pack' ti garantirà un’esperienza utente—prodotto personalizzata.</p>
                </div>
                <div class=" w-full pt-14">
                    <img class=" m-auto" src="<?php echo get_img('secondImg-HomeLP.jpg');?>">
                </div>
                <div id="respTextSec1" class="mb-20 pl-24 w-full pt-44">
                    <p class="font-DM-SERIF font-normal text-3xl leading-10 font-color-text">#Redonism</p>
                    <p class="font-color-text mt-10">Chiamami<span class="text-main-color"> Redonism </span>se hai l’impertinenza di pronunciare il mio nome. Sono arrogante e sfrontato. Indossami, ruggisci e il tuo sguardo non sarà più il solo a voler catturare quell’immagine riflessa nelle vetrine.</p>
                </div>
        </div> 
        <div class=" text-center mx-0">
            <div style="background-color:#BCB59E;" class="-mb-1 pt-20 px-10 text-main-img">
                <p class="mx-16  text-black text-center font-DM-SERIF text-5xl">AM/PM</p> 
                <p class="mx-16 font-arimo font-normal text-2xl text-center w-auto">UNA QUESTIONE DI AGILITÀ</p>
                 <p class="mx-16 pb-5">
                 Sveliamo AM-PM (Agile Multi-Purpose Makeup): una texture unica “Cream-to-Powder”—da crema a polvere—rivoluzionaria, multiuso e a lunga tenuta che si adatta a tutti i tipi di pelle, etnie ed età.
                   <br><br> <b>Makeup Agile Multi-Funzionale</b><br>
                    Rossetto • Blush • Illuminante • Contour<br>
                    Ombretto • Eyeliner • Sopracciglia <br>
                 </p>
            </div>
                <img class="w-full -mt-0.5" src="<?php echo get_img('MobImg3.png');?>">
        </div>
        <div style="background-image: url('<?php  echo get_img('MobImg4.png');?>');" class="bg-cover relative text-center 2xl:mx-0 sm:mx-0 ">
            
             <div class="w-fit p-10 2xl:top-14 sm:top-10 -top-2 2xl:ml-40 ml-10   text-main-img">
                <p class="text-white text-left font-DM-SERIF text-3xl">Blue Beauty</p> 
                <p class="font-arimo text-white text-base text-start  w-60	"><b>Arricchito con estratto</b><br> di Himanthalia Elongata (Alga marina oceanica)</p>
            </div>
        </div>
        <div style="background: #1E1E1E;">
            <div class="pt-20 text-center font-DM-SERIF main-text-discovery text-5xl font-normal">
                TODAY’S HITS
            </div>
             <p class="text-center text-white text-2xl leading-9 pt-3.5 font-arimo ">8 — 24 MASTER PIECES</p>
            <div class="relative mt-14 mb-28  text-center">
            <div>
                <div class="mx-2 grid grid-cols-2 px-2 gap-4">
                <img class="h-full" src="<?php echo get_img('Product1.png');?>">
                <img class="h-full" src="<?php echo get_img('Product2.png');?>">
                <img class="h-full" src="<?php echo get_img('Product3.png');?>">
                <img class="h-full" src="<?php echo get_img('Product4.png');?>">
                <img class="h-full" src="<?php echo get_img('Product5.png');?>">
                <img class="h-full" src="<?php echo get_img('Product6.png');?>">
                <img class="h-full" src="<?php echo get_img('Product7.png');?>">
                <img class="h-full" src="<?php echo get_img('Product8.png');?>">
            
                </div>
            </div>
            <div class="mt-20">
                <p class="text-white font-arimo text-center text-2xl">MODULABILI COME MAI PRIMA D’ORA </p>
                <p class="text-white font-arimo text-center text-lg	font-bold mt-7">COLORE avvolgente, passando<br> da vibrante fino a profondo <br>COPERTURA modulabile, da naturale <br>a intenso e da leggero a luminoso 
                   <div class="text-main-color italic text-lg py-20 underline"><a href="#godown2">Rimani Sintonizzato ></a> </div> </p>
            </div>
            </div>  
        </div>
        <div>
            <div class="2xl:pt-10 text-center font-DM-SERIF main-text-discovery text-5xl font-normal">
                Rock’n’Roar Playlist
            </div>
            <p class="text-center  font-medium text-2xl leading-9 pt-3.5 font-arimo ">BEST OF TOP OF THE POPS</p>
            <div class=" mx-2 grid grid-cols-3 px-2 gap-4 justify-around mt-12">
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Nothing Compares 2 Nude</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('nudeColor.jpg');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V530w</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Whole Lotta Rose</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('roseColor.jpg');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V120w</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Blushin’ with the Devil</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('devilColor.jpg');?>">                     
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V150w</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Crazy Little Thing Called Rose</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('crazyColor.jpg');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V140w</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Roller Lobster</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('lobsterColor.jpg');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V210w</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Redspect</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('RedspectColor.jpg');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V310c</b><br>Effetto Velvet</p>
                </div>
                <span id="dots1"></span>
                <span id="more1">
                <div>
                    <p class=" playlist-pops font-DM-SERIF text-center">I Just Can’t Red Enough</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('redColor.jpg');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V320w</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class=" playlist-pops font-DM-SERIF text-center">Redonism</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('RedonismColor.jpg');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V130c</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">I Shot the Cherry</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('CherryColor.jpg');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V410w</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Master of Purples</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('purpleColor.jpg');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V430c</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Crimson Callin’</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('img11.png');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V420c</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Smooth Caramel</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('img12.png');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V510w</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Gimme Some Toffee</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('img13.png');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V550c</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Sweet Choco O’ Mine</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('img14.png');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V570w</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Brownie Be Good</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('img15.png');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V580c</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Wish You Were Green</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('img16.png');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V710w</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Blue Are You</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('img17.png');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V810c</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Should I Grey or Should I Ooh</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('img18.png');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V050w</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Black for Good</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('img19.png');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>V000c</b><br>Effetto Velvet</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Are You Gonna Be My Pearl</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('img20.png');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>SH910c</b><br>Effetto Iridescente – Metallico</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Bright Here, Bright Now</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('img21.png');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>SH950w</b><br>Effetto Iridescente – Metallico</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Gold Save the Queen</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('img22.png');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>SH610w</b><br>Effetto Iridescente – Metallico</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Tangerine Rhapsody</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('img23.png');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>SH210w</b><br>Effetto Iridescente – Metallico</p>
                </div>
                <div>
                    <p class="playlist-pops font-DM-SERIF text-center">Go Baby Glow</p>
                    <div class="mx-auto w-fit">
                     <img  src="<?php echo get_img('img24.png');?>">
                    </div>
                    <p class="font-arimo text-lg leading-5 text-center"><b>SH110c</b><br>Effetto Iridescente – Metallico</p>
                </div>
                </span>
            </div>
            <div class="text-center mt-5">
                <button onclick="myFunction(1)" id="myBtn1"><img src="<?php echo get_img('arrow1.png');?>" alt=""></button>
            </div>
        </div>
         <div class="mt-20" style="background: linear-gradient(0deg, rgba(156, 152, 131, 0.08), rgba(156, 152, 131, 0.08)), #FFFFFF;">
             <div class="pt-14 text-center font-color-text font-DM-SERIF main-text-discovery text-5xl font-normal">
             Roadies
            </div>
            <p class="text-center  font-normal text-2xl leading-9 mt-14 font-arimo ">I MAGNIFICI QUATTRO</p>
            <p class="font-arimo font-normal mx-14 text-center text-lg my-14">
                Nel backstage si vocifera di Glam rock, Funk, Grunge e Punk rock… 
                Maestri nel cogliere le più impercettibili sfumature e i precisi dettagli stilistici di ogni singolo ruggito. 
                I critici li paragonano ai “fab four”, la crew perfetta per dar voce alla tua identità.
            </p>
            <div class="mx-auto w-fit">
            <img  src="<?php echo get_img('roadies.png');?>">
            </div>
        </div>
        <div class=" grid 2xl:grid-cols-2 lg:grid-cols-1 gap-4 justify-around "  style="background: linear-gradient(0deg, rgba(156, 152, 131, 0.08), rgba(156, 152, 131, 0.08)), #FFFFFF;">
         
            <div class="pt-20 text-black mx-auto text-center font-DM-SERIF main-text-discovery text-3xl font-normal">
                        Roar iD
            </div>
            <p class="text-center text-black font-bold font-normal text-base leading-9 mt-10 font-arimo ">ESPANDI I TUOI MAKEUP LOOKS</p>
            <p class=" mx-auto text-black font-arimo font-normal text-center text-base px-5 my-5">Il Connected Pack garantisce la tracciabilità della filiera, l'integrità prodotto tramite ePAO (Electronic Period After Opening), in modo semplice e immediato fornisce informazioni sulle referenze, consigli personalizzati, aggiornamenti e ispirazioni per l’utilizzo dei prodotti Rock'n'Roar.</p> 
            <div class="-mt-10">
                <img  src="<?php echo get_img('MobPhone.png');?>">
            </div> 
            <div class="mx-auto w-fit">
                    <img class="w-60" src="<?php echo get_img('MobImg5.png');?>">
            </div> 
        </div> 
        <div id="godown2" class="relative text-center  ">
            <div  style="background-image: url('<?php  echo get_img('MobBg.png');?>');"class=" m-auto py-20 bg-cover top-16  text-main-img">
                <div >
                <div class="float-center mx-auto text-center font-DM-SERIF main-text-discovery text-5xl font-normal">
                     Pronti a Ruggire?
                     <span class="text-black"><br>Registrati</span>
                </div><br>
                <form class="mb-auto ml-5  mt-6 pr-8" id="contact_form">
                <div class="mt-6 w-fit 2xl:mt-12 xl:mt-12 lg:mt-12 md:mt-12 sm:mt-12">
                    <label class="float-left text-black" for="name">Nome</label><br>
                    <input class="bg-transparent pb-2 pl-2.5 underline-form1" type="text" id="first_name"  placeholder="Lorem ipsum" requried>
                    <div class="error text-red-500 text-left text-sm"></div>
                </div>
                <div class="mt-6 w-fit 2xl:mt-12 xl:mt-12 lg:mt-12 md:mt-12 sm:mt-12">
                    <label class="float-left text-black" for="name">Cognome</label><br>
                    <input class="bg-transparent pb-2 pl-2.5 underline-form1" type="text" id="last_name"  placeholder="Lorem ipsum" requried>
                    <div class="error text-red-500 text-left text-sm"></div>
                </div>
                <div class="mt-8 w-fit">
                    <label class="float-left text-black" for="E-mail">E-mail</label><br>
                    <input class="bg-transparent pb-2 pl-2.5 underline-form1" type="text" id="email"  placeholder="Lorem ipsum" requried>
                    <div class="error text-red-500 text-left text-sm"></div>
                </div>
                <div class="mt-10">
                    <div class="round">
                        <input type="checkbox" id="privacy"/>
                        <label for="privacy"></label>
                    </div>
                    <div class="ml-10 w-fit -mt-3 text-left">
                    <label for="privacy">Accetto di ricevere informazioni via e-mail su offerte, servizi, prodotti ed eventi di Roar Cosmetics, in conformità con la nostra Informativa sulla privacy.</label>
                    <div class="error text-red-500 text-left text-sm"></div>
                </div>
                <div class="g-recaptcha mt-4 pb-2 " data-sitekey="<?php echo $siteKey; ?>"></div><script src='https://www.google.com/recaptcha/api.js?hl=fa'></script>
                </div>
            </div>
                <div class="mt-20 w-fit mx-auto ">
                    <button class="rounded-md bg-black gap-3 font-normal w-44 font-bold text-base text-white uppercase p-4 text-center button-form-contact " id="nextStep">invia</button>
                </div>
            </form>
            </div>
        </div>
</div>
    <div class=" flex items-center justify-center">
        <!--Modal-->
        <div class=" modal fixed z-30  opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
            <div class="modal-overlay absolute w-full h-full bg-black opacity-80 h-screen"></div>
            <div class="modal-container z-30 bg-white md:max-w-xs mx-auto rounded shadow-lg z-50 overflow-y-auto">
            <!-- Add margin if you want to see some of the overlay behind the modal-->
            <div class="modal-content">
                <div class=" pt-4 pl-14">  
                <div class="modal-close cursor-pointer z-50 float-right mr-3">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                    </svg>
                </div>
                <p class="modal-main-text text-2xl font-normal pt-5 pr-14 text-center">Grazie per averci contattato</p>
            </div>
                <!--Body-->
                <p class="text-center text-sm px-12 mt-0.5" style="font-family:'Arimo';">Al massimo entro 48 risponderemo al tuo messaggio</p>
                <!--Footer-->
                <div class="flex pt-7 pb-9 ">
                    <button class="mx-auto p-4 bg-black rounded-md text-white font-bold tracking-widest" style="width:232px;">Scopri Roar iD</button>
                </div>
            </div>
        </div>
    </div>
    <footer class="mx-0.5 w-fit mt-20">
        <div class="overflow-x-auto relative" >
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <tbody>
                    <tr class="container border-b dark:bg-gray-800 dark:border-gray-700">
                        <th id="th" scope="row" class="py-4 whitespace-nowrap dark:text-white">
                            <div id="toggle-textFooter1"  class="hidden mt-3 whitespace-pre-wrap w-4/5 2xl:w-4/5 xl:w-4/5 lg:w-4/5 md:w-4/5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sem morbi non nunc, pellentesque nec. Vitae orci, in adipiscing sed integer est. Sed duis habitant mauris sit risus neque ut ut. Eget risus lectus venenatis facilisis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sem morbi non nunc, pellentesque nec.
                            </div>
                            
                        </th>
                    </tr>
                    <tr class="border-none border-inherit" >
                        <th id="th" scope="row" class="text-black pt-20 py-4 whitespace-nowrap dark:text-white">
                        Italia
                        </th>
                    </tr>
                    <tr class="border-none border-b-none border-inherit 2xl:flex xl:flex/ lg:flex grid 2xl:justify-between xl:justify-between lg:justify-between whitespace-normal">
                        <div>
                            <th id="th" scope="row" class="pt-3 py-4 whitespace-nowrap dark:text-white">
                            Copyright © 2022 Roar Europe Ltd. Tutti i diritti riservati.<br>
                            <span class="text-black"> Norme sulla privacy  |  Utilizzo dei cookie <br>
                            Condizioni dʼuso |  Vendite e rimborsi </span>  <br>
                            Designed by Think Djungle <br>
                            </th>
                        </div>
                        <div>
                            <th id="th" scope="row" class="pt-3 py-4 whitespace-nowrap dark:text-white">
                            <div class="flex mx-auto mt-6 space-x-5  justify-center">
                                <a href="https://www.instagram.com/roar.cosmetics/?hl=it" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                                <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.51675 0.0627C7.6311 0.0114 7.9864 0 10.825 0C13.6636 0 14.0189 0.01235 15.1323 0.0627C16.2457 0.11305 17.0057 0.2907 17.6707 0.54815C18.367 0.8113 18.9988 1.22265 19.5213 1.75465C20.0533 2.2762 20.4637 2.907 20.7259 3.6043C20.9843 4.2693 21.161 5.0293 21.2123 6.1408C21.2636 7.25705 21.275 7.61235 21.275 10.45C21.275 13.2886 21.2626 13.6439 21.2123 14.7582C21.1619 15.8697 20.9843 16.6297 20.7259 17.2947C20.4637 17.9921 20.0526 18.624 19.5213 19.1463C18.9988 19.6783 18.367 20.0887 17.6707 20.3509C17.0057 20.6093 16.2457 20.786 15.1342 20.8373C14.0189 20.8886 13.6636 20.9 10.825 20.9C7.9864 20.9 7.6311 20.8876 6.51675 20.8373C5.40525 20.7869 4.64525 20.6093 3.98025 20.3509C3.28287 20.0887 2.65103 19.6776 2.1287 19.1463C1.59706 18.6244 1.18565 17.9929 0.92315 17.2957C0.6657 16.6307 0.489 15.8707 0.4377 14.7592C0.3864 13.6429 0.375 13.2876 0.375 10.45C0.375 7.6114 0.38735 7.2561 0.4377 6.1427C0.48805 5.0293 0.6657 4.2693 0.92315 3.6043C1.18604 2.90708 1.59776 2.27555 2.12965 1.7537C2.65124 1.22218 3.28245 0.810771 3.9793 0.54815C4.6443 0.2907 5.4043 0.114 6.5158 0.0627H6.51675ZM15.0477 1.9437C13.9457 1.89335 13.6151 1.8829 10.825 1.8829C8.03485 1.8829 7.70425 1.89335 6.60225 1.9437C5.5829 1.99025 5.03 2.1603 4.6614 2.30375C4.17405 2.49375 3.8254 2.7189 3.45965 3.08465C3.11294 3.42195 2.84612 3.83257 2.67875 4.2864C2.5353 4.655 2.36525 5.2079 2.3187 6.22725C2.26835 7.32925 2.2579 7.65985 2.2579 10.45C2.2579 13.2401 2.26835 13.5707 2.3187 14.6727C2.36525 15.6921 2.5353 16.245 2.67875 16.6136C2.84595 17.0668 3.1129 17.4781 3.45965 17.8154C3.7969 18.1621 4.20825 18.4291 4.6614 18.5963C5.03 18.7397 5.5829 18.9098 6.60225 18.9563C7.70425 19.0067 8.0339 19.0171 10.825 19.0171C13.6161 19.0171 13.9457 19.0067 15.0477 18.9563C16.0671 18.9098 16.62 18.7397 16.9886 18.5963C17.476 18.4063 17.8246 18.1811 18.1904 17.8154C18.5371 17.4781 18.8041 17.0668 18.9713 16.6136C19.1147 16.245 19.2848 15.6921 19.3313 14.6727C19.3817 13.5707 19.3921 13.2401 19.3921 10.45C19.3921 7.65985 19.3817 7.32925 19.3313 6.22725C19.2848 5.2079 19.1147 4.655 18.9713 4.2864C18.7813 3.79905 18.5561 3.4504 18.1904 3.08465C17.853 2.73797 17.4424 2.47115 16.9886 2.30375C16.62 2.1603 16.0671 1.99025 15.0477 1.9437V1.9437ZM9.49025 13.6714C10.2357 13.9817 11.0657 14.0236 11.8386 13.7899C12.6115 13.5562 13.2792 13.0615 13.7278 12.3901C14.1764 11.7188 14.3781 10.9125 14.2982 10.109C14.2184 9.30557 13.8622 8.55472 13.2903 7.98475C12.9257 7.6204 12.4849 7.34142 11.9995 7.16789C11.5142 6.99436 10.9964 6.93059 10.4835 6.98118C9.97053 7.03178 9.47519 7.19547 9.03311 7.46047C8.59103 7.72548 8.21321 8.08521 7.92684 8.51376C7.64047 8.94231 7.45268 9.42902 7.37699 9.93886C7.3013 10.4487 7.33959 10.969 7.48911 11.4622C7.63863 11.9555 7.89566 12.4095 8.24168 12.7915C8.58771 13.1735 9.01413 13.474 9.49025 13.6714ZM7.0269 6.6519C7.52567 6.15313 8.1178 5.75748 8.76948 5.48754C9.42116 5.21761 10.1196 5.07868 10.825 5.07868C11.5304 5.07868 12.2288 5.21761 12.8805 5.48754C13.5322 5.75748 14.1243 6.15313 14.6231 6.6519C15.1219 7.15067 15.5175 7.7428 15.7875 8.39448C16.0574 9.04616 16.1963 9.74463 16.1963 10.45C16.1963 11.1554 16.0574 11.8538 15.7875 12.5055C15.5175 13.1572 15.1219 13.7493 14.6231 14.2481C13.6158 15.2554 12.2496 15.8213 10.825 15.8213C9.40044 15.8213 8.03422 15.2554 7.0269 14.2481C6.01958 13.2408 5.45368 11.8746 5.45368 10.45C5.45368 9.02544 6.01958 7.65922 7.0269 6.6519V6.6519ZM17.3876 5.8786C17.5112 5.76201 17.6101 5.6218 17.6786 5.46628C17.747 5.31075 17.7836 5.14308 17.786 4.97318C17.7885 4.80329 17.7569 4.63462 17.693 4.47717C17.6291 4.31972 17.5343 4.17669 17.4142 4.05654C17.294 3.93639 17.151 3.84157 16.9935 3.77769C16.8361 3.71381 16.6674 3.68218 16.4975 3.68465C16.3276 3.68713 16.1599 3.72367 16.0044 3.79211C15.8489 3.86055 15.7087 3.9595 15.5921 4.0831C15.3653 4.32348 15.2412 4.64277 15.246 4.97318C15.2508 5.3036 15.3842 5.61913 15.6179 5.8528C15.8516 6.08647 16.1671 6.21987 16.4975 6.22468C16.8279 6.2295 17.1472 6.10536 17.3876 5.8786V5.8786Z" fill="#101010"/>
                                </svg>
                                </a>
                                <a href="https://www.facebook.com/roar.cosmetics" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                                    <svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 0H8C6.67392 0 5.40215 0.526784 4.46447 1.46447C3.52678 2.40215 3 3.67392 3 5V8H0V12H3V20H7V12H10L11 8H7V5C7 4.73478 7.10536 4.48043 7.29289 4.29289C7.48043 4.10536 7.73478 4 8 4H11V0Z" fill="black"/>
                                    </svg>

                                </a>
                            </div>
                            </th>
                        </div>
                    </tr>
                </tbody>   
            </table>
        </div>
    </footer>
<script>

function toggleTextFooter(num) {
  var text = document.getElementById("toggle-textFooter" + num);
  var plus = document.getElementById("plus-icon" + num);
  var minus = document.getElementById("minus-icon" + num);
  if (text.style.display === "none") {
    text.style.display = "block";
    plus.style.display = "none";
    minus.style.display = "block";
  } else {
    text.style.display = "none";
    plus.style.display = "block";
    minus.style.display = "none";
  }
}
function myFunction(num) {
  var dots = document.getElementById("dots" + num);
  var moreText = document.getElementById("more" + num);
  var btnText = document.getElementById("myBtn" + num);

  if (dots.style.display === "none") {
    dots.style.display = "contents";
    btnText.innerHTML = "<img src='<?php echo get_img('arrow1.png');?>'/>";
; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "<img src='<?php echo get_img('arrow2.png');?>'/>"; 
    moreText.style.display = "contents";
  }
}

</script>
<?php wp_footer(); ?>
</body>

</html>