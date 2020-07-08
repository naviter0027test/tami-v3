<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
<meta name="description" content="">
<meta name="author" content="">

<title>TAMI 線上展</title>

<link rel="stylesheet" type="text/css" href="owl.carousel/owl.carousel.css">
<link href="css/style.css" rel="stylesheet">

</head>

<body class="body_home">

<div class="home_list">
	<div class="visited">浏览人数：00000</div>
	<div class="transform">
        <div class="outer">    	
            <div class="home_title">
                <div class="logo"><img src="images/home_logo.gif" class="web"><img src="images/home_logo_mobile.png" class="mobile"></div>
                <div class="info">
                    <span>2020年</span>
                    广州国际鞋类<br />
                    皮革及工业设备展<br />
                    线上台湾馆
                </div>
            </div>              
            <div class="mobile_div">  
            	<div class="overly" title="Close with clicked !!" alt="Close with clicked !!"></div>
                <div class="mobile_black"><img src="images/icon_back_arrow_mobile.svg"></div>
                <div class="version"><a href="#" class="active">简中</a><a href="#">EN</a></div>                
                <div id="block01" class="block_img" data-id="popup01">
                    <img src="images/platform_01_block.png" class="block"/>
                    <img src="images/platform_01_title.png" class="title"/>
                    <div class="animate">
                        <div class="block01_animate"><img src="images/platform_01_01.png"></div>
                        <div class="block01_animate"><img src="images/platform_01_02.png"></div> 
                        <div class="block01_animate"><img src="images/platform_01_03.png"></div> 
                        <div class="block01_animate"><img src="images/platform_01_04.png"></div>
                        <div class="block01_animate"><img src="images/platform_01_03.png"></div> 
                        <div class="block01_animate"><img src="images/platform_01_02.png"></div>                                           
                    </div>
                    <div class="mobile_title">缝纫机</div>
                </div>
                <div id="block02" class="block_img" data-id="popup02">
                    <img src="images/platform_02_block.png" class="block"/>
                    <img src="images/platform_02_title.png" class="title"/>
                    <div class="animate">
                        <div class="block02_animate"><img src="images/platform_02_01.png"></div>
                        <div class="block02_animate"><img src="images/platform_02_02.png"></div>
                        <div class="block02_animate"><img src="images/platform_02_03.png"></div>
                    </div>
                    <div class="mobile_title">鞋底加工及橡塑胶制鞋设备</div>
                </div>
                <div id="block03" class="block_img" data-id="popup03">
                    <img src="images/platform_03_block.png" class="block"/>
                    <img src="images/platform_03_title.png" class="title"/>
                    <div class="animate">
                        <div class="block03_animate"><img src="images/platform_03_01.png"></div>
                        <div class="block03_animate"><img src="images/platform_03_02.png"></div>    
                        <div class="block03_animate"><img src="images/platform_03_03.png"></div> 
                        <div class="block03_animate"><img src="images/platform_03_04.png"></div> 
                        <div class="block03_animate"><img src="images/platform_03_03.png"></div> 
                        <div class="block03_animate"><img src="images/platform_03_02.png"></div>                    
                    </div>
                    <div class="mobile_title">鞋面成型及鞋帮机</div>
                </div>
                <div id="block04" class="block_img" data-id="popup04">
                    <img src="images/platform_04_block.png" class="block"/>
                    <img src="images/platform_04_title.png" class="title"/>
                    <div class="animate">
                        <div class="block04_animate"><img src="images/platform_04_01.png"></div>
                        <div class="block04_animate"><img src="images/platform_04_02.png"></div>
                        <div class="block04_animate"><img src="images/platform_04_03.png"></div>
                        <div class="block04_animate"><img src="images/platform_04_04.png"></div>
                        <div class="block04_animate"><img src="images/platform_04_03.png"></div>
                        <div class="block04_animate"><img src="images/platform_04_02.png"></div>
                    </div>
                    <div class="mobile_title">自动化设备与整厂规划</div>
                </div>
           </div>     
           
            	
                <div id="popup01" class="popup_block">
                    <div class="box">
                        <div class="title">缝纫机</div>
                        <div class="list_item">
                        @foreach($result['companyAreas']['缝纫机']['companies'] as $company)
                            <div class="item">
                                <a href="front/company/{{ $company->id }}">
                                    <div class="img"><img src="/uploads{{ $company->logo }}"></div>
                                    <div class="info">
                                        <h3>{{ $company->nameShow }}</h3>
                                    </div>
                                </a>
                            </div>
                        @endforeach
