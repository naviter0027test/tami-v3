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
            <h3 class="companyName"></h3>
            <form method='post' action='/' class='form1 loginForm'>
                <h5>{{ $res['message'] }}</h5>
                <p class=""> <a href="/company/forget" class="btn loginSubmit">回上頁</a> </p>
            </form>
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
</html>
