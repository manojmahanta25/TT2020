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
<table style="width: 100%; margin: 5px;">
    <tbody>
        <tr>
            <td><strong>Payment ID : </strong> <strong>{{ $razor_payid }}</strong></td>
            <td><strong>Pass ID : </strong> <strong>{{ $custid }}</strong></td>
            <td><strong>Pass Type : </strong> {{ $pass_type }} pass</td>
        </tr>
        <tr>
            <td><strong>Quantity : </strong> {{ $numbers_pass }}</td>
            <td><strong>Booked Date for : </strong> {{ $select_day }}</td>
            <td><strong>Name : </strong> {{ $name }}</td>
        </tr>
        <tr>
            <td><strong>Email : </strong> {{ $email }}</td>
            <td><strong>Mobile : </strong> {{ $mobile }}</td>
            <td><strong>Paid : </strong> {{ $payable_total }}</td>
        </tr>
        <tr>
            <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="3"><strong>Terms &amp; Conditions:</strong>
                <br />
                <ul>
                    <li>This pass is valid for <strong>{{ $select_day }}</strong>.</li>
                    <li>Entry into the campus is from <strong>9 a.m.</strong> onwards.</li>
                    <li>Entry without passes will not be permitted. Please carry your pass to the venue. The same should be produced upon request at the gate.</li>
                    <li>Organizers reserve the right to perform <strong>security checks</strong> in the members/invitees at the entry point.</li>
                    <li>Parking area is available outside the University premises, and is at the risk of the vehicle owner. Organizers will not hold responsibility for any damage or theft of the vehicles.</li>
                    <li>Consumption or sale of <strong>alcohol</strong>,<strong> tobacco</strong> or <strong>being intoxicated/under the influence of narcotics</strong> is strictly prohibited on campus. This is a<strong> smoke-free zone</strong> and the organisers reserve the right to <strong>expel violators</strong> from the campus.</li>
                    <li>A pass shall not be valid if the <strong>barcode/serial number</strong> has been tampered with. <strong>Unlawful resale of ticket</strong> would lead to seizure or cancellation of that pass without refund or compensation.</li>
                    <li><strong>Duplicate tickets</strong> will not be issued for lost or stolen tickets. No refund for a purchased ticket is possible.</li>
                    <li>In case of cancellation of the shows due to any unforseen circumstances beyond the control of the organizers, the extent of the refurnd will be based on the situation at hand and the management's decision will be final and binding will be final and binding on all.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td colspan="3"><strong>Terms &amp; Conditions:</strong>
                <br />
                   <br/> In case for any information please contact us @ <strong>8486034362</strong> or Email us at <strong>talenttantra@kazirangauniversity.in</strong>
				    <br/>
				    <br/> Thank you and best regards,
				    <br/>
				    <br/>Team TalentTantra
				    <br/>
               </td>
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