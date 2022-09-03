<html>  
<head>   
<title> Registration Form </title>  
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

<input type="submit" value="Submit Registration"/>
</form>
 
    
</body>  
</html>  