<html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" type="text/css" href="first.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta charset="utf-8">
    
<style type="text/css">
      .logo{
padding: 30px;
}

body
{
    background-image:url(clg.jpg);
    background-repeat: no-repeat;
    background-size:cover;
    overflow:hidden;
}
</style>

    </head>
    <body>
<center>
           <div class="logo">
        <img src="logo.png" height="150px" width="450px">
</div>     

</center>

        <div class="card card-1">
            <div class="box">
                <div class="sign">Sign In</div>

                <form action="valid.php" target="_top" method="post">

                    <input type="text" name="name" required autocomplete = "off"/>
                    <label for="Email">Email</label>

                    <div class='divider'></div>

                    <input type="password" name="pwd" required autocomplete = "off" />
                    <label for="Password">Password</label>


                    <div class="row">
                        <div class="for">
                            <div class="col-sm-8"><a href="forgot.php">Forgot Password?</a></div>
                            
                            <div class="col-sm-4"><button type="submit" class="btn btn-raised btn-info">Sign In</button></div>
                    
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-8"><a href="reset.php">Reset Password</a></div>
                    
                    </div>

                </form>


            </div>
        </div>

    </body>    
</html>
