
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>ewshop后台管理 - 增加商品</title>
<!-- 	<link type="text/css" rel="stylesheet" href="../../app/views/admin/resource/css/style.css" />
	<script type="text/javascript" src="../../app/views/public/js/jquery.js"></script>
	<script type="text/javascript" src="../../app/views/public/js/global.js"></script> -->

    <link type="text/css" rel="stylesheet" href="{{ asset('admin/css/style.css')}}"/>
    <script type="text/javascript" src="{{ asset('admin/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/global.js') }}"></script>
</head>
<div class="bgimg"></div>
<div class="pagetop">

</div>
<div class="content">
	<div class="main">


		<div class="right">
			<div class="now">
				<div class="now_l"></div>
				<div class="now_m">
					<span class="fl">Add Products</span>
					<span class="fr fabu"><a href="/admin/product/add">Issue Products</a></span>
				</div>
				<div class="now_r"></div>
				<div class="clear"></div>
			</div>
			<form method="post" enctype="multipart/form-data">
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="wenzhang">
					<!-- input type="hidden" name="id" value="" -->
					<tr>
						<td width="100" class="bg_f8" align="right">Product Name：</td>
						<td colspan="3"><input type="text" name="name" value="" class="inputall input500" maxlength="36" /></td>
						<td rowspan="7" valign="top" width="80">
							<img src="../../uploads/nopic.gif" width="160" height="170" style="border:1px solid #ddd; display:block;" />
							<p class="mat5"><input type="file" name="logo" size="12" style="width:160px;" /></p>
						</td>
					</tr>
					<tr>
						<td class="bg_f8" align="right">Product Categery：</td>
						<td colspan="3">
							<select name="cid" class="inputall">
								<option value="0" selected>--Root Categery--</option>

								<option value="14" >
									&nbsp;
									|-前沿
								</option>
								<option value="20" >
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									|-区块链
								</option>
								<option value="21" >
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									|-人工智能
								</option>
								<option value="15" >
									&nbsp;
									|-前端
								</option>
								<option value="22" >
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									|-小程序
								</option>
								<option value="23" >
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									|-JavaScript
								</option>
								<option value="16" >
									&nbsp;
									|-后端
								</option>
								<option value="24" >
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									|-Java
								</option>
								<option value="25" >
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									|-PHP
								</option>
								<option value="26" >
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									|-Python
								</option>
								<option value="27" >
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									|-GoLang
								</option>
								<option value="18" >
									&nbsp;
									|-云计算
								</option>
								<option value="19" >
									&nbsp;
									|-产品设计
								</option>

							</select>
						</td>
					</tr>
					<tr>
						<td class="bg_f8" align="right">Sales：</td>
						<td width="250"><input type="text" name="money" value="" class="inputall input100" /> <span class="c888">元</span></td>
						<td width="100" class="bg_f8" align="right">运　　费：</td>
						<td><input type="text" name="wlmoney" value="" class="inputall input100" /> <span class="c888">元（注：0元为卖家包邮）</span></td>
					</tr>
					<tr>
						<td class="bg_f8" align="right">Price：</td>
						<td width="250"><input type="text" name="smoney" value="" class="inputall input100" /> <span class="c888">元</span></td>
						<td width="100" class="bg_f8" align="right">Special：</td>
						<td><input type="checkbox"  name="istj"  value="1"/></td>
					</tr>

					<tr>
						<td class="bg_f8" align="right">Products Num：</td>
						<td colspan="3"><input type="text" name="mark" value="" class="inputall input100" /></td>
					</tr>
					<tr>
						<td class="bg_f8" align="right">In Total：</td>
						<td colspan="3"><input type="text" name="num" value="" class="inputall input100" /></td>
					</tr>
					<tr>
						<td class="bg_f8" align="right">Issue Date：</td>
						<td colspan="3"><input type="text" name="atime" class="inputall input200" placeholder="请选择日期" id="date"></td>
					</tr>
				</table>
				<div class="mat5">
					<textarea name="content" id="edit_body" class="form-control float-left col-9" placeholder="" rows="4" resize="none">Description</textarea>

					<script src="../../app/views/public/js/tinymce/tinymce.min.js"></script>

					<script src="../../app/views/public/js/fwb.js"></script>

				</div>
				<div class="mat10 center">
					<input type="submit"  name="do_submit"  value="提 交" class="tjbtn" />
				</div>
			</form>
		</div>

		<script src="../../app/views/public/js/laydate.js"></script>
		<script>
			lay('#version').html('-v'+ laydate.v);

			//执行一个laydate实例
			laydate.render({
				elem: '#date' //指定元素
			});
		</script>

		<div class="clear"></div>
	</div>

</div>

<script type="text/javascript">
	$(function(){
		$(".list").find("tr").hover(
				function(){
					if ($(this).find("td").hasClass("bgtt")) return;
					$(this).find("td").css("background-color", "#ffffdd");
				},
				function(){
					if ($(this).find("td").hasClass("bgtt")) return;
					$(this).find("td").css("background-color", "#fff");
				}
		)
	})
</script>



</body>
</html>
