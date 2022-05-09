<?php require APPROOT . '/views/includes/header.php'; 
?>

<!DOCTYPE html>
<html>
<style type="text/css">

li:first-child{
	margin-left: 0;
	position: relative;
}

li {
	display: inline-block;
	margin-left: 28px;
	position: relative;
	}

li > a {
	font-size: 14px;
	text-transform: uppercase;
	letter-spacing: .5px;
	text-decoration: none;
	color: white;
	font-weight: bold;
}
.sub-nav {
background: black;
border-radius: 0px;
box-shadow: 0 10px 8px 0 rgba(0,0,0,0.2);
display: none;
right: 390px;
padding: 16px;
position: absolute;
top: 100%;
width: 130px;

	}

	#services:hover .sub-nav{
	 display: flex;
	}

	.sub-nav.col {
		display: flex;
		flex-direction: column;
		flex: 1;
		max-width: 0%;
	}


</style>


<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<nav class="navbar navbar-inverse" id="settingsNav">
		<a class="navbar-brand" style="background-color:black;color: white;" href="/Main/Home">E-commerce project</a>
				<ul class="nav navbar-nav"; style="display: inline-block;white-space:nowrap;">
      				<li><a href="/Main/timeline">Timeline</a></li>
      				<li><a href="/Contact/about">About</a></li>
     				<li><a href="/Contact/contactus">Contact us</a></li>
     				<li><a href="/Site/MainPage">Store Page</a></li>
					<li><a href="/Contact/report">Report</a></li>
					<li><a href="#" style="color:white">Admin</a></li>
     			</ul>
	</nav>
	<center>
	<h1 style="color:red">ADMIN PAGE</h1>
	<h2 style="color:red">Welcome to the Admin Page </h4>
	<h2 style=" left: 0; width: 100%; background-color: black; color: white; text-align: center;">Options </h2>

	<li><a href="#" style="color:gray">Main Admin Page</a></li>
	<li><a href="/Admin/AdminReport">View Reports</a></li>
	<li><a href="/Admin/AdminUser">View Users</a></li>
	<li><a href="/Admin/AdminItem">View Items</a></li>

	<h2 style="color:red">List of Admins</h2>

	<table style="background-color: white; width: 50%;">
		<tr>
			<td>ID</td>
			<td>UserName</td>
		</tr>

		<?php

			echo"<tr>";
			if($data["admin"] != null) {
			foreach($data["admin"] as $admins){

				echo"<td>$admins->user_id</td>";
				echo"<td>$admins->username</td>";

			echo"</tr>";
			}
				} else {
					echo "No Admin accounts found";
			}
		?>


	</table>
	</center>
</div>
