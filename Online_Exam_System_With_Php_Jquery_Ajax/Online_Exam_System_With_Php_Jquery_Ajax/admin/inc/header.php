<?php 
    include_once ("../lib/Session.php");
    Session::checkAdminSession();
    include_once ("../lib/Exam_Database.php");
    include_once ("../helpers/Exam_Format.php");
	$db  = new Exam_Database();
	$fm  = new Exam_Format();
?>
<?php
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: pre-check=0, post-check=0, max-age=0"); 
header("Pragma: no-cache"); 
header("Expires: Mon, 6 Dec 1977 00:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
?>
<!doctype html>
<html>
<head>
	<title>Admin</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="no-cache">
	<meta http-equiv="Expires" content="-1">
	<meta http-equiv="Cache-Control" content="no-cache">
	<link rel="stylesheet" href="css/admin.css">
</head>
<body>
<div class="phpcoding">
	<section class="headeroption"></section>
        <?php
        if(isset($_GET['action'])&& $_GET['action']=='logout'){
            Session::destroy();
            header("Location:login.php");
            exit();
        }
        ?>
		<section class="maincontent">
		<div class="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="users.php">Manage user</a></li>
			<li><a href="quesadd.php">Add Ques</a></li>
			<li><a href="queslist.php">Ques List</a></li>
			<li><a href="?action=logout">Logout</a></li>
		</ul>
	 </div>
	