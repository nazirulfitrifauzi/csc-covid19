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
     List Employee & Visitor
    </p>
    <p class="text-xl md:text-2xl text-gray-500 pt-2"></p>
  </div>
</div>

<!--type of list-->
<div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32" id="btnlist">
    
    <div class="mx-0 sm:mx-6">
 
        <div class="bg-gray-200 w-full text-gray-800 leading-normal rounded-t">
            
            <!--Lead Card-->
            <div class="flex  bg-white rounded overflow-hidden shadow-lg" >
                <a  class="flex flex-wrap no-underline hover:no-underline" style="width: 100%">
                    <div class="lg:w-2/4 md:w-2/3 rounded-t lg picnone" >
                        <img src="{{ asset('img/covid19bg.jpg') }}" class="h-full w-full shadow">
                    </div>
                    <div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <!-- Replace with your content -->
                            <div class="px-4 py-8 sm:px-0">
                                <div>
                                    <div class="w-full max-w-lg">
                                        
                                        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 mt-10 mb-20 mtop" id="btntitle">
                                            <h1 class="font-bold text-2xl text-center pb-5">Which  you want to see the list</h1>
                                            <div class=" flex justify-center text-center">
                                               <button class="text-center block border border-indigo-500 rounded py-2 px-4 bg-indigo-500 hover:bg-indigo-700 text-white mr-2"
                                                onclick="window.location.href = '{{url('EmployeeQuestList')}}';">
                                                  EMPLOYEE
                                                </button>

                                                <button class="text-center block border border-indigo-500 rounded py-2 px-4 bg-indigo-600 hover:bg-indigo-500 text-white" 
                                                onclick="window.location.href = '{{url('VisitoreQuestList')}}';">
                                                    VISITOR
                                                </button>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <!-- /End replace -->
                        </div>
                    </div>
                </a>
            </div>
            <!--/Lead Card-->
            
        </div>
    </div>

</div>

<!--end type of list-->


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














