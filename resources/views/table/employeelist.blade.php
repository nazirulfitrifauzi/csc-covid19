 @extends('welcome')
<style>
  

  table.dataTable tbody th, table.dataTable tbody td {
    padding: 18px 10px !important;
}

</style>
 @section('content')
{{-- reporting --}}
<!--Header-->
<div class="w-full m-0 p-0 bg-cover bg-bottom bg-indigo-900" style=" height: 45vh; max-height:360px;">
  <div class="container max-w-4xl mx-auto pt-16 md:pt-18 text-center break-normal">
    <!--Title-->
    <p class="text-white font-extrabold text-3xl md:text-5xl">
     List Of Employee
    </p>
    <p class="text-xl md:text-2xl text-gray-500 pt-2"></p>
  </div>
</div>


<!--Table employee-->
<div class="container px-4 md:px-0 max-w-full mx-auto -mt-32">
  
  <div class="mx-0 sm:mx-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="px-4 py-8 sm:px-0">
        <div>
          <div id='recipients' class="pl-8 pr-8 pb-8  pt-3 lg:mt-0 rounded shadow bg-white">

          	<div class="bg-indigo-900 rounded flex justify-between mb-4">

          		<p class="pt-4 font-medium text-lg flex items-center py-1 px-2 text-white 
		         rounded-md mb-4" >List of Employee </p>

               <a class="font-medium text-sm flex items-center py-1 px-2 text-white mt-4 mr-2
             rounded-md mb-4 bg-indigo-500 hover:bg-indigo-700" href="{{ url('List') }}">
                    <i class="fas fa-undo-alt text-sm mr-2" aria-hidden="true"></i> Back to type
                 </a>

            </div>

            <table id="dataTable" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
              <thead>
                <tr>
                   <th>Name</th>
                  <th>Staff NRIC</th>
                  <th>Department</th>
                  <th>Temperature</th>
                  <th>Action</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach($employee as $employeelist)
                <tr>
              
                  <td>{{$employeelist->name}}</td>
                  <td>{{$employeelist->nric}}</td>
                  <td>{{$employeelist->department}}</td>
                  <td>{{$employeelist->temperature}}</td>
                  <td>
                    <a class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-1 px-2 rounded-full text-sm" 
                      href="{{url('EmployeeQuestList/'.$employeelist->id.'')}}">
          					  <i class="fas fa-eye text-sm" aria-hidden="true"></i> View
          					</a>
                 </td>
                  
                </tr>
                @endforeach
              </tbody>
              
            </table>
           
          </div>
        </div>
      </div>
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
















