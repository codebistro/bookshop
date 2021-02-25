<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Welcome to our BookeShop</title>
    <meta name="keywords" content="源代码,lmonkey,php,shop,ewphp,php商城系统,b2c商城系统,php商城源码,b2c商城源码,开源免费网上商城系统"/>
    <meta name="description" content="EWShop1.0 教学演示系统！"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('home/css/styles.css')}}"/>
    <script type="text/javascript" src="{{ asset('home/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home/js/global.js') }}"></script>
</head>
<body>
<div class="pagetop">
    <div class="quick_menu">
        <p>
            <span class="fl">Welcome to our BookeShop owned by Simon</span>
            <span class="fr">
					<a href="{{ url('user/login') }}" title="登录">Login</a>
                    <a href="{{ url('user/logout') }}" title="登录">Logout</a>
                    <a href="{{ url('user/register') }}" title="注册">Register</a>
					<a href="/order/add" title="购物车" class="gwc">Chart <span class="cred">0</span> 件</a>
					<a href="/order/plist" title="订单查询" style="border:0">Order Review</a>
            </span>
        </p>
    </div>

    <div class="width980">
        <div class="header" style="padding:10px 0">
            <!-- <div class="fl logo">
                <a href="/" title="欢迎使用【EWShop】商城系统">
                    <img src="../uploads/2020-0812-5f3384e8e3cae.png" height="50" alt="欢迎使用【EWShop】商城系统"/>
                </a>
            </div> -->

            <div class="sear fl">
                <form method="get" action="/plist/0">
                    <div class="inputbg fl">
                        <input type="text" name="keyword" value="" class="fl searinput c666"/>
                    </div>
                    <input type="submit"  class="fl sear_btn" onclick="this.form.submit();return false;" value="搜索"/>
                </form>
            </div>
            <!-- <p class="top_tel fr">咨询热线：400-700-1388</p> -->
        </div>
    </div>

    <div class="clear"></div>

    <div class="nav">
        <ul>
            <li class="sel"><a href="/" title="首页">Front Page</a></li>
            <li><a href="/plist/15">VIP</a></li>
            <li><a href="/plist/15">PHP</a></li>
            <li><a href="/plist/15">Java</a></li>
            <li><a href="/plist/15">HTML</a></li>
            <li><a href="/plist/15">CSS</a></li>
            <li><a href="/plist/15">JavaScript</a></li>
            <li><a href="/plist/15">Jquery</a></li>
            <li><a href="/plist/15">Ajax</a></li>
            <li class="sel"><a href="/page/16" title="关于我们">关于我们</a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<!-- content -->

