
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Edit Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="menu.css">
        <style>
            body
            {
                background-image:url(clg.jpg);
                background-repeat: no-repeat;
                background-size:cover;
                overflow:hidden;
                background-color: #8c8c8c; 
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

        </style>

    </head>
    <body>
        <center>

            <div class="anurag">
                ANURAG GROUP OF INSTITUTIONS</div>

            <div class="cvsr">
                Formely known as "CVSR College Of Engineering" <br>Ghatkesar (M) Ranga Reddy (Dist.), Venkatapur, Telangana
            </div>
        </center> 
        <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#"><a href="user.php">Home</a></a>
                <a href="#"><a href="upload.php">Upload Info</a></a>
                <a href="#"><a href="update.php">Update Details</a></a>
                <a href="#"><a href="generate.html">Generate Card</a></a>
            </div>

            <div class="menu">
                <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
            </div>
        <table cellspacing="50" align="center">
            <div class="Edit">
                <br>
                <form class="form-horizontal" action="/action_page.php">
                    <div class="form-group" >
                        <tr><td><label class="control-label col-sm-2"  align="center">Name:</label><br></td>
                            <div class="col-sm-10">

                                <td><input type="text" maxlength="30"  style="3px"/> </td>
                            </div>
                    </div>
                    <div class="form-group">
                        <td><label class="control-label col-sm-2" for="roll no.">Roll No.:</label><br></td>
                        <div class="col-sm-10"> 
                            <td><input type="text" pattern="[A-Za-z]{3}" maxlength="10"  disabled/></td> 

                        </div>
                    </div>
                    </tr>
                <div class="form-group">
                    <tr> <td> <label class="control-label col-sm-2" >Branch</label><br></td>
                        <div class="col-sm-10"> 
                            <td><input type="text"  style="3px" disabled/> </td>

                        </div>
                </div>

                <div class="form-group">
                    <td><label class="control-label col-sm-2" >Year:</label><br></td>
                    <div class="col-sm-10"> 
                        <td><input type="text"  style="3px"/> </td>

                    </div>
                </div></tr>
            <div class="form-group">
                <tr><td><label class="control-label col-sm-2" >Section:</label><br></td>
                    <div class="col-sm-10"> 
                        <td><input type="text" value="" style="3px" disabled/></td> 

                    </div></div>
            <div class="form-group">
                <td><label class="control-label col-sm-2" >Bus No.:</label><br></td>
                <div class="col-sm-10"> 
                    <td><input type="number" min="1" max="70"  style="3px"/> </td>

                </div>
            </div>
            </tr>
        <div class="form-group">
            <tr><td><label class="control-label col-sm-2" >Boarding Point:</label><br></td>
                <div class="col-sm-10"> 
                    <td><input type="text"  style="3px"/> </td>

                </div>
        </div>

        <div class="form-group">
            <td> <label class="control-label col-sm-2" >Total Amount:</label><br></td>
            <div class="col-sm-10"> 
                <td><input type="number" /> </td>

            </div>
        </div>
        </tr>
    <div class="form-group">
        <tr><td> <label class="control-label col-sm-2" >Amount Paid:</label><br></td>
            <div class="col-sm-10"> 
                <td><input type="text"  name="quantity" min="0" max="5" style="3px"/> </td>

            </div>
    </div>

    <div class="form-group">
        <td><label class="control-label col-sm-2" >Balance:</label><br></td>
        <div class="col-sm-10"> 
            <td><input type="number" id="number" style="3px"/> </td>
        </div>
    </div>
    </tr> 
<div class="form-group">
    <tr><td><label class="control-label col-sm-2" >Academic Year:</label><br></td>
        <div class="col-sm-10"> 
            <td><input type="text"  style="3px"/> </td>

        </div>
</div>
<div class="form-group">
    <td><label class="control-label col-sm-2" >Date:</label><br></td>
    <div class="col-sm-10"> 
        <td><input type="date"  style="3px"/></td> 

    </div>
</div>
</tr>
</table><br>
<table align="center">
    <div class="form-group" > 
        <div class="col-sm-offset-2 col-sm-10">
            <tr><td> <button type="submit" class="btn btn-default">Update</button></td>
                <td><button type="cancel" class="btn btn-default">Cancel</button></td>
        </div>
    </div></tr>
</div>
</table>
</form>

            <script>
                function openNav() {
                    document.getElementById("mySidenav").style.width = "250px";
                }

                function closeNav() {
                    document.getElementById("mySidenav").style.width = "0";
                }
            </script>
</body>
</html>