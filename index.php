<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="author" content="lyy" />
<meta name="keyewords" content="撞库数据查询" />
<meta name="description" content="全球鹰网科版权所有"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<title>撞库数据查询</title>
<link rel="stylesheet" type="text/css" href="css/mystyle.css" />
<script src="js/showInfo.js"></script>
</head>
<body>
<div id="wrapper">
  <div class="bgImg">
    <div class="blur"></div>
  </div>
  <div class="signOut">
    <h1>撞库数据查询</h1>
    <div class="container1">
      <form>
        <div class="form-group">
            <label for="outUserName"></label>
            <input type="text" class="outUserName" id="name" placeholder="手机号,账号名称,邮箱,IP,用户名..." onkeypress="BindEnter();">
			<select id="grade" style=display:none;>
            <option value="12306测试" selected="selected"></option>
          </select>
        </div>
        <div class="btn-group">
            <button type="button" id="but" class="btn btnSignUp" onclick="showInfo()">查找一下</button>
        </div>
      </form>
    </div>
	<h5 id="result"></h5> 
	<h6>版权所有 &copy; 全球鹰(福建)网络科技有限公司</h6> 
  </div>
</div>
</body>
</html>