<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes" />
<meta name="description" content="">
<meta name="author" content="">

<title>益鋐企业有限公司</title>


<link href="/css/style.css" rel="stylesheet">

</head>

<body class="body_company">

<div class="company_list {{ $company->frontModeShow }}">
	<div class="transform">
        <a href="/" class="btn_back"><img src="/images/icon_back_arrow.svg"></a>
        <div class="outer">
            <div class="logo"><div><img src="/uploads{{ $company->logo }}"></div></div>
            <div class="company_name"><div>{{ $company->nameShow }}</div></div>
            <div class="info">
                <div class="col01">
                    <div class="website"><a href="#" target="_blank">Web</a></div>
                    <div class="desc">
                        @if(trim($company->email) != '')
                        <div class="item">EMAIL / {{ $company->email }}</div>
                        @endif
                        @if(trim($company->contactLink1) != '')
                        <div class="item">TEL / {{ $company->contactLink1 }}</div>
                        @endif
                        @if(trim($company->contactLink2) != '')
                        <div class="item">FAX / {{ $company->contactLink2 }}<br />
                        @endif
                        @if(trim($company->contactLink3) != '')
                        {{ $company->contactLink3 }}
                        @endif
                        </div>
                    </div>
                </div>
                <div class="col02">
                    <div class="img"><img src="/images/company_img001.jpg"></div>
                </div>
                <div class="col03">
                    <div class="img"><a href="#"><img src="/images/company_img002.jpg"></a></div>
                </div>
            </div>
            <div class="action">
                <a href="company/product">PRODUCTS LIST<i></i></a>
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

</body>
</html>
