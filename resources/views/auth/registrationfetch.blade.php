@include('elements.header')
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="heading" style="padding-top:50px;">
            <span>All</span>
            <h2>Registration</h2>
        </div>
        <!--end heading-->

        <div class="portfoliomain">
            <div class="table-responsive text-center">
                <table id="regi-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
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
            <!--end project-grid-->
        </div>
        <!--end portfoliomain-->
    </div>
    <!--end container-->
</section>
<!--end section PORTFOLIO-->
@include('elements.footerwidget')
<script>

    $(document).ready(function(){
        var table = $('#regi-buttons').DataTable({
            dom: 'B<"clear">lfrtip',
            buttons: {
                name: 'primary',
                buttons: [ 'copy', 'csv', 'print' ]
            },

            ajax:{
                url:"{{ url('/viewregistrationd') }}",
                dataSrc: 'registration'
            }
        });

        function updateinfo() {
            table.ajax.reload();
        }
        updateinfo();
        // setInterval(function(){
		// table.ajax.reload();
        // },5000);
    });

</script>
@include('elements.footer')
