<html>
    <head>
        <meta charset="utf-8">
        <title>系統</title>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
        <link href='/css/company/body.css' rel='stylesheet' />
        <link href='/css/company/login.css' rel='stylesheet' />
    </head>
    <body>
        <div class="loginDiv">
            <h3 class="companyName">忘記密碼</h3>
            <form method='post' action='/company/forget' class='form1 loginForm' enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <h5>email</h5>
                <p> 
                    <input type="text" name="email" value="" />
                </p>
                <p class=""> <button class="btn loginSubmit">發送新密碼</button> </p>
            </form>
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
</html>
