<?php
    error_reporting(0);
	$link=mysql_connect("localhost","root","root") or die("���ݿ�����ʧ��");//���ӷ����������ݿ�
	mysql_select_db("animaldesign",$link) or die("��ѡ��ʧ��");//ѡ��������ݿ�
	mysql_query("set names utf8");//���������ֵ���룬���ı���
		mysql_query("SET NAMES 'GB2312'");
	$sql="insert into news(newsname,news) values('$_POST[newsname]','$_POST[news]')";//sql���
	//$sql="select * from news";
	$query=mysql_query("$sql");//�������뵽���ݿ��У����ز��������ݣ�true,false.
	
	if($query){
		echo "<script>alert('���Գɹ�');</script>";
	}
	else{
		echo "<script>alert('����ʧ��');</script>";
	}
?>