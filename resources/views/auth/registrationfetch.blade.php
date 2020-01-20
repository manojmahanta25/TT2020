@extends('layouts.app')

@section('content')
    <div class="container">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Registration</div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="regi-buttons" class="display" width="100%">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Team Name</th>
                                    <th>Team Leader</th>
                                    <th>Event Name</th>
                                    <th>Main Event</th>
                                    <th>Total Member</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Pincode</th>
                                    <th>District</th>
                                    <th>Institute</th>
                                    <th>Accommodations</th>
                                    <th>Event Price</th>
                                    <th>Total Amount</th>
                                    <th>Amount Paid</th>
                                    <th>Payment Status</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<!--end section PORTFOLIO-->
@endsection
@section('content-java')
<script>

    $(document).ready(function(){
        var table = $('#regi-buttons').DataTable({
            dom: 'B<"clear">lfrtip',
            responsive: true,
            buttons: {
                name: 'primary',
                buttons: [ 'copy', 'csv', 'print' ]
            },

            ajax:{
                url:"{{ url('/viewregistrationd') }}",
                dataSrc: 'registration'
            }
        });

    });

</script>
@endsection
