<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $subject ?? config('app.name') }}</title>
</head>
<body style="background-color:#f8f9fa; margin:0; padding:0; font-family:Arial, sans-serif;">
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center" style="padding: 30px;">
                <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 2px 6px rgba(0,0,0,0.1);">
                    <tr>
                        <td style="background-color:#0d6efd; padding:20px; text-align:center; color:#ffffff;">
                            <h2 style="margin:0;">{{ config('app.name') }}</h2>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:30px; color:#212529; font-size:16px; line-height:1.5;">
                            {{ $slot }}

                            @isset($subcopy)
                                <hr style="margin:20px 0; border:0; border-top:1px solid #dee2e6;">
                                {{ $subcopy }}
                            @endisset
                        </td>
                    </tr>
                    <tr>
                        <td style="background:#f1f3f5; padding:15px; text-align:center; font-size:14px; color:#6c757d;">
                            &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
