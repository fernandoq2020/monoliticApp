<?php 
require base_path('views/partials/head.php');
require base_path('views/partials/nav.php');
?>
 <main>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <section>
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto  lg:py-0">
            <a href="#" class="flex items-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-8 h-8 mr-2" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="logo">
            </a>
            <h2 class="items-center mb-1 text-center text-2xl/9 font-bold tracking-tight text-black">Log In!</h2>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <form class="space-y-4 md:space-y-6" method="POST" action="/session">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= old('email') ?>" placeholder="name@company.com" >
                            <?php if(isset($errors['email'])): ?>
                                <p class="text-red-500 text-xs mt-2"><?= $errors['email']?></p>
                            <?php endif; ?>                        
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" value="" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                            <?php if(isset($errors['password'])): ?>
                                <p class="text-red-500 text-xs mt-2"><?= $errors['password']?></p>
                            <?php endif; ?> 
                        </div>
                        <div>
                            <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Log In</button>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
    
  </main>

<?php 
require base_path('views/partials/footer.php');
?>

