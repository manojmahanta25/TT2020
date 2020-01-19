<h2>Acknowledgement</h2>
<br/> Dear {{ $Mdata['team_leader'] }},
<br/>
<br/> Thank you for registering for <strong>{{ $Mdata['event_name'] }}</strong> in Talent Tantra 2020
<br/> Please contact <strong>{{ $Mdata['cname'] }}</strong> at <strong>{{ $Mdata['cnumber'] }}</strong> for more details
<html>

<body>
    <table style="width:100%;margin:25px;">
        <tbody>
            <tr>
                <td style="font-size: 25px;font-weight: bold;">
                    <h3>Talent Tantra 2020 | Safarnama | Kaziranga University</h3></td>
                <td colspan="2">
                    <img src="http://talenttantra.com/images/tt_250.png" alt="logo" style="float: left; margin-right: 25px;width:70%;" />
                </td>
            </tr>
        </tbody>
    </table>
    <table style="width:100%;margin:25px;">
        <tbody>
            <tr>
                <td><strong>Registration ID : </strong>
                    <b>{{ $Mdata['rid'] }}</b>
                </td>
                <td><strong>Competition : </strong>
                    <b>{{ $Mdata['event_name'] }}</b>
                </td>
                <td><strong>Team name : </strong> {{ $Mdata['team_name'] }}

                </td>

            </tr>
            <tr>
                <td><strong>Total Members : </strong> {{ $Mdata['total_member'] }}
                </td>
                <td><strong>Email : </strong> {{ $Mdata['email'] }}
                </td>
                <td><strong>Mobile : </strong> {{ $Mdata['phone'] }}
                </td>
            </tr>
            <tr>
                <td><strong>Address : </strong> {{ $Mdata['address'] }}
                </td>
                <td><strong>pincode : </strong> {{ $Mdata['pincode'] }}
                </td>
                <td><strong>District : </strong> {{ $Mdata['district'] }}
                </td>
            </tr>
            <tr>
                <td><strong>Institute Name : </strong> {{ $Mdata['institute_name'] }}
                </td>
                <td><strong>Accommodations : </strong> <?php
                            if($Mdata['accommodations']=="1") {
                                echo "Yes";
                            }
                            else {
                                echo "No";
                            }
                        ?>
                </td>
                <td><strong>Event Price : </strong> {{ $Mdata['event_price'] }}
                </td>
            </tr>

            <tr>
                <td><strong>Total Payable : </strong> {{ $Mdata['total_amount'] }}
                </td>
                <td><strong>Payment Status : </strong> Pay at registration desk
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <br/><br/>
                    @if($Mdata['accommodations']=="1")
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
        </tbody>
    </table>
</body>

</html>
<br/> In case for any information please contact us @ <b>8486034362</b> or Email us at <b>talenttantra@kazirangauniversity.in</b>
<br/>
<br/> Thank you and best regards,
<br/>
<br/>Team TalentTantra
<br/>
<br/>
