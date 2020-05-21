 @extends('welcome')
<style>
  .dotgreen{
      height: 12px;
      width: 12px;
      background-color: #228B22;
      border-radius: 50%;
      display: inline-block;

  }
    .dotred{
        height: 12px;
        width: 12px;
        background-color: #B22222;
        border-radius: 50%;
        display: inline-block;

  }

</style>
 @section('content')
{{-- reporting --}}
<!--Header-->
<div class="w-full m-0 p-0 bg-cover bg-bottom bg-indigo-900" style=" height: 45vh; max-height:360px;">
  <div class="container max-w-4xl mx-auto pt-16 md:pt-18 text-center break-normal">
    <!--Title-->
    <p class="text-white font-extrabold text-3xl md:text-5xl">
      Reporting
    </p>
    <p class="text-xl md:text-2xl text-gray-500 pt-2"></p>
  </div>
</div>

<!--Container-->
<div class="container px-4 md:px-0 max-w-full mx-auto -mt-32">
  
  <div class="mx-0 sm:mx-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      <div class="px-4 py-8 sm:px-0">
        <div>
          <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            
            <form method="POST"  action="{{url('Report')}}" >
              <input type="hidden" name="_token" value="{{ Session::token() }}">
              <p class="pb-2">Enter Date:</p>
              <input type = "text" name="from_date" id="from_date"  class="shadow appearance-none border rounded w-30 py-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline datepicker"  readonly  placeholder="From Date"
              >
              
              <input type = "text"  name="to_date" id="to_date"  class="shadow appearance-none border rounded w-30 py-1 text-gray-700 leading-tight focus:outline-none focus:shadow-outline datepicker"  readonly  placeholder="To Date"
              >
              <button  type="submit" name="filter" id="filter"
              class="bg-indigo-500 hover:bg-indigo-700 text-white
              font-bold py-2 px-4 rounded">Filter
              </button>

              <button type="button" name="refresh" id="refresh" 
              class="bg-indigo-500 hover:bg-indigo-700 text-white
               font-bold py-2 px-4 rounded">Refresh</button>


              
            </form>
            <div class="pb-5">
              <div class="flex-row">
                <div class="pt-4 pb-2">
                  <div class="dotgreen"></div>
                  <span class="pl-1 pr-2 font-medium text-gray-700">Healthy</span>
                  <div class="dotred"></div>
                  <span class="pl-1 font-medium text-gray-700">Fever</span>
                </div>
              </div>
            </div>
            
            <table id="dataTable" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Temperature</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                @foreach($recordstaff as $recordstaffinfo)
                <tr>
                  <td>{{$recordstaffinfo->name}}</td>
                  <td>{{number_format($recordstaffinfo->temperature,2,'.','')}}
                    @if($recordstaffinfo->temperature <= 36.9)
                        <span class="dotgreen"></span>
                    @elseif($recordstaffinfo->temperature >=36.9)
                        <span class="dotred"></span>
                    @endif
                    
                  </td>
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
  </div>
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
        dom: "<'row'<l> <f>>" +
              "<'row'<tr>>" +
              "<'row'<i><p>>" +
              "<'row'<'mt-20 text-indigo-500'B>>",
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

       $('#refresh').click(function(){
          $('#from_date').val('');
          $('#to_date').val('');
       });

    });
</script>


<script>
  
    window.onload = function() {

        
        if (sessionStorage.getItem('name') == "name") {
            return;
        }

       
        var from_date = sessionStorage.getItem('from_date');
        if (from_date !== null) $('#from_date').val(from_date);

        var to_date = sessionStorage.getItem('to_date');
        if (to_date !== null) $('#to_date').val(to_date);

    }

  
    window.onbeforeunload = function() {
        sessionStorage.setItem("from_date", $('#from_date').val());
        sessionStorage.setItem("to_date", $('#to_date').val());

    }
</script>






