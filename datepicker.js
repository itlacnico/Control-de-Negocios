<script type="text/javascript">
	$(document).ready(function() {
	   $('#reportrange').daterangepicker(
	      {
	         startDate: moment().subtract('days', 29),
	         endDate: moment(),
	         minDate: '01/01/2013',
	         maxDate: '12/31/2014',
	         dateLimit: { days: 60 },
	         showDropdowns: true,
	         showWeekNumbers: true,
	         timePicker: false,
	         timePickerIncrement: 1,
	         timePicker12Hour: true,
	         ranges: {
	            'Hoy': [moment(), moment()],
	            'Ayer': [moment().subtract('days', 1), moment().subtract('days', 1)],
	            'Ultimos 7 dias': [moment().subtract('days', 6), moment()],
	            'Ultimos 30 dias': [moment().subtract('days', 29), moment()],
	            'Este mes': [moment().startOf('month'), moment().endOf('month')],
	            'Mes pasado': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')],
	         },
	         opens: 'left',
	         buttonClasses: ['btn btn-default'],
	         applyClass: 'btn-small btn-primary',
	         cancelClass: 'btn-small',
	         format: 'MM/DD/YYYY',
	         separator: ' to ',
	         locale: {
	             applyLabel: 'Filtro',
	             fromLabel: 'Desde',
	             toLabel: 'Hasta',
	             customRangeLabel: 'Especificar Rango',
	             daysOfWeek: ['Do', 'Lu', 'Mar', 'Mie', 'Jue', 'Vie','Sa'],
	             monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Marzo'],
	             firstDay: 1
	         }
	      },
	      function(start, end) {
	       console.log("Callback has been called!");
	       $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
	      }
	   );
	   //Set the initial state of the picker label
	   $('#reportrange span').html(moment().subtract('days', 29).format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
	});
</script>