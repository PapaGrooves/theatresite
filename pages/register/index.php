<?php 
    include '../../components/header.php';
    include '../../components/navigation.php';
?>  

<div class="min-h-screen flex flex-col items-center justify-center bg-gray-100 bg-cover bg-no-repeat"
style="background-image: url('https://source.unsplash.com/evlkOfkQ5rE')">
    <div class="rounded-xl bg-gray-800 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
        <div class="font-medium self-center text-xl sm:text-3xl text-white">
            Join us Now
        </div>
        <div class="mt-4 self-center text-xl sm:text-sm text-white">
            Enter your credentials to get access account
        </div>

        <div class="mt-10">
            <form action="#">
                <div class="flex flex-col mb-5">
                    <label for="email" class="mb-1 text-xs tracking-wide text-white">Name:</label>
                    <div class="relative">
                        <div
                            class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-white ">
                            <i class="fas fa-user text-blue-500"></i>
                        </div>

                        <input id="email" type="email" name="email"
                            class=" text-sm placeholder-gray-700 pl-10 pr-4 rounded-md border border-white w-full py-2 focus:outline-none focus:border-blue-400"
                            placeholder="Enter your name" />
                    </div>
                </div>
                <div class="flex flex-col mb-5">
                    <label for="email" class="mb-1 text-xs tracking-wide text-white">E-Mail Address:</label>
                    <div class="relative">
                        <div
                            class=" inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-white ">
                            <i class="fas fa-at text-blue-500"></i>
                        </div>

                        <input id="email" type="email" name="email"
                            class="text-sm placeholder-gray-700 pl-10 pr-4 rounded-md border border-white w-full py-2 focus:outline-none focus:border-blue-400"
                            placeholder="Enter your email" />
                    </div>
                </div>
                <div class="flex flex-col mb-6">
                    <label for="password" class="mb-1 text-xs sm:text-sm tracking-wide text-white">Password:</label>
                    <div class="relative">
                        <div
                            class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-white ">
                            <span>
                                <i class="fas fa-lock text-blue-500"></i>
                            </span>
                        </div>

                        <input id="password" type="password" name="password"
                            class="text-sm placeholder-gray-700 pl-10 pr-4 rounded-md border border-white w-full py-2 focus:outline-none focus:border-blue-400"
                            placeholder="Enter your password" />
                    </div>
                </div>

                <div class="flex w-full">
                    <button type="submit" 
                    class="flex mt-2 items-center justify-center focus:outline-none text-white text-sm sm:text-base bg-red-700 hover:bg-red-900 rounded-md py-2 w-full transition duration-150 ease-in">
                        <span class="mr-2 uppercase">Sign Up</span>
                        <span>
                            <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="flex justify-center items-center mt-6">
        <a href="#" target="_blank" 
        class="inline-flex items-center text-gray-700 font-medium text-xs text-center">
            <span class="ml-2">You have an account?
                <a href="#" class="text-xs ml-2 text-blue-500 font-semibold">Login here</a></span>
        </a>
    </div>
</div>
    
<?php include '../../components/footer.php'; ?>