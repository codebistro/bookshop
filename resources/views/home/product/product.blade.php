<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Welcome to bookshop</title>
    <meta name="keywords" content="php商城系统"/>
    <meta name="description" content="EWShop"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('home/css/styles.css')}}"/>
    <script type="text/javascript" src="{{ asset('home/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home/js/global.js') }}"></script>
</head>
<body>
<div class="pagetop">
    <div class="quick_menu">
        <p>
            <span class="fl">Hello<a style="border:0px;padding:0px" href="/user/order" title="会员中心"><span class="cred">user001</span></a>， Welcome to our bookshop</span>
            <span class="fr">
				<a href="/user/order" title="会员中心">Member Center</a>
				<a href="/order/add" title="购物车" class="gwc">Chart <span class="cred">0</span> </a>
				<a href="/order/plist" title="订单查询">Order Info</a>
				<a href="/user/logout" title="退出" style="border:0">Logout</a>
			</span>
        </p>
    </div>


    <div class="width980">
        <div class="header" style="padding:10px 0">
            <div class="fl logo">

            </div>

            <div class="sear fl">
                <form method="get" action="/plist/0">
                    <div class="inputbg fl">
                        <input type="text" name="keyword" value="" class="fl searinput c666"/>
                    </div>
                    <input type="submit" class="fl sear_btn" onclick="this.form.submit();return false;" value="搜索"/>
                </form>
            </div>

        </div>
    </div>

    <div class="clear"></div>

    <div class="nav">
        <ul>
            <li class="sel"><a href="/" title="首页">Index</a></li>
            <li><a href="/plist/15">Backend</a></li>
            <li><a href="/plist/15">Backend</a></li>
            <li><a href="/plist/15">Backend</a></li>
            <li><a href="/plist/15">Backend</a></li>
            <li><a href="/plist/15">Backend</a></li>
            <li><a href="/plist/15">Backend</a></li>
            <li><a href="/plist/15">Backend</a></li>
            <li><a href="/plist/15">Backend</a></li>
            <li class="sel"><a href="/page/16" title="关于我们">关于我们</a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<!-- content -->
<div class="content">

    <div class="fl proimg">
        <img src="{{ asset('/uploads/product/'.$product->logo) }}" data-original="{{ asset('/uploads/product/'.$product->logo) }}" width="400" height="400" />
    </div>
    <div class="fl proinfo">
        <h3>{{$product->name}}</h3>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr style="color:#fff;background:#d83228; background:url(/home/images/images/jg_bg.gif) repeat;">
                <td style="height:50px;" valign="top" width="60"><p class="mat5">Sales</p></td>
                <td style="height:50px;">
                    <span style="color:yellow" class="jg_price"> <span id="product_money"><small>$</small>{{$product->money}}</span></span>
                    <p>Price <s class="num"><small>$</small>{{$product->smoney}}</s>　　Shipping：Included</p>
                </td>
            </tr>

            <tr>
                <td style="color:#666">Amount</td>
                <td>Sales total <span class="cred num strong">{{$product->sellnum}}</span>  <a href="javascript:find_comment();" class="cblue">(comments)</a></td>
            </tr>

            <tr>
                <td style="color:#666">Amount</td>
                <td class="shuliang">
                    <input type="hidden" name="prorule_id" />
                    <span class="img1" onclick="bro_numchange('product_num', '-', 1);">-</span>
                    <div class="shuliang_box"><input type="text" name="product_num" value="1" readonly /></div>
                    <span class="img2" onclick="bro_numchange('product_num', '+', '{{$product->collectnum}}');">+</span>
                    <span class="fl c888 mal5 mat2">　Store<span id="product_num">{{$product->collectnum}}</span>件</span>
                </td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td>
                    <a href="javascript:;" onclick="cart_add('{{$product->id}}');" class="fl">
                        <img src="/home/images/images/buy.gif" />
                    </a>
                    <a href="javascript:collect_add('{{$product->id}}');" class="sctj fl">Star</a>
                </td>
            </tr>
        </table>



        <div class="clear"></div>
    </div>

    <div class="clear"></div>



    <div class="fr xiangqing">
        <div class="caidan1">
            <ul class="fl" id="js_menu">
                <li ><a href="javascript:;">Show Product</a></li>
                <li><a href="javascript:;">Enquiries(6)</a></li>
                <li><a href="javascript:;">Comments(4)</a></li>
                <li><a href="javascript:;">Service</a></li>
            </ul>
            <div class="fr c666 mat10 mar10">Product Number：0001</div>
        </div>

        <!-- <div class="promain js_menuhtml">
            <img src="../uploads/article/2020-0820-5f3e0578c11f0.jpg" alt="e12ca4af36580fb1.jpg" width="750" height="8100" />
        </div> -->

        <!--咨询 Start-->
        <div class="promain js_menuhtml" style="display:none">
            <div class="plmain" id="js_askhtml">
                <ul class="mat5">
                    <li class="fl">会员：user001</li>
                    <li class="fr">咨询日期：2020-08-20 07:11</li>
                </ul>
                <div class="padb10 mal10 lh18">
                    <div class="mat10 font14">有作者签名不？</div>
                </div>

                <ul class="mat5">
                    <li class="fl">会员：user001</li>
                    <li class="fr">咨询日期：2020-08-20 07:11</li>
                </ul>
                <div class="padb10 mal10 lh18">
                    <div class="mat10 font14">有作者签名不？</div>
                </div>

                <ul class="mat5">
                    <li class="fl">会员：user001</li>
                    <li class="fr">咨询日期：2020-08-20 07:11</li>
                </ul>
                <div class="padb10 mal10 lh18">
                    <div class="mat10 font14">有作者签名不？</div>
                </div>

                <ul class="mat5">
                    <li class="fl">会员：user001</li>
                    <li class="fr">咨询日期：2020-08-20 07:11</li>
                </ul>
                <div class="padb10 mal10 lh18">
                    <div class="mat10 font14">有作者签名不？</div>
                </div>

                <div class="xuxian1"></div>
                <div class="zixunbox">
                    <div class="fl pl_l"></div>
                    <div class="fl pl_m">请在这里发表您的问题</div>
                    <div class="fl pl_r"></div>
                    <div class="clear"></div>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td valign="top">用户名称：</td>
                            <td> user001 </td>
                        </tr>
                        <tr>
                            <td valign="top">咨询内容：</td>
                            <td><textarea name="asktext" style="width:550px;height:120px;resize:none;"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="button" value="提交" class="tj_btn"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!--咨询 End-->
        <!--评论 Start-->
        <div class="promain js_menuhtml" style="display:none">
            <div class="plmain" id="js_commenthtml">
                <ul class="mat5">
                    <li class="fl">会员：user003</li>
                    <li class="fr">评价日期：2020-08-20 07:13</li>
                </ul>
                <div class="pingjia font14">很好的书， 推荐购买。</div>

                <ul class="mat5">
                    <li class="fl">会员：user003</li>
                    <li class="fr">评价日期：2020-08-20 07:13</li>
                </ul>
                <div class="pingjia font14">很好的书， 推荐购买。</div>

                <ul class="mat5">
                    <li class="fl">会员：user003</li>
                    <li class="fr">评价日期：2020-08-20 07:13</li>
                </ul>
                <div class="pingjia font14">很好的书， 推荐购买。</div>

                <ul class="mat5">
                    <li class="fl">会员：user003</li>
                    <li class="fr">评价日期：2020-08-20 07:13</li>
                </ul>
                <div class="pingjia font14">很好的书， 推荐购买。</div>

                <div class="xuxian1"></div>
                <div class="zixunbox">
                    <div class="fl pl_l"></div>
                    <div class="fl pl_m">请在这里发表您的评论</div>
                    <div class="fl pl_r"></div>
                    <div class="clear"></div>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td valign="top">用户名称：</td>
                            <td>user001</td>
                        </tr>
                        <tr>
                            <td valign="top">评价内容：</td>
                            <td><textarea name="content" style="width:550px;height:120px;resize:none;"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="button" value="提交" class="tj_btn"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!--评论 End-->
        <div class="promain js_menuhtml" style="display:none">
            <a target="_blank" href="http://www.eduwork.cn">
                    这里是通用的内容！
             </a>
        </div>
    </div>
