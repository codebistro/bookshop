<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome Page</title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        @include('admin.public.styles')
    </head>
    <body>
    <div class="x-body layui-anim layui-anim-up">
        <blockquote class="layui-elem-quote">Welcome Administrator：
            <span class="x-red">Simon</span>！Current Time: 20-02-2021 9:50 am</blockquote>
        <fieldset class="layui-elem-field">
            <legend>Statistics</legend>
            <div class="layui-field-box">
                <div class="layui-col-md12">
                    <div class="layui-card">
                        <div class="layui-card-body">
                            <div class="layui-carousel x-admin-carousel x-admin-backlog" lay-anim="" lay-indicator="inside" lay-arrow="none" style="width: 100%; height: 90px;">
                                <div carousel-item="">
                                    <ul class="layui-row layui-col-space10 layui-this">
                                        <li class="layui-col-xs2">
                                            <a href="javascript:;" class="x-admin-backlog-body">
                                                <h3>Number of Articles</h3>
                                                <p>
                                                    <cite>66</cite></p>
                                            </a>
                                        </li>
                                        <li class="layui-col-xs2">
                                            <a href="javascript:;" class="x-admin-backlog-body">
                                                <h3>Number of Members</h3>
                                                <p>
                                                    <cite>12</cite></p>
                                            </a>
                                        </li>
                                        <li class="layui-col-xs2">
                                            <a href="javascript:;" class="x-admin-backlog-body">
                                                <h3>Number of Replies</h3>
                                                <p>
                                                    <cite>99</cite></p>
                                            </a>
                                        </li>
                                        <li class="layui-col-xs2">
                                            <a href="javascript:;" class="x-admin-backlog-body">
                                                <h3>Number of Products</h3>
                                                <p>
                                                    <cite>67</cite></p>
                                            </a>
                                        </li>
                                        <li class="layui-col-xs2">
                                            <a href="javascript:;" class="x-admin-backlog-body">
                                                <h3>Number of Articles</h3>
                                                <p>
                                                    <cite>67</cite></p>
                                            </a>
                                        </li>
                                        <li class="layui-col-xs2">
                                            <a href="javascript:;" class="x-admin-backlog-body">
                                                <h3>Number of Articles</h3>
                                                <p>
                                                    <cite>6766</cite></p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="layui-elem-field">
            <legend>System Notification</legend>
            <div class="layui-field-box">
                <table class="layui-table" lay-skin="line">
                    <tbody>
                        <tr>
                            <td >
                                <a class="x-a" href="/" target="_blank">New version x-admin 2.0 is available</a>
                            </td>
                        </tr>
                        <tr>
                            <td >
                                <a class="x-a" href="/" target="_blank">Facebook:Hezhang Cheng</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </fieldset>
        <fieldset class="layui-elem-field">
            <legend>System Information</legend>
            <div class="layui-field-box">
                <table class="layui-table">
                    <tbody>
                        <tr>
                            <th>xxxVersion</th>
                            <td>1.0.180420</td></tr>
                        <tr>
                            <th>Server Website</th>
                            <td>x.xuebingsi.com</td></tr>
                        <tr>
                            <th>Operating System</th>
                            <td>WINNT</td></tr>
                        <tr>
                            <th>Developing Environment</th>
                            <td>Apache/2.4.23 (Win32) OpenSSL/1.0.2j mod_fcgid/2.3.9</td></tr>
                        <tr>
                            <th>PHP Version</th>
                            <td>5.6.27</td></tr>
                        <tr>
                            <th>PHPOperation mode</th>
                            <td>cgi-fcgi</td></tr>
                        <tr>
                            <th>MYSQL Version</th>
                            <td>5.5.53</td></tr>
                        <tr>
                            <th>ThinkPHP</th>
                            <td>5.0.18</td></tr>
                        <tr>
                            <th>Upload attachment limit</th>
                            <td>2M</td></tr>
                        <tr>
                            <th>Execution time limit</th>
                            <td>30s</td></tr>
                        <tr>
                            <th>Remaining Space</th>
                            <td>86015.2M</td></tr>
                    </tbody>
                </table>
            </div>
        </fieldset>
        <fieldset class="layui-elem-field">
            <legend>Developing Team</legend>
            <div class="layui-field-box">
                <table class="layui-table">
                    <tbody>
                        <tr>
                            <th>All Rights Reserved</th>
                            <td>xuebingsi(xuebingsi)
                                <a href="http://x.xuebingsi.com/" class='x-a' target="_blank">Visit the official website</a></td>
                        </tr>
                        <tr>
                            <th>Developer</th>
                            <td>Simon Cheng(chenghezhang0908@gmail.com)</td></tr>
                    </tbody>
                </table>
            </div>
        </fieldset>
        <blockquote class="layui-elem-quote layui-quote-nm">Thank layui,Baidu Echarts,jquery,This system is supported by x-admin.</blockquote>
    </div>
        <script>
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
          var s = document.getElementsByTagName("script")[0];
          s.parentNode.insertBefore(hm, s);
        })();
        </script>
    </body>
</html>
