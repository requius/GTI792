<!DOCTYPE html>
<html>
<head>
    <title>Avatalk</title>
    <link rel="shotcut icon" type="image/x-icon" href="images/favicon.ico">
    <link href="css/index.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Avatalk, Chat with strangers" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '6LfetQ8UAAAAAL4UFeSq8t1IweyPsALAacTAbWa_'
        });
      };
    </script>
</head>
<body>
    <img src="images/bg.jpg" class="bg">
    <div class="main">
        <img src="images/title_trans.png" class="title logo"><br /><br />
        <h3>Talk to strangers around the world</h3>
        <h2>Through an avatar</h2>
        <div class="main-w3lsrow">
            <!-- login form -->
            <div class="login-form login-form-left"> 
                <div class="agile-row">
                    <div class="login-agileits-top">
                        <div><a href=""><span class="icon-fb-test">login with facebook<span></a></div>
                        <br/>
                        <!--<div><a class="login-gp"><img src="images/logo-gp.png" class="logo-gp">login with google+</a></div>-->
                        <div><a href="#"><span class="icon-gp-test">login with google+</span></a></div>
                        <!--<a class="icon-social-login icon-gp">login with google+</a>-->
                        <br/><br/>
                        <div class="divider">
                            <strong class="divider-title">or</strong>
                        </div>
                        <br/>
                        <form action="#" method="post"> 
                            <input type="text" class="username" name="username" placeholder="Username" required=""/><br/>
                            <input type="password" class="password" name="password" placeholder="Password" required=""/>  
                            <label class="remember">
                                <input type="checkbox" class="checkbox">
                                <span> Remember me ?</span> 
                            </label>   
                            <input type="submit" value="LOGIN"> 
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
                        <form action="#" method="post"> 
                            <input type="text" class="email" name="email" placeholder="Email" required=""/><br/>
                            <input type="text" class="username" name="username" placeholder="Username" required=""/><br/>
                            <input type="password" class="password" name="password" placeholder="Password" required=""/>
                            <div class="policy">
                                <input type="checkbox" class="checkbox">
                                <span>I have read and agree to the <a class="term" href="#">Term of Service</a> and <a class="term" href="#">Privacy Policy</a></span> 
                            </div>
                            <br/>
                            <div id="html_element"></div>

                            <input type="submit" value="CREATE ACCOUNT">
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