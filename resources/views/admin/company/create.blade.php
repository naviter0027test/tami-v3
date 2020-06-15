<html>
    <head>
        <meta charset="utf-8">
        <title>管理系統</title>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
        <link href='/css/admin/body.css' rel='stylesheet' />
    </head>
    <body>
@include('admin.layout.menu')
        <div class="content">
            <h3>廠商 - 新增</h3>
            <form method='post' action='/admin/company/create' class='form1' enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <h5>帳號</h5>
                <p> <input type="text" name="account" required /> </p>
                <h5>密碼</h5>
                <p> <input type="password" name="password" required /> </p>
                <h5>廠商名稱</h5>
                <p> <input type="text" name="name" /> </p>
                <h5>Logo</h5>
                <p> <input type="file" name="logo" /> </p>
                <h5>E-mail</h5>
                <p> <input type="text" name="email" /> </p>
                <h5>是否啟用</h5>
                <p> 
                    <select type="text" name="active"> 
                        <option value="1">是</option>
                        <option value="0">否</option>
                    </select> 
                </p>
                <h5>點亮資訊1</h5>
                <p> 
                    <select type="text" name="infoMode1" class="infoMode" infoNum="1"> 
                        <option value="1">圖片上傳</option>
                        <option value="2">影片網址(Youtube)</option>
                    </select> 
                    <input type="file" name="infoPath1" /> 
                    <input type="text" name="infoVideo1" /> 
                </p>
                <h5>點亮資訊2</h5>
                <p> 
                    <select type="text" name="infoMode2" class="infoMode" infoNum="2"> 
                        <option value="1">圖片上傳</option>
                        <option value="2">影片網址(Youtube)</option>
                    </select> 
                    <input type="file" name="infoPath2" /> 
                    <input type="text" name="infoVideo2" /> 
                </p>
                <h5>點亮資訊3</h5>
                <p> 
                    <select type="text" name="infoMode3" class="infoMode" infoNum="3"> 
                        <option value="1">圖片上傳</option>
                        <option value="2">影片網址(Youtube)</option>
                    </select> 
                    <input type="file" name="infoPath3" /> 
                    <input type="text" name="infoVideo3" /> 
                </p>
                <h5>點亮資訊4</h5>
                <p> 
                    <select type="text" name="infoMode4" class="infoMode" infoNum="4"> 
                        <option value="1">圖片上傳</option>
                        <option value="2">影片網址(Youtube)</option>
                    </select> 
                    <input type="file" name="infoPath4" /> 
                    <input type="text" name="infoVideo4" /> 
                </p>
                <h5>點亮資訊5</h5>
                <p> 
                    <select type="text" name="infoMode5" class="infoMode" infoNum="5"> 
                        <option value="1">圖片上傳</option>
                        <option value="2">影片網址(Youtube)</option>
                    </select> 
                    <input type="file" name="infoPath5" /> 
                    <input type="text" name="infoVideo5" /> 
                </p>
                </p>
                <h5>聯絡方式(超連結)</h5>
                <p> <input type="text" name="contact" /> </p>
                <p class=""> <button class="btn">新增</button> </p>
            </form>
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src="/lib/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="/lib/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="/lib/jquery-validation/dist/localization/messages_zh_TW.min.js"></script>
    <script src="/js/admin/company/create.js"></script>
</html>
