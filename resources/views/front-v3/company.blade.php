<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=yes, viewport-fit=cover" />
<meta name="description" content="">
<meta name="author" content="">

<title>TAMI</title>

<link rel="stylesheet" type="text/css" href="/css/tami-v3/animate.css">
<link rel="stylesheet" type="text/css" href="/css/tami-v3/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="/css/tami-v3/style.css">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-175242617-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-175242617-1');
</script>

</head>

<body>
<div class="company_info">
        <div class="version"><a href="?lan=cn" class="active">简中</a><a href="?lan=en">EN</a></div>                
    <div class="back"><a href="page01.html"><img src="/images/tami-v3/icon_back_white.svg"></a></div> 	
	<div class="content">
		<div class="brand">
        	<div class="box">
        		<img src="/uploads{{ $company->logo2 }}">        
            </div>
        </div>
        <div class="info">
        	<div class="col01">
                <div class="company_title">
                    <h2>{{ $company->nameShow }}</h2>
<!--
                    <small>HSIN LONG THREAD  ROLLING MACHINE CO., LTD.</small>
-->
                </div>
                <div class="info_detail">
            	<div class="info_left">
                	<div class="sub_title"><b>Web</b></div>
                    <div class="detail">
                    	<p>
                        @if(trim($company->email) != '')
                        EMAIL / <br />{{ $company->email }} <br />
                        @else
                        EMAIL / <br />
                        @endif
                        @if(trim($company->contactLink1) != '')
                        TEL / <br />{{ $company->contactLink1 }} <br />
                        @else
                        TEL / <br />
                        @endif
                        @if(trim($company->contactLink2) != '')
                        FAX / <br />{{ $company->contactLink2 }}<br />
                        @else
                        FAX / <br />
                        @endif
                        @if(trim($company->contactLink3) != '')
                        {{ $company->contactLink3 }}
                        @else
                        &nbsp;
                        @endif
                        </p>
                    </div>
                </div>
                <div class="info_right">
                	<div class="info_slider owl-carousel">
                    @for($i = 1; $i <= 5;++$i)
                    @if(trim($company->{'infoPath'. $i}) != '')
                    	<div class="item">
                            <div class="box">
                                <div class="img" style="background-image:url(/uploads{{ trim($company->{'infoPath'. $i}) }})"><!--更換background-image底圖-->   
                                                         
                                </div>
                                <div class="desc">
                                    <h3>
                                        {{ $company->titleShow }}
                                    </h3>
                                    <p>
                                        {!! $company->contactDescShow !!}
                                    
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @endfor
<!--
                        <div class="item">
                        	<div class="box">
                                <div class="img" style="background-image:url(/images/tami-v3/img_001.jpg)">
                                                         
                                </div>
                                <div class="desc">
                                    <h3>
                                        龍門型五軸加工機<br />
                                        CNC車床<br />
                                        CNC臥式銑床
                                    </h3>
                                    <p>
                                        以超高剛性的鑄件結構為基礎，結合強悍的主軸扭矩輸出與高規格的核心元件，實現領先群倫的重切削能力。並以電腦程式控制所有銑、鉆、滾牙、鑽斜孔、紋孔、攻牙的切削路徑，確保模頭擁有最佳精度及完美公差，再搭配自動刀具補正器，完全由程式控制以縮短製造時間，在大量生產時能提高產能。平台採螺栓式定位鎖緊，搭配特殊夾緊升降機構，按鈕啟動自動進給及鑽孔深度，配合自動退刀機構，使每一孔位達到精、準、穩的要求。
                                    
                                    </p>
                                </div>
                            </div>
                        </div>    
-->
                    </div>
                </div>
            </div>
            </div>
            <div class="col02">
            	<div class="ad">
                    <img src="/uploads{{ $company->companyRightInfo }}">
                </div>
            </div>       	
        </div>
        <div class="action">
        	<a href="page03.html"><img src="/images/tami-v3/button_001.png"><div>PRODUCTS LIST<i></i></div></a>
        </div>
	</div>
</div>
<div class="body_overly"></div>
<div class="mobile_rotate">
	<div class="img"><img src="/images/tami-v3/mobile_rotate.svg" ></div>
    <div class="txt"><img src="/images/tami-v3/mobile_rotate_txt.svg"></div>
</div>



<script src="/js/front-v3/js/jquery.min.js"></script>
<script src="/js/front-v3/js/fastclick.js"></script>
<script src="/js/front-v3/js/owl.carousel.js"></script>
<script src="/js/front-v3/js/script.js"></script>
</body>
</html>