</div>



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
<script charset="utf-8" src="../app/views/public/js/plugin/artdialog/jquery.artDialog.js?skin=simple"></script>
<script charset="utf-8" src="../app/views/public/js/plugin/artdialog/plugins/iframeTools.js"></script>
<script type="text/javascript">
    function find_comment() {
        $("#js_menu").find("li").eq(2).click();
        window.location.href = "#js_menu";
    }


    function collect_add(id) {
        if (!1) {
            alert('抱歉：只有登录用户才能收藏商品！请先登录...');
            return;
        }
        $.getJSON("/product/collectadd", {"pid":id},function(json){
            alert(json.show);
        })
    }


    //加入购物车

    function cart_add(id) {
        $.getJSON("/order/cartadd", {"pid":id,"pnum":$(":input[name='product_num']").val()},function(json){

            if (json.result == true) {
                art.dialog({
                    id: 'cart_add',
                    lock: true,
                    content: '<div class="gw"><p>商品已成功加入购物车！</p><a class="gw2" href="/order/add"></a><a class="gw1" href="javascript:dialog_close();"></a></div>'
                });
            }else if (json.result == -1) {
                alert('商品库存不足...')
            } else {
                alert('抱歉，加入购物车失败，请重新加入...')
            }
        })
    }

    function dialog_close(){
        art.dialog.list['cart_add'].close();
    }



    $(function(){


        //标签切换
        $("#js_menu").find("li").click(function(){
            $("#js_menu").find("li").removeClass("sel");
            $(this).addClass("sel");
            $(".js_menuhtml").hide();
            $(".js_menuhtml").eq($("#js_menu").find("li").index($(this))).show();
        })

        //咨询发表
        $("#js_askhtml").find(":button").click(function(){
            //判断登陆
            if (!1) {
                alert('抱歉：只有登录用户才能发表咨询！请先登录...');
                return;
            }
            var ask_text = $(":input[name='asktext']").val();
            if (ask_text == '') {
                alert('咨询内容必须填写');
                return;
            }


            $.post("/product/askadd", {"pid":898,"asktext":ask_text, "do_submit":true}, function(json){

                if (json.result) {
                    $("#js_askhtml").prepend(json.html);
                    $(":input[name='asktext']").val('');
                    alert('咨询提交成功！卖家会尽快答复...');
                }else {
                    alert('抱歉，咨询提交失败，请重新提交...');
                }
            }, 'json');
        });


        //评价发表
        $("#js_commenthtml").find(":button").click(function(){
            if (!1) {
                alert('抱歉：只有登录用户才能发表评价！请先登录...');
                return;
            }

            var comment_text = $(":input[name='content']").val();
            if (comment_text == '') {
                alert('评价内容必须填写');
                return;
            }

            $.post("/product/commentadd", {"pid":898,"content":comment_text,"do_submit":true}, function(json){
                if (json.result) {
                    $("#js_commenthtml").prepend(json.html);
                    $(":input[name='content']").val('');
                    alert('感谢您的支持，评价提交成功！');
                }
                else {
                    alert('抱歉，评价提交失败，请重新提交...')
                }
            }, "json")
        });


    });

</script>

