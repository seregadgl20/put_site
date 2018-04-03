<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.1//EN"> 
<html> 
<head> 
  <script src="http://vkontakte.ru/js/api/xd_connection.js?20" type="text/javascript"></script> 
</head> 
<body> 

<div id="vk_comments"></div> 

<script type="text/javascript" language="javascript"> 
VK.Widgets.Comments('vk_comments', {limit: 10, width: '627', attach: '*'}); 
</script> 

</body> 
</html>

<?php

$client_id = '6435178';
$scope = 'offline,messages';
$url = 'http://hot-news.umc.by/';
?>

<a href="https://oauth.vk.com/authorize?client_id=6435178&scope=<?php echo $scope;?>&redirect_uri=<?php echo $url;?>&display=DISPLAY&response_type=token">Push the button</a>

