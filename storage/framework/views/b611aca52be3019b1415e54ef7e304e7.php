<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>New Event Inquiry – <?php echo e($setting->site_name); ?></title>
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
        <h1>New Event Inquiry</h1>
      </div>

      <p>Hello <?php echo e($setting->site_name); ?>,</p>
      <p>You have received a new event inquiry from <strong><?php echo e($full_name); ?></strong>. Below are the details:</p>

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
          <th>Message</th>
          <td><?php echo e($messages); ?></td>
        </tr>
        <tr>
          <th>Event Type</th>
          <td><?php echo e($event_type); ?></td>
        </tr>
        <tr>
          <th>Total Number of Guests</th>
          <td><?php echo e($total_guests); ?></td>
        </tr>
        <tr>
          <th>Fooding Preferences</th>
          <td><?php echo e($fooding); ?></td>
        </tr>
        <tr>
          <th>Start Date</th>
          <td><?php echo e($start_date); ?></td>
        </tr>
        <tr>
          <th>Start Time</th>
          <td><?php echo e($start_time); ?></td>
        </tr>
        <tr>
          <th>End Date</th>
          <td><?php echo e($end_date); ?></td>
        </tr>
        <tr>
          <th>End Time</th>
          <td><?php echo e($end_time); ?></td>
        </tr>
      </table>

      <p><strong>Action Required:</strong> Please follow up with the client at your earliest convenience.</p>

      <div class="footer">
        <p>Best Regards,</p>
        <p><strong>Cyberlink Pvt. Ltd.</strong></p>
        <p>🌐 <a href="https://cyberlink.com.np/" target="_blank">https://cyberlink.com.np/</a></p>
      </div>
    </div>
  </body>
</html>
<?php /**PATH D:\xampp\htdocs\tapowan\resources\views/themes/default/mail/inquiry.blade.php ENDPATH**/ ?>