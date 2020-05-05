<div class="w-full max-w-lg">
	{{-- alert --}}
	@if(session()->has('success'))
	<div class="block bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md mb-6 "
		role="alert" id="successarlert">
		<div class="flex">
			<div class="py-1">
				<img  class="w-10 pr-2" src="https://img.icons8.com/cotton/64/000000/checkmark.png"/>
			</div>
			<div>
				<p class="font-bold pt-2">{!! session('success') !!}</p>
			</div>
		</div>
	</div>
	@endif
	{{-- end alert --}}
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
					<option>Norzafeera Amira Binti Abu Samah</option>
					<option>Nur Izzah Syahira Binti Razali</option>
					<option>Muhammad Safwan Bin Azman</option>
					<option>Fadhilrul Hafidz Bin Saifuddin</option>
					<option>Syed Nasir Bin Syed Abd Jalil</option>
					<option>Md Sidek Bi Abd Hamid</option>
					<option>Ahmad Zuwari Bin Muhammad</option>
					<option>Zarshaid</option>
					<option>Wati Setiawati</option>
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
			<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="text" name="temperature" required>
		</div>
		<div class="flex items-center justify-between">
			<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" id="button">
			Submit
			</button>
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
// $(document).ready(function(){
// $("#button").click(function(){
//   $("#successarlert").fadeIn();
// });
// });


$(document).ready(function(){
    setTimeout(function(){ $("#successarlert").hide()  }, 3000);
});


</script>