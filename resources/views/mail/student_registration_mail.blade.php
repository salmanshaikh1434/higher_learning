<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Successfully</title>
</head>

<body>
    <center>
        <h1><b>Maulana Azad College </b></h1>
        <small>of Arts Science and Commerce</small>
        <h2>Thanks for Registration, We Received Your Request.</h2>
    </center>
    <table>
        <tr>
            <td>Registration No.:</td>
            <td>{{ $mailData['registration_no'] }}</td>
        </tr>
        <tr>
            <td>name :</td>
            <td>{{ $mailData['name'] }}</td>
        </tr>
        <tr>
            <td>course details: </td>
            <td>{{ $mailData['course'] }}</td>
        </tr>
        <tr>
            <td>Transaction ID :</td>
            <td>{{ $mailData['txn_no'] }}</td>
        </tr>
    </table>
</body>

</html>
