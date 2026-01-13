<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Booking Confirmation – <?php echo e($setting->site_name); ?></title>
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
        <h1>Booking Confirmation</h1>
      </div>

      <p>Dear <?php echo e($full_name); ?>,</p>
      <p>Thank you for choosing <strong><?php echo e($setting->site_name); ?></strong>! Your booking has been confirmed. Here are your reservation details:</p>

      <table>
        <tr>
          <th>Check-in Date</th>
          <td><?php echo e($check_in_date); ?></td>
        </tr>
        <tr>
          <th>Check-out Date</th>
          <td><?php echo e($check_out_date); ?></td>
        </tr>
        <tr>
          <th>Room Type</th>
          <td><?php echo e($room_type); ?></td>
        </tr>
        <tr>
          <th>Total Guests</th>
          <td><?php echo e($total_guests); ?></td>
        </tr>
        <tr>
          <th>Number of Rooms</th>
          <td><?php echo e($total_rooms); ?></td>
        </tr>
        <tr>
          <th>Fooding Preference</th>
          <td><?php echo e($fooding); ?></td>
        </tr>
      </table>

      <p><strong>Your Contact Details:</strong></p>
      <p>📞 Phone: <?php echo e($phone); ?><br>
         📧 Email: <?php echo e($email); ?><br>
         📍 Address: <?php echo e($address); ?>, <?php echo e($country); ?></p>

      <p><strong>Important Information:</strong></p>
      <p>For further details or to modify your booking, contact: <?php echo e($setting->phone); ?></p>

      <div class="footer">
        <p>We look forward to welcoming you!</p>
        <p><strong><?php echo e($setting->site_name); ?></strong></p>
        <p>📞 <?php echo e($setting->phone); ?> | 🌐 <a href="<?php echo e(getDomain()); ?>" target="_blank">[Hotel Website]</a></p>
      </div>
    </div>
  </body>
</html>
<?php /**PATH D:\xampp\htdocs\tapowan\resources\views/themes/default/mail/user-booking.blade.php ENDPATH**/ ?>