<!--
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_02.png"></div>
                                    <div class="info">
                                        <h3>启翔股份有限公司</h3>
                                        <p>CHEE SIANG INDUSTRIAL CO., LTD.</p>
                                    </div>
                                </a>
                            </div>
-->
                        </div>
                    </div>
                </div>
                <div id="popup02" class="popup_block">
                    <div class="box">
                        <div class="title">鞋底加工及橡塑胶制鞋设备</div>
                        <div class="mobile_arrow"><img src="images/icon_arrow_down_white.svg"></div>
                        <div class="list_item">
                        @foreach($result['companyAreas']['鞋底加工及橡塑胶制鞋设备']['companies'] as $company)
                            <div class="item">
                                <a href="front/company/{{ $company->id }}">
                                    <div class="img"><img src="/uploads{{ $company->logo }}"></div>
                                    <div class="info">
                                        <h3>{{ $company->nameShow }}</h3>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                        <!--
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_07.png"></div>
                                    <div class="info">
                                        <h3>天岗精机科技股份有限公司</h3>
                                        <p>TIEN KANG CO., LTD.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_12.png"></div>
                                    <div class="info">
                                        <h3>皇尚企业股份有限公司</h3>
                                        <p>HWANG SUN ENTERPRISE CO., LTD.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_03.png"></div>
                                    <div class="info">
                                        <h3>诚锋兴业股份有限公司</h3>
                                        <p>SINCERE PIONEER ENTERPRISE CO., LTD.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_09.png"></div>
                                    <div class="info">
                                        <h3>鉅钢机械股份有限公司</h3>
                                        <p>KING STEEL MACHINERY CO., LTD.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_13.png"></div>
                                    <div class="info">
                                        <h3>润泽国际有限公司</h3>
                                        <p>RINK INTERNATIONAL CO., LTD.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_10.png"></div>
                                    <div class="info">
                                        <h3>颖晖机械股份有限公司</h3>
                                        <p>YING HUI MACHINE CO., LTD.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_11.png"></div>
                                    <div class="info">
                                        <h3>龙渤实业股份有限公司</h3>
                                        <p>LUNG BOU INDUSTRIAL CO., LTD.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_06.png"></div>
                                    <div class="info">
                                        <h3>鸿绮机械股份有限公司</h3>
                                        <p>HORNG CHII MACHINE INDUSTRY CO., LTD.</p>
                                    </div>
                                </a>
                            </div>                    
