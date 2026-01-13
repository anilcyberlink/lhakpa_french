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
<h1>Event Inquiry</h1>
</div>
</center>
<h1><?php echo e($setting->site_name); ?></h1>
<table>
  <tr>
    <td><strong>Name</strong></td>
    <td><?php echo e($full_name); ?></td>
  </tr>
   <tr>
    <td><strong>Organization Name</strong></td>
    <td><?php echo e($org_name); ?></td>
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
    <td><strong>Start Date</strong></td>
    <td><?php echo e($start_date); ?></td>
  </tr>
  <tr>
    <td><strong>End Date</strong></td>
    <td><?php echo e($end_date); ?></td>
  </tr>  <tr>
    <td><strong>Time From</strong></td>
    <td><?php echo e($timefrom); ?></td>
  </tr>
  <tr>
    <td><strong>Time To </strong></td>
    <td><?php echo e($timeto); ?></td> 
  </tr>
  <tr>
    <td><strong>Hall Type</strong></td>
    <td><?php echo e($hall_type); ?></td>
  </tr>
  <tr>
    <td><strong>Hall Setup</strong></td>
    <td><?php echo e($hall_setup); ?></td>
  </tr>
  <tr>
    <td><strong>Event Type</strong></td>
    <td><?php echo e($theme); ?></td>
  </tr>  <tr>
    <td><strong>Guaranteed Pax</strong></td>
    <td><?php echo e($GuaranteedPax); ?></td>
  </tr>
  <tr>
    <td><strong>Expected Pax </strong></td>
    <td><?php echo e($ExpectedPax); ?></td> 
  </tr>
  <tr>
    <td><strong>Decoration</strong></td>
    <td><?php echo e($decoration); ?></td>
  </tr>
  <tr>
    <td><strong>Furnishing</strong></td>
    <td><?php echo e($furnishing); ?></td>
  </tr>
  <tr>
    <td><strong>Food</strong></td>
    <td><?php echo e($food); ?></td>
  </tr>  <tr>
    <td><strong>Menu Theme</strong></td>
    <td><?php echo e($menu_theme); ?></td>
  </tr>
  <tr>
    <td><strong>Drinks From Host </strong></td>
    <td><?php echo e($drinks_host); ?></td> 
  </tr>
  <tr>
    <td><strong>Drinks From Hotel</strong></td>
    <td><?php echo e($drinks_hotel); ?></td>
  </tr>
  <tr>
    <td><strong>Entertainment</strong></td>
    <td><?php echo e($entertainment); ?></td>
  </tr>
  <tr>
    <td><strong>Audio, Video</strong></td>
    <td><?php echo e($audio); ?></td>
  </tr>
  <tr>
    <td><strong>Additional Requirements</strong></td>
    <td><?php echo e($requirements); ?></td>
  </tr>
</table>
<p>Thank You</p>
</div>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\tapowan\resources\views/themes/default/mail/contact-message2.blade.php ENDPATH**/ ?>