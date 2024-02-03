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
  
      
    <div class="p-10">
        <h1 class="mb-8  text-4xl">Login</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
    
            <form>
                
              
                <div class="mt-4">
                    <label for="email">Email</label>
                    <input class="w-full  bg-gray-100 rounded-lg placeholder-gray text-xl p-4 border-none block mt-1" placeholder="Email" id="email" type="email" name="email" required="required">
                </div>
    
                <div class="mt-4">
                    <label for="password">Password</label>
                    <input class="w-full  bg-gray-100 rounded-lg placeholder-gray  text-xl p-4 border-none block mt-1" placeholder="password" id="password" type="password" name="password" required="required" autocomplete="new-password">
                </div>
                <div class="mt-4 w-full md:w-1/2">
                    <a href="loginviagoogle.html" class="px-4 py-2 border flex gap-2 border-slate-200 dark:border-slate-700 rounded-lg text-slate-700 dark:text-slate-200 hover:border-slate-400 dark:hover:border-slate-500 hover:text-slate-900 dark:hover:text-slate-300 hover:shadow transition duration-150">
                        <img class="w-6 h-6" src="https://www.svgrepo.com/show/475656/google-color.svg" loading="lazy" alt="google logo">
                        <span >Login with Google</span>
                    </a>
                </div>
                <div class="flex items-center justify-between mt-8">
                    <button type="submit" class="flex items-center justify-center px-8 py-3 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">Log in</button>
                    <a href="index.php"  class=" text-sm md:text-l ">
                        dont have account?
                    </a>
                </div>
                
            </form>
    
            <aside class="">
                <div class="bg-gray-100 p-8 rounded">
                    <h2 class="font-bold text-2xl">Instructions</h2>
                    <ul class="list-disc mt-4 list-inside">
                        <li>All users must provide a valid email address and password to create an account.</li>
                        <li>Users must not use offensive, vulgar, or otherwise inappropriate language in their username or profile information</li>
                        <li>Users must not create multiple accounts for the same person.</li>
                    </ul>
                </div>
            </aside>
    
        </div>
    </div>
</body>
</html>