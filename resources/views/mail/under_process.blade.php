<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mouse Cursor Animation</title>
    <link rel="stylesheet" href="./assets/styles.css">
</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;border-collapse: collapse;font-family: sans-serif;
    }
</style>

<body>
    <div style="max-width: 1020px;width: 100%;position: relative;margin: 0 auto;padding: 40px 0;">
        <div style="display: flex;justify-content: space-between;align-items: center;margin: 0 26px;">
            <img src="{{ url('images/mail_images/logo.png') }}" w="20" h="20" alt="logo"/>
            <div style="width: 58%;">
                <h1 style="color: #cc2121;font-size: 26px;font-family: sans-serif;font-weight: 700;">YOUNGISTAAN WELFARE SOCIETY  (REGD.)  </h1>
                <span>Regd. No. 201721103 | Society ACT  (XXI 1860)  | ESTD. 22/Feb/2017  </span>
                <p style="width: 75%;">Head Office Address : #1123, 2nd Floor, Sector-39, Opp. ICICI Bank, Chandigarh Road, Ludhiana -
                141010 </p>
            </div>
        </div>
        <div style="width: 100%;border: 1px solid #e6a6a6;"></div>
        <div style="max-width: 768px;margin: 0 auto">
        <div style="background-image: url({{ url('images/mail_images/youngistan.png') }}); background-repeat: no-repeat;background-size: 772px 797px;">
            <h3 style="text-align: center;text-decoration: underline;color: #cc2121;font-size: 24px;font-family: sans-serif;margin: 42px 0;">Donation Receipt</h3>
            <h6 style="color: rgb(29, 87, 202);font-size: 24px;font-family: sans-serif;font-weight: 100;">Thank you for your gift!</h6>
            <p style="font-size: 20px;font-weight: 100;font-family: sans-serif;letter-spacing: 1.006px;">The amount you have given will make a difference as the proceeds will go help put the children to school
                to give them better education and food. And thus make better member of our organization .
            </p>
            <p style="font-size: 20px;font-weight: 100;font-family: sans-serif;letter-spacing: 1.006px;">The receipt is an attestation that we have gratefully received your generous contribution to our humble
                institution.</p>
            <p style="font-size: 20px;font-weight: 100;font-family: sans-serif;letter-spacing: 1.006px;">With Regards…</p>

            <div style="font-size: 20px;font-family: sans-serif;font-weight: 600;">For: Youngistaan Welfare Society (Regd.) </div>
            <div style="display: flex;justify-content:space-around;align-items: center;margin: 24px 0;">
                <div style="font-size: 16px;font-family: sans-serif;font-weight: 600;color: rgb(5, 8, 89);margin-top: 30px;">Authorised Signatory</div>
            <img src="{{ url('images/mail_images/image004.png') }}"  w="10" h="10" alt="logo" />
            </div>
            <div>
                <h6 style="font-size: 18px;text-decoration: underline;font-weight: 100;font-family: sans-serif;">DONATION DETAILS:</h6>
                <table style="width:100%;height: 204px;">
                    <tr style="color: #cc2121;">
                        <th style="font-size: 20px;text-align: start;padding-left: 24px;">Donor Name</th>
                        <th style="font-size: 20px;">{{$data['full_name']}}</th>
                    </tr>
                    <tr>
                        <td style="font-size: 16px;padding-left: 24px;">City</td>
                        <td style="text-align: center;font-size: 16px;">{{$data['city']}}</td>
                    </tr>
                    <tr>
                        <td style="font-size: 16px;padding-left: 24px;">Donation Amount</td>
                        <td style="text-align: center;font-size: 16px;">Rs. {{$data['amount']}}/-</td>
                    </tr>
                    <tr>
                        <td style="font-size: 16px;padding-left: 24px;">Donation for Project :</td>
                        <td style="text-align: center;font-size: 16px;">{{$data['transaction_type']}}</td>
                    </tr>
                    <tr>
                        <td style="font-size: 16px;padding-left: 24px;">Donation Date</td>
                        <td style="text-align: center;font-size: 16px;">{{$data['createdAt']}}</td>
                    </tr>
                </table>
                <p style="float: right;">For donation related query you can connect with us at : donation@youngistaan.org</p>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
