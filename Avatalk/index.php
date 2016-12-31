<!DOCTYPE html>
<html>
<head>
    <title>Avatalk</title>
    <link rel="shotcut icon" type="image/x-icon" href="images/favicon.ico">
    <link href="bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap-3.3.7/css/font-awesome.css" rel="stylesheet">
    <link href="bootstrap-3.3.7/css/bootstrap-social.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Avatalk, Chat with strangers" />
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <script type="text/javascript" src="js/recaptcha.js"></script>
</head>
<body>
    <img src="images/bg.jpg" class="bg">
    <div class="main">
        <img src="images/title_trans.png" class="title logo"><br /><br />
        <h3>Talk to strangers around the world</h3>
        <h2>Through an avatar</h2>
        <div class="notice">
            
        </div>
        <div class="main-w3lsrow">
            <!-- login form -->
            <div class="login-form login-form-left"> 
                <div class="agile-row">
                    <div class="login-agileits-top">
                        <a class="btn btn-block btn-social btn-lg btn-facebook">
                            <span class="fa fa-facebook"></span> Login with Facebook
                        </a>
                        <a class="btn btn-block btn-social btn-lg btn-google">
                            <span class="fa fa-google"></span> Login with Google+
                        </a>
                        <br/>
                        <div class="divider">
                            <strong class="divider-title">or</strong>
                        </div>
                        <br/>
                        <form action="#" method="post" data-toggle="validator"> 
                            <input type="email" class="email" name="email" placeholder="Email" required/><br/>
                            <input type="password" class="password" name="password" placeholder="Password" pattern=".{6,}" title="Six or more characters" required/>  
                            <label class="remember">
                                <input type="checkbox" class="checkbox">
                                <span> Remember me ?</span> 
                            </label>   
                            <input type="submit" value="Login"> 
                        </form> 	
                    </div> 
                    <div class="login-agileits-bottom"> 
                        <h6><a href="#">Forgot password?</a></h6>
                    </div> 
                </div>  
            </div> 
            <!-- sign up form -->
            <div class="login-form agileits-right"> 
                <div class="agile-row">
                    <div class="login-agileits-top"> 	
                        <form action="#" method="post" data-toggle="validator"> 
                            <input type="email" name="email" placeholder="Email" required><br/>
                            <input type="text" class="username" name="username" placeholder="Username" required/><br/>
                            <input type="password" class="password" name="password" placeholder="Password" pattern=".{6,}" title="Six or more characters" required/>
                            <div class="policy">
                                <input type="checkbox" class="checkbox" required name="terms">
                                <span>I have read and agree to the <a class="term" href="#">Term of Service</a> and <a class="term" href="#">Privacy Policy</a></span> 
                            </div>
                            <br/>
                            <div id="html_element"></div>
                            <input type="submit" value="Create account">
                        </form>
                        <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
                            async defer>
                        </script>
                    </div>  
                </div>  
            </div> 
            <div class="clear"> </div>	 
        </div>	
    </div>	
</body>
</html>