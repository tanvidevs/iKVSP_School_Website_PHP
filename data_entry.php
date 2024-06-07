<?php require './components/dbcon.php';
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $standard = $_POST['standard'];
    $cgpa = $_POST['cgpa'];
    $r_status = $_POST['r_status'];

   $sql = "INSERT INTO students (name, standard, cgpa, 	r_status) VALUES ('$name', '$standard', '$cgpa', '$r_status')";
   $result = mysqli_query($conn, $sql);
}
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>iKVSP School | Upload Results</title>
</head>
<body class="bg-gray-800">
<?php require './components/navbar.php';?>

<div class="flex flex-col justify-center items-center">
<h1 class="text-xl font-bold text-center text-white mb-8 mt-10">Hi <span class="text-yellow-400"><?php echo $_SESSION['username']; ?></span>, please upload student marks</h1> 
<div class="h-auto mb-5 w-96 bg-gray-800 border border-white rounded-lg hover:shadow-lg hover:shadow-yellow-500/50">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="lg:w-full md:w-2/3 mx-auto p-5">
        <div class="flex flex-wrap -m-2">
            <div class="p-2 w-1/2">
            <div class="relative">
                <label for="name" class="leading-7 text-sm text-gray-400">FULLNAME</label>
                <input type="text" id="name" name="name" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-yellow-500 focus:bg-gray-900 focus:ring-2 focus:ring-yellow-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            </div>
            <div class="p-2 w-1/2">
            <div class="relative">
                <label for="standard" class="leading-7 text-sm text-gray-400">CLASS</label>
                <select type="text" id="standard" name="standard" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-yellow-500 focus:bg-gray-900 focus:ring-2 focus:ring-yellow-900 text-base outline-none text-gray-100 py-3 px-3 leading-8 transition-colors duration-200 ease-in-out">
                <option value="">---</option>
                <option value="11thScience">11th Science</option>
                <option value="11thCommerce">11th Commerce</option>
                <option value="12thScience">12th Science</option>
                <option value="12thCommerce">12th Commerce</option>
                </select>
            </div>
            </div>
            <div class="p-2 w-1/2">
            <div class="relative">
                <label for="cgpa" class="leading-7 text-sm text-gray-400">CGPA</label>
                <input type="text" id="cgpa" name="cgpa" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-yellow-500 focus:bg-gray-900 focus:ring-2 focus:ring-yellow-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            </div>
            <div class="p-2 w-1/2">
            <div class="relative">
                <label for="r_status" class="leading-7 text-sm text-gray-400">Result Status</label>
                <select type="text" id="r_status" name="r_status" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-yellow-500 focus:bg-gray-900 focus:ring-2 focus:ring-yellow-900 text-base outline-none text-gray-100 py-3 px-3 leading-8 transition-colors duration-200 ease-in-out">
                <option value="">---</option>
                <option value="Passed">Passed</option>
                <option value="Failed">Failed</option>
                </select>
            </div>
            </div>

            <div class="p-2 w-full">
            <button type="submit" class="flex mx-auto text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-500 rounded text-lg hover:shadow-lg hover:shadow-yellow-500/50">Upload Record</button>
            </div>
            
        </div>
        </div>
    </form>
    </div>
</div>
</body>
</html>