<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ajax - select dynamic data</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<h1 class="text-center text-white p-2 bg-dark">Using Ajax</h1>
	<div class="container bg-secondary col-lg-6 mt-4 px-5">
		<div class="form-group pt-4">
			<label for="user">Username</label>
			<input type="text" id="user" class="form-control" placeholder="Enter UserName">
		</div>

		<div class="form-group">
			<label for="pwd">Password</label>
			<input type="password" id="pwd" class="form-control" placeholder="Enter Password">
		</div>

		<div class="form-group">
			<label for="pwd">Select State</label>
			<select name="" id="state" class="form-control" onchange="fun(this.value);">
				<option value="Select">--Select--</option>
				<option value="Punjab">Punjab</option>
				<option value="Uttarakhand">Uttarakhand</option>
				<option value="Uttar Pradesh">Uttar Pradesh</option>
				<option value="Maharashtra">Maharashtra</option>
			</select>
		</div>

		<div class="form-group">
			<label for="pwd">City</label>
			<select name="" id="city" class="form-control">
				<option value="Selectcity">select city</option>
			</select>
		</div>
		<button class="btn btn-success mb-3">Submit</button>
	</div>
	<script>
		function fun(data){
			let req = new XMLHttpRequest();
			// alert(data);
			req.open("GET","http://localhost/Ajax/Dynamic%20select/response.php?state="+data,true);
			req.send();
				
			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200){
					document.getElementById("city").innerHTML = req.responseText;
				}
			}		
		}
	</script>
</body>
</html>