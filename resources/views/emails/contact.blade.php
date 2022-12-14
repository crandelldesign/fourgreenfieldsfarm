<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>You've Been Contacted</title>
    <!-- Designed by https://github.com/kaytcat -->
    <!-- Header image designed by Freepik.com -->

    <style type="text/css">
        /* Take care of image borders and formatting */
        img {
            max-width: 600px;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }
        a img { border: none; }
        table { border-collapse: collapse !important; }
        #outlook a { padding:0; }
        .ReadMsgBody { width: 100%; }
        .ExternalClass {width:100%;}
        .backgroundTable {margin:0 auto; padding:0; width:100%;}
        table td {border-collapse: collapse;}
        .ExternalClass * {line-height: 115%;}

        /* General styling */
        td {
            font-family: Arial, sans-serif;
            color: #252525;
        }
        body {
            -webkit-font-smoothing:antialiased;
            -webkit-text-size-adjust:none;
            width: 100%;
            height: 100%;
            color: #252525;
            font-weight: 400;
            font-size: 18px;
        }
        h1 {
            margin: 10px 0;
        }
        a {
            color: #1a4b68;
            text-decoration: none;
        }
        .force-full-width {
            width: 100% !important;
        }
        .force-width-80 {
            width: 80% !important;
        }
        .body-padding {
            padding: 0 75px;
        }
        .mobile-align {
            text-align: right;
        }
    </style>
    <style type="text/css" media="screen">
        @media screen {
            @import url(https://fonts.googleapis.com/css?family=EB+Garamond|Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic);
            /* Thanks Outlook 2013! http://goo.gl/XLxpyl */
            * {
                font-family: 'Open Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;
            }
            .w280 {
                width: 280px !important;
            }

        }
    </style>
    <style type="text/css" media="only screen and (max-width: 480px)">
        /* Mobile styles */
        @media only screen and (max-width: 480px) {
            table[class*="w320"] {
                width: 320px !important;
            }
            td[class*="w320"] {
                width: 280px !important;
                padding-left: 20px !important;
                padding-right: 20px !important;
            }
            img[class*="w320"] {
                width: 250px !important;
                height: 67px !important;
            }
            td[class*="mobile-spacing"] {
                padding-top: 10px !important;
                padding-bottom: 10px !important;
            }
            *[class*="mobile-hide"] {
                display: none !important;
            }
            *[class*="mobile-br"] {
                font-size: 12px !important;
            }
            td[class*="mobile-w20"] {
                width: 20px !important;
            }
            img[class*="mobile-w20"] {
                width: 20px !important;
            }
            td[class*="mobile-center"] {
                text-align: center !important;
            }
            table[class*="w100p"] {
                width: 100% !important;
            }
            td[class*="activate-now"] {
                padding-right: 0 !important;
                padding-top: 20px !important;
            }
            td[class*="mobile-block"] {
                display: block !important;
            }
            td[class*="mobile-align"] {
                text-align: left !important;
            }
        }
    </style>
</head>
<body class="body" style="padding:0; margin:0; display:block; background:#647b97; -webkit-text-size-adjust:none;" bgcolor="#647b97">
<table align="center" cellpadding="0" cellspacing="0" width="100%">
  <tr>
    <td align="center" valign="top" style="background-color:#647b97" width="100%">

    <center>

      <table cellspacing="0" cellpadding="0" width="600" class="w320">
        <tr>
          <td align="center" valign="top">


          <table style="margin:0 auto;" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td style="text-align: center; padding: 15px; background-color: #FFFFFF">
                <a href="#"><img class="w680" width="600" height="158" src="https://fourgreenfieldsfarm.com/img/four-green-fields-farm-logo-email.jpg" alt="Four Green Fields Farm" /></a>
              </td>
            </tr>
          </table>


          <table cellspacing="0" cellpadding="0" class="force-full-width" style="background-color:#005a2c; width: 100%">
            <tr>
              <td style="background-color:#005a2c;">

                <table cellspacing="0" cellpadding="0" class="force-full-width" style="width: 100%">
                  <tr>
                    <td style="font-size:25px; font-weight: 600; color: #FFFFFF; text-align:center; padding: 15px 0; width: 100%" class="mobile-spacing">
                    <!--<div class="mobile-br">&nbsp;</div>-->
                        You've Been Contacted by {{isset($name)?$name:'Name'}}
                    <br/>
                    </td>
                  </tr>
                </table>

                <!--<table cellspacing="0" cellpadding="0" width="100%">
                  <tr>
                    <td>
                      <img src="https://www.filepicker.io/api/file/4BgENLefRVCrgMGTAENj" style="max-width:100%; display:block;">
                    </td>
                  </tr>
                </table>-->

              </td>
            </tr>
          </table>

          <table cellspacing="0" cellpadding="0" class="force-full-width" bgcolor="#ffffff" style="width: 100%">
            <tr>
              <td style="background-color:#ffffff; padding: 0">

              <center>
                <table style="margin:0 auto; width: 80%;" cellspacing="0" cellpadding="0" class="force-width-80">
                  <tr>
                    <td style="text-align:left; padding-top: 15px; font-size:16px; line-height: 1.4">
                    <br>
                    <strong>Name:</strong> {{isset($name)?$name:''}}<br>
                    <strong>Email:</strong> {{isset($email)?$email:''}}<br>
                    <strong>Phone:</strong> {{isset($phone)?$phone:''}}<br>
                    <br>
                    <div>{{isset($name)?$name:''}} writes... {{isset($message_text)?$message_text:''}}</div>
                    </td>
                  </tr>
                </table>

                <table cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" class="force-full-width" style="width: 100%">
                  <tr>
                    <td style="color:#005a2c; font-size: 14px; text-align:center; padding:10px; width: 100%; background-color: #FFFFFF">
                      &copy; {{date('Y')}} All Rights Reserved
                    </td>
                  </tr>
                </table>
              </center>
              </td>
            </tr>
          </table>







          </td>
        </tr>
      </table>

    </center>




    </td>
  </tr>
</table>
</body>
</html>
