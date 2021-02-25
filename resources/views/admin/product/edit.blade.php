<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <title>Edit Page-X-admin2.0</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
      @include('admin.public.styles')
      @include('admin.public.script')
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
      <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="x-body">
        <form class="layui-form">

          <div class="layui-form-item">
              <label for="L_email" class="layui-form-label">
                  <span class="x-red">*</span>Admin Name
              </label>
              <div class="layui-input-inline">
                  <!-- hidden uid 选项 ,不显示,但是方便ajax获取uid -->
                  <input type="hidden" name="uid" value="{{ $user->user_id }}">
                  <input type="text" id="L_email" value="{{ $user->user_name }}" name="user_name" required="" lay-verify="nickname"
                  autocomplete="off" class="layui-input">
              </div>
              <div class="layui-form-mid layui-word-aux">
                  <span class="x-red">*</span>This is login name
              </div>
          </div>

          <div class="layui-form-item">
              <label for="L_pass" class="layui-form-label">
                  <span class="x-red">*</span>Password
              </label>
              <div class="layui-input-inline">
                  <input type="password" id="L_pass" name="pass"  required="" lay-verify="pass"
                  autocomplete="off" class="layui-input">
              </div>
              <div class="layui-form-mid layui-word-aux">
                  Should be 6-16 characters
              </div>
          </div>

          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label">
                  <span class="x-red">*</span>Confirm password
              </label>
              <div class="layui-input-inline">
                  <input type="password" id="L_repass" name="repass" required="" lay-verify="repass"
                  autocomplete="off" class="layui-input">
              </div>
          </div>

          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label">
              </label>
              <button  class="layui-btn" lay-filter="edit" lay-submit="">
                  Modify
              </button>
          </div>
      </form>
    </div>
    <script>
        layui.use(['form','layer'], function(){
            $ = layui.jquery;
          var form = layui.form
          ,layer = layui.layer;

          //自定义验证规则
          form.verify({
            nikename: function(value){
              if(value.length < 5){
                return 'Nickname should be 5 characters at leaast';
              }
            }
            ,pass: [/(.+){6,12}$/, 'The password should be between 6-12 characters']
            ,repass: function(value){
                if($('#L_pass').val()!=$('#L_repass').val()){
                    return 'There is some difference between two passwords';
                }
            }
          });

          //监听提交
          form.on('submit(edit)', function(data){
            // 获取uid的值
            var uid = $("input[name='uid']").val();
            //发异步，把数据提交给php
              $.ajax({
                  type:'PUT',
                  // update方法的路由
                  url:'/admin/user/'+uid,
                  dataType:'json',
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  data:data.field,
                  success:function(data){
                      // 弹层提示添加成功，并刷新父页面
                      // console.log(data);
                      //如果状态为0的话,那么返回图标,刷新父级页面
                      if(data.status == 0){
                          layer.alert(data.message,{icon:6},function(){
                              parent.location.reload(true);
                          });
                      }else{
                          layer.alert(data.message,{icon:5});
                      }
                  },
                  error:function(){
                      //错误信息
                  }

              });





            // layer.alert("增加成功", {icon: 6},function () {
            //     // 获得frame索引
            //     var index = parent.layer.getFrameIndex(window.name);
            //     //关闭当前frame
            //     parent.layer.close(index);
            // });
            return false;
          });


        });
    </script>
    <script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
      })();</script>
  </body>

</html>
