<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Welcome to Year in Review</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0; background-color:#EFEFEF;">
  <table border="0" cellpadding="0" cellspacing="0" width="100%"> 
    <tr>
      <td style="padding: 10px 0 30px 0;">
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;">
          <tr>
            <td align="center" bgcolor="#F39C12" style="padding: 40px 0 30px 0; color: #153643; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;">
              <img src="{{ asset('dist/img/chart.png') }}" alt="Creating Email Magic" width="150" height="150" style="display: block;" />
              <h1>Year in Review</h1>
            </td>
          </tr>
          <tr>
            <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
              <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">
                    <b>Hi {{ $first_name }}!</b>
                  </td>
                </tr>
                <tr>
                  <td style="padding: 30px 0 10px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                    <p>Welcome to Year in Review.</p>
                  </td>
                </tr>
                <tr>
                  <td style="padding: 10px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                    We are the eyes, ears and voice of this company, interacting with thousands of our members every week and we've accomplished a lot over the last year. I'd love to share it all with you and show you how each of your team members played their part.
                  </td>
                </tr>
                <tr>
                  <td style="padding: 10px 0 10px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                    It's really easy to get started, just jump over the site, <a href="{{ url('/') }}">Year in Review</a>, and log in. You use your email address, {{ $email }}, and the temporary password, <b>{{ $password }}</b>, to log in for the first time.
                  </td>
                </tr>
                <tr>
                  <td style="padding: 10px 0 0 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                    <p>If you have any questions or trouble, then come and have a chat with me, otherwise get stuck in!</p>
                    <p>Cheers,</p>
                    <p>James</p>
                  </td>
                </tr>
                <tr>
                  <td style="padding: 10px 0 0 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                    <hr>
                  </td>
                </tr>
				<tr>
                  <td style="padding: 10px 0 0 0; color: #153643; font-family: Arial, sans-serif; font-size: 8px; line-height: 20px;">
                    <p>What would a good web application be without 'fun facts'...</p>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>