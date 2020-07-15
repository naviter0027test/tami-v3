<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
<meta name="description" content="">
<meta name="author" content="">

<title>{{ $company->nameShow }}</title>

<link rel="stylesheet" type="text/css" href="/owl.carousel/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="/css/jquery.mCustomScrollbar.css">
<link href="/css/style.css" rel="stylesheet">

</head>

<body class="body_detail body_company">

<div class="company_list blue">
	<div class="transform">
        <a href="/" class="btn_back"><img src="/images/icon_back_arrow.svg"></a>
        <div class="outer">
            <div class="logo"><div><img src="/images/company_logo_001.png"></div></div>
            <div class="company_name"><div>益鋐企业有限公司 YE HONE ENTERPRISE CO., LTD.</div></div>
            <div class="info">
                <div class="col01">
                    <div class="website"><a href="#" target="_blank">Web</a></div>
                    <div class="desc">
                        <div class="item">EMAIL / info@yehone.com.tw</div>
                        <div class="item">TEL / +886-49-2381449</div>
                        <div class="item">FAX / +886-49-2381450<br />
                        No.11-1, Ln. 159, Sec. 1, Guoguang Rd., Dali Dist., Taichung City 41262, Taiwan (R.O.C.)
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
                <a href="tami_03.html">PRODUCTS LIST<i></i></a>
            </div>
        </div>
    </div>    
</div>


<div class="body_overly active"></div>
<div class="product_detail" >
	<div class="transform">
        <a href="tami_02_blue.html" class="btn_back backToCompany"><img src="/images/icon_back_arrow.svg"></a>
        <div class="links">
            <div class="outer">
                <div class="col01">
                    <a href="/" class="btn_home"><img src="/images/detail_btn_bg_01.png"><b>回首页</b></a>
                    <a href="#" class="btn_contact"><img src="/images/detail_btn_bg_02.png"><b>联络资讯</b></a>
                </div>
                <div class="col02">
                    <a href="#" class="btn_website"><img src="/images/detail_btn_bg_03.png"><b>官网</b></a>
                    <a href="#" class="btn_cate"><img src="/images/detail_btn_bg_04.png"><b>型录</b></a>
                    <a href="#" class="btn_share"><img src="/images/detail_btn_bg_05.png"><b>分享</b></a>
                </div>
            </div>
        </div>
        <div class="slider">
            <div class="owl-carousel owl_slider">
            @foreach($products as $product)
                <div class="item">
                    <div class="outer">
                        <div class="col01">
                            <div class="box">
                            	<div class="bg"><img src="/images/detail_bg_001.png"></div>
                                <div class="img"><img src="/product{{ $product->picture1 }}"></div>
                            </div>
                            <a href="/product{{ $product->picture1 }}" class="btn_zoom" target="_blank"><img src="/images/icon_zoom.svg" ></a>
                        </div>
                        <div class="col02">
                            <div class="top_div">
                                <div class="box">
                                	<div class="bg"><img src="/images/detail_bg_002.png"></div>
                                    <div class="info">
                                        <div class="label">产品名称</div>
                                        <div class="desc">
                                            {{ $product->nameShow }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom_div">
                                <div class="box">
                                	<div class="bg"><img src="/images/detail_bg_003.png"></div>
                                    <div class="info">
                                    	<div class="add_padding">
                                            <div class="scrollbar">
                                            {{ $product->infoShow }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            @endforeach
<!--
                <div class="item">
                    <div class="outer">
                        <div class="col01">
                            <div class="box">
                            	<div class="bg"><img src="/images/detail_bg_001.png"></div>
                                <div class="img"><img src="/images/detail_product_001.png"></div>
                            </div>
                            <a href="/images/detail_product_001.png" class="btn_zoom" target="_blank"><img src="/images/icon_zoom.svg" ></a>
                        </div>
                        <div class="col02">
                            <div class="top_div">
                                <div class="box">
                                	<div class="bg"><img src="/images/detail_bg_002.png"></div>
                                    <div class="info">
                                        <div class="label">产品名称</div>
                                        <div class="desc">
                                            LARGE HIGH-SPEED<br />PRECISION MACHINING SERIES<br />大型高速精密加工系列
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom_div">
                                <div class="box">
                                	<div class="bg"><img src="/images/detail_bg_003.png"></div>
                                    <div class="info">
                                    	<div class="add_padding">
                                            <div class="scrollbar">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="outer">
                        <div class="col01">
                            <div class="box">
                            	<div class="bg"><img src="/images/detail_bg_001.png"></div>
                                <div class="img"><img src="/images/detail_product_001.png"></div>
                            </div>
                            <a href="/images/detail_product_001.png" class="btn_zoom" target="_blank"><img src="/images/icon_zoom.svg" ></a>
                        </div>
                        <div class="col02">
                            <div class="top_div">
                                <div class="box">
                                	<div class="bg"><img src="/images/detail_bg_002.png"></div>
                                    <div class="info">
                                        <div class="label">产品名称</div>
                                        <div class="desc">
                                            LARGE HIGH-SPEED<br />PRECISION MACHINING SERIES<br />大型高速精密加工系列
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom_div">
                                <div class="box">
                                	<div class="bg"><img src="/images/detail_bg_003.png"></div>
                                    <div class="info">
                                    	<div class="add_padding">
                                            <div class="scrollbar">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
-->
            </div>
        </div>
    </div>    
</div>

<div id="contact_form" class="contact_form">
	<div class="outer">
    	<div class="close_div"><button class="btn_close"><img src="/images/icon_close.svg"></button></div>
		<div class="form_div">
        	<div class="item">
        		<input type="text" placeholder="公司名称">
            </div>
        	<div class="item">
        		<input type="text" placeholder="Email">
            </div>
            <div class="item">
        		<input type="text" placeholder="联络人">
            </div>
            <div class="item">
        		<input type="text" placeholder="连络电话">
            </div>
            <div class="item">
            	<textarea placeholder="问题内容"></textarea>        		
            </div>
            <div class="item action">
        		<button>提 交<i></i></button>
            </div>
        </div>
	</div>
</div>
<div class="mobile_rotate">
	<img src="/images/mobile_rotate.svg" >
</div>

<script src="/js/front/js/jquery.min.js"></script>
<script src="/owl.carousel/owl.carousel.js"></script>
<script src="/js/front/js/jquery.mCustomScrollbar.js"></script>
<script src="/js/front/js/script.js"></script>
<script src="/js/front/js/product.js"></script>

</body>
</html>
