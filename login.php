<?php
require './components/dbcon.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username and password match
    $sql = "SELECT * FROM staff WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        // If credentials match, set session variables and redirect
        session_start();
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;
        header("Location: data_entry.php");
    }
}
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>iKVSP School | Login</title>
</head>
<body class="bg-gray-800">
  <?php require './components/navbar.php';?>

<div class="flex flex-col justify-center items-center">
<h1 class="text-3xl font-bold text-white mb-8 mt-10">Access Staff Login</h1> 
<div class="h-auto mb-5 w-96 bg-gray-800 border border-white rounded-lg hover:shadow-lg hover:shadow-yellow-500/50">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="lg:w-full md:w-2/3 mx-auto p-5">
        <div class="flex flex-wrap -m-2">
            
            <div class="p-2 w-full">
            <div class="relative">
                <label for="username" class="leading-7 text-sm text-gray-400">USERNAME</label>
                <input type="text" id="username" name="username" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-yellow-500 focus:bg-gray-900 focus:ring-2 focus:ring-yellow-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            </div>
            <div class="p-2 w-full">
            <div class="relative">
                <label for="password" class="leading-7 text-sm text-gray-400">PASSWORD</label>
                <input type="password" id="password" name="password" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-yellow-500 focus:bg-gray-900 focus:ring-2 focus:ring-yellow-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="p-2 w-full">
            <button type="submit" class="flex mx-auto text-white font-bold bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-500 rounded text-lg hover:shadow-lg hover:shadow-yellow-500/50">Login</button>
            </div>
            
        </div>
        </div>
    </form>
    </div>
</div>
</body>
</html>