 @extends('welcome')
 <style>
 	@media (max-width: 600px){
    .picnone {
    	display: none !important;
    	
    }
}

.form-radio {

	color: #667eea !important;


	}
 </style>
 @section('content')
<!--Header-->
<div class="w-full m-0 p-0 bg-cover bg-bottom bg-indigo-900" style=" height: 45vh; max-height:360px;">
	<div class="container max-w-4xl mx-auto pt-16 md:pt-18 text-center break-normal">
		<!--Title-->
		<p class="text-white font-extrabold text-3xl md:text-5xl">
			Temperature Check
		</p>
		<p class="text-xl md:text-2xl text-gray-500 pt-2"></p>
	</div>
</div>
<!--Container-->
<div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
	
	<div class="mx-0 sm:mx-6">
		
		<div class="bg-gray-200 w-full text-gray-800 leading-normal rounded-t">
			
			<!--Lead Card-->
			<div class="flex  bg-white rounded overflow-hidden shadow-lg">
				<a  class="flex flex-wrap no-underline hover:no-underline" style="width: 100%">
					<div class="lg:w-2/4 md:w-2/3 rounded-t picnone" >
						<img src="{{ asset('img/covid19bg.jpg') }}" class="h-full w-full shadow">
					</div>
					<div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
						<div class="max-w-7xl mx-auto sm:px-6 lg:px-20">
							<!-- Replace with your content -->
							<div class="px-4 py-8 sm:px-0">
								<div>
									<div class="w-full max-w-7xl">
										{{-- alert --}}
										@if(session()->has('success'))
										<div class="block bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md mb-6 "
											role="alert" id="successarlert">
											<div class="flex">
												<div class="py-1">
												<svg  class="w-10 pr-2  text-teal-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
											</div>
											<div>
												<p class="font-bold pt-2">{!! session('success') !!}</p>
											</div>
										</div>
									</div>
									@endif
									{{-- end alert --}}
									{{-- failed alert --}}
									@if(session()->has('failed'))
									<div class="block bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md mb-6 "
										role="alert" id="successarlert">
										<div class="flex">
											<div class="py-1">
											<svg class="w-10 pr-2 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
										</div>
										<div>
											<p class="font-bold pt-2">{!! session('failed') !!}</p>
										</div>
									</div>
								</div>
								@endif
								{{-- failed alert --}}
								<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ url('TempCheck')}}">
									{{csrf_field()}}
									<div class="flex flex-wrap -mx-3  p-4" id="btnuser">
										<label class="block text-gray-700 text-sm font-bold mb-2" for="username">
											What type user are you ?
										</label>
										<div class="shadow  border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" >
											<label class="inline-flex ">
												<input type="radio" class="form-radio" name="test" value="Yes" onclick="show1()">
												<span class="ml-2">Staff</span>
											</label>
											<label class="inline-flex ml-6">
												<input type="radio" class="form-radio" name="test" value="No" onclick="show2()">
												<span class="ml-2">Guest</span>
											</label>
										</div>
									</div>
									<div class="mb-4" style="display: none" id="staff">
										<label class="block text-gray-700 text-sm font-bold mb-2" for="username">
											Staff
										</label>
										<div class="inline-block relative w-full">
											<select class="shadow  border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="name" 
												onmousedown="if(this.options.length>8){this.size=8;}"  onchange='this.size=0;' onblur="this.size=0;">
												<option value="" disabled selected>Choose Name</option>
												<option>Hashim Bin Hassan</option>
												<option>Mohamed Asari Bin Mohamed Isa</option>
												<option>Azizan Bin Samad</option>
												<option>Azura Binti Pi Ramli</option>
												<option>Suarni Asra Binti Abdul Rohhim</option>
												<option>Mohd Faisol bin Md Yusuf</option>
												<option>Mohd Aizuddin Bin Mohd Yusoff</option>
												<option>Muhammad Haqim Bin Zuhari</option>
												<option>Nazirul Fitri Bin Fauzi</option>
												<option>Muhamad Irfan Bin Hashim</option>
												<option>Muhammad Anis Bin Abdul Ghani</option>
												<option>Nur Izzah Syahira Binti Razali</option>
												<option>Muhammad Safwan Bin Azman</option>
												<option>Fadhilrul Hafidz Bin Saifuddin</option>
												<option>Syed Nasir Bin Syed Abd Jalil</option>
												<option>Md Sidek Bi Abd Hamid</option>
												<option>Ahmad Zuwari Bin Muhammad</option>
												<option>Alif Hakimi Lokman</option>
												<option>Zarshaid</option>
												<option>Wati Setiawati</option>
												<option>Nor Hidayah Binti Ahmad Zaini</option>
											</select>
											
										</div>
									</div>
									<div class="mb-4" style="display: none" id="guest">
										<label class="block text-gray-700 text-sm font-bold mb-2" for="username">
											Guest
										</label>
										<div class="inline-block relative w-full">
											<select class="shadow  border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="name"
												onmousedown="if(this.options.length>5){this.size=5;}"  onchange='this.size=0;' onblur="this.size=0;">
												<option value="" disabled selected>Choose Name</option>
												<option>Ryan</option>
												<option>Faiz</option>
												<option>Fazli</option>
												<option>Athirah</option>
												<option>Nashar</option>
											</select>
											
										</div>
									</div>
									
									
									<div class="mb-6">
										<div class="flex">
											<label class="block text-gray-700 text-sm font-bold mb-2">
												Temperature
											</label>
											<img class="w-5 pb-2"  src="https://img.icons8.com/doodle/48/000000/temperature.png"/>
										</div>
										<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="number"step="0.1" name="temperature" required>
										@if(session()->has('success'))
										@if(session()->get('checktemp') <=36.9)
										<div class="bg-blue-teal border-t border-b border-teal-500 text-teal-700 px-4 py-3" role="alert"
											id="successarlert1">
											<div class="flex">
												<img class="w-12" src="https://img.icons8.com/clouds/100/000000/npc-face.png"/>
												<p class="text-sm font-bold pt-3 pl-2">{{session()->get('checkname')}}
												you are healthy and can come to work</p>
											</div>
										</div>
										@elseif(session()->get('checktemp') >=36.9)
										
										<div class="bg-blue-red border-t border-b border-red-500 text-red-700 px-4 py-3" role="alert"
											id="successarlert1">
											<div class="flex">
												<img class="w-12" src="https://img.icons8.com/clouds/100/000000/fever.png"/>
												<p class="text-sm font-bold pt-3 pl-2">{{session()->get('checkname')}}
												Please go to the clinic immidiately</p>
											</div>
										</div>
										@endif
										@endif
									</div>
									
									<div class="flex items-center justify-center">
										<button class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" id="button">
										Submit
										</button>
									</div>
								</form>
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
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
// $(document).ready(function(){
// $("#button").click(function(){
//   $(".fadeinsucsess").fadeIn();
//    $(".fadeinsucsess").fadeIn();
// });
// });


$(document).ready(function(){
    setTimeout(function(){ $("#successarlert").hide()  }, 3000);
});

// $(document).ready(function(){
//     setTimeout(function(){ $("#successarlert1").hide()  }, 4000);
// });


</script>

<script>
function show1(){
	$( "#staff").show();
	$( "#guest" ).hide();
	$( "#btnuser" ).show();
}

function show2(){
	$( "#staff").hide();
	$( "#guest" ).show();
	$( "#btnuser" ).show();
}
</script>