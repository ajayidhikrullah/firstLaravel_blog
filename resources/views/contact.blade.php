<!DOCTYPE html>
<html lang="en">
<head>
    <!-- important tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!--Title-->
    <title>[M N L]</title>

    <!--favicon-->
    <link rel="shortcut icon" href="img/favicon/">

    <!--Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Railway:100,200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

    <!--Font- awesome-->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    
    <!--Boostrap css-->
    <!-- <link rel="stylesheet" href="boostrap.css"> -->
    <!-- <script src="main.js"></script> -->
    <link rel="stylesheet" href="css/style.css">
    <script src=""></script>
    
    
</head>

<body>
    <!--  -->
    <header>
        <div class="main-header">
                    LOGO
                </div>
        <!-- <div class="clear"></div> -->
                <nav class="main-nav">
                    <ul>
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./contact.php">Contact</a></li>
    <!--JUST ADDED NEW HEADER--><li><a href="#">About</a></li>
                        <li><a href="./signup.php">Sign Up</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <form action="logout.php">
                            <button id="logout">Log Out</button>
                        </form>

                        <div class="searchbar">
                            <button id="logout" type="submit"><i class="fa fa-search fa-5x"></i></button>
                        </div>
                    </ul>
                </nav>
            </header>
<!-- =========================================== -->
<div class="full_section"></div>
<div class="signup-page">
            <h4>Contact Us/Send Us a Message</h4>
            <!-- <p>SignUp to stay Updated</p> -->
            <form action="contact.php" method="POST">
                <div>
                    <label for="name">Full-Name:</label>
                    <input type="text" id="name" name="full_name" required placeholder="Enter your Full Name">
                </div>
                <div>
                    <label for="mail">E-mail:</label>
                    <input type="email" id="mail" name="user_mail" required placeholder="Enter your Email address">
                </div>
                <div>
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" id="subject" placeholder="Enter your Heading">
                </div>
                <div>
                    <label for="message">Your Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Type in your message, request or complaint"></textarea>
                    <!-- <input type="text" id="message" name="message" placeholder="Your Message or request or Complain"> -->
                </div>
                <div>
                    <!-- <input type="submit" value="Send Message" name="submit"> -->
                </div>
                <button type="submit" name="submit" class="btn-signup">Send Message</button>
            </form>            
</div>
        <br>

    <footer class="main-footer">
        <div class="footer1">
            <h5>Services</h5>
            <p>Fashion Bundles</p>
            <p>clothing neating</p>
            <p>On delivery</p>           
        </div>
        <!-- <div style="clear:both"></div> -->
        <div class="foosup">
            <h5>Support</h5>
            <p>Registration Tips</p>
            <p>BallyApp</p>
            <p>BallyGoogle</p>
        </div>

        <div class="foolife">
            <h5>LifeStyle</h5>
            <p>Islamic Attire</p>
            <p>Islamic Modelling</p>
            <p>Islamic Events</p>
        </div>
        
        <!-- <div style="clear:both"></div> -->

        
        <div style="clear:both"></div>
        <div class="fooadd">
            <address>                    
                <i class="fa fa-phone fa-2x">Tel: <a href="tel: +234-081-8289-6889-">+234-081-8289-6889</a></i><br/>
                <i class="fa fa-envelope-square fa-2x"> E-Mail: <a href="mailto:ajayidhikrullah@gmail.com">ajayidhikrullah@gmail.com</a></i><br/>
                <hr>
                <i class="fa fa-map-marker fa-5x"> <span class="p">2, Obokun Close, Allen Avenue, Ikeja Lagos state <br/></span></i>
                <p class="p">&COPY; Copyright ajayidhikrullah2018</p>
            </address>
            
        </div>
    </footer>
    

    <script src="js/script.js"></script>

</body>
</html>

<!-- 
=================/
KEEP THIS HERE =====/
======================/

require('db.php');
// require('db.php');
// include('db.php');
// include('contact.php');
// include('welcome.php');

// check for submit
    if (isset($_POST['name'])) {

		# code...
// include('db.php');
		
        // echo $_POST['user_mail'];exit;
				//get form data - email
				//Accept user email from Input field and store in vaiable
/*                
                $email = mysqli_real_escape_string($conn, $_POST['user_mail']);
				
                //USE SQL QUERY TO FETCH ALL EMAILS THAT IS EQUAL TO USERINPUT
                $select_from_db = "SELECT * FROM emails";
                $fetch_emails = mysqli_query($conn, $select_from_db);
                $data = [];
                foreach($fetch_emails as $key => $value){
                    // $data['email'] = $value['user_email'];
                    array_push($data, $value['user_email']);
                }
                print_r($data); exit;

*/

//get form data
$email = mysqli_real_escape_string($conn, $_POST['user_mail']);
//fetch/check all emails in db
$query_db = "SELECT * FROM emails WHERE user_email='$email'";
//connect query_db with d connection
$fetch_db_mails = mysqli_query($conn, $query_db);
// print_r($fetch_db_mails);
//check duplicate
if(mysqli_num_rows($fetch_db_mails) > 0){
    echo 'User already exists ';
    header('Location: contact.php?message=Email Already Exist');
    // echo  . 'Already exists';
    // include('welcome.php');
} else{
    // echo 'User CreatedSuccesssfully';
    $query = "INSERT INTO emails(user_email) VALUES('$email')";
    $fetch_db_mails = mysqli_query($conn, $query);
    // include('welcome.php');
    // successfullyCreated
    // header('Location: contact.php?message=successfullyCreated ');
    exit;

};

/*
				 $sql = "SELECT * FROM emails WHERE user_email='$email'"; //thi fetch the uerinput that is submitted
				 $sql = "SELECT * FROM emails"; //thi fetch the uerinput that is submitted
*/
				//  echo $sql;

				// insert to database
				/*
				$query = "INSERT INTO emails(user_email) VALUES('$email')";

        if(mysqli_query($conn, $query)){
				include('welcome.php'); //this takes me to welcome page and shw d success messg
				// header('Location: welcome.php?');
				exit();
                }*/
                
            // echo 'Error: ' . mysqli_error($conn);

//CHECKING FOR DUPLICATE ENTRY OF EMAIL
	// check for d connection and go into d database to query it
	// $email = mysqli_real_escape_string($conn, $_POST['user_mail']);
/*
	$sql = "SELECT * FROM emails WHERE user_email = '$email'";
	// check query to un in db
	// echo $sql;
	$result = mysqli_query($conn, $sql);
	// check for anykind of result in db
	$resCheck = mysqli_num_rows($result);
/*
	// echo $resCheck;

	//if there is a result, it returns a row; and den if there is a row more dan 0, throw error below
	/*
	if($resCheck > 0){
		header('Location: contact.php?contact=usertaken');
		include('welcome.php');
		exit();
	} else{
		include('Welcome.php');
		header('Location: ../contact.php?contact=userCreated');
		exit();
    }*/
};
// echo $resCheck; -->