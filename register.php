
<!doctype html>
<html>
<head>
<title>SIGN UP</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Đăng nhập" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
<!-- /fonts -->
<!-- css -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css -->
</head>
<body>


<h1 class="w3ls">Official Signup Form</h1>
<div class="content-w3ls">
	<div class="content-agile1">
		<h2 class="agileits1">Official</h2>
		<p class="agileits2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	</div>
	<div class="content-agile2">
		<form action="xulydangky.php" method="post">
			<div class="form-control w3layouts"> 
				<input type="text" id="firstname" name="username" placeholder="Username" required="" data-validate = "Enter username">
			</div>

			<div class="form-control agileinfo">	
				<input type="password" class="lock" name="password" placeholder="Password" id="password1" required="" data-validate="Enter password">
			</div>	
			<div class="form-control agileinfo">	
				<input type="text" class="lock" name="masinhvien" placeholder="Mã sinh viên" id="password1">
			</div>	
			<div class="form-control agileinfo">	
				<input type="text" class="lock" name="hoten" placeholder="Họ tên" id="password1">
			</div>	
			<div class="form-control agileinfo">	
				<input type="date" class="lock" name="ngaysinh" placeholder="Ngày sinh" id="password1">
			</div>	
			<center class="form-control agileinfo" >	
				<input type="radio" class="lock" name="gioitinh" placeholder="Giới tính"   checked > Nam
				<input type="radio" class="lock" name="gioitinh" placeholder="Giới tính" > Nữ
			</center>	
			<div class="form-control agileinfo">	
				<input type="text" class="lock" name="quequan" placeholder="Quê quán"  id="password1">
			</div>	
			<center class="form-control agileinfo">Lớp:</center>
			<center class="gt" >
				<select class="input98" name="lop" id="password1">
					<?php
					include_once("publish/connect.php");

						$sql="SELECT lop,tenkhoa FROM lophoc INNER JOIN khoa ON lophoc.makhoa = khoa.makhoa";
						$kq=mysqli_query($conn,$sql);
						include_once('model/lophoc_list.php');
						while ($row=mysqli_fetch_array($kq)) {
								echo "<option value=".$row['lop'].">".$row['lop']." - khoa: ".$row['tenkhoa']."</option>";
						}
					?>
				</select>
			</center>
			<input type="submit" class="register" value="Sign in" name="dangky">
		</form>
		<script type="text/javascript">
			window.onload = function () {
				document.getElementById("password1").onchange = validatePassword;
				document.getElementById("password2").onchange = validatePassword;
			}
			function validatePassword(){
				var pass2=document.getElementById("password2").value;
				var pass1=document.getElementById("password1").value;
				if(pass1!=pass2)
					document.getElementById("password2").setCustomValidity("Passwords Don't Match");
				else
					document.getElementById("password2").setCustomValidity('');	 
					//empty string means no validation error
			}
		</script>
		<p class="wthree w3l"><a href="login.php">Sign in</a></p>
	</div>
	<div class="clear"></div>
</div>



<!-- 
				<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login101">
				<form class="" action="http://localhost/dangkyhoc/xulydangky.php" method="POST">
					<span class="">
						<div align="center">	<span class="" >
						<a href="">
            <img src="img/logoutt.png">
        </a>
					</span></div>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						SIGN UP
					</span>
					<div style="color: white; margin: 2px;">Username:</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input99" type="text" name="username">
						
					</div>
					<div style="color: white; margin: 2px;">Password:</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input99" type="password" name="password">
						
					</div>
					<div style="color: white; margin: 2px;">Mã sinh viên:</div>
					<div class="wrap-input100 validate-input" data-validate = "">
						<input class="input99" type="text" name="masinhvien">
						
					</div>
					<div style="color: white; margin: 2px;">Họ tên:</div>
					<div class="wrap-input100 validate-input" data-validate = "">
						<input class="input99" type="text" name="hoten">
						
					</div>
					<div style="color: white; margin: 2px;">Ngày sinh:</div>
					<div class="wrap-input100 validate-input" data-validate = "">
						<input class="input99" type="date" name="ngaysinh">
						
						
					</div>
					<div style="color: white; margin: 2px;">Giới tính:</div>
					<div class="gt" data-validate = "">
						<input class="" type="radio" name="gioitinh" value="Nam" checked=""> Nam
								<input  type="radio" name="gioitinh" value="Nữ">Nữ
						
					</div>

					<div style="color: white; margin: 2px;">Lớp:</div>
					<div class="gt" data-validate = "">
						 <select class="input98" name="lop">
                           <?php
                           include_once("publish/connect.php");
	
								$sql="SELECT lop,tenkhoa FROM lophoc INNER JOIN khoa ON lophoc.makhoa = khoa.makhoa";
								$kq=mysqli_query($conn,$sql);
                                include_once('model/lophoc_list.php');
                                while ($row=mysqli_fetch_array($kq)) {
                                     echo "<option value=".$row['lop'].">".$row['lop']." - khoa: ".$row['tenkhoa']."</option>";
                                }
                            ?>
                        </select>
						
					</div>
					<div style="color: white; margin: 2px;">Quê quán:</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input99" type="text" name="quequan">
					</div>
						
					
			

					<div class="container-login101-form-btn" align="center">

						<input type="submit"  class="login101-form-btn" name="dangky" value="Sign Up">
					</div>

					<div class="text-center p-t-90">
						<p class="" style="color: white">Bạn đã có tài khoản.
						<a class="" style="color: white" href="http://localhost/dangkyhoc/login.php">
							<u>Login?</u>
						</a></p>

					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div> -->
	


</body>
</html>
</body>
</html>