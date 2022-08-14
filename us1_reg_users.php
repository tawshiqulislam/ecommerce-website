
<?php 
session_start(); 
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Driving School</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
					
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            </div>
                            <a href="../index.php" class="nav-item nav-link">Vehical Rental</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->


		<?php 
$select = mysqli_query($conn,"SELECT * FROM users");
$numrows = mysqli_num_rows($select);
if($numrows!=0){
?>
<table id="tables">
	<tr>
		<th>employee id</th>
		<th>name</th>
		<th>gender</th>
		<th>dob</th>
		<th>email</th>
		<th>phone</th>
		<th>town</th>
		<th>job</th>
		<th>username</th>
		<th>admin</th>
	</tr>
<?php
while($row=mysqli_fetch_array($select)){
?>
    <tr>
    	<?php
    	echo '<td>'.$row['emp_id'].'</td>';
		echo '<td>'.$row['fname']." ".$row['mname']." ".$row['lname'].'</td>';
		echo '<td>'.$row['gender'].'</td>';
		echo '<td>'.$row['dob'].'</td>';
		echo '<td>'.$row['email'].'</td>';
		echo '<td>'.$row['phone'].'</td>';
		echo '<td>'.$row['town'].'</td>';
		echo '<td>'.$row['job'].'</td>';
	    echo '<td>'.$row['uname'].'</td>';
	    echo '<td>'.$row['admin'].'</td>';
	    ?>
	</tr>
<?php	
}
?>
</table>
<?php
}else{
	echo 'no records';
}
?>
        
        
        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">7</h3>
                                <p>Training Center</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-user"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">30</h3>
                                <p>Teachers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-users"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">70</h3>
                                <p>Cars</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-check"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">830</h3>
                                <p>Passed Students</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->
        
        
        


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Get In Touch</h2>
                            <p><i class="fa fa-map-marker-alt"></i>PCIU, Khulshi, GEC, Chittagong</p>
                            <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                            <p><i class="fa fa-envelope"></i>info@example.com</p>
                            <div class="footer-social">
                                <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="#">About Us</a>
                            <a href="#">Contact Us</a>
                            <a href="#">Our Service</a>
                            <a href="#">Service Points</a>
                            <a href="#">Pricing Plan</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Useful Links</h2>
                            <a href="#">Terms of use</a>
                            <a href="#">Privacy policy</a>
                            <a href="#">Cookies</a>
                            <a href="#">Help</a>
                            <a href="#">FQAs</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <p>&copy; <a href="index.php">Driving Schoo;</a>, All Right Reserved.
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <script>
		var dt = new Date();
		document.getElementById("datetime").innerHTML = (("0"+dt.getDate( )).slice(-2))+"."+(("0"+(dt.getMonth()+1)).slice(-2))+"."+(dt.getFullYear())+"."+(("0"+dt.getHours()).slice(-2))+":"+(("0"+dt.getMinutes()).slice(-2));
	</script>
            <script>
            var dropdown = document.getElementsByClassName("dropdown-btn");
            var i;
            for(i=0; i<dropdown.length; i++){
                dropdown[i].addEventListener("click", function(){this.classList.toggle("active");
                    var dropdownContent = this.nextElementSibling;
                    if(dropdownContent.style.display === "block"){
                        dropdownContent.style.display = "none";
                    }else{
                        dropdownContent.style.display = "block";
                    }
                });
            }
        </script>
    </body>
</html>
