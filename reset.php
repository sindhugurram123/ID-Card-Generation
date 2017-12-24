<html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" type="text/css" href="first.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta charset="utf-8">
    </head>



    <style>
        div.sign
        {

            width: 70%;
            font-family: 'Roboto';
            font-size: 32px;
            margin-bottom: 23px;

        }

        .card {
            background: #fff;
            border-radius: 2px;
            display: inline-block;
            height: 450px;
            top: 50px;
            left: 30%;
            margin: 1rem;
            position: relative;
            width: 500px;
        }
    </style>
    <body>



        <?php
session_start();
$connet = @mysql_connect("localhost","root","sindhu");
mysql_select_db("idcard");
if(isset($_POST['Submit']))
{
    $sql=mysql_query("SELECT password FROM  login_db where password='".$_POST['opwd']."' && email='".$_SESSION['login']."'");
    $num=mysql_fetch_array($sql);
    if($num>0)
    {
        $con=mysql_query("update userinfo set password='".$_POST['npwd']."' where email='".$_SESSION['login']."'");
        $_SESSION['msg1']="Password Changed Successfully !!";
    }
    else
    {
        $_SESSION['msg1']="Old Password not match !!";
    }
}
?>
        
<center>

    <div class="anurag">
    ANURAG GROUP OF INSTITUTIONS</div>

    <div class="cvsr">
    Formely known as "CVSR College Of Engineering" <br>Ghatkesar (M) Ranga Reddy (Dist.), Venkatapur, Telangana
    </div>
    </center>        



    <div class="card card-1">
    <div class="box">
    <div class="sign">Reset Password</div>

    <form target="_top" action="" method="post"  name="chngpwd">

    <input type="text" name="Email" required autocomplete = "off"/>
    <label for="Email">Email</label>

    <input type="password" name="opwd" required autocomplete = "off"/>
    <label for="Email">Old Password</label>

    <div class='divider'></div>

    <input type="password" name="npwd" required autocomplete = "off" />
    <label for="Password">New Password</label>

    <input type="password" name="rpwd" required autocomplete = "off" />
    <label for="Password">Retype New Password</label>


    <div class="row">
    <div class="for">


    <div class="col-sm-12"><button type="submit" value="submit" class="btn btn-raised btn-info">Sign In</button></div>

    </div>
    </div>


    </form>


    </div>
    </div>




    </body>    
    </html>
