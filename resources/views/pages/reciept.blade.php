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
        border: 1px solid black;
        border-collapse: collapse;
        font-family: sans-serif;
    }
</style>

<body>
    <div style="max-width: 1020px;width: 100%;position: relative;margin: 0 auto;padding: 10px 0;">
        <div style="display: flex;justify-content: space-between;align-items: center;margin: 0 26px;">
            <img src="{{ public_path('images/mail_images/logo.png') }}" w="20" h="20" alt="logo"
                style="width: 150px;height: 120px" />
            <div style="width: 80%; margin-left:200px ; margin-top:-130px">
                <h1 style="color: #cc2121;font-size: 22px;font-family: sans-serif;font-weight: 700;">YOUNGISTAAN WELFARE
                    SOCIETY (REGD.) </h1>
                <span>Regd. No. 201721103 | Society ACT (XXI 1860) | ESTD. 22/Feb/2017 </span>
                <p>Head Office Address : #1123, 2nd Floor, Sector-39, Opp. ICICI Bank, Chandigarh Road, Ludhiana -
                    141010 </p>
            </div>
        </div>
        <div style="width: 100%;border: 1px solid #e6a6a6;"></div>
        <div style="max-width: 768px;margin: 0 auto">
            {{-- style="background-image: url({{ public_path('images/mail_images/youngistan.png') }}); background-repeat: no-repeat;background-size: 580px 560px;" --}}
            <div>
                <h3
                    style="text-align: center;text-decoration: underline;color: #cc2121;font-size: 24px;font-family: sans-serif;">
                    Donation Receipt</h3>
                <div style="color: rgb(29, 87, 202);font-size: 24px;font-family: sans-serif;">Thank you for your gift!
                </div>
                <p style="font-size: 20px;font-family: sans-serif;letter-spacing: 1.006px;">The amount you have given
                    will make a difference as the proceeds will go help put the children to school
                    to give them better education and food. And thus make better member of our organization .
                </p>
                <p style="font-size: 20px;font-family: sans-serif;letter-spacing: 1.006px;">The receipt is an
                    attestation that we have gratefully received your generous contribution to our humble
                    institution.</p>
                <p style="font-size: 20px;font-family: sans-serif;letter-spacing: 1.006px;">With Regards…</p>

                <div style="font-size: 20px;font-family: sans-serif;font-weight: 600;">For: Youngistaan Welfare Society
                    (Regd.) </div>
                <div style="display: flex;justify-content:space-around;align-items: center;margin: 10px 0;">
                    <div
                        style="font-size: 16px;font-family: sans-serif;font-weight: 600;color: rgb(5, 8, 89);margin-top: 30px;margin-bottom: 30px;">
                        Authorised Signatory</div>
                    <img src="{{ public_path('images/mail_images/image004.png') }}" w="10" h="10" alt="logo" />
                    <img src="{{ public_path('images/mail_images/eastman.png') }}" w="10" h="10" alt="logo" />
                </div>
                <div>
                    <div
                        style="font-size: 18px;text-decoration: underline;font-family: sans-serif;margin-bottom: 10px;">
                        DONATION DETAILS:</div>
                    <table style="width:100%;height: 120px;">
                        <tr style="color: #cc2121;">
                            <th style="font-size: 20px;text-align: start;padding-left: 24px;">Donor Name</th>
                            <th style="font-size: 20px;">{{ $data->full_name }}</th>
                        </tr>
                        <tr>
                            <td style="font-size: 16px;padding-left: 24px;">City</td>
                            <td style="text-align: center;font-size: 16px;">{{ $data->city }}</td>
                        </tr>
                        <tr>
                            <td style="font-size: 16px;padding-left: 24px;">Donation Amount</td>
                            <td style="text-align: center;font-size: 16px;">Rs. {{ $data->amount }}/-</td>
                        </tr>
                        <tr>
                            @php
                                $projects = '';
                                $ids = json_decode($data->transaction_type);
                                $projectsData = \App\Models\Project::select('title')->whereIn('id', $ids)->get();
                                foreach ($projectsData as $key => $val) {
                                    $projects .= $val->title;
                                    if ($key < count($projectsData) - 1) {
                                        $projects .= ', ';
                                    }
                                }
                            @endphp
                            <td style="font-size: 16px;padding-left: 24px;">Donation for Project :</td>
                            <td style="text-align: center;font-size: 16px;">

                                {{ $projects }}
                            </td>
                            {{-- @dd(json_decode($data->transaction_type)) --}}
                        </tr>
                        <tr>
                            <td style="font-size: 16px;padding-left: 24px;">Donation Date</td>
                            <td style="text-align: center;font-size: 16px;">{{ \Carbon\Carbon::parse($data->created_at)->format('F j, Y \a\t g:i A') }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
