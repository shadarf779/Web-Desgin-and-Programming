<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body>
    
   
<?php
          include('include/nav.php');
      ?>
<header class="w-full h-40 flex flex-col bg-gray-200 items-center justify-center">
    <h1 class="text-black font-bold text-4xl">Hello world</h1>
    <h2 class="text-black text-xl">Hello world</h2>
</header>
<main class="grid grid-cols-8 gap-8 ">
<article class="hidden md:block md:col-span-2">
        <div class="bg-white rounded shadow p-6 mt-6">
            <div class="flex flex-col items-center py-6">
                <h1 class="text-xl">Lastest News </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, perferendis. Modi quaerat eligendi in minima ipsa eaque dolor ducimus doloribus debitis voluptate rerum iure praesentium dicta, aut quibusdam quidem consequuntur!</p>
            </div>
            <div class="flex flex-col items-center py-6">
                <h1 class="text-xl">Lastest News </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, perferendis. Modi quaerat eligendi in minima ipsa eaque dolor ducimus doloribus debitis voluptate rerum iure praesentium dicta, aut quibusdam quidem consequuntur!</p>
            </div>
            <div class="flex flex-col items-center py-6">
                <h1 class="text-xl">Lastest News </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, perferendis. Modi quaerat eligendi in minima ipsa eaque dolor ducimus doloribus debitis voluptate rerum iure praesentium dicta, aut quibusdam quidem consequuntur!</p>
            </div>
        </div>
    </article >  
    <section class=" grid grid-cols-1 md:grid-cols-3 md:col-span-6  col-span-8 ">
      
        <?php 
            include('include/card.php');
            include('include/card.php');
            include('include/card.php');
            include('include/card.php');
            include('include/card.php');
            include('include/card.php');
            include('include/card.php');
            include('include/card.php');
            include('include/card.php');
            include('include/card.php');
            include('include/card.php');
            include('include/card.php');
            include('include/card.php');
        ?>
    </section> 
      

</main>



</body>
</html>