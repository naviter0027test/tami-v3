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
            <h3>聯絡列表</h3>
            <table class="table1">
                <thead>
                    <tr>
                        <td>姓名</td>
                        <td>E-mail</td>
                        <td>提問日期</td>
                        <td>狀態</td>
                        <td>操作</td>
                    </tr>
                </thead>
                <tbody>
                @if(isset($result['contacts']))
                @foreach($result['contacts'] as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->created_at }}</td>
                    @if($contact->active == '未處理')
                        <td class="fontAlert"><i class="glyphicon glyphicon-alert"></i> {{ $contact->active }}</td>
                    @else
                        <td>{{ $contact->active }}</td>
                    @endif
                        <td>
                            <a href='/admin/contact/edit/{{ $contact->id }}' class="glyphicon glyphicon-pencil"></a>
                        </td>
                    </tr>
                @endforeach
                @endif
                </tbody>
            </table>
            <div class="pagination paginationCenter">
            @if(isset($result['amount']))
            @for($i = 0; $i < ceil($result['amount'] / $offset); ++$i)
                @if(($i+1) == $nowPage)
                <label>{{ $i+1 }}</label>
                @elseif(($i+1) != $nowPage && abs($i+1-$nowPage) < 5)
                <a href="/admin/contact/?nowPage={{ $i+1 }}">{{ $i+1 }}</a>
                @endif
            @endfor
            @endif
            </div>
        </div>
        </div>
@include('admin.layout.footer')
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src="/js/admin/contact/index.js"></script>
</html>
