<?php  require_once "header.php"; require_once 'portnav.php';?>
<?php 
    require_once 'DBConnection.php'; 
    $kvmdata=new DB_con(); 
if (isset($_POST['upload'])) { 
    $id =$_POST['id'];
    $target_dir = "/opt/lampp/htdocs/";
    $path = $target_dir . basename($_FILES["files"]["name"]);
    $sql=$kvmdata->virtualupdate($path, $id);
}
?>
<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset=UTF-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1.0">
    <title><?php echo $lang['PAGETITLE']; ?></title>
</head>

<body>
    <div style="border:1px solid black;padding:2px;height:750px;margin-top:-1px;width:1820px;margin-left:70px">
        <table id=table cellpadding=2 cellspacing=0 border=3 style=line-height:3;margin-left:45px>
            <tr align=center style=height:40px;background-color:lightsteelblue>
                <th class=lbl style=width:60px><?php echo $lang['A6']; ?></th>
                <th class=lbl style=width:443px><?php echo $lang['G2']; ?></th>
                <th class=lbl><?php echo $lang['G7']; ?></th>
                <th class=lbl style=width:100px><?php echo $lang['B11']; ?></th>
            </tr>
            <br>
            <?php  
            require_once 'DBConnection.php'; 
            $kvmdata=new DB_con(); 