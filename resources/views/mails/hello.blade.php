<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
</head>
<body>
    {{-- @dd($data) --}}
    {{-- @dd('hello') --}}
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
        <tr>
            <td align="center" bgcolor="#ffffff" style="padding: 40px 0 30px 0;">
                <img src="/scpel_logo.png" alt="Company Logo" width="200" style="display: block;">
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">
                            <b>Scpel AI Software Foundation - Verify Email to Continue</b>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                            Thank you, <b> {{ $data['firstname'] }}  {{ $data['lastname'] }}</b> , for registering with us. To complete the verification process, please use the following code:
                        </td>
                    </tr>
                    <tr>
                        <td align="center" bgcolor="#007bff" style="border-radius: 5px;">
                            <span style="color: #ffffff; font-family: Arial, sans-serif; font-size: 20px; padding: 10px 20px;"> {{ $data['velification_code'] }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 30px 0 20px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                            Please enter this code on the verification page to complete the process.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#f4f4f4" style="padding: 30px 30px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td style="color: #153643; font-family: Arial, sans-serif; font-size: 14px;">
                            At Scpel Software Foundation, we are a community dedicated to the development, managing and maintaining Scpel; A systems reflective
                            meta-programming language for Artificial Intelligence.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
