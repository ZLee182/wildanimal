<?php
    error_reporting(0);
	$link=mysql_connect("120.27.35.231","lee","941227") or die("���ݿ�����ʧ��");//���ӷ����������ݿ�
	mysql_select_db("animaldesign",$link) or die("��ѡ��ʧ��");//ѡ��������ݿ�
	mysql_query("set names utf8");//���������ֵ���룬���ı���
	//mysql_query("SET NAMES 'GB2312'");
    $sql="insert into news(`newsname`,`news`)values('$_POST[newsname]','$_POST[news]')";
	//$sql="select * from news";
	$query=mysql_query("$sql");//�������뵽���ݿ��У����ز��������ݣ�true,false.
	
	if($query){
		echo "<script>alert('���ŷ��ͳɹ�');</script>";
		Header('Location:upnew.php');
		
	}
	else{
		echo "<script>alert('���ŷ���ʧ��');</script>";
		Header('Location: upnew.php');
	}
?>
