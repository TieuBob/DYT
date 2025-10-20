<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Password Reset</title>
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
    <!-- Preheader text: shown in inbox preview (make it short) -->
    <div style="display:none;max-height:0px;overflow:hidden;color:#fff;line-height:1px;opacity:0;">
        Reset your password for your account — link expires in {{ date('F j, Y, g:i A') }}.
    </div>

    <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
            <td align="center" style="padding:24px 12px;">
                <table class="container" width="600" cellpadding="0" cellspacing="0" role="presentation"
                    style="width:600px;max-width:600px;background:#ffffff;border-radius:8px;overflow:hidden;">
                    <!-- Header -->
                    <tr>
                        <td style="padding:20px 24px;background:#0b6cff;color:#ffffff;text-align:left;">
                            <h1 class="h1" style="margin:0;font-size:22px;font-weight:600;">Reset your password</h1>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td class="content" style="padding:24px;color:#333333;">
                            <p style="margin:0 0 12px 0;font-size:15px;">Hi {{ $user->name }},</p>
                            <p style="margin:0 0 18px 0;font-size:15px;line-height:1.5;">
                                We received a request to reset the password for the account associated with
                                <strong>{{ $user->email }}</strong>.
                                Click the button below to choose a new password. This link will expire in
                                <strong>{{ date('F j, Y, g:i A') }}</strong>.
                            </p>

                            <!-- Button -->
                            <table cellpadding="0" cellspacing="0" role="presentation" style="margin:18px 0;">
                                <tr>
                                    <td align="center">
                                        <a class="btn" href="{{ $actionlink }}" target="_blank"
                                            style="background:#0b6cff;color:#ffffff;text-decoration:none;padding:12px 22px;border-radius:6px;display:inline-block;font-weight:600;">
                                            Reset password
                                        </a>
                                    </td>
                                </tr>
                            </table>
                            <p>This link is valid for 15 minutes.</p>
                            <!-- Fallback link -->
                            <p style="margin:0 0 12px 0;font-size:13px;color:#666666;">
                                If the button doesn't work, copy and paste this link into your browser:
                            </p>
                            <p style="margin:0 0 18px 0;font-size:13px;word-break:break-all;color:#0b6cff;">
                                <a href="{{ $actionlink }}" target="_blank"
                                    style="color:#0b6cff;text-decoration:underline;">{{ $actionlink }}</a>
                            </p>

                            <p style="margin:0 0 12px 0;font-size:13px;color:#666666;">
                                If you didn't request a password reset, you can safely ignore this email or <a
                                    href="mailto: admin@email.test"
                                    style="color:#0b6cff;text-decoration:underline;">contact support</a>.
                            </p>

                            <p style="margin:20px 0 0 0;font-size:13px;color:#999999;">
                                Thanks,<br />
                                The Support Team
                            </p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td
                            style="padding:14px 20px;background:#fafafa;color:#999999;font-size:12px;text-align:center;">
                            <div>&copy; {{ date('Y') }} DYT. All rights reserved.</div>
                            <div style="margin-top:6px;">If you have trouble, email <a href="mailto:admin@dyt.test"
                                    style="color:#0b6cff;text-decoration:underline;">admin@dyt.test</a></div>
                        </td>
                    </tr>
                </table>

                <!-- Small plain-text fallback (visible in very old clients) -->
                <div style="max-width:600px;margin-top:12px;color:#777777;font-size:12px;">
                    <p style="margin:0;">If you didn't request this, ignore it — no changes were made to your account.
                    </p>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>