-->
                        </div>
                    </div>
                </div>
                <div id="popup03" class="popup_block">
                    <div class="box">
                        <div class="title">鞋面成型及鞋帮机</div>
                        <div class="mobile_arrow"><img src="images/icon_arrow_down_white.svg"></div>
                        <div class="list_item">
                        @foreach($result['companyAreas']['鞋面成型及鞋帮机']['companies'] as $company)
                            <div class="item">
                                <a href="front/company/{{ $company->id }}">
                                    <div class="img"><img src="/uploads{{ $company->logo }}"></div>
                                    <div class="info">
                                        <h3>{{ $company->nameShow }}</h3>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                        <!--
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_05.png"></div>
                                    <div class="info">
                                        <h3>千附实业股份有限公司</h3>
                                        <p>CHENFULL INTERNATIONAL CO., LTD.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_14.png"></div>
                                    <div class="info">
                                        <h3>主典兴业股份有限公司</h3>
                                        <p>TRUE TEN INDUSTRIAL CO., LTD</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_12.png"></div>
                                    <div class="info">
                                        <h3>皇尚企业股份有限公司</h3>
                                        <p>HWANG SUN ENTERPRISE CO., LTD.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_01.png"></div>
                                    <div class="info">
                                        <h3>益鋐企业有限公司</h3>
                                        <p>YE HONE ENTERPRISE CO., LTD.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_02.png"></div>
                                    <div class="info">
                                        <h3>启翔股份有限公司</h3>
                                        <p>CHEE SIANG SEWING MACHINE (S.H.) CO., LTD.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_15.png"></div>
                                    <div class="info">
                                        <h3>裕铭机械有限公司</h3>
                                        <p>NEW YU MING MACHINERY CO.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_03.png"></div>
                                    <div class="info">
                                        <h3>诚锋兴业股份有限公司</h3>
                                        <p>SINCERE PIONEER ENTERPRISE CO., LTD.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_13.png"></div>
                                    <div class="info">
                                        <h3>润泽国际有限公司</h3>
                                        <p>RINK INTERNATIONAL CO., LTD.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_10.png"></div>
                                    <div class="info">
                                        <h3>颖晖机械股份有限公司</h3>
                                        <p>YING HUI MACHINE CO., LTD.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_16.png"></div>
                                    <div class="info">
                                        <h3>鸿宇自动化设备股份有限公司</h3>
                                        <p>AITECK AUTOMATION INTEGRATION TECH CORP</p>
                                    </div>
                                </a>
                            </div>
                           --> 
                            
                        </div>
                    </div>
                </div>
                <div id="popup04" class="popup_block">
                    <div class="box">
                        <div class="title">自动化设备与整厂规划</div>
                        <div class="mobile_arrow"><img src="images/icon_arrow_down_white.svg"></div>
                        <div class="list_item">
                        @foreach($result['companyAreas']['自动化设备与整厂规划']['companies'] as $company)
                            <div class="item">
                                <a href="front/company/{{ $company->id }}">
                                    <div class="img"><img src="/uploads{{ $company->logo }}"></div>
                                    <div class="info">
                                        <h3>{{ $company->nameShow }}</h3>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                        <!--
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_05.png"></div>
                                    <div class="info">
                                        <h3>千附实业股份有限公司</h3>
                                        <p>CHENFULL INTERNATIONAL CO., LTD.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_07.png"></div>
                                    <div class="info">
                                        <h3>天岗精机科技股份有限公司</h3>
                                        <p>TIEN KANG CO., LTD.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_14.png"></div>
                                    <div class="info">
                                        <h3>主典兴业股份有限公司</h3>
                                        <p>TRUE TEN INDUSTRIAL CO., LTD</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_01.png"></div>
                                    <div class="info">
                                        <h3>益鋐企业有限公司</h3>
                                        <p>YE HONE ENTERPRISE CO., LTD.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_15.png"></div>
                                    <div class="info">
                                        <h3>裕铭机械有限公司</h3>
                                        <p>NEW YU MING MACHINERY CO.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_09.png"></div>
                                    <div class="info">
                                        <h3>鉅钢机械股份有限公司</h3>
                                        <p>KING STEEL MACHINERY CO., LTD.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_17.png"></div>
                                    <div class="info">
                                        <h3>鼎圣机械有限公司</h3>
                                        <p>DING-SHEN MECHANICAL CO., LTD.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_13.png"></div>
                                    <div class="info">
                                        <h3>润泽国际有限公司</h3>
                                        <p>RINK INTERNATIONAL CO., LTD.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_10.png"></div>
                                    <div class="info">
                                        <h3>颖晖机械股份有限公司</h3>
                                        <p>YING HUI MACHINE CO., LTD.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_11.png"></div>
                                    <div class="info">
                                        <h3>龙渤实业股份有限公司</h3>
                                        <p>LUNG BOU INDUSTRIAL CO., LTD.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_16.png"></div>
                                    <div class="info">
                                        <h3>鸿宇自动化设备股份有限公司</h3>
                                        <p>AITECK AUTOMATION INTEGRATION TECH CORP</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="front/company">
                                    <div class="img"><img src="images/logo/logo_06.png"></div>
                                    <div class="info">
                                        <h3>鸿绮机械股份有限公司</h3>
                                        <p>HORNG CHII MACHINE INDUSTRY CO., LTD.</p>
                                    </div>
                                </a>
                            </div>
-->
                        </div>
                    </div>
                </div>
            
        </div>
    </div>    
</div>






<script src="js/front/js/jquery.min.js"></script>
<script src="owl.carousel/owl.carousel.js"></script>
<script src="js/front/js/script.js"></script>

</body>
</html>
