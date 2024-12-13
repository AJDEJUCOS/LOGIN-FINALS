<div class="greeting">
	<h1>Hello there! Welcome, <span style="color: blue;"><?php echo $_SESSION['username']; ?></span></h1>
</div>

<div class="navbar">
	<h3>
		<a href="index.php">Home</a>
		<a href="insert.php">Add New User</a>
		<a href="allusers.php">All Users</a>
		<a href="activitylogs.php">Activity Logs</a>
		<a href="login.php">Logout</a>	
	</h3>	
</div>

<style>

	h1 {
		text-align: center;
	}


	.navbar {
		text-align: center; /* Center the navbar */
		margin-top: 20px; /* Optional: adjust the top margin */
	}

	.navbar h3 {
		display: inline-block; /* Make the navbar horizontally aligned */
	}

	.navbar a {
		text-decoration: none; /* Remove underline */
		color: black; /* Set default text color */
		padding: 10px 20px; /* Add padding around the links */
		margin: 0 10px; /* Space out the links */
		border-radius: 5px; /* Optional: rounded corners for the links */
	}

	.navbar a:hover {
		background-color: #ddd; /* Add hover effect */
	}
</style>
