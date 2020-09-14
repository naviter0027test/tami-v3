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
<div class="company_info {{ $company->frontModeShow }}">
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
                    <!-- <small>HSIN LONG THREAD  ROLLING MACHINE CO., LTD.</small> -->
                </div>
                <div class="info_detail">
            	    <div class="info_left">
                	<!-- <div class="sub_title"><b>Web</b></div> -->
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
                <input type="hidden" class="pdf{{ $i }}" value="{{ trim($product->dm) }}" />
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
                    <a href="/front/company/{{ $company->id }}"><img src="/images/tami-v3/icon_001.png">{{ trans('front/product.go_back') }}</a>
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
                    <a href="javasscript:;" onClick="share_url('{{ trans('front/product.share_link') }} {{ trans('front/product.success_copy') }}'); return false;"><img src="/images/tami-v3/icon_006.png">{{ trans('front/product.share2') }}</a>
                </div>
            </div>
        </div>
    </div>

<div id="contact_form" class="contact_form">
    <input type="hidden" name="none" class="askSuccess" value="{{ trans('front/product.ask_success') }}" />
    <input type="hidden" name="none" class="errMsg" value="{{ trans('front/product.err_msg') }}" />
    <input type="hidden" name="none" class="notifyAdm" value="{{ trans('front/product.notify_adm') }}" />
    <form action="/front/contact" method="post" autocomplete="off" class="contact">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input type="hidden" name="companyId" value="{{ $company->id }}" />
        <input type="hidden" name="productId" value="" />
	<div class="outer">
    	<div class="close_div"><button class="btn_close"></button></div>
		<div class="form_div">
        	<div class="form_left">
                <div class="item">
                    <input type="text" name="companyName" placeholder="{{ trans('front/product.company_name') }}" required>
                </div>
                <div class="item">
                    <input type="text" name="email" placeholder="Email" required>
                </div>
                <div class="item two_col">
                    <div class="col">
        		<input type="text" name="name" placeholder="{{ trans('front/product.contact_name') }}" required>
                    </div>
                    <div class="col">
                        <div class="dropdown_div">
                            
                            <div class="radiobox_list">
                                <div class="drop_down_menu" id="drop_down_position">
                                    <button>
                                        <span>{{ trans('front/product.job_name') }}</span>                                        
                                    </button>
                                    <div class="list_item">
                                    	<div class="scrollbar">
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position" value="3">
                                                  <span class="checkmark">{{ trans('front/product.cto') }}</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position" value="4">
                                                  <span class="checkmark">{{ trans('front/product.consultant') }}</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position" value="5">
                                                  <span class="checkmark">{{ trans('front/product.sa') }}</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position" value="6">
                                                  <span class="checkmark">{{ trans('front/product.fc') }}</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position" value="7">
                                                  <span class="checkmark">{{ trans('front/product.director') }}</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position" value="8">
                                                  <span class="checkmark">{{ trans('front/product.manager') }}</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position" value="9">
                                                  <span class="checkmark">{{ trans('front/product.sm') }}</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position" value="10">
                                                  <span class="checkmark">{{ trans('front/product.supervisor') }}</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position" value="11">
                                                  <span class="checkmark">{{ trans('front/product.administrator') }}</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position" value="12">
                                                  <span class="checkmark">{{ trans('front/product.as') }}</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position" value="13">
                                                  <span class="checkmark">{{ trans('front/product.oc') }}</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position" value="14">
                                                  <span class="checkmark">{{ trans('front/product.assistant') }}</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position" value="15">
                                                  <span class="checkmark">{{ trans('front/product.sales') }}</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position" value="16">
                                                  <span class="checkmark">{{ trans('front/product.marcom') }}</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position" value="17">
                                                  <span class="checkmark">{{ trans('front/product.marketing') }}</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position" value="18">
                                                  <span class="checkmark">{{ trans('front/product.engineer') }}</span>
                                                </label>
                                            </div>
                                            <div class="item">
                                                <label class="container">
                                                  <input type="radio" name="radio_position" value="19">
                                                  <span class="checkmark">{{ trans('front/product.other') }}</span>
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
                    <input type="text" name="phone" placeholder="{{ trans('front/product.phone') }}" required>
                </div>
                <div class="item fixed_margin_bottom">
                    <label>{{ trans('front/product.please_check_industry_attr') }}，</label>
                    <div class="checkbox_list">
                        <div class="checkbox_outer">
                            <label class="chk_container">{{ trans('front/product.mt') }}
                              <input type="checkbox" name="industryRelations[]" value="1" />
                              <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkbox_outer">
                            <label class="chk_container">{{ trans('front/product.mfpp') }}
                              <input type="checkbox" name="industryRelations[]" value="2" />
                              <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkbox_outer">
                            <label class="chk_container">{{ trans('front/product.tm') }}
                              <input type="checkbox" name="industryRelations[]" value="3" />
                              <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkbox_outer">
                            <label class="chk_container">{{ trans('front/product.fbpmp') }}
                              <input type="checkbox" name="industryRelations[]" value="4" />
                              <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkbox_outer">
                            <label class="chk_container">{{ trans('front/product.pbm') }}
                              <input type="checkbox" name="industryRelations[]" value="5" />
                              <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkbox_outer">
                            <label class="chk_container">{{ trans('front/product.wm') }}
                              <input type="checkbox" name="industryRelations[]" value="6" />
                              <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkbox_outer">
                            <label class="chk_container">{{ trans('front/product.dies') }}
                              <input type="checkbox" name="industryRelations[]" value="7" />
                              <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkbox_outer">
                            <label class="chk_container">{{ trans('front/product.efsf') }}
                              <input type="checkbox" name="industryRelations[]" value="8" />
                              <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkbox_outer">
                            <label class="chk_container">{{ trans('front/product.other_machine') }}
                              <input type="checkbox" name="industryRelations[]" value="10" />
                              <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkbox_outer">
                            <label class="chk_container">{{ trans('front/product.mpac') }}
                              <input type="checkbox" name="industryRelations[]" value="9" />
                              <span class="checkmark"></span>
                            </label>
                        </div>                    
                    </div>
                </div>
			</div>
            <div class="form_right"> 
                <div class="item">
                    <textarea name="content" placeholder="{{ trans('front/product.content') }}" required></textarea>        		
                </div>
                <div class="item action">
                    <button>{{ trans('front/product.submit') }}<i></i></button>
                </div>
            </div>    
        </div>
	</div>
    </form>
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
