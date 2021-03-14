<?php
	
	$title = "User List";
	include('header.php');
?>
	<table border="1" align="center" width="100%">
 		<tr height="100px">
 			<td width="100px"><img src="../assets/002-planting.png" width="150px" height="70px"></td>
 			<td align="right">
 				Logged in as <?php echo $_COOKIE['username']?> | 
 				<a href="../controller/logout.php">Logout</a>
 			</td>
	 	</tr>
	 	<tr height="400px">
	 		<td width="300px">
	 			<ul>
	 				<?php  include('link.php'); ?>
	 			</ul>
	 		</td>
	 		<td>
	 			<h2>User List</h2>
	 			<input type="search" name="userSearch" placeholder="search..." align="center"><br><br>
	 			<table border="1">
	 				
	 				<tr>
	 					<td width="40px">ID</td>
	 					<td>Name</td>
	 					<td>Username</td>
	 					<td>Email</td>
	 					<td>Action</td>
	 				</tr>
	 				<tr>
	 					<td>1</td>
	 					<td>Md.Habibur Rahman</td>
	 					<td>Habibur Rahman</td>
	 					<td>habib2645@gmail.com</td>	
	 					<td>
	 						<a href="editUserList.php?id=1">EDIT</a> |
	 						<a href="deleteUser.php?id=1">DELETE</a>
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>2</td>
	 					<td>Adnan Anik</td>
	 					<td>Anik </td>
	 					<td>anik12@gmail.com</td>	
	 					<td>
	 						<a href="editUserList.php?id=2">EDIT</a> |
	 						<a href="deleteUser.php?id=2">DELETE</a>
	 					</td>	
	 				</tr>
	 				<tr>
	 					<td>3</td>
	 					<td>Korim</td>
	 					<td>korim </td>
	 					<td>korim@gmail.com</td>	
	 					<td>
	 						<a href="editUserList.php?id=3">EDIT</a> |
	 						<a href="deleteUser.php?id=3">DELETE</a>
	 					</td>	
	 				</tr>

	 			</table>
	 			
	 		</td>
	 	</tr>
		<tr height="50px">
			<td colspan="3" align="center">
				copyright@2021
			</td>
		</tr>
	</table>
</body>
</html>