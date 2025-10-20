<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Password Changed</title>
    <style>
        /* General reset */
        body,
        table,
        td,
        a {
            text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #f6f6f6;
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        img {
            border: 0;
            line-height: 100%;
            text-decoration: none;
        }

        /* Responsive layout */
        @media screen and (max-width: 600px) {
            .content {
                width: 100% !important;
                padding: 20px !important;
            }
        }

        /* Main container */
        .container {
            width: 100%;
            background-color: #f6f6f6;
            padding: 40px 0;
        }

        .content {
            max-width: 600px;
            background-color: #ffffff;
            margin: 0 auto;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .header {
            padding: 20px 24px;
            background: #4caf50;
            text-align: center;
            font-size: 24px;
            color: #ffffff;
            font-weight: bold;
            border-radius: 8px 8px 0 0;
        }

        .message {
            color: #555555;
            font-size: 16px;
            line-height: 1.6;
            margin: 0 0 18px 0;
            padding: 24px 0 0 24px;
        }

        .info-box {
            background-color: #f1f5f9;
            border-radius: 6px;
            padding: 16px;
            font-size: 15px;
            color: #333333;
            margin-bottom: 20px;
        }

        .footer {
            text-align: center;
            font-size: 13px;
            color: #999999;
            margin-top: 20px;
            padding: 10px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <table role="presentation" class="content">
            <tr>
                <td>
                    <div class="header">Password Changed Successfully</div>
                    <p class="message">
                        Hello <strong>{{ $user->name }}</strong>,<br><br>
                        Your password has been successfully changed. Please keep your credentials safe.
                    </p>
                    <div class="info-box">
                        <p><strong>Email/Username:</strong> {{ $user->email }} or {{ $user->username }}</p>
                        <p><strong>New Password:</strong> {{ $new_password }}</p>
                    </div>
                    <p class="message">
                        If you did not make this change, please reset your password immediately or contact our support
                        team.
                    </p>
                    <div class="footer">
                        <p>Thank you for using our service!</p>
                        <p>&copy; {{ date('Y') }} DYT. All rights reserved.</p>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
