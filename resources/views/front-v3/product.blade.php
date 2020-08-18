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
<link rel="stylesheet" type="text/css" href="/css/tami-v3/jquery.mCustomScrollbar.css">
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
                                    <img src="/images/tami-v3/transparent_001.gif">	
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
                        <div class="item">
                        	<div class="box">
                                <div class="img" style="background-image:url(/images/tami-v3/img_001.jpg)">
                                    <img src="/images/tami-v3/transparent_001.gif">	
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
        	<a href="#"><img src="/images/tami-v3/button_001.png"><div>PRODUCTS LIST<i></i></div></a>
        </div>
	</div>
</div>
<div class="body_overly active"></div>

<input type="hidden" class="maxProductNum" value="{{ count($products) }}" />
<div class="product_detail" >
	<div class="detail_slider owl-carousel">
            @foreach($products as $i => $product)
		<div class="item">
                    <input type="hidden" class="pdf{{ $i }}" value="{{ $product->dm }}" />
                    <input type="hidden" class="product{{ $i }}" value="{{ $product->id }}" />
			<div class="box">
            	<div class="top">
                	<div class="col01">
                    	<div class="thumbnail">
                            <div class="sub_item">
                            @if(trim($product->picture2) == '')
                                <img src="/images/tami-v3/thumbnail_001.jpg">
                            @else
                                <img src="/product{{ $product->picture2 }}">
                            @endif
                            </div>
                            <div class="sub_item">
                            @if(trim($product->picture3) == '')
                                <img src="/images/tami-v3/thumbnail_001.jpg">
                            @else
                                <img src="/product{{ $product->picture3 }}">
                            @endif
                            </div>
                        </div>                    
                    </div>
                    <div class="col02">
                        <div class="img">
                        @if(trim($product->picture1) == '')
                            <img src="/images/tami-v3/machine_001.png" class="big">
                            <a href="/images/tami-v3/machine_001.png" target="_blank" class="zoom"><img src="/images/tami-v3/icon_zoom.png"></a>	
                        @else
                            <img src="/product{{ $product->picture1 }}" class="big">
                            <a href="/product{{ $product->picture1 }}" target="_blank" class="zoom"><img src="/images/tami-v3/icon_zoom.png"></a>	
                        @endif
                        </div>                        
                    </div>
                </div>
            	<div class="bottom">
                	<div class="col01">
                		<div class="product_title">                            
                            {{ $product->nameShow }}
                           
                        </div>
                    </div>
                	<div class="col02">
                    	<div class="product_info">
                            <div class="add_padding">
                                <div class="scrollbar">
                                            {!! nl2br($product->infoShow) !!}
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
			<div class="box">
            	<div class="top">
                	<div class="col01">
                    	<div class="thumbnail">
                            <div class="sub_item">
                                <img src="/images/tami-v3/thumbnail_001.jpg">
                            </div>
                            <div class="sub_item">
                                <img src="/images/tami-v3/thumbnail_001.jpg">
                            </div>
                        </div>                    
                    </div>
                    <div class="col02">
                        <div class="img">
                            <img src="/images/tami-v3/machine_001.png" class="big">
                            <a href="/images/tami-v3/machine_001.png" target="_blank" class="zoom"><img src="/images/tami-v3/icon_zoom.png"></a>	
                        </div>                        
                    </div>
                </div>
            	<div class="bottom">
                	<div class="col01">
                		<div class="product_title">                            
                            Back To Back Winding Unit<br />背對背捲收
                           
                        </div>
                    </div>
                	<div class="col02">
                    	<div class="product_info">
                            <div class="add_padding">
                                <div class="scrollbar">
                                   Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volut Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volut
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div>            	
			</div>
		</div>
-->
	</div>
    <div class="navi_div">
    	<div class="outer">
            <div class="item active">
                <img src="/images/tami-v3/icon_button.png" class="static">
                <img src="/images/tami-v3/icon_button_hover.png" class="hover">
                <a href="javascript:window.history.back();"><img src="/images/tami-v3/icon_001.png">{{ trans('front/product.go_back') }}</a>
            </div>
            <div class="item">
                <img src="/images/tami-v3/icon_button.png" class="static">
                <img src="/images/tami-v3/icon_button_hover.png" class="hover">
                <a href="{{ $company->contactLink4 }}" target="_blank"><img src="/images/tami-v3/icon_002.png">{{ trans('front/product.website2') }}</a>
            </div>
            <div class="item">
                <img src="/images/tami-v3/icon_button.png" class="static">
                <img src="/images/tami-v3/icon_button_hover.png" class="hover">
                <a href="/"><img src="/images/tami-v3/icon_003.png">{{ trans('front/product.go_home2') }}</a>
            </div>
            <div class="item">
                <img src="/images/tami-v3/icon_button.png" class="static">
                <img src="/images/tami-v3/icon_button_hover.png" class="hover">
                <a href="#" target="_blank" class="btn_cate"><img src="/images/tami-v3/icon_004.png">{{ trans('front/product.catalog2') }}</a>
            </div>
            <div class="item">
                <img src="/images/tami-v3/icon_button.png" class="static">
                <img src="/images/tami-v3/icon_button_hover.png" class="hover">
                <a href="#" class="btn_contact"><img src="/images/tami-v3/icon_005.png">{{ trans('front/product.contact_info') }}</a>
            </div>
            <div class="item">
                <img src="/images/tami-v3/icon_button.png" class="static">
                <img src="/images/tami-v3/icon_button_hover.png" class="hover">
                <a href="javasscript:;" onClick="share_url('Success Copy URL:'); return false;"><img src="/images/tami-v3/icon_006.png">{{ trans('front/product.share2') }}</a>
            </div>
        </div>
    </div>
</div>

<div id="contact_form" class="contact_form">
	<div class="outer">
    	<div class="close_div"><button class="btn_close"></button></div>
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
	<div class="img"><img src="/images/tami-v3/mobile_rotate.svg" ></div>
    <div class="txt"><img src="/images/tami-v3/mobile_rotate_txt.svg"></div>
</div>



<script src="/js/front-v3/js/jquery.min.js"></script>
<script src="/js/front-v3/js/fastclick.js"></script>
<script src="/js/front-v3/js/owl.carousel.js"></script>
<script src="/js/front-v3/js/jquery.mCustomScrollbar.js"></script>
<script src="/js/front-v3/js/script.js"></script>
<script src="/js/front-v3/js/product.js"></script>
</body>
</html>
