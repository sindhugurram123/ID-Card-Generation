<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<form action="insert1.php" method="post">
    <p>
        <label for="busNo">Bus No. </label>
      <input type="text" name="bus_no" id="busNo">
    </p>
    <p>
        <label for="routeNo">Route No</label>
        <input type="text" name="route_no" id="routeNo">
    </p>
    <p>
        <label for="busName">Bus Name</label>
        <input type="text" name="bus_name" id="busName">
    </p>
    <p>
        <label for="busSeats">Seats</label>
        <input type="text" name="bus_seats" id="busSeats">
    </p>
    
    <p>
        <label for="driverName">Driver Name</label>
        <input type="text" name="driver_name" id="driverName">
    </p>
    <p>
        <label for="mobileNum">Mobile Number</label>
        <input type="text" name="mobile_no" id="mobileNum">
    </p>
    <p>
        <label for="boardingPoint">Boarding Points</label>
        <input type="text" name="boarding_points" id="boardingPoint">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>