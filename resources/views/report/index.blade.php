 @extends('welcome')

 @section('content')
{{-- reporting --}}
<div class="py-10">
  <header>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold leading-tight text-gray-900">
      Reporting
      </h1>
    </div>
  </header>
  <main>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      <div class="px-4 py-8 sm:px-0">
        <div>
          <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">


        
          <form method="POST"  action="{{url('Report')}}">
              <input type="hidden" name="_token" value="{{ Session::token() }}">
            <div class="pb-5">
              <p class="pb-2">Enter Date:</p> 
              <input type = "text" name="from_date" id="from_date"  class="shadow appearance-none border rounded w-30 py-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline datepicker"  readonly  placeholder="From Date"  
              >
               

              <input type = "text"  name="to_date" id="to_date"  class="shadow appearance-none border rounded w-30 py-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline datepicker"  readonly  placeholder="To Date" 
              >

              <button type="submit" name="filter" id="filter"
                class="bg-blue-500 hover:bg-blue-700 text-white 
                font-bold py-2 px-4 rounded">Filter
              </button>

          
            </div>
          </form>
         


            <table id="dataTable" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Tempurature</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                @foreach($recordstaff as $recordstaffinfo)
                <tr>
                  <td>{{$recordstaffinfo->name}}</td>
                  <td>{{number_format($recordstaffinfo->temperature,2,'.','')}}</td>
                  <td>{{Carbon\Carbon::parse($recordstaffinfo->created_at)->format("d/m/y")}}</td>
                  
                </tr>
                @endforeach
              </tbody>
              
            </table>
          </div>
        </div>
      </div>
      <!-- /End replace -->
    </div>
  </main>
</div>
@endsection

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
  <!--Datatables -->
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>

    {{-- datepicker --}}
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    

<script >
    $(document).ready(function() {
    $('#dataTable').dataTable( {
        dom: "<'row'<''l><'col-sm-12 col-md-6'f>>" +
              "<'row'<'col-sm-12'tr>>" +
              "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>" +
              "<'row'<'col-sm-12 mt-20 text-blue-500'B>>",
        buttons: [
            'excel','print','pdf'
        ]
    } );
       } );
</script>
<script>
         $(function() {
            $( ".datepicker" ).datepicker({
                // dateFormat: 'dd/mm/yy' 
               });
         
          
           
           
         });

          
 </script>
<script>
  $(document).ready(function(){
    $('#filter').click(function(){
      var from_date = $('#from_date').val();
      var to_date = $('#to_date').val();
      if(from_date != '' &&  to_date != '')
      {
      
       load_data(from_date, to_date);
      }
      else
      {
       alert('Both Date is required');
      }
     });

    });
</script>

