<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=yes, viewport-fit=cover" />
<meta name="description" content="{{ $result['description'] }}">
<meta name="author" content="">

<title>{{ $result['title'] }}</title>

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

<body class="body_home">
<div class="home_div">
        <div class="version"><a href="?lan=cn" class="active">简中</a><a href="?lan=en">EN</a></div>                
	<div class="outer">
    	<div class="visited">{{ trans('front/index.browse_amount') }}：{{ $result['watchAmount'] }}</div>
        <div class="brand"><a href="#"><img src="{{ $result['logo'] }}" class="web"><img src="{{ $result['logoMobile'] }}" class="mobile"></a></div>
        <div class="overly" title="Close with clicked !!" alt="Close with clicked !!"></div>
        <div class="module_div">
        	<div class="mobile_block_bg">
                <img src="/images/tami-v3/home_mobile_block.png">                
            </div>
            <a href="#" class="btn_back"><img src="/images/tami-v3/icon_back_white.svg"></a>
        	<div id="block01" class="block_img" data-id="popup01">
            	
            	<img src="/images/tami-v3/home_module_01.png" class="block">
                <div class="animate">
                	<div class="block01_animate"><img src="/images/tami-v3/platform_01_01.png"></div>
                    <div class="block01_animate"><img src="/images/tami-v3/platform_01_02.png"></div>
                    <div class="block01_animate"><img src="/images/tami-v3/platform_01_03.png"></div>
                    <div class="block01_animate"><img src="/images/tami-v3/platform_01_04.png"></div>
                    <div class="block01_animate"><img src="/images/tami-v3/platform_01_05.png"></div>
                    <div class="block01_animate"><img src="/images/tami-v3/platform_01_06.png"></div>
                    <div class="block01_animate"><img src="/images/tami-v3/platform_01_03.png"></div>
                    <div class="block01_animate"><img src="/images/tami-v3/platform_01_02.png"></div>
                </div>
                       
            </div>
            <div id="block02" class="block_img" data-id="popup02">
            	<img src="/images/tami-v3/home_module_02.png" class="block">
                <div class="animate">
                	<div class="block02_animate"><img src="/images/tami-v3/platform_02_01.png"></div>
                    <div class="block02_animate"><img src="/images/tami-v3/platform_02_02.png"></div>
                    <div class="block02_animate"><img src="/images/tami-v3/platform_02_03.png"></div>
                    <div class="block02_animate"><img src="/images/tami-v3/platform_02_04.png"></div>
                    <div class="block02_animate"><img src="/images/tami-v3/platform_02_03.png"></div>
                    <div class="block02_animate"><img src="/images/tami-v3/platform_02_02.png"></div>
                </div>        
            </div>
        	<div id="block03" class="block_img" data-id="popup03">
            	<img src="/images/tami-v3/home_module_03.png" class="block">
                <div class="animate">
                	<div class="block03_animate"><img src="/images/tami-v3/platform_03_01.png"></div>
                    <div class="block03_animate"><img src="/images/tami-v3/platform_03_02.png"></div>
                    <div class="block03_animate"><img src="/images/tami-v3/platform_03_03.png"></div>
                    <div class="block03_animate"><img src="/images/tami-v3/platform_03_02.png"></div>
                </div>        
            </div>
        </div>
        
        <div id="popup01" class="popup_block item_5">
        	<img src="/images/tami-v3/home_company_list_bg_five_itmes.png" class="bg">
            <div class="box">                
                <div class="list_item">
                        @foreach($result['companyAreas']['左下區域']['companies'] as $company)
                    <div class="item">
                        <a href="front/company/{{ $company->id }}">
                            <div class="img"><img src="/uploads{{ $company->logo }}"></div>
                            <div class="info_outer">
                            	<div class="info">
                                    <h3>{{ $company->nameShow }}</h3>
                                    <!--<p>SHUEN LI MACHINERY CO., LTD.</p>-->
                                </div>
                            </div>
                        </a>
                    </div>
                        @endforeach
<!--
                    <div class="item">
                        <a href="page02.html">
                            <div class="img"><img src="/images/tami-v3/logo/logo_009.png"></div>
                            <div class="info_outer">
                            	<div class="info">
                                    <h3>弘煜机械有限公司</h3>
                                    <p>SINO-ALLOY MACHINERY INC.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="page02.html">
                            <div class="img"><img src="/images/tami-v3/logo/logo_010.png"></div>
                            <div class="info_outer">
                            	<div class="info">
                                    <h3>玮祥机械股份有限公司</h3>
                                    <p>WELL SHYANG MACHINERY CO., LTD.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="page02.html">
                            <div class="img"><img src="/images/tami-v3/logo/logo_011.png"></div>
                            <div class="info_outer">
                            	<div class="info">
                                    <h3>科基企业有限公司</h3>
                                    <p>FLYING TIGER KJ CO., LTD.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="page02.html">
                            <div class="img"><img src="/images/tami-v3/logo/logo_012.png"></div>
                            <div class="info_outer">
                            	<div class="info">
                                    <h3>威盟工业股份有限公司</h3>
                                    <p>WEI MENG INDUSTRIAL CO., LTD.</p>
                                </div>
                            </div>
                        </a>
                    </div>
