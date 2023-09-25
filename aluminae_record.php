<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<script src="./filter.js"></script>
	<style type="text/css">
		.content{
		    padding: 35px 0px 20px 15px;	
		}
		.add-btn{
			background-color: blue;
			color: white;
			padding: 10px;	
			text-decoration: none;
			border-radius: 10px;
			font-weight: bold;
		}
		.add-btn:hover{
			background-color: tomato;
		}
		.btn{
			color: white;
			padding: 10px;	
			text-decoration: none;
			border-radius: 10px;
			border: 2px solid #fff;
			font-weight: bold;
			cursor: pointer;
		}
		.upt{
			background-color: tomato;
		}
		.del{
			background-color: blue;
		}
		.btn:hover{
			background-color: gray;
		}
		.table{
			border: 2px solid black;
		}
		th{
			padding: 2px;
			color: white;
			background-color: black;
		}
		td{
			padding: 3px;
			border: 1px solid black;
		}
		#box{
			width: 100%;
			height: 50vh;
			background-color: palegreen;
		}
		#searchBox-2{
			width: 40%;
			height: 5vh;
			padding: 2px;
			border: 2px solid black;
			float: left;
		}
    </style>
</head>

<body>

	<div class="header">
		<h2><b><a href="admin_logged.php" style="color: orangered;">Admin Panel</a></b></h2>
		<div class="logout">
			<a href="logout.php" style="color:white;font-size: 20px;">Logout</a>
		</div>
	</div>

	<div class="container">
		<div class="menu">
		<ul>
			<li><a href="student_record.php">Student</a></li>
			<li><a href="staff_record.php">Staff</a></li>
			<li><a href="aluminae_record.php">Aluminae</a></li>
			<li><a href="admin_msg.php">Message</a></li>
			<li><a href="invite_aluminae.php">Invite</a></li>
			<li><a href="#">Website</a>
				<div class="sub_menu">
					<ul>
						<li><a href="gallery_upload.html">Gallery</a></li>
						<li><a href="notice_board.php">Notice</a></li>
						<li><a href="achieved.php">Achieved</a></li>
				    </ul>
				</div>
			</li>
		</ul>
	</div>

	<div class="content">

		<button class="add-btn"><a href="aluminae_rec_insert.php">Add Aluminae</a></button>

		<center>
			<table class="table" id="emp-table">
				<caption>
				<b><h1> Aluminae Details </h1></b><br><br>
				<input type="search" id="searchBox-2" placeholder=" Search by name or email or phone no. or address"><br><br><br>
				</caption>
				
			<br>
			<thead>
				<tr>
					<th col-index = 1>SI no</th>
					<th col-index = 2>Name</th>
					<th col-index = 3>Email</th>
					<th col-index = 4>Phone Number</th>
					<th col-index = 5>Address</th>
					<th col-index=6>Blood Group
						<select class="table-filter" onchange="filter_rows()">
                    		<option value="all"></option>
               			</select>
               		</th>
					<th>Operations</th>
				</tr>
			</thead>

			<tbody>
				<?php
					$sql="select * from aluminae";
					$result=mysqli_query($con,$sql);
					if($result){
						$i=0;
						while($row=mysqli_fetch_assoc($result)){
							$i++;
							$id=$row['id'];
							$aluminae_name=$row['aluminae_name'];
							$email=$row['email'];
							$ph_no=$row['ph_no'];
							$address=$row['address'];
							$blood_grp=$row['blood_grp'];
							echo ' 
							<tr>
								<td>'.$i.'</td>
								<td>'.$aluminae_name.'</td>
								<td>'.$email.'</td>
								<td>'.$ph_no.'</td>
								<td>'.$address.'</td>
								<td>'.$blood_grp.'</td>
								<td>
								<button class="btn upt"><a href="aluminae_rec_update.php?updateid='.$id.'">Update</a></button>
								<button class="btn del"><a href="aluminae_rec_delete.php?deleteid='.$id.'">Delete</a></button>
							    </td>
							</tr>';
						}
						
					}
				?>
				
			</tbody>
			
			</table>
			    <script>
        window.onload = () => {
            console.log(document.querySelector("#emp-table > tbody > tr:nth-child(1) > td:nth-child(2) ").innerHTML);
        };

        getUniqueValuesFromColumn()
        
    </script>	
	
<script>
	var searchBox_2=document.getElementById("searchBox-2");
	searchBox_2.addEventListener("keyup",function(){
    var keyword = this.value;
    keyword = keyword.toUpperCase();
    var table_2 = document.getElementById("emp-table");
    var all_tr = table_2.getElementsByTagName("tr");
    for(var i=0; i<all_tr.length; i++){
            var name_column = all_tr[i].getElementsByTagName("td")[1];
            var email_column = all_tr[i].getElementsByTagName("td")[2 ];
            var phone_column = all_tr[i].getElementsByTagName("td")[3];
            var address_column = all_tr[i].getElementsByTagName("td")[4 ];
            if(name_column || email_column || phone_column|| address_column){
                var name_value = name_column.textContent || name_column.innerText;
                var email_value = email_column.textContent || email_column.innerText;
                var phone_value = phone_column.textContent || phone_column.innerText;
                var address_value = address_column.textContent || address_column.innerText;
                name_value = name_value.toUpperCase();
                email_value = email_value.toUpperCase();
                phone_value = phone_value.toUpperCase();
                address_value = address_value.toUpperCase();
                if((name_value.indexOf(keyword) > -1) || (email_value.indexOf(keyword) > -1) || (phone_value.indexOf(keyword) > -1) || (address_value.indexOf(keyword) > -1)){
                    all_tr[i].style.display = ""; // show
                }else{
                    all_tr[i].style.display = "none"; // hide
                }
            }
        }
})  
</script>

	</div>	
</div>
</body>
</html>