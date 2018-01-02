<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="first.css">
  <link rel="stylesheet" type="text/css" href="menu.css">
<style>

.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
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
<div class="container" align="center-right">
                                  
  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Class
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
	<li class="dropdown-submenu">
      <a class="test" tabindex="-1" href="#">B.Tech<span class="caret"></span></a>
	  <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">1st year</a></li>
          <li><a tabindex="-1" href="#">2nd year</a></li>
		  <li><a tabindex="-1" href="#">3rd year</a></li>
		  <li><a tabindex="-1" href="#">4th year</a></li>
          
        </ul>
	  
	  </li>
	  
	  
	  
	  <li class="dropdown-submenu">
	  <a class="test" tabindex="-1" href="#">M.Tech<span class="caret"></span></a>
	   <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">1st year</a></li>
          <li><a tabindex="-1" href="#">2nd year</a></li>
		  <li><a tabindex="-1" href="#">3rd year</a></li>
		  <li><a tabindex="-1" href="#">4th year</a></li>
          
        </ul>
	 </li>
	 
	 
      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Pharmacy <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">1st year</a></li>
          <li><a tabindex="-1" href="#">2nd year</a></li>
		  <li><a tabindex="-1" href="#">3rd year</a></li>
		  <li><a tabindex="-1" href="#">4th year</a></li>
          
        </ul>
      </li>
    </ul>
  </div>
</div>

<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

</body>
</html>