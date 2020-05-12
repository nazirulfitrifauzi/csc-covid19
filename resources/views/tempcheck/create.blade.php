 @extends('welcome')

 @section('content')

{{-- tempcheck --}}
<div class="py-10" id="tempcheck">
	<header>
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<h1 class="text-3xl font-bold leading-tight text-gray-900">
			Temperature Check
			</h1>
		</div>
	</header>
	<main>
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<!-- Replace with your content -->
			<div class="px-4 py-8 sm:px-0">
				<div>
					<div class="w-full max-w-lg">
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
					<div class="mb-4">
						<label class="block text-gray-700 text-sm font-bold mb-2" for="username">
							Name
						</label>
						<div class="inline-block relative w-full">
							<select class="shadow  border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="name" required
								onmousedown="if(this.options.length>8){this.size=8;}"  onchange='this.size=0;' onblur="this.size=0;">
								<option>Choose Name</option>
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
					
					<div class="flex items-center justify-between">
						<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" id="button">
						Submit
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- /End replace -->
</div>
</main>
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