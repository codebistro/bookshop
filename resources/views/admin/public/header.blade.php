    <!-- 顶部开始 -->
    <div class="container">
        <div class="logo"><a href="./index.html">Admin Index</a></div>
        <div class="left_open">
            <i title="Expand side menu" class="iconfont">&#xe699;</i>
        </div>
        <ul class="layui-nav left fast-add" lay-filter="">
          <li class="layui-nav-item">
            <a href="javascript:;">+Add</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
              <dd><a onclick="x_admin_show('News','http://www.baidu.com')"><i class="iconfont">&#xe6a2;</i>News</a></dd>
              <dd><a onclick="x_admin_show('Pictures','http://www.baidu.com')"><i class="iconfont">&#xe6a8;</i>Pictures</a></dd>
               <dd><a onclick="x_admin_show('Users','http://www.baidu.com')"><i class="iconfont">&#xe6b8;</i>Users</a></dd>
            </dl>
          </li>
        </ul>
        <ul class="layui-nav right" lay-filter="">
          <li class="layui-nav-item">
            <a href="javascript:;">Admin</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
              <dd><a onclick="x_admin_show('Personal Info','http://www.baidu.com')">Personal Info</a></dd>
              <dd><a onclick="x_admin_show('Switch Account','http://www.baidu.com')">Switch Account</a></dd>
              <dd><a href="{{ url('admin/logout') }}">Exit</a></dd>
            </dl>
          </li>
          <li class="layui-nav-item to-index"><a href="/index">Home</a></li>
        </ul>

    </div>
    <!-- 顶部结束 -->
