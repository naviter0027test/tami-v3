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
                    <small>HSIN LONG THREAD  ROLLING MACHINE CO., LTD.</small>
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
                                    <img src="/images/tami-v3/thumbnail_001.jpg" />
                                @else
                                    <img src="/product{{ $product->picture2 }}" />
                                @endif
                                </div>
                                <div class="sub_item">
                                @if(trim($product->picture3) == '')
                                    <img src="/images/tami-v3/thumbnail_001.jpg" />
                                @else
                                    <img src="/product{{ $product->picture3 }}" />
                                @endif
                                </div>
                            </div>                    
                        </div>

                        <div class="col02">
                            <div class="img">
                            @if(trim($product->picture1) == '')
                                <img src="/images/tami-v3/machine_001.png" class="big" />
                                <a href="/images/tami-v3/machine_001.png" target="_blank" class="zoom"><img src="/images/tami-v3/icon_zoom.png"></a>
                            @else
                                <img src="/product{{ $product->picture1 }}" class="big" />
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
                    <a href="#" target="_blank"><img src="/images/tami-v3/icon_004.png">{{ trans('front/product.catalog2') }}</a>
                </div>
                <div class="item">
                    <img src="/images/tami-v3/icon_button.png" class="static">
                    <img src="/images/tami-v3/icon_button_hover.png" class="hover">
                    <a href="#" class="btn_contact"><img src="/images/tami-v3/icon_005.png">{{ trans('front/product.contact_info') }}</a>
                </div>
                <div class="item">
                    <img src="/images/tami-v3/icon_button.png" class="static">
                    <img src="/images/tami-v3/icon_button_hover.png" class="hover">
                    <a href="javasscript:;" onClick="share_url('{{ trans('front/product.success_copy') }} URL:'); return false;"><img src="/images/tami-v3/icon_006.png">{{ trans('front/product.share2') }}</a>
                </div>
            </div>
        </div>
    </div>

<div id="contact_form" class="contact_form">
	<div class="outer">
    	<div class="close_div"><button class="btn_close"></button></div>
		<div class="form_div">
        	<div class="form_left">
                <div class="item">
                    <input type="text" placeholder="公司名称">
                </div>
                <div class="item">
                    <input type="text" placeholder="Email">
                </div>
                <div class="item two_col">
                    <div class="col"><input type="text" placeholder="联络人"></div>
                    <div class="col">
                        <div class="dropdown_div">
                            
                            <div class="radiobox_list">
                                <div class="drop_down_menu" id="drop_down_position">
                                    <button>
                                        <span>职称</span>                                        
                                    </button>
                                    <div class="list_item">
                                    	<div class="scrollbar">
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position">
                                                  <span class="checkmark">技術長</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position">
                                                  <span class="checkmark">顧問</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position">
                                                  <span class="checkmark">特別助理</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position">
                                                  <span class="checkmark">廠長</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position">
                                                  <span class="checkmark">協理</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position">
                                                  <span class="checkmark">經理</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position">
                                                  <span class="checkmark">課長</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position">
                                                  <span class="checkmark">主任</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position">
                                                  <span class="checkmark">管理師</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position">
                                                  <span class="checkmark">行政人員</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position">
                                                  <span class="checkmark">職員</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position">
                                                  <span class="checkmark">助理</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position">
                                                  <span class="checkmark">業務</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position">
                                                  <span class="checkmark">企劃</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position">
                                                  <span class="checkmark">行銷</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position">
                                                  <span class="checkmark">工程師</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position">
                                                  <span class="checkmark">其他</span>
                                                </label>
                                            </div>  
                                        </div>                                      
                                    </div>                                     
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="item fixed_margin_bottom">
                    <input type="text" placeholder="连络电话">
                </div>
                <div class="item fixed_margin_bottom">
                    <label>请勾选 贵公司产业属性，</label>
                    <div class="checkbox_list">
                        <div class="checkbox_outer">
                            <label class="chk_container">工具机
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkbox_outer">
                            <label class="chk_container">塑橡胶机械
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkbox_outer">
                            <label class="chk_container">纺织机械
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkbox_outer">
                            <label class="chk_container">食品机械暨包装机械
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkbox_outer">
                            <label class="chk_container">印刷机械
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkbox_outer">
                            <label class="chk_container">木工机械
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkbox_outer">
                            <label class="chk_container">模具
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkbox_outer">
                            <label class="chk_container">表面处理
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkbox_outer">
                            <label class="chk_container">其他产业机械
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkbox_outer">
                            <label class="chk_container">零组件
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                        </div>                    
                    </div>
                </div>
			</div>
            <div class="form_right"> 
                <div class="item">
                    <textarea placeholder="问题内容"></textarea>        		
                </div>
                <div class="item action">
                    <button>提 交<i></i></button>
                </div>
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
</body>
</html>
