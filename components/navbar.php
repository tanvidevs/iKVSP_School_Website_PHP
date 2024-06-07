<?php
if(isset($_SESSION['login']) && $_SESSION['login'] == true){
  $login = true;
}
else {
  $login = false;
}

echo '<div class="header-2 shadow-2xl shadow-yellow-500 sticky top-0">
  <nav class="bg-gray-800 py-2 md:py-4">
    <div class="container px-4 mx-auto md:flex md:items-center">

      <div class="flex justify-between items-center">
        <a href="./index.php" class="font-bold text-3xl text-yellow-400 flex">
        <img src="./assets/student.png" class="w-10" alt="logo">    
        <span class="ml-2 pt-1 md:pt-0">iKSVP School</span></a>
        <button class="px-3 py-1 rounded text-yellow-400 md:hidden" id="navbar-toggle">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 0 1 0 3.75H5.625a1.875 1.875 0 0 1 0-3.75Z" />
        </svg>
        </button>
      </div>

      <div class="hidden md:flex flex-col md:flex-row md:ml-auto mt-3 md:mt-0 text-center" id="navbar-collapse">
        <a href="./index.php" class="p-2 lg:px-4 md:mx-2 text-white rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300">Home</a>
        <a href="./about.php" class="p-2 lg:px-4 md:mx-2 text-white rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300">About</a>
        <a href="./results.php" class="p-2 lg:px-4 md:mx-2 text-white rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300">Results</a>';
        if($login){
        echo '<a href="./data_entry.php" class="p-2 lg:px-4 md:mx-2 text-white rounded hover:bg-gray-200 hover:text-gray-700 transition-colors duration-300">Upload Marks</a>';
        }
        if(!$login){
        echo '<a href="./login.php" class="p-2 lg:px-4 md:mx-2 text-yellow-500 text-center border border-solid border-yellow-500 rounded hover:bg-yellow-500 hover:text-gray-900 transition-colors duration-300 mt-1 md:mt-0 md:ml-1">Staff Login</a>';
        }
        if($login){
        echo'<a href="./logout.php" class="p-2 lg:px-4 md:mx-2 text-red-500 text-center border border-solid border-red-500 rounded hover:bg-red-500 hover:text-white transition-colors duration-300 mt-1 md:mt-0 md:ml-1">Logout</a>';
        }
      echo'</div>
    </div>
  </nav>
</div>

<script>
    let toggleBtn = document.querySelector("#navbar-toggle");
    let collapse = document.querySelector("#navbar-collapse");

    toggleBtn.onclick = () => {
        collapse.classList.toggle("hidden");
        collapse.classList.toggle("flex");
    };
</script>';
?>