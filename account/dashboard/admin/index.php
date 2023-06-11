<?php session_start(); ?>

<?php include '../../../components/header.php'; ?>
  
  <?php include '../../../components/navigation.php'; ?>

<!-- STUB -->
    <div class="flex items-center justify-center ">
        <div class="w-full p-20 justify-center lg text-white bg-gray-900">
   <h3 class="text-white p-3 md:text-2xl lg:text-2xl text-lg">Admin Panel</h3>
   <div  class="p-5 pt-1 flex-wrap  flex items-center gap-2 justify-center">
     
   
   <div onclick="window.location.href='pages/user.php';" class="bg-gradient-to-r flex-auto  w-42 h-42  from-gray-800 to-gray-700 shadow-lg rounded-lg hover:opacity-70">
         <div class="md:p-7 p-4 flex flex-col items-center cursor-pointer">

         <span class="p-5 mb-2 rounded-full bg-red-500 text-white shadow-gray-200"><svg
                        xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg></span>

            <h2 class="text-xl text-center text-gray-200 capitalize">Users</h2>
            <h3 class="text-sm  text-gray-400  text-center">View, Delete and Update current users.</h3>
         </div>
      </div>


      <div onclick="window.location.href='pages/pendingComments.php';"class="bg-gradient-to-r flex-auto w-42 h-42  from-gray-800 to-gray-700    shadow-lg    rounded-lg hover:opacity-70">
         <div class="md:p-7 p-4 flex flex-col items-center cursor-pointer">
         <span class="p-5 mb-2 rounded-full bg-orange-500 text-white"><svg
                        xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg></span>
            <h2 class="text-xl text-center text-gray-200 capitalize">Pending Reviews</h2>
            <h3 class="text-sm  text-gray-400  text-center">Publish Reviews.</h3>
         </div>
      </div>


      <div onclick="window.location.href='pages/addBlog.php';" class="bg-gradient-to-r flex-auto  w-42 h-42  from-gray-800 to-gray-700    shadow-lg    rounded-lg hover:opacity-70">
         <div class="md:p-7 p-4 flex flex-col items-center cursor-pointer ">

         <span class="p-5 mb-2 rounded-full bg-yellow-500 text-white "><svg
                        xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                    </svg></span>
         <h2 class="text-xl text-center text-gray-200 capitalize">Add New Blog</h2>
            <h3 class="text-sm  text-gray-400  text-center">Update the blog page</h3>
         </div>
      </div>
      
   </div>
</div>
</div>
  <?php include '../../../components/footer.php'; ?>

