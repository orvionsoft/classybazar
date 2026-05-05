<h2>Password Reset Request</h2>
<p>Dear <?php echo e($customer->name); ?>,</p>
<p>You have requested to reset your password. Please use the OTP below to proceed:</p>
<h3 style="color: #007bff; font-size: 24px;"><?php echo e($customer->forgot); ?></h3>
<p>This OTP is valid for a limited time. Please do not share it with anyone.</p>
<p>If you did not request this, please ignore this email.</p>
<br>
<p>Thank you for using our service!</p>
<?php /**PATH /home/classyba/public_html/resources/views/emails/forgot-password-otp.blade.php ENDPATH**/ ?>