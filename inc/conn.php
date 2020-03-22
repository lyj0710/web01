<?php
	/*
	 如果php版本低于7，使用下列代码
	 */
	//连接到MySQL数据库服务器
	$conn=mysql_connect("localhost","root","root");
	//如果数据库连接对象创建失败，抛出错误信息
	if(!$conn)
	{
		die('Could not connect:' .mysql_error());
	}
	//选择要操作的数据库对象
	$dbselect=mysql_select_db("company");
	//如果数据库选择失败，抛出错误信息
	if(!$dbselect)
	{
		die('Can\'t use DataBase:' .mysql_error());
	}
	//设置编码为utf8
	mysql_query("set names 'utf8'");
?>
