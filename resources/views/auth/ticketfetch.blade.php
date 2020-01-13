@include('elements.header')
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="heading" style="padding-top:50px;">
            <span>All</span>
            <h2>Ticket</h2>
        </div>
        <!--end heading-->

        <div class="portfoliomain">
            <div class="table-responsive text-center">
                <table id="regi-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
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
                url:"{{ url('/viewticketd') }}",
                dataSrc: 'ticket'
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
