<?php
	error_reporting(0);
	$link=mysql_connect("localhost","root","root") or die("���ݿ�����ʧ��");//���ӷ����������ݿ�
	mysql_select_db("animaldesign",$link) or die("��ѡ��ʧ��");//ѡ��������ݿ�
	mysql_query("set names utf8");//���������ֵ���룬���ı���
	$sql="insert into touristadvice(Tourist_Name,Tourist_Email,Tourist_Tel,Tourist_Advise)values('$_POST[tourname]','$_POST[tourEmail]','$_POST[tourtel]','$_POST[touradvise]')";//sql���
	//$sql="select * from InsideSite";
	$query=mysql_query("$sql");//�������뵽���ݿ��У����ز��������ݣ�true,false.
	
	if($query){
		echo "<script>alert('��Ϣ���ͳɹ� ');</script>";
	}
	else{
		echo "<script>alert('b');</script>";
	}

?>
<?php
$url="http://localhost/wildanimal/contact.html"; ?>
<html>
<head>
<meta http-equiv="refresh" content="2;
url=<?php echo $url; ?>">
</head>
</html>
