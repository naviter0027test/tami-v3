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
@include('company.layout.menu')
        <div class="content">
            <h3>案件查詢 - 明細</h3>
            @if($result['result'] == false) 
            {{ $result['msg'] }}
            @else
            <form method='post' action='/company/edit' companyId="{{ $result['company']->id }}" class='form1' enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <h5>帳號</h5>
                <p> <input type="text" name="account" value="{{ $result['company']->account }}" readonly /> </p>
                <h5>廠商名稱</h5>
                <p> <input type="text" name="name" value="{{ $result['company']->name }}" /> </p>
                <h5>Logo </h5>
                <p>
                @if($result['company']->logo != '')
                    <img src="/uploads{{ $result['company']->logo }}" class="custPic" /> <br />
                @else
                    無<br />
                @endif
                    更換如下:
                    <input type="file" name="logo" /> </p>
                <h5>E-mail</h5>
                <p> <input type="text" name="email" value="{{ $result['company']->email }}" /> </p>
                <h5>點亮資訊1</h5>
                <p>
                @if($result['company']->infoPath1 != '' && $result['company']->infoMode1 == 1)
                    <img src="/uploads{{ $result['company']->infoPath1 }}" class="custPic" /> <br />
                @elseif($result['company']->infoPath1 != '' && $result['company']->infoMode1 == 2)
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $result['company']->infoPath1 }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe><br />
                @else
                    無<br />
                @endif
                    更換如下:
                    <select type="text" name="infoMode1" class="infoMode" infoNum="1"> 
                        <option value="1" {{ $result['company']->infoMode1 == '1' ? 'selected="selected"' : '' }} >圖片上傳</option>
                        <option value="2" {{ $result['company']->infoMode1 == '2' ? 'selected="selected"' : '' }} >影片網址(Youtube)</option>
                    </select> 
                    <input type="file" name="infoPath1" /> 
                    <input type="text" name="infoVideo1" /> 
                </p>
                <h5>點亮資訊2</h5>
                <p>
                @if($result['company']->infoPath2 != '' && $result['company']->infoMode2 == 1)
                    <img src="/uploads{{ $result['company']->infoPath2 }}" class="custPic" /> <br />
                @elseif($result['company']->infoPath2 != '' && $result['company']->infoMode2 == 2)
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $result['company']->infoPath2 }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe><br />
                @else
                    無<br />
                @endif
                    更換如下:
                    <select type="text" name="infoMode2" class="infoMode" infoNum="2"> 
                        <option value="1" {{ $result['company']->infoMode2 == '1' ? 'selected="selected"' : '' }} >圖片上傳</option>
                        <option value="2" {{ $result['company']->infoMode2 == '2' ? 'selected="selected"' : '' }} >影片網址(Youtube)</option>
                    </select> 
                    <input type="file" name="infoPath2" /> 
                    <input type="text" name="infoVideo2" /> 
                </p>
                <h5>點亮資訊3</h5>
                <p>
                @if($result['company']->infoPath3 != '' && $result['company']->infoMode3 == 1)
                    <img src="/uploads{{ $result['company']->infoPath3 }}" class="custPic" /> <br />
                @elseif($result['company']->infoPath3 != '' && $result['company']->infoMode3 == 2)
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $result['company']->infoPath3 }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe><br />
                @else
                    無<br />
                @endif
                    更換如下:
                    <select type="text" name="infoMode3" class="infoMode" infoNum="3"> 
                        <option value="1" {{ $result['company']->infoMode3 == '1' ? 'selected="selected"' : '' }} >圖片上傳</option>
                        <option value="2" {{ $result['company']->infoMode3 == '2' ? 'selected="selected"' : '' }} >影片網址(Youtube)</option>
                    </select> 
                    <input type="file" name="infoPath3" /> 
                    <input type="text" name="infoVideo3" /> 
                </p>
                <h5>點亮資訊4</h5>
                <p>
                @if($result['company']->infoPath4 != '' && $result['company']->infoMode4 == 1)
                    <img src="/uploads{{ $result['company']->infoPath4 }}" class="custPic" /> <br />
                @elseif($result['company']->infoPath4 != '' && $result['company']->infoMode4 == 2)
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $result['company']->infoPath4 }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe><br />
                @else
                    無<br />
                @endif
                    更換如下:
                    <select type="text" name="infoMode4" class="infoMode" infoNum="4"> 
                        <option value="1" {{ $result['company']->infoMode4 == '1' ? 'selected="selected"' : '' }} >圖片上傳</option>
                        <option value="2" {{ $result['company']->infoMode4 == '2' ? 'selected="selected"' : '' }} >影片網址(Youtube)</option>
                    </select> 
                    <input type="file" name="infoPath4" /> 
                    <input type="text" name="infoVideo4" /> 
                </p>
                <h5>點亮資訊5</h5>
                <p>
                @if($result['company']->infoPath5 != '' && $result['company']->infoMode5 == 1)
                    <img src="/uploads{{ $result['company']->infoPath5 }}" class="custPic" /> <br />
                @elseif($result['company']->infoPath5 != '' && $result['company']->infoMode5 == 2)
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $result['company']->infoPath5 }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe><br />
                @else
                    無<br />
                @endif
                    更換如下:
                    <select type="text" name="infoMode5" class="infoMode" infoNum="5"> 
                        <option value="1" {{ $result['company']->infoMode5 == '1' ? 'selected="selected"' : '' }} >圖片上傳</option>
                        <option value="2" {{ $result['company']->infoMode5 == '2' ? 'selected="selected"' : '' }} >影片網址(Youtube)</option>
                    </select> 
                    <input type="file" name="infoPath5" /> 
                    <input type="text" name="infoVideo5" /> 
                </p>
                <h5>聯絡方式(超連結)</h5>
                <p> <input type="text" name="contact" value="{{ $result['company']->contact }}" /> </p>
                <p class=""> <button class="btn">更改</button> </p>
            </form>

            @endif
        </div>
@include('company.layout.footer')
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src="/js/company/edit.js"></script>
</html>
