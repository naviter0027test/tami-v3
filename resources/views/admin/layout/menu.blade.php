<div class="admin-bar">
    <span>系統 -- 管理者</span>
    <div class="tool-right">
        <a href="/admin/logout">登出</a>
    </div>
</div>

<div class="admin-menu">
    <div class="menu1">
        <a href="/admin/setting" class="{{ strpos(\Request::path(), 'admin/setting') === false ? '' : 'clicked' }} glyphicon glyphicon-lock">
        密碼更改</a>
    </div>
    <div class="menu1">
        <a href="/admin/company" class="{{ strpos(\Request::path(), 'admin/company') === false ? '' : 'clicked' }} glyphicon glyphicon-user">
        廠商管理</a>
    </div>
</div>
