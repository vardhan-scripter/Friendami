<!DOCTYPE html>
<html>
<head>
  <title>Chatting Application</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">    
  <link rel="icon" type="image/png" href="images/logo.png">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script type="text/javascript">
   history.pushState(null, null, location.href);
   window.onpopstate = function () {
    window.location.href="index.php"
};

</script>
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background: url('images/background.jpg');background-size: cover;">
            <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                <form class="login100-form validate-form flex-sb flex-w">
                    <span class="login100-form-title p-b-53">
                        Get started with
                    </span>

                    <a href="./Controls/login.php" class="btn-face m-b-20">
                        SignIn
                    </a>

                    <a href="./Controls/register.php" class="btn-google m-b-20">
                        SignUp
                    </a>
                </form>
            </div>
        </div>
    </div>

</body>
</html>