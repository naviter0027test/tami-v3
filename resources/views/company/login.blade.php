<html>
    <head>
        <meta charset="utf-8">
        <title>管理系統</title>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
        <link href='/css/company/body.css' rel='stylesheet' />
        <link href='/css/company/login.css' rel='stylesheet' />
    </head>
    <body>
        <div class="loginDiv">
            <h3 class="companyName">廠商管理系統</h3>
            <form class="loginForm" method="post" action="/company/login">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <h5>帳號:</h5>
                <p> <input type="text" name="account" /> </p>
                <h5>密碼:</h5>
                <p> <input type="password" name="password" /> </p>
                <p class="loginBtnP"> <button class="btn loginSubmit">登入</button> </p>
                <p class="loginBtnP"> <a href="/company/forget" class="">忘記密碼</a> </p>
                @if(isset($result['errMsg']) == true)
                <p>{{ $result['errMsg'] }}</p>
                @endif
            </form>
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
</html>
