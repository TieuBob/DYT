<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $post->title }} — New blog post</title>
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

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* RESET */
        body {
            margin: 0;
            padding: 0;
            width: 100% !important;
            height: 100% !important;
            background-color: #F2F4F6;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #333333;
        }

        .ExternalClass {
            width: 100%;
        }

        .button {
            display: inline-block;
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 6px;
            border: 0;
        }

        /* MOBILE STYLES */
        @media screen and (max-width:600px) {
            .container {
                width: 100% !important;
                padding: 12px !important;
            }

            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
                direction: ltr !important;
            }

            .stack-column-center {
                text-align: center !important;
            }

            .hero-image {
                width: 100% !important;
                height: auto !important;
                max-width: 100% !important;
            }

            .padding-sm {
                padding: 12px !important;
            }

            .hide-mobile {
                display: none !important;
                max-height: 0 !important;
                overflow: hidden !important;
            }
        }

        /* DESKTOP */
        .container {
            width: 600px;
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
        }

        .content {
            padding: 24px;
        }

        .footer {
            font-size: 12px;
            color: #8898aa;
            padding: 18px;
            text-align: center;
        }

        .post-title {
            font-size: 20px;
            line-height: 1.25;
            margin: 0 0 12px 0;
            color: #111827;
        }

        .post-desc {
            font-size: 15px;
            line-height: 1.5;
            color: #475569;
            margin: 0 0 18px 0;
        }

        .cta {
            background-color: #2563EB;
            color: #ffffff;
            display: inline-block;
            padding: 12px 18px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
        }

        .meta {
            font-size: 13px;
            color: #98a2b3;
            margin-bottom: 14px;
        }

        .preheader {
            display: none !important;
            visibility: hidden;
            opacity: 0;
            color: transparent;
            height: 0;
            width: 0;
            max-height: 0;
            max-width: 0;
            overflow: hidden;
        }
    </style>
</head>

<body>
    <!-- Centering table -->
    <table role="presentation" cellpadding="0" cellspacing="0" width="100%"
        style="background-color:#F2F4F6; padding:20px 12px;">
        <tr>
            <td align="center">
                <!-- Container -->
                <table role="presentation" class="container" cellpadding="0" cellspacing="0" width="600">
                    <!-- Header -->
                    <tr>
                        <td style="background:#0f172a; padding:18px 24px; text-align:left; color:#ffffff;">
                            <a href="{{ route('read_post', $post->slug) }}"
                                style="color:#ffffff; text-decoration:none; font-weight:700; font-size:18px;">DYT
                                Blog</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="{{ route('read_post', $post->slug) }}" target="_blank"
                                style="text-decoration:none; display:block;">
                                <img src="{{ asset('images/posts/' . $post->featured_image) }}"
                                    alt="{{ $post->title }}" width="600"
                                    style="display:block; width:100%; max-width:600px; height:auto; border:0; object-fit:cover;"
                                    class="hero-image">
                            </a>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td class="content">
                            <h1 class="post-title">{{ $post->title }}</h1>
                            <p class="post-desc">{!! Str::ucfirst(words($post->content, 20)) !!}</p>
                            <table role="presentation" cellpadding="0" cellspacing="0" align="left"
                                style="margin-bottom:18px;">
                                <tr>
                                    <td>
                                        <a href="{{ route('read_post', $post->slug) }}" class="cta"
                                            target="_blank">Read More</a>
                                    </td>
                                </tr>
                            </table>

                            <!-- Optional excerpt + read more link -->
                            <div style="clear:both;"></div>

                            <!-- Small note -->
                            <p style="font-size:13px; color:#98a2b3; margin-top:18px;">
                                If the post isn't loading, open it in your browser: <a
                                    href="{{ route('read_post', $post->slug) }}" target="_blank"
                                    style="color:#2563EB; text-decoration:underline;">Open post</a>
                            </p>
                        </td>
                    </tr>

                    <!-- Footer area inside container -->
                    <tr>
                        <td style="background:#f8fafc; padding:14px 24px; text-align:center;">
                            <p style="margin:0; font-size:13px; color:#6b7280;">You're receiving this email because you
                                subscribed to update from <strong>DYT Blog</strong>.</p>
                        </td>
                    </tr>

                    <!-- Small footer -->
                    <tr>
                        <td class="footer">
                            <div>
                                <span>Long Tho, Nhon Trach, Dong Nai</span>
                                <!-- &nbsp;|&nbsp;
                                <a href="#"
                                    style="color:#6b7280; text-decoration:underline;">Manage preferences</a>
                                &nbsp;|&nbsp;
                                <a href="#"
                                    style="color:#6b7280; text-decoration:underline;">Unsubscribe</a> -->
                            </div>
                        </td>
                    </tr>

                </table>
                <!-- End container -->

            </td>
        </tr>
    </table>
</body>

</html>
