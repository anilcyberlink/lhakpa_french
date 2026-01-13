<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>New Booking Notification – <?php echo e($setting->site_name); ?></title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
      }
      .container {
        max-width: 700px;
        margin: 20px auto;
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      }
      .header {
        text-align: center;
        padding-bottom: 10px;
        border-bottom: 2px solid #ddd;
      }
      .header img {
        width: 100px;
      }
      .header h1 {
        margin: 10px 0 0;
        font-size: 22px;
        color: #333;
      }
      table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
      }
      table, th, td {
        border: 1px solid #ddd;
      }
      th, td {
        padding: 10px;
        text-align: left;
      }
      th {
        background-color: #f4f4f4;
      }
      .footer {
        margin-top: 20px;
        text-align: center;
        font-size: 14px;
        color: #555;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="header">
        <img src="<?php echo e(asset('themes-assets/img/logo.png')); ?>" alt="Logo">
        <h1>New Booking Notification</h1>
      </div>

      <p>Dear <?php echo e($setting->site_name); ?> Owner,</p>
      <p>A new booking has been made. Below are the details:</p>

      <table>
        <tr>
          <th>Full Name</th>
          <td><?php echo e($full_name); ?></td>
        </tr>
        <tr>
          <th>Phone</th>
          <td><?php echo e($phone); ?></td> 
        </tr>
        <tr>
          <th>Email</th>
          <td><?php echo e($email); ?></td>
        </tr>
        <tr>
          <th>Address</th>
          <td><?php echo e($address); ?></td>
        </tr>
        <tr>
          <th>Country</th>
          <td><?php echo e($country); ?></td>
        </tr>
        <tr>
          <th>Nationality</th>
          <td><?php echo e($nationality); ?></td>
        </tr>
        <tr>
          <th>Zip/Postal Code</th>
          <td><?php echo e($zip); ?></td>
        </tr>
        <tr>
          <th>Room Type</th>
          <td><?php echo e($room_type); ?></td>
        </tr>
        <tr>
          <th>Total Number of Rooms</th>
          <td><?php echo e($total_rooms); ?></td>
        </tr>
        <tr>
          <th>Total Number of Guests</th>
          <td><?php echo e($total_guests); ?></td>
        </tr>
        <tr>
          <th>Fooding</th>
          <td><?php echo e($fooding); ?></td>
        </tr>
        <tr>
          <th>Check-In Date</th>
          <td><?php echo e($check_in_date); ?></td>
        </tr>
        <tr>
          <th>Check-Out Date</th>
          <td><?php echo e($check_out_date); ?></td>
        </tr>
      </table>

      <p>If you need to take any action or require further details, please log in to your admin panel.</p>

      <div class="footer">
        <p>Thank you,</p>
        <p><strong><?php echo e($setting->site_name); ?></strong></p>
      </div>
    </div>
  </body>
</html><?php /**PATH D:\xampp\htdocs\tapowan\resources\views/themes/default/mail/booking.blade.php ENDPATH**/ ?>