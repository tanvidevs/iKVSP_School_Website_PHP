<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="stylesheet" href="./style/styles.css">

  <!-- Regular Datatables CSS -->
  <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

  <title>iKVSP School | Results</title>
</head>
<body class="bg-gray-800">
<?php require './components/navbar.php';?>


<div class="container w-full md:w-4/5 xl:w-3/5 mx-auto px-2">

	<!-- Title -->
	<h1 class="text-2xl font-bold text-center text-white mb-8 mt-10">Results Summer <span class="text-yellow-400">2024</span> Batches</h1>

	<!-- Card -->
	<div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white mr-0 md:mr-20 ml-0 md:ml-20">
		<table id="example" class="stripe hover" style="width:100%; padding-top: 1em; padding-bottom: 1em;">
			<thead>
				<tr>
					<th data-priority="1">Name</th>
					<th data-priority="2">Status</th>
					<th data-priority="3">CGPA</th>
					<th data-priority="4">Standard</th>
				</tr>
			</thead>
			<tbody>
            <?php
            require './components/dbcon.php';
            $sql = "SELECT * FROM `students`";
            $result = mysqli_query($conn, $sql);

            $sno = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $sno = $sno + 1;
                echo '<tr class="text-center">
                    <td>' . $row['name'] . '</td>
                    <td>' . $row['r_status'] . '</td>
                    <td>' . $row['cgpa'] . '</td>
                    <td>' . $row['standard'] . '</td>
                    </tr>';
            }
            ?>
			</tbody>
		</table>
	</div>
	<!-- /Card -->
</div>
<!-- /container -->

<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!-- Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
    $(document).ready(function() {
        var table = $('#example').DataTable({
                responsive: true
            }).columns.adjust().responsive.recalc();
    });
</script>
</body>
</html>
    