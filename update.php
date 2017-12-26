<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="first.css">
  <link rel="stylesheet" type="text/css" href="menu.css">
  <style type="text/css">

  .tab
  {
    border-style:solid;
    border-color:black;
    color: black;
    font-weight: italic;
}

</style>
</head>

<?php 

$connet = @mysql_connect("localhost","root","sindhu");
mysql_select_db("idcard");

$result = mysql_query("select * from stud_master");

?>
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

<div class="container">

    <div  class="tab">
      <table class="table table-bordered ">
        <thead>
          <tr>
            <th>Name</th>       
            <th>Class</th>
            <th>Hall Ticket No.</th>
            <th>Batch</th>
            <th>Contact</th>
            <th>Image</th>
            <th>QR Code</th>
            <th>Update</th>
        </tr>
    </thead>

    <tbody>
        <?php while($row = mysql_fetch_array($result))
        { ?>
          <tr>
            <td ><?php echo $row['name'] ?></td>
            <td><?php echo $row['class'] ?></td>
            <td><?php echo $row['hall_ticket'] ?></td>
            <td contenteditable='true'><?php echo $row['batch'] ?></td>
            <td><?php echo $row['Phone_No'] ?></td>
            <td><img src="cap.png" width="30" height="40"></td>
            <td><img src="qr.png" width="30" height="40"></td>


            <form action="edit.php">
               <td><button  class="btn btn-primary">Edit</button></td></form>
           </tr>
           <?php }?>
       </tbody>
   </table>
</div>
</div>




<script>
    $(document).ready(function() {
        $('#userForm')
        .formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                name: {
                    validators: {
                        notEmpty: {
                            message: 'The full name is required'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z\s]+$/,
                            message: 'The full name can only consist of alphabetical characters'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required'
                        },
                        emailAddress: {
                            message: 'The email address is not valid'
                        }
                    }
                },
                website: {
                    validators: {
                        notEmpty: {
                            message: 'The website address is required'
                        },
                        uri: {
                            allowEmptyProtocol: true,
                            message: 'The website address is not valid'
                        }
                    }
                }
            }
        })
        .on('success.form.fv', function(e) {
            // Save the form data via an Ajax request
            e.preventDefault();

            var $form = $(e.target),
            id    = $form.find('[name="id"]').val();

            // The url and method might be different in your application
            $.ajax({
                url: 'http://jsonplaceholder.typicode.com/users/' + id,
                method: 'PUT',
                data: $form.serialize()
            }).success(function(response) {
                // Get the cells
                var $button = $('button[data-id="' + response.id + '"]'),
                $tr     = $button.closest('tr'),
                $cells  = $tr.find('td');

                // Update the cell data
                $cells
                .eq(1).html(response.name).end()
                .eq(2).html(response.email).end()
                .eq(3).html(response.website).end();

                // Hide the dialog
                $form.parents('.bootbox').modal('hide');

                // You can inform the user that the data is updated successfully
                // by highlighting the row or showing a message box
                bootbox.alert('The user profile is updated');
            });
        });

        $('.editButton').on('click', function() {
        // Get the record's ID via attribute
        var id = $(this).attr('data-id');

        $.ajax({
            url: 'http://jsonplaceholder.typicode.com/users/' + id,
            method: 'GET'
        }).success(function(response) {
            // Populate the form fields with the data returned from server
            $('#userForm')
            .find('[name="id"]').val(response.id).end()
            .find('[name="name"]').val(response.name).end()
            .find('[name="email"]').val(response.email).end()
            .find('[name="website"]').val(response.website).end();

            // Show the dialog
            bootbox
            .dialog({
                title: 'Edit the user profile',
                message: $('#userForm'),
                    show: false // We will show it manually later
                })
            .on('shown.bs.modal', function() {
                $('#userForm')
                        .show()                             // Show the login form
                        .formValidation('resetForm'); // Reset form
                    })
            .on('hide.bs.modal', function(e) {
                    // Bootbox will remove the modal (including the body which contains the login form)
                    // after hiding the modal
                    // Therefor, we need to backup the form
                    $('#userForm').hide().appendTo('body');
                })
            .modal('show');
        });
    });
    });

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

</script>

</body>

</html>
