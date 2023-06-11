<?php 
    include '../../components/header.php';
    include '../../components/navigation.php';
?>
<div class="flex h-screen w-full items-center justify-center bg-gray-900 bg-cover bg-no-repeat"
style="background-image: url('https://source.unsplash.com/evlkOfkQ5rE')">
    <div class="rounded-xl bg-gray-800 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
       
    <div class="text-white">
            <div class="mb-8 flex flex-col items-center">
                <span class="text-gray-300">Enter Login Details</span>
            </div>


            <form action="../../account/auth/authenticate.php" method="post">
                <div class="mb-4 text-lg">
                    <input
                        class="rounded-md border-none bg-white px-6 py-2 text-center text-gray-700 placeholder-gray-700 shadow-lg outline-none backdrop-blur-md"
                        type="text" name="username" placeholder="username" />
                </div>

                <div class="mb-4 text-lg">
                    <input
                        class="rounded-md border-none bg-white px-6 py-2 text-center text-gray-700 placeholder-gray-700 shadow-lg outline-none backdrop-blur-md"
                        type="Password" name="password" placeholder="*********" />
                </div>
                <div class="mt-8 flex justify-center text-lg text-black">
                    <!-- <button type="submit" 
          class="rounded-3xl bg-yellow-400 bg-opacity-50 px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-yellow-600">Login</button> -->
                    <input type="submit"
                        class="rounded-md bg-red-700 hover:bg-red-900 px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300"
                        value="LOGIN">

                </div>
            </form>
        </div>
    </div>
</div>




<?php 
    include '../../components/footer.php';
?>