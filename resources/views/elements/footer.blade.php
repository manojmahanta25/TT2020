</div>
<!--end pusher-->
@if($page == 'home')
    </div>
    </div>
@endif

</div>
<!--end global-->
<!--JS -->

@if(isset($datables) && $datables == 1)
    <script src="{{ URL::asset('css/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('css/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ URL::asset('css/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('css/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('css/datatables/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('css/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('css/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('css/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('css/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('css/datatables/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ URL::asset('css/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ URL::asset('css/datatables/dataTables.scroller.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ URL::asset('css/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('css/datatables/responsive.bootstrap4.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('css/pages/datatables.init.js') }}"></script>
@endif

<script src="{{ URL::asset('js/jquery.flexslider-min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.vticker.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.fitvids.js') }}"></script>
<script src="{{ URL::asset('js/classie.js') }}"></script>
<script src="{{ URL::asset('js/sidebarEffects.js') }}"></script>
<script src="{{ URL::asset('js/modernizr.custom2.js') }}"></script>
<script src="{{ URL::asset('js/jquery.fittext.js') }}"></script>
<script src="{{ URL::asset('js/boxgrid.js') }}"></script>
<script src="{{ URL::asset('js/counter.js') }}"></script>
<script src="{{ URL::asset('js/custom.js') }}"></script>
<!-- Data Table -->



</body>
<!--end body-->

</html>
