</html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Password Changed</title>
    <style>
        /* Mobile-friendly adjustments (some clients support it) */
        @media only screen and (max-width:480px) {
            .container {
                width: 100% !important;
                padding: 16px !important;
            }

            .content {
                padding: 18px !important;
            }

            .btn {
                display: block !important;
                width: 100% !important;
            }

            .h1 {
                font-size: 20px !important;
            }
        }
    </style>
</head>

<body style="margin:0;padding:0;background:#f4f6f8;font-family:Helvetica,Arial,sans-serif;">
    <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
            <td align="center" style="padding:24px 12px;">
                <table class="container" width="600" cellpadding="0" cellspacing="0" role="presentation"
                    style="width:600px;max-width:600px;background:#ffffff;border-radius:8px;overflow:hidden;">
                    <!-- Header -->
                    <tr>
                        <td style="padding:20px 24px;background:#4caf50;color:#ffffff;text-align:center;">
                            <h1 class="h1" style="margin:0;font-size:22px;font-weight:600;">Password Changed
                                Successfully</h1>
                        </td>
                    </tr>
                    <!-- Body -->
                    <tr>
                        <td class="content" style="padding:24px;color:#333333;">
                            <p style="color: #555555;font-size: 16px;margin: 0 0 18px 0;padding: 24px 0 0 24px;">
                                Hello <strong>{{ $user->name }}</strong>,<br><br>
                                Your password has been successfully changed. Please keep your credentials safe.
                            </p>
                            <div
                                style="background-color: #f1f5f9;border-radius: 6px;padding: 16px;font-size: 15px;color: #333333;">
                                <p><strong>Email/Username:</strong> {{ $user->email }} or {{ $user->username }}</p>
                                <p><strong>New Password:</strong> {{ $new_password }}</p>
                            </div>
                            <p style="color: #555555;font-size: 16px;margin: 0 0 18px 0;padding: 24px 0 0 24px;">
                                If you did not make this change, please reset your password immediately or contact our
                                support
                                team.
                            </p>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background:#fafafa;color:#999999;font-size:12px;text-align:center;">
                            <div style="text-align: center;font-size: 13px;color: #999999;">
                                <p>Thank you for using our service!</p>
                                <p>&copy; {{ date('Y') }} DYT. All rights reserved.</p>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
