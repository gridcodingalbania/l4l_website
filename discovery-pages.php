<?php
/**
 * Template Name: Discovery-Pages
 */
?>
<?php get_header(); ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Discovery Pages Navigation -->
    <div class="w-full">
        <ul class="flex items-center justify-between w-full px-4 py-4 border-b-[1px] ">
            <li class="mr-6">
                <a class="hover:text-red-600" href="#" onClick="toggleDiv('cream')">Cream to Powder</a>
            </li>
            <li class="mr-6">
                <a class=" hover:text-red-600" href="#" onClick="toggleDiv('velvet')">Velvet</a>
            </li>
            <li class="mr-6">
                <a class="hover:text-red-600" href="#" onClick="toggleDiv('metallic')">Metallic</a>
            </li>
            <li class="mr-6">
                <a class=" hover:text-red-600" href="#" onClick="toggleDiv('accessories')">Accessories</a>
            </li>
            <li class="mr-6">
                <a class="hover:text-red-600" href="#" onClick="toggleDiv('roarid')">Roar iD</a>
            </li>
            
        </ul>
    </div>

    <!-- Cream to Powder Section -->
    <div class="pages" id="cream">
        <!-- Topic Section -->
        <div class="w-full topic-section text-center py-4">
            <h1 class="text-[48px] text-red-600">Topic 8</h1>
            <p class="text-[24px]">Discovery product overview</p>
        </div>
        <!-- Color Section -->
        <div class="w-full h-[560px] " style="background-color:#F8BDB1;"></div>

        <!-- ---------- -->

        <!-- Topic Section -->
        <div class="w-full topic-section text-center py-20">
            <h1 class="text-[48px] text-red-600">Topic 9</h1>
        </div>
        <!-- Color Section -->
        <div class="w-full h-[560px] " style="background-color:#EE7067;"></div>

        <!-- ---------- -->
        
        <!-- Banner Section -->
        <div class="w-full topic-section text-center py-20">
            <h1 class="text-[48px] text-red-600">Banner 5</h1>
        </div>
        <!-- Color Section -->
        <div class="w-full h-[560px] " style="background-color:#1E1E1E;"></div>

        <!-- ---------- -->

        <!-- Topic Section -->
        <div class="w-full topic-section text-center py-20">
            <h1 class="text-[48px] text-red-600">Topic 10</h1>
        </div>
        <!-- Color Section -->
        <div class="w-full h-[560px] " style="background-color:#668CA1;"></div>

        <!-- ---------- -->
        
        <!-- Banner Section -->
        <div class="w-full topic-section text-center py-20">
            <h1 class="text-[48px] text-red-600">Banner 6</h1>
        </div>
        <!-- Color Section -->
        <div class="w-full h-[560px] " style="background-color:#1E1E1E;"></div>


    </div>




    <!-- Velvet Section -->
    <div class="pages" id="velvet" style="display:none;">
        <!-- Topic Section -->
        <div class="w-full topic-section text-center py-4">
            <h1 class="text-[48px] text-red-600">Topic 8</h1>
            <p class="text-[24px]">Discovery product overview</p>
        </div>
        <!-- Color Section -->
        <div class="w-full h-[560px] " style="background-color:#F8BDB1;"></div>

        <!-- ---------- -->

        <!-- Topic Section -->
        <div class="w-full topic-section text-center py-20">
            <h1 class="text-[48px] text-red-600">Banner 8</h1>
        </div>
        <!-- Color Section -->
        <div class="w-full h-[560px] " style="background-color:#1E1E1E;"></div>

        <!-- ---------- -->
        
        <!-- Banner Section -->
        <div class="w-full topic-section text-center py-20">
            <h1 class="text-[48px] text-red-600">Support to select SKU color</h1>
            <p class="text-[24px]">Shades Overview</p>
            <p class=" w-[50%] m-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Commodo eu arcu, ultricies lacus gravida ornare nisi in. Vitae adipiscing in enim, habitasse sed ultricies id ac. </p>
        </div>
        <!-- Select Color Section -->
        <div class="w-full h-[560px] flex flex-row ">
            <div class="image-section w-[30%]">
            <img src="<?php echo 'cosmeticimage.png' ?>">
            </div>
            <div class="w-[70%]">
                <div class="flex flex-row content-center justify-center space-x-10">
                    <p>Usa filtri Beauty Wallet</p>
                    <label for="default-toggle" class="inline-flex relative items-center cursor-pointer">
                        <input type="checkbox" value="" id="default-toggle" class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                    </label>
                </div>
                
            </div>
        </div>

        <!-- ---------- -->

        <!-- Topic Section -->
        <div class="w-full topic-section text-center py-20">
            <h1 class="text-[48px] text-red-600">Topic 5</h1>
        </div>
        <!-- Color Section -->
        <div class="w-full h-[560px] " style="background-color:#F3988B;"></div>

        <!-- ---------- -->
        
        <!-- Banner Section -->
        <div class="w-full topic-section text-center py-20">
            <h1 class="text-[48px] text-red-600">Banner 11</h1>
        </div>
        <!-- Color Section -->
        <div class="w-full h-[560px] " style="background-color:#1E1E1E;"></div>


    </div>

    <!-- Metallic Section -->
    <div class="pages" id="metallic" style="display:none;"></div>


    <!-- Accessories Section -->
    <div class="pages" id="accessories" style="display:none;"></div>

    <!-- Roarid Section -->
    <div class="pages" id="roarid" style="display:none;"></div>

    
    <script>
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
    </script>
</body>
<?php get_footer(); ?>