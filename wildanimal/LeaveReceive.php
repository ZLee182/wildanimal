<?php
	error_reporting(0);
	$link=mysql_connect("localhost","root","root") or die("���ݿ�����ʧ��");//���ӷ����������ݿ�
	mysql_select_db("animaldesign",$link) or die("��ѡ��ʧ��");//ѡ��������ݿ�
	mysql_query("set names gb2312");
	mysql_query("set names utf8");//���������ֵ���룬���ı���
	$date=date("Y-m-d H:i:s");
    $sql="insert into LeaveMessage(`nickname`,`content`,`date`)values('$_POST[nickname]','$_POST[content]',now())";
	//$sql="select * from LeaveMessage";//leave";
	$query=mysql_query("$sql");//�������뵽���ݿ��У����ز��������ݣ�true,false.
	
	if($query){
		echo"<script>alert('���Գɹ�');history.go(-1);</script>";  
		
	}
	else{
		echo"<script>alert('����ʧ��');history.go(-1);</script>";  
	}
	

?>