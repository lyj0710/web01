<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>薄衾坊网站后台管理系统</title>
<link href="css/login.css" rel="stylesheet" type="text/css" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0"> 
  <title>登录界面</title>
    <link href="css/default.css" rel="stylesheet" type="text/css" />
  <!--必要样式-->
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <link href="css/demo.css" rel="stylesheet" type="text/css" />
    <link href="css/loaders.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
if (top != window)  
      top.location.href = window.location.href;  

      //在验证码
function chk(theForm){
//获取输入的验证码
    var inputCode = document.getElementById("inputCode").value;
    console.log(inputCode);
if (theForm.admin_name.value == ""){
alert("请输入帐号！");
theForm.admin_name.focus();
return (false);
}
else if (theForm.admin_pass.value == ""){
alert("请输入密码！");
theForm.admin_pass.focus();
return (false);
}
else if (theForm.code.value == ""){
alert("请输入验证码！");
theForm.code.focus();
return (false);
}
else if(inputCode.toUpperCase() != CodeVal.toUpperCase()){
  alert("验证码输入有误！");
  return (false);
}
else{
	return true;
	}
}
</script>
</head>
<body>
<div class='login'>
<form action="login_check.php" method="Post" id="form1" onSubmit="return chk(this)">
    <div class='login_title'>
      <span>管理员登录</span>
    </div>
    <div class='login_fields'>
      <div class='login_fields__user'>
        <div class='icon'>
          <img alt="" src='img/user_icon_copy.png'>
        </div>
        <input name="admin_name" id="uname" type="text" class="ip" placeholder='用户名' maxlength="16" type='text' autocomplete="off" value=""/>
          <div class='validation'>
            <img alt="" src='img/tick.png'>
          </div>
      </div>
      <div class='login_fields__password'>
        <div class='icon'>
          <img alt="" src='img/lock_icon_copy.png'>
        </div>
        <input name="admin_pass" id="pwd" type="password" class="ip" placeholder='密码' maxlength="16" type='text' autocomplete="off">
        <div class='validation'>
          <img alt="" src='img/tick.png'>
        </div>
      </div>
      <div class='login_fields__password'>
        <div class='icon'>
          <img alt="" src='img/key.png'>
        </div>
        <input name="code ValidateNum" id="inputCode" placeholder='验证码' maxlength="4" type='text'  autocomplete="off">
        <div class='validation' style="opacity: 1; right: -5px;top: -3px;">
          <canvas class="J_codeimg" id="myCanvas" onclick="Code();" title="看不清，点我换一张"></canvas>
        </div>
      </div>
      <div class='login_fields__submit'>
        <input type='submit' value='登录'>
      </div>
    </div>
    <div class='success'>
    </div>
    <div class='disclaimer'>
      <p>欢迎登录<span style="color:#17bdea;">华裾阁</span>后台管理系统</p>
    </div>
    </form>
  </div>
  <!-- <link href="layui/css/layui.css" rel="stylesheet" type="text/css" /> -->
  <script src="js/jquery-1.10.2.js"></script>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
  <script type="text/javascript" src='js/stopExecutionOnTimeout.js?t=1'></script>
<!-- <script src="layui/layui.js" type="text/javascript"></script> -->
    <script src="js/Particleground.js" type="text/javascript"></script>
    <script src="Js/Treatment.js" type="text/javascript"></script>
    <script src="js/jquery.mockjax.js" type="text/javascript"></script>
 <script type="text/javascript">
    var canGetCookie = 1;//是否支持存储Cookie 0 不支持 1 支持
    //定义保存生成验证码变量
    var CodeVal = 0;
      Code();
      function Code() {
      if(canGetCookie == 1){
        createCode("AdminCode");
        var AdminCode = getCookieValue("AdminCode");
        showCheck(AdminCode);
      }else{
        showCheck(createCode(""));
      }
    }

      function showCheck(a) {
      CodeVal = a;
          var c = document.getElementById("myCanvas");
          var ctx = c.getContext("2d");
          ctx.clearRect(0, 0, 800, 800);
          ctx.font = "80px 'Hiragino Sans GB'";
          //背景颜色
          ctx.fillStyle = "rgba(0,0,0,0.05)";
          //矩形左上角x,y坐标以及矩形宽高
          ctx.fillRect(0,0,c.width,c.height);
          //生成干扰线20条
          for(var j=0;j<20;j++){
          //线条的颜色
          ctx.strokeStyle='#FFFF99';
          //若省略beginPath，则每点击一次验证码会累积干扰线的条数
          ctx.beginPath(); 
          ctx.moveTo(Math.floor(Math.random() * c.width), Math.floor(Math.random() * c.height));
          ctx.lineTo(Math.floor(Math.random() * c.width), Math.floor(Math.random() * c.height));
          ctx.lineWidth=2;
          ctx.closePath();
          ctx.stroke();
      }
          //字体颜色
          // ctx.fillStyle='#E8DFE8';
          ctx.fillStyle='rgba(255,255,255,0.6)';
          //把生成的随机数文本填充到canvas中
          ctx.fillText(a, 0, 100);
      }
      //粒子背景特效
      $('body').particleground({
          //点颜色
          dotColor: '#FFFF99',
          //线颜色
          lineColor: 'rgba(78,141,159,0.3)',

      });
      $('input[name="pwd"]').focus(function () {
          $(this).attr('type', 'password');
      });
      $('input[type="text"],input[type="password"]').focus(function () {
          $(this).prev().animate({ 'opacity': '1' }, 200);
      });
      $('input[type="text"],input[type="password"]').blur(function () {
          $(this).prev().animate({ 'opacity': '.5' }, 200);
      });
    </script>
</body>
</html>