-->
                    
                </div>
            </div>
        </div>
        <div id="popup02" class="popup_block item_4">
        	<img src="/images/tami-v3/home_company_list_bg_four_itmes.png" class="bg">
            <div class="box">                
                <div class="list_item">
                        @foreach($result['companyAreas']['右上區域']['companies'] as $company)
                    <div class="item">
                        <a href="front/company/{{ $company->id }}">
                            <div class="img"><img src="/uploads{{ $company->logo }}"></div>
                            <div class="info_outer">
                            	<div class="info">
                                    <h3>{{ $company->nameShow }}</h3>
                                    <!--<p>SHUEN LI MACHINERY CO., LTD.</p>-->
                                </div>
                            </div>
                        </a>
                    </div>
                        @endforeach
<!--
                    <div class="item">
                        <a href="page02.html">
                            <div class="img"><img src="/images/tami-v3/logo/logo_004.png"></div>
                            <div class="info_outer">
                            	<div class="info">
                                    <h3>昊佑精机工业有限公司</h3>
                                    <p>HAO YU PRECISION MACHINERY<br />INDUSTRY CO., LTD</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="page02.html">
                            <div class="img"><img src="/images/tami-v3/logo/logo_005.png"></div>
                            <div class="info_outer">
                            	<div class="info">
                                    <h3>年弘磁电工业股份有限公司</h3>
                                    <p>NIAN HUNG ELECTRIC<br />INDUSTRIAL CO., LTD.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="page02.html">
                            <div class="img"><img src="/images/tami-v3/logo/logo_006.png"></div>
                            <div class="info_outer">
                            	<div class="info">
                                    <h3>峻泰机械工业股份有限公司</h3>
                                    <p>CHUN TAI MACHINERY<br />INDUSTRIES CO., LTD</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="page02.html">
                            <div class="img"><img src="/images/tami-v3/logo/logo_007.png"></div>
                            <div class="info_outer">
                            	<div class="info">
                                    <h3>鑫隆滾牙機械股份有限公司</h3>
                                    <p>HSIN LONG THREAD ROLLING<br />MACHINE CO., LTD.</p>
                                </div>
                            </div>
                        </a>
                    </div>
-->
                </div>
            </div>
    	</div>
        <div id="popup03" class="popup_block item_3">
        	<img src="/images/tami-v3/home_company_list_bg_three_itmes.png" class="bg">
            <div class="box">                
                <div class="list_item">
                        @foreach($result['companyAreas']['右下區域']['companies'] as $company)
                    <div class="item">
                        <a href="front/company/{{ $company->id }}">
                            <div class="img"><img src="/uploads{{ $company->logo }}"></div>
                            <div class="info_outer">
                            	<div class="info">
                                    <h3>{{ $company->nameShow }}</h3>
                                    <!--<p>SHUEN LI MACHINERY CO., LTD.</p>-->
                                </div>
                            </div>
                        </a>
                    </div>
                        @endforeach
<!--
                    <div class="item">
                        <a href="page02.html">
                            <div class="img"><img src="/images/tami-v3/logo/logo_001.png"></div>
                            <div class="info_outer">
                            	<div class="info">
                                    <h3>顶级复合材料股份有限公司</h3>
                                    <p>DING JI POLYMER CO., LTD.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="page02.html">
                            <div class="img"><img src="/images/tami-v3/logo/logo_002.png"></div>
                            <div class="info_outer">
                            	<div class="info">
                                    <h3>均基企业社</h3>
                                    <p>GUN JI ENTERPRISE COMPAN</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="page02.html">
                            <div class="img"><img src="/images/tami-v3/logo/logo_003.png"></div>
                            <div class="info_outer">
                            	<div class="info">
                                    <h3>福源兴有限公司</h3>
                                    <p>FU YUAN SHING CO., LTD.</p>
                                </div>
                            </div>
                        </a>
                    </div>
-->
                </div>    
            </div>
    	</div>                            
    </div>
</div>
<div class="body_overly"></div>



<script src="/js/front-v3/js/jquery.min.js"></script>
<script src="/js/front-v3/js/fastclick.js"></script>
<script src="/js/front-v3/js/owl.carousel.js"></script>
<script src="/js/front-v3/js/script.js"></script>
<script src="/js/front-v3/js/index.js"></script>
</body>
</html>
