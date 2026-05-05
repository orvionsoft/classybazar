<h2>Password Reset Request</h2>
<p>Dear {{ $customer->name }},</p>
<p>You have requested to reset your password. Please use the OTP below to proceed:</p>
<h3 style="color: #007bff; font-size: 24px;">{{ $customer->forgot }}</h3>
<p>This OTP is valid for a limited time. Please do not share it with anyone.</p>
<p>If you did not request this, please ignore this email.</p>
<br>
<p>Thank you for using our service!</p>
