<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>New contact form message</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
        /* CLIENT-SPECIFIC STYLES */
        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100% !important;
            -webkit-font-smoothing: antialiased;
        }

        /* GENERAL STYLES */
        body {
            background-color: #f4f6f8;
            color: #333333;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }

        .email-wrapper {
            width: 100%;
            background-color: #f4f6f8;
            padding: 20px;
        }

        .email-body {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
        }

        .content {
            padding: 24px;
        }

        h1 {
            font-size: 20px;
            margin: 0 0 12px 0;
        }

        p {
            margin: 0 0 12px 0;
            line-height: 1.45;
        }

        .meta-table td {
            padding: 8px 6px;
            vertical-align: top;
            border-bottom: 1px solid #eee;
            font-size: 14px;
        }

        .meta-key {
            color: #666;
            width: 110px;
            font-weight: 600;
        }

        .divider {
            height: 1px;
            background: #eef2f5;
            margin: 18px 0;
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            padding: 10px 16px;
            border-radius: 6px;
            background: #2563eb;
            color: #ffffff;
            font-weight: 600;
            font-size: 14px;
        }

        .footer {
            font-size: 12px;
            color: #888888;
            padding: 18px 24px;
            text-align: center;
        }

        /* RESPONSIVE */
        @media screen and (max-width:480px) {
            .content {
                padding: 16px;
            }

            .meta-key {
                display: block;
                width: 100%;
                font-size: 13px;
                margin-bottom: 4px;
            }

            .meta-table td {
                display: block;
                width: 100%;
                padding: 8px 0;
                border-bottom: 1px solid #f0f0f0;
            }

            .btn {
                width: 100%;
                box-sizing: border-box;
                text-align: center;
                padding: 12px;
            }
        }
    </style>
</head>

<body>
    <table role="presentation" class="email-wrapper" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td align="center">
                <table role="presentation" class="email-body" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="background:#9ca3af; padding:18px 24px; border-bottom:1px solid #f0f0f0;">
                            <table role="presentation" width="100%">
                                <tr>
                                    <td style="font-size:16px; font-weight:700; color:#ffffff;">New
                                        Contact Form Message
                                    </td>
                                    <td align="right" style="font-size:12px; color:#ffffff;">
                                        {{ now()->format('d/m/Y H:i') }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Body / Content -->
                    <tr>
                        <td class="content">
                            <table role="presentation" class="meta-table" width="100%" cellpadding="0" cellspacing="0"
                                style="border-collapse:collapse;">
                                <tr>
                                    <td class="meta-key">Name</td>
                                    <td> $name </td>
                                </tr>
                                <tr>
                                    <td class="meta-key">Email</td>
                                    <td><a href="mailto: $email " style="color:#2563eb; text-decoration:none;"> $email
                                        </a></td>
                                </tr>
                                <tr>
                                    <td class="meta-key">Subject</td>
                                    <td> $subject </td>
                                </tr>
                            </table>
                            <div class="divider"></div>
                            <p style="font-weight:600; margin-bottom:8px;">Message</p>
                            <div
                                style="white-space:pre-wrap; background:#fbfdff; border:1px solid #eef6ff; padding:12px; border-radius:6px; font-size:14px; color:#1f2937;">
                                $message
                            </div>
                            <div style="height:18px;"></div>
                            <p>
                                <a class="btn" href="mailto: $email ?subject=Re:%20 $subject ">Reply by
                                    email</a>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="footer">
                            This message was sent from your website contact form. If you believe this is spam, please
                            check your spam filters or review the submission in your admin panel.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
