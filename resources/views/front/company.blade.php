<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes" viewport-fit="cover" />
<meta name="description" content="">
<meta name="author" content="">
<meta http-equiv="Cache-Control" content="no-cache">

<title>{{ $company->nameShow }}</title>


<link href="/css/style.css" rel="stylesheet">

</head>

<body class="body_company">

<div class="company_list {{ $company->frontModeShow }}">
	<div class="transform">
        <a href="/" class="btn_back"><img src="/images/icon_back_arrow.svg"></a>
        <div class="outer">
            <div class="logo"><div><img src="/uploads{{ $company->logo2 }}"></div></div>
            <div class="company_name"><div>{{ $company->nameShow }}</div></div>
            <div class="info">
                <div class="col01">
                    <div class="website"><a href="{{ $company->contactLink4 }}" target="_blank">Web</a></div>
                    <div class="desc">
                        @if(trim($company->email) != '')
                        <div class="item">EMAIL / {{ $company->email }}</div>
                        @else
                        <div class="item">&nbsp;</div>
                        @endif
                        @if(trim($company->contactLink1) != '')
                        <div class="item">TEL / {{ $company->contactLink1 }}</div>
                        @else
                        <div class="item">&nbsp;</div>
                        @endif
                        @if(trim($company->contactLink2) != '')
                        <div class="item">FAX / {{ $company->contactLink2 }}</div><br />
                        @else
                        <div class="item">&nbsp;</div>
                        @endif
                        @if(trim($company->contactLink3) != '')
                        {{ $company->contactLink3 }}
                        @else
                        &nbsp;
                        @endif
                    </div>
                </div>
                <div class="col02">
                    <div class="img">
                    <!--
                    <img src="/images/company_img001.jpg" class="infoPathImg">
                    -->
                    @if(trim($company->infoPath1) == '')
                    <img src="/images/company_img001.jpg" class="infoPathImg">
                    @elseif(trim($company->infoPath1) != '')
                    <img src="/uploads{{ $company->infoPath1 }}" class="infoPathImg">
                    @endif
                    </div>
                    @if(trim($company->infoPath1) != '')
                    <input type="hidden" class="infoPath" value="/uploads{{ $company->infoPath1 }}" />
                    @endif
                    @if(trim($company->infoPath2) != '')
                    <input type="hidden" class="infoPath" value="/uploads{{ $company->infoPath2 }}" />
                    @endif
                    @if(trim($company->infoPath3) != '')
                    <input type="hidden" class="infoPath" value="/uploads{{ $company->infoPath3 }}" />
                    @endif
                    @if(trim($company->infoPath4) != '')
                    <input type="hidden" class="infoPath" value="/uploads{{ $company->infoPath4 }}" />
                    @endif
                    @if(trim($company->infoPath5) != '')
                    <input type="hidden" class="infoPath" value="/uploads{{ $company->infoPath5 }}" />
                    @endif
                </div>
                <div class="col03">
                    <div class="img">
                    @if(trim($company->companyRightInfo) == '')
                        <img src="/images/company_img002.jpg">
                    @else
                        <img src="/uploads{{ $company->companyRightInfo }}">
                    @endif
                    </div>
                </div>
            </div>
            <div class="action">
                <a href="/front/company/{{ $company->id }}/product">PRODUCTS LIST<i></i></a>
            </div>
        </div>
    </div>    
</div>


<div class="body_overly"></div>
<div class="mobile_rotate">
	<img src="/images/mobile_rotate.svg" >
</div>



<script src="/js/front/js/jquery.min.js"></script>
<script src="/js/front/js/script.js"></script>
<script src="/js/front/js/company.js"></script>

</body>
</html>
