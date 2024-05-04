<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Donation</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f5f5f5; padding: 20px;">
    {{-- @dd($data) --}}
    <div
        style="max-width: 600px; margin: 0 auto; background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);">
        <h2 style="color: #333333;">Dear {{ $data['full_name'] }},</h2>
        <p style="color: #333333;">Thank you from the bottom of our hearts for your incredible support. Your kindness
            will not be forgotten, and we are honored to have you as a partner in our mission.</p>

        <p style="color: #333333;">Kindly download the donation receipt attachment by clicking the button below:</p>

        <a href="{{ route('pdf-download',$data['hashId'] ) }}" download>
            <button
                style="background-color: #AF1515; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10px;">Download
                Receipt</button>
        </a>
        <p style="color: #333333;">With heartfelt gratitude,</p>
        <p style="color: #333333;">Youngistaan Team!</p>

        <img src="{{url('images/logo/site_logo.png')}}" alt="Donation Receipt"
            style="max-width: 100%; height: auto; display: block; margin-top: 20px;">
    </div>

</body>

</html>
