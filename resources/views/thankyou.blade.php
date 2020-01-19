<html>

<head>
    <title>Ticket of Talent Tantra 2020 | Safarnama | Kaziranga University</title>
    <meta name="robots" content="noindex">

    <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.js') }}"></script>

    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ URL::asset('images/favicon.png') }}" />
</head>

<body>
    <div class="row">
        <div class="container">
            <table style="width: 100%; margin: 5px;">
                <tbody>
                    <tr>
                        <td>
                            <h2 style="text-align: center;">Talent Tantra 2020 | Safarnama | Kaziranga University</h2>
                        </td>
                        <td style="font-size: 25px; font-weight: bold;">
                            <img style="width:120px;" src="http://talenttantra.com/images/tt_250.png" alt="logo" />
                        </td>
                    </tr>
                </tbody>
            </table>
            <table style="width:100%;margin:25px;">
                <tbody>
                    <tr>
                        <td><strong>Registration ID : </strong>
                            <b>{{ $rid }}</b>
                        </td>
                        <td><strong>Competition : </strong>
                            <b>{{ $event_name }}</b>
                        </td>
                        <td><strong>Team name : </strong> {{ $team_name }}
                        </td>

                    </tr>
                    <tr>
                        <td><strong>Total Members : </strong> {{ $total_member }}
                        </td>
                        <td><strong>Email : </strong> {{ $email }}
                        </td>
                        <td><strong>Mobile : </strong> {{ $phone }}
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Address : </strong> {{ $address }}
                        </td>
                        <td><strong>pincode : </strong> {{ $pincode }}
                        </td>
                        <td><strong>District : </strong> {{ $district }}
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Institute Name : </strong> {{ $institute_name }}
                        </td>
                        <td><strong>Accommodations : </strong>
                        <?php
	                        if($accommodations=="1") {
	                        	echo "Yes";
	                        }
	                        else {
	                        	echo "No";
	                        }
                        ?>
                        </td>
                        <td><strong>Event Price : </strong> {{ $event_price }}
                        </td>
                    </tr>

                    <tr>
                        <td><strong>Total Payable : </strong> {{ $total_amount }}
                        </td>
                        <td><strong>Payment Status : </strong> Pay at registration desk
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"><br/><br/>
                            @if($accommodations=="1")
                                <strong>Note : </strong>
                                1) Total Payable amount is equal to Event registration fee plus accomodation fee Rs. 200/member in which Rs 100 refundable per member.<br/>
                                2) Reporting time 9:00 AM.<br/><br/>
                            @else
                                <strong>Note : </strong>
                                1) Total Payable amount is equal to Event registration fee <br/>
                                2) Reporting time 9:00 AM.<br/><br/>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td style="float: left">
                            <button style="margin:2px;" onclick="window.print()">Print</button>
                            <button style="margin:2px;" onclick="window.location.href = 'http://talenttantra.com';">Return Home</button>
                        </td>
                        <td></td>
                        <td style="float: right"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
