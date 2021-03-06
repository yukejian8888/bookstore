<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/Public/Admin/css/base.css" />
<link rel="stylesheet" href="/Public/Admin/css/info-reg.css" />
<title>移动办公自动化系统</title>
<style>
	.main p input {
		float:none;
	}
</style>
</head>

<body>
<div class="title"><h2>信息登记</h2></div>
<form action="<?php echo U('Admin/Admin/addSave');?>" method="post">
<div class="main">
	<p class="short-input ue-clear">
		<label>用户名：</label>
		<input type="text" name="name" placeholder="用户名" />
	</p>
	<p class="short-input ue-clear">
		<label>密码：</label>
		<input type="password" name="pwd" placeholder="密码" />
	</p>
	<p class="short-input ue-clear">
		<label>密码确认：</label>
		<input type="password" name="re-password" placeholder="密码确认" />
	</p>
	<p class="short-input ue-clear">
		<label>性别：</label>
		<input type="radio" name="sexx" value="男" checked='checked' />男&nbsp;&nbsp;
		<input type="radio" name="sexx" value="女" />女&nbsp;&nbsp;
		<input type="radio" name="sexx" value="保密" />保密
	</p>
	<p class="short-input ue-clear">
		<label>生日：</label>
		<input type="text" name="birth" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})" />
	</p>
	<p class="short-input ue-clear">
		<label>电话：</label>
		<input type="text" name="tel" />
	</p>
	<p class="short-input ue-clear">
		<label>email：</label>
		<input type="text" name="emailbox" />
	</p>
    <p class="short-input ue-clear">
    	<label>权限：</label>
        <input type="radio" name="role" value="2" />普通管理员&nbsp;&nbsp;
		<input type="radio" name="role" value="1" />超级管理员
    </p>
</div>
<div class="btn ue-clear">
	<a href="javascript:;" class="confirm">确定</a>
    <a href="javascript:;" class="clear">清空内容</a>
</div>
</form>
</body>
<script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>
<script type="text/javascript" src="/Public/Admin/js/WdatePicker.js"></script>
<script type="text/javascript">
//提交表单
$('.confirm').click(function(){
	$('form')[0].submit();
});
//清空表单
$('.clear').click(function(){
	//获取当前页面中第一个表单对象
	$('form')[0].reset();
})
$(".select-title").on("click",function(){
	$(".select-list").toggle();
	return false;
});
$(".select-list").on("click","li",function(){
	var txt = $(this).text();
	$(".select-title").find("span").text(txt);
});


showRemind('input[type=text], textarea','placeholder');
</script>
</html>