<div class="content">
    <div class="now">
        Your Current Location：<a href='/'>Front Page</a> &gt; <a href='/plist/16' title='后端'>Backend</a>
    </div>
    <div class="remai fl">
        <h3>Product Categery</h3>
        <div class="hotlist spfl">

            <div class="zhulei"><a href="/plist/25" class="sel">PHP</a></div>
            <div class="clear"></div>
            <div class="zilei">
                <div class="clear"></div>
            </div>

            <div class="zhulei"><a href="/plist/25" class="sel">PHP</a></div>
            <div class="clear"></div>
            <div class="zilei">
                <div class="clear"></div>
            </div>

            <div class="zhulei"><a href="/plist/25" class="sel">PHP</a></div>
            <div class="clear"></div>
            <div class="zilei">
                <div class="clear"></div>
            </div>

            <div class="zhulei"><a href="/plist/25" class="sel">PHP</a></div>
            <div class="clear"></div>
            <div class="zilei">
                <div class="clear"></div>
            </div>

        </div>
        <h3 class="mat10">Top List</h3>
        <ul class="hotlist">
            <li>
                <span class="fl hotimg">
                    <img src=" {{ asset('/uploads/product/2020-0820-5f3e059c25d7b.png') }}" data-original=" {{ asset('/uploads/product/2020-0820-5f3e059c25d7b.png')}}" width="60" height="60" title="《细说PHP》第4版" />
                </span>
                <span class="fl hotname">
					<a href="/product/898" title="《细说PHP》第4版" target="_blank">《细说PHP》第4版</a>
					<span class="cred num strong lh20">￥108.0</span>
				</span>
                <div class="clear"></div>
            </li>
             <li>
                <span class="fl hotimg">
                    <img src=" {{ asset('/uploads/product/2020-0820-5f3e059c25d7b.png') }}" data-original=" {{ asset('/uploads/product/2020-0820-5f3e059c25d7b.png')}}" width="60" height="60" title="《细说PHP》第4版" />
                </span>
                <span class="fl hotname">
                    <a href="/product/898" title="《细说PHP》第4版" target="_blank">《细说PHP》第4版</a>
                    <span class="cred num strong lh20">￥108.0</span>
                </span>
                <div class="clear"></div>
            </li>
             <li>
                <span class="fl hotimg">
                    <img src=" {{ asset('/uploads/product/2020-0820-5f3e059c25d7b.png') }}" data-original=" {{ asset('/uploads/product/2020-0820-5f3e059c25d7b.png')}}" width="60" height="60" title="《细说PHP》第4版" />
                </span>
                <span class="fl hotname">
                    <a href="/product/898" title="《细说PHP》第4版" target="_blank">《细说PHP》第4版</a>
                    <span class="cred num strong lh20">￥108.0</span>
                </span>
                <div class="clear"></div>
            </li>

        </ul>
    </div>
    <div class="fr xiangqing" style="margin-top:0">
        <div class="caidan">
            <h3 class="fl">商品列表</h3>
            <ul class="fr">
                <li class="prolist_px">
                    <a href="/plist/16?">默认排序</a>
                </li>
                <li class="prolist_px">
                    <a href="/plist/16?orderby=clicknum_desc">按人气</a>
                </li>
                <li class="prolist_px">
                    <a href="/plist/16?orderby=sellnum_desc">按销量</a>
                </li>
                <li class="prolist_px">
                    <a href="/plist/16?orderby=money_desc">按价格</a>
                </li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="prolist">

            @foreach($product as $v)
            <div class="prolist_1 prolist_border">
                <p class="prolist_img prolist_img1">
                    <a href="{{ url('home/product/'.$v->id)}}" title="{{$v->name}}" target="_blank">
                        <img src="{{ asset('/uploads/product/'.$v->logo) }}" data-original="{{ asset('/uploads/product/'.$v->logo) }}"  width="150" height="150" title="{{ $v->name }}" style="display:block" />
                    </a>
                </p>
                <p class="prolist_name">
                    <a href="/product/.$v->id" title="{{$v->name}}" target="_blank">{{$v->name}}</a>
                </p>
                <p>
                    <span class="money1"><small>$</small>{{$v->money}}</span> <s class="num c888"><small>$</small>{{$v->smoney}}</s>
                </p>
            </div>
            @endforeach


        </div>
        <div class="clear"></div>
        <div class="mat15" style="text-align: center;margin:20px 0px">
            <style>
                ul.pagination {
                    display: inline-block;
                }
                .pagination li {
                    padding:2px 10px;
                    float:left;
                    text-align: center;
                    margin:0 5px;
                    background:#cccccc;
                }
                .pagination .active {
                    background:#FF922a;

                }
            </style>
            <ul class="pagination"><li class="active"><a href="/plist/16?num=1">1</a></li><li><a href="/plist/16?num=2">2</a></li><li><a href="/plist/16?num=3">3</a></li><li><a href="/plist/16?num=4">4</a></li><li><a href="/plist/16?num=5">5</a></li><li><a href="/plist/16?num=6">6</a></li><li><a href="/plist/16?num=7">7</a></li><li><a href="/plist/16?num=2">下一页 &raquo;</a></li></ul>
        </div>
    </div>
    <div class="clear"></div>
</div>


<!-- footer -->

<div class="clear"></div>



<script type="text/javascript" src="../app/views/public/js/jquery.lazyload.min.js"></script>
<script type="text/javascript" src="../app/views/public/js/jquery.slide.js"></script>
<script type="text/javascript">
    $(function () {
        $("img").lazyload({
            effect: "fadeIn",
            container: $("body")
        });
        $("#jdtslide").KinSlideshow({
            moveStyle: "left",
            intervalTime: 5,
            mouseEvent: "mouseover",
            titleBar: {"titleBar_bgColor": ""},
            titleFont: {TitleFont_size: 14, TitleFont_color: "#ffffff"}
        });
        $(".fenlei_li").hover(
            function () {
                $(".fenlei_li").find("h3 a").removeClass("sel");
                $(this).find("h3 a").addClass("sel");
                $(".fenlei_li").find("div").hide();
                $(this).find("div").show();
            },
            function () {
                $(".fenlei_li").find("h3 a").removeClass("sel");
                $(".fenlei_li").find("div").hide();
            }
        )
    })
</script>
</body>
</html>
