<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Register</title>
    <meta name="keywords" content="前沿 - Welcome Our Bookshop"/>
    <meta name="description" content="Bookshop"/>
    <link type="text/css" rel="stylesheet" href={{ asset('home/css/styles.css') }}/>
    <script type="text/javascript" src=" {{ asset('home/js/jquery.js') }}></script>
    <script type="text/javascript" src=" {{ asset('home/js/global.js') }}></script>
</head>
<body>
<div class="pagetop">

    {% if login %}
    <div class="quick_menu">
        <p>
            <span class="fl">您好<a style="border:0px;padding:0px" href="/user/order" title="会员中心"><span class="cred">aaaaa</span></a>， bbbbb</span>
            <span class="fr">
				<a href="/user/order" title="会员中心">会员中心</a>
				<a href="/order/add" title="购物车" class="gwc">购物车 <span class="cred">cccc</span> 件</a>
				<a href="/order/plist" title="订单查询">订单查询</a>
				<a href="/user/logout" title="退出" style="border:0">退出</a>
			</span>
        </p>
    </div>

    {% else %}

    <div class="quick_menu">
        <p>
            <span class="fl">您好，dddddd</span>
            <span class="fr">
					<a href="/user/login" title="登录">登录</a>
					<a href="/user/register" title="注册">注册</a>
					<a href="/order/add" title="购物车" class="gwc">购物车 <span class="cred">aaaa</span> 件</a>
					<a href="/order/plist" title="订单查询" style="border:0">订单查询</a>
            </span>
        </p>
    </div>

    {% endif %}

    <div class="width980">
        <div class="header" style="padding:10px 0">
            <div class="fl logo">
                <a href="/" title="aaaaa">
                    <img src="aaa" height="50" alt="aaaa"/>
                </a>
            </div>

            <div class="sear fl">
                <form method="get" action="/plist/{{pid}}">
                    <div class="inputbg fl">
                        <input type="text" name="keyword" value="{{order.keyword}}" class="fl searinput c666"/>
                    </div>
                    <input type="submit" class="fl sear_btn" onclick="this.form.submit();return false;" value="搜索"/>
                </form>
            </div>
            <p class="top_tel fr">咨询热线：{{setting.web_phone}}</p>
        </div>
    </div>

    <div class="clear"></div>

    <div class="nav">
        <ul>
            <li class="sel"><a href="/" title="首页">首页</a></li>
            {% for v in cats %}
            <li><a href="/plist/{{v.id}}">{{v.catname}}</a></li>
            {% endfor %}
            <li class="sel"><a href="/page/17" title="关于我们">关于我们</a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>

{% for v in ads %}
{% if v.position == 3 %}
<div class="ad980">
    {% if v.url is null %}
    <img src="{{res}}/ad/{{v.logo}}" width="980" height="80"/>
    {%else%}
    <a href="{{v.url}}" target="_blank">
        <img src="{{res}}/ad/{{v.logo}}" width="980" height="80"/>
    </a>
    {% endif %}
</div>
{% endif %}
{% endfor %}
