
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Patient History View</title>
</head>
<body>
<br>
<br>
<div id="pat" class="container">
    <br>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="51%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="51%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:15px;">Patient Name :</td>
              </tr>
              <tr>
                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;"></td>
              </tr>
              <tr>
                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:15px;">OPD/IPD :</td>
              </tr>
              <tr>
                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:400; font-size:14px;"></td>
              </tr>
              </table></td>
          </tr>
        </table>
        <td width="51%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:15px;">Age/Sex : </td>
              </tr>
              <tr>
                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:400; font-size:14px;"></td>
              </tr>
              <tr>
                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:15px;">Refer By :</td>
              </tr>
              <tr>
                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:400; font-size:14px;"></td>
              </tr>
      </table>
           <td width="51%" valign="top"><table width="98%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:15px;">Consultant:</td>
              </tr>
              <tr>
                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:400; font-size:14px;"></td>
              </tr>
              <tr>
                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:15px;">Bed No :</td>
              </tr>
              <tr>
                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:400; font-size:14px;"></td>
              </tr>
      </table></td>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
             <h2 align="center">Patient History</h2>
                @foreach($collection as $details)
              <tr>
                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:15px;" align="right">Date/Time :</td>
              </tr>
              <tr>
                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:14px;"  align="right"></td>
              </tr>
              <tr>
                 <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:15px;" align="left">Presenting Complaints :</td>
              </tr>
              <tr>
                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;"align="left">{{$details['presenting_complaints']}}</td>
              </tr>
              <tr>
                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:15px;">Diagnosis :</td>
              </tr>
              <tr>
                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;">{{$details['diagnosis']}}</td>
              </tr>
              <tr>
                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:15px;">Alergies :</td>
              </tr>
              <tr>
                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:400; font-size:14px;">{{$details['alergies']}}</td>
              </tr>
              <tr>
                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:15px;">Past History :</td>
              </tr>
              <tr>
                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:400; font-size:14px;">{{$details['past_history']}}</td>
              </tr>
            @endforeach
      </table>
</div>
</body>
</html>

