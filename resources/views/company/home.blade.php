<html>
    <head>
        <meta charset="utf-8">
        <title>管理系統</title>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
        <link href='/css/admin/body.css' rel='stylesheet' />
        <link href='/css/company/home.css' rel='stylesheet' />
    </head>
    <body>
@include('company.layout.menu')
        <div class="content">
            <h3>首頁</h3>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>53</h3>
                        <p>聯絡我們(未處理)</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-alert-circled"></i>
                    </div>
                    <a href="/company/contact" class="small-box-footer">&nbsp;</a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>0</h3>
                        <p>聯絡我們(處理中)</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-chatboxes-outline"></i>
                    </div>
                    <a href="/company/contact" class="small-box-footer">&nbsp;</a>
                </div>
            </div>
            <div class="pagination paginationCenter">
            </div>
        </div>
@include('company.layout.footer')
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
</html>
