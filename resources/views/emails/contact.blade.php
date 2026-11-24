<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Message from Portfolio</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #0f172a;
            color: #e2e8f0;
            margin: 0;
            padding: 30px 15px;
            line-height: 1.6;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #1e293b;
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid #334155;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.5), 0 8px 10px -6px rgba(0, 0, 0, 0.4);
        }
        .header {
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            padding: 28px 32px;
            text-align: left;
        }
        .header h1 {
            margin: 0;
            font-size: 22px;
            color: #ffffff;
            font-weight: 700;
            letter-spacing: -0.025em;
        }
        .header p {
            margin: 6px 0 0;
            color: #e0f2fe;
            font-size: 14px;
        }
        .body {
            padding: 32px;
        }
        .meta-table {
            width: 100%;
            margin-bottom: 24px;
            border-collapse: collapse;
        }
        .meta-table td {
            padding: 10px 14px;
            border-bottom: 1px solid #334155;
            font-size: 14px;
        }
        .meta-label {
            color: #94a3b8;
            font-weight: 600;
            width: 120px;
        }
        .meta-value {
            color: #f8fafc;
            font-weight: 500;
        }
        .message-box {
            background-color: #0f172a;
            border: 1px solid #334155;
            border-left: 4px solid #38bdf8;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
            color: #f1f5f9;
            font-size: 15px;
            white-space: pre-wrap;
            word-break: break-word;
        }
        .btn {
            display: inline-block;
            background: linear-gradient(135deg, #06b6d4 0%, #3b82f6 100%);
            color: #ffffff !important;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            margin-top: 10px;
        }
        .footer {
            background-color: #111827;
            padding: 20px 32px;
            text-align: center;
            font-size: 12px;
            color: #64748b;
            border-top: 1px solid #1f2937;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Portfolio Message</h1>
            <p>Someone has submitted a message via your portfolio contact form.</p>
        </div>

        <div class="body">
            <table class="meta-table">
                <tr>
                    <td class="meta-label">Sender Name:</td>
                    <td class="meta-value">{{ $contactName }}</td>
                </tr>
                <tr>
                    <td class="meta-label">Email:</td>
                    <td class="meta-value">
                        <a href="mailto:{{ $contactEmail }}" style="color: #38bdf8; text-decoration: none;">
                            {{ $contactEmail }}
                        </a>
                    </td>
                </tr>
                @if(!empty($contactSubject))
                <tr>
                    <td class="meta-label">Subject:</td>
                    <td class="meta-value">{{ $contactSubject }}</td>
                </tr>
                @endif
                <tr>
                    <td class="meta-label">Timestamp:</td>
                    <td class="meta-value">{{ now()->setTimezone('Asia/Jakarta')->format('d M Y, H:i') }} WIB</td>
                </tr>
            </table>

            <div style="font-size: 14px; font-weight: 600; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 8px;">
                Message Content:
            </div>
            <div class="message-box">
{{ $contactMessage }}
            </div>

            <div style="text-align: center; margin-top: 28px;">
                <a href="mailto:{{ $contactEmail }}?subject=Re:%20Portfolio%20Inquiry" class="btn">
                    Reply Directly via Email
                </a>
            </div>
        </div>

        <div class="footer">
            Automated notification from <strong>Reyvaldi Tri Hanggara Putra</strong>'s Portfolio Website.<br>
            Sent to: <strong>vlaix24@gmail.com</strong>
        </div>
    </div>
</body>
</html>
