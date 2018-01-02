<html> 
    <head>
        <title>Login Page</title>
        
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.0.0-beta.4/dist/css/bootstrap-material-design.min.css" integrity="sha384-R80DC0KVBO4GSTw+wZ5x2zn2pu4POSErBkf8/fSFhPXHxvHJydT0CSgAP2Yo2r4I" crossorigin="anonymous">
        
        <style>
        body{
            background-image:url("clg.jpg");
            background-repeat: no-repeat;
            background-size:cover;
            overflow:hidden;
         
        }
            div.anurag{
                font-style: normal;
                position: relative;
                top:10px;
                color: black;
                font-family: serif;
                font-size: 70px;
             
            }
            
            div.cvsr{
                position: relative;
                font-style: normal;
                font-family: serif;
                font-size: 20px;
                color: black;

            }
            div.login{
                position: relative;
                top: 10%;
                left:30%;
                border: 0px solid white;
            height: 50%;
            width: 40%;
           box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            background-color:#85C1E9;
                           
                           }
            
        </style>
    </head>

        <body>
            
            <div class="logo">
        <img src="logo.png" height="150px" width="450px">
</div>
            
            <div class="login">
<form action="valid.php" target="_top" method="post">
					<div class="border-box">
						<div class="form-group" style="font-size: 20px;">
							<br>
                            <br>
                             <label for="email">Email</label><br> <input
								type="email" id="email" placeholder="user@cvsr.ac.in" name="name">
						</div>
						<div class="form-group" style="font-size: 20px;">
							<label for="pwd">Password</label><br> <input type="password" id="pwd" placeholder="Password" name="pwd">
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
						<button type="reset" class="btn btn-default">Reset</button>
						<br> <br>
						<p class="one">
							<a href="forgot" >Forgot Passoword</a>       <a href="chage">Change
								Password</a>
                        </p>
                    
                    </div>
				</form>
     
                </div>
    


    </body>
    
</html>

