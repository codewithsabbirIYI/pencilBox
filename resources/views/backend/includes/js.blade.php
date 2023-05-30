<script>
    $(document).ready(function () {
    $('#example').DataTable();
    });
</script>

<script src="{{asset('backend')}}/assets/js/bootstrap.bundle.min.js"></script>
    {{-- link for data table  --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
	<!--plugins-->
	<script src="{{asset('backend')}}/assets/js/jquery.min.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/chartjs/js/Chart.min.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{asset('backend')}}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/jquery-knob/excanvas.js"></script>
	<script src="{{asset('backend')}}/assets/plugins/jquery-knob/jquery.knob.js"></script>
    {{-- toster link here  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	  <script>
		  $(function() {
			  $(".knob").knob();
		  });


          toastr.options = {
            'closeButton': true,
            'progressBar': true,
          }
          @if (Session::has('message'))
            toastr.success("{{ session('message') }}");
          @endif
	  </script>
	  <script src="{{asset('backend')}}/assets/js/index.js"></script>
	<!--app JS-->
	<script src="{{asset('backend')}}/assets/js/app.js"></script>

</body>

</html>
