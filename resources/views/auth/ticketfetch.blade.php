@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Ticket</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="regi-buttons" class="display" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Ticket ID</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Pass Type</th>
                                <th>Number of Pass</th>
                                <th>Day</th>
                                <th>Total Payable</th>
                                <th>Pay ID</th>
                                <th>Order ID</th>
                                <th>Signature</th>
                                <th>Payment Status</th>
                                <th>In Status</th>
                                <th>In Date</th>
                                <th>Option</th>
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
                    url:"{{ url('/viewticketd') }}",
                    dataSrc: 'ticket'
                }
            });

            $("#1").click(function() {
                alert(this.id); // or alert($(this).attr('id'));
            });
        });

    </script>
@endsection
