<html>  
<head>   
<title> Registration Form </title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</head>  
<body>

<form action="index.php" enctype="multipart/form-data" method="POST"> 
<h1> Registration Form </h1>
<label> Complete Name </label>         
<input type="text" name="completename" required /> <br> <br>  
<label> Email Address </label>     
<input type="email" name="emailaddress" required /> <br> <br>  
<label> Password </label>         
<input type="password" name="password" required /> <br> <br>
<label> Confirm Password </label>         
<input type="password" name="confirmpassword" required /> <br> <br>  
<label> Picture </label>         
<input type="file" name="picture" required /> <br> <br>

<input type="submit" class="btn btn-secondary btn-lg" value="Submit Registration"/>
</form>
 
    
</body>  
</html>  