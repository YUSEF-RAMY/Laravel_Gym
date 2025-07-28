<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تفاصيل العميل</title>
    <style>
        body {
            font-family: 'Tahoma', sans-serif;
            background-color: #f4f4f4;
            padding: 30px;
            direction: rtl;
        }
        .container {
            background-color: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: auto;
        }
        h2 {
            color: #2c3e50;
            margin-bottom: 20px;
        }
        p {
            font-size: 16px;
            margin: 10px 0;
        }
        .label {
            font-weight: bold;
            color: #555;
        }
        .footer {
            margin-top: 30px;
            font-size: 13px;
            color: #888;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <p><span class="label"> الاسم: </span> {{ $data->name }}</p>
        <p><span class="label">رقم الهاتف:</span> {{$data->phone }}</p>
        <p><span class="label">الايميل: </span> {{$data->email }}</p>
        <p><span class="label"> رأيه:</span> {{ $data->comment }}</p>
    </div>
</body>
</html>
