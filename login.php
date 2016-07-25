<?php
function login($acct,$pw)
{
include("config.php"); 
$sql="SELECT * FROM account WHERE acct='$acct'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_row($result);

if($acct==null)
{
echo"<font color='red'>錯誤！使用者名稱不能為空！</font>";
echo'<meta http-equiv="refresh" content="2; url=loginpage.php">';
}
elseif($pw==null)
{
echo"<font color='red'>錯誤！密碼不能為空！</font>";
echo'<meta http-equiv="refresh" content="2; url=loginpage.php">';
}
elseif($acct!=$row[0])
{
echo"<font color='red'>錯誤！查無使用者！</font>";

echo'<meta http-equiv="refresh" content="2; url=loginpage.php">';
}
elseif($pw!=$row[1])
{
echo"<font color='red'>錯誤！密碼錯誤！</font>";
echo'<meta http-equiv="refresh" content="2; url=loginpage.php">';
}
else
{
echo"<font color='green'>登入成功！</font>";
echo'<meta http-equiv="refresh" content="2; url=profile.php?name=".$name."">';
$_SESSION['acct']=$acct;
$_SESSION['level']="user";


}
}

?>