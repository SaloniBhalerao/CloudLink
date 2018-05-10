<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome To CloudLink</title>
    <!-- jQUERY   -->
    <script
    src="http://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
    
	<!-- Auth0 -->
    <script src="https://cdn.auth0.com/js/auth0/8.8/auth0.min.js"></script>
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    

    <!-- Initializing Script -->
    <script>
        $(document).ready(function() {
          var webAuth = new auth0.WebAuth({
            domain: '',
            clientID: '',
            redirectUri: '',
            audience: ``,
            responseType: 'code',
            scope: 'openid profile'
          });
		  
          $('#login').click(function(e) {
            e.preventDefault();
            webAuth.authorize();
          });		  
        });
		
		$(document).ready(function() {
          var webAuth1 = new auth0.WebAuth({
            domain: '',
            clientID: '',
            redirectUri: '',
            audience: ``,
            responseType: 'code',
            scope: 'openid profile'
          });
		  
          $('#login1').click(function(e) {
            e.preventDefault();
            webAuth1.authorize();
          });		  
        });
    </script>
</head>
<center>
<br><br><br>
<h1 style="font-family:Times New Roman;color:white;">Welcome to CloudLink</h1>
<br>
<h3 style="font-family:Times New Roman;color:white;">Please select your Role!!<h3></center>
<body background="https://s3-us-west-1.amazonaws.com/cloudimages2018/cloud-wallpaper-cartoon.jpg">
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <button id="login" class="btn btn btn-lg btn-light btn-block" style="font-family:Times New Roman;color:black;border:1px solid #000;">Admin</button>
            </div>
        </div>
    </div>
	<div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <button id="login" class="btn btn btn-lg btn-light btn-block" style="font-family:Times New Roman;color:black;border:1px solid #000;">Developer</button>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <button id="login1" class="btn btn-lg btn-light btn-block" style="font-family:Times New Roman;color:black;border:1px solid #000;">Tester</button>
            </div>
        </div>
    </div>
	<div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <button id="login" class="btn btn btn-lg btn-light btn-block" style="font-family:Times New Roman;color:black;border:1px solid #000;">DevOps</button>
            </div>
        </div>
    </div>
	<div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <button id="login" class="btn btn btn-lg btn-light btn-block" style="font-family:Times New Roman;color:black;border:1px solid #000;">User</button>
            </div>
        </div>
    </div>
</body>
</html>
