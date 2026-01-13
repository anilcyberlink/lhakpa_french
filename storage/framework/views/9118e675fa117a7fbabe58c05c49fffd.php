<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?php echo e($setting->site_name); ?></title>
<style>
table {
    border-collapse: collapse;
	width:100%;
}
table, th, td {
    border: 1px solid #ddd;
	padding:8px;
}
</style>
</head>
<body style="font-family: sans-serif">
<div style="margin:0 auto; max-width:700px; width:100%;">
<center>
<div style="background:#FFF; padding:8px 0px; margin-bottom:5px;">
<h1>Contact Us</h1>
</div>
</center>

<table>
  <tr>
    <td bgcolor="#ddd"  ><strong>Name</strong></td>
    <td bgcolor="#ddd" ><?php echo e($firstname); ?>$nbsp;<?php echo e($lastname); ?></td>
  </tr>
  <tr>
    <td><strong>Phone </strong></td>
    <td><?php echo e($phone); ?></td> 
  </tr>
  <tr>
    <td><strong>Email</strong></td>
    <td><?php echo e($email); ?></td>
  </tr>
  <tr>
    <td><strong>Message</strong></td>
    <td><?php echo e($comments); ?></td>
  </tr>
</table>
<p>Thank You</p>
</div>
</body>
</html>
<?php /**PATH /home/crowneimperial/public_html/resources/views/themes/default/mail/contact-message.blade.php ENDPATH**/ ?>