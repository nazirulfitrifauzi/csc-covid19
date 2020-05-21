<form class="w-full  p-2 bg-white"  action="{{url('Employee')}}" method="POST" style="display: none" id="employee" >
	{{csrf_field()}}


	{{-- personal data --}}
	<div class="slide active-slide first">
		<p class="pt-4 font-medium text-lg flex items-center justify-center  p-4 bg-indigo-900 text-white text-center
			rounded-md">
		Please fill with your personal data </p>
		<div class="flex flex-wrap -mx-3 mb-6 pt-4">
			<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
				<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="text" name="name" placeholder="Full Name" value="{{ old('name') }}">
				
			</div>
			<div class="w-full md:w-1/2 px-3  mb-6 md:mb-0">
				<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="text" name="nric" placeholder="Staff NRIC" value="{{ old('nric') }}">
			</div>
			<div class="w-full md:w-1/2 px-3  mb-6 md:mb-0">
				<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="text" name="department" placeholder="Department" value="{{ old('department') }}">
			</div>
			<div class="w-full md:w-1/2 px-3  mb-6 md:mb-0">
				<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="number"step="0.1"  type="text" name="temperature" placeholder="Temperature"
				value="{{ old('temperature') }}">
			</div>
		</div>
	</div>
	{{-- question 1 --}}
	<div class="slide " style="display: none">
		<p class="pt-4 font-medium text-lg flex items-center justify-center  p-4 bg-indigo-900 text-white text-center
			rounded-md">
			1. Did you or others (family member,relatives, friend,etc.) that have
			close contact with you travel overseas to any COVID-19 affected countries in the
		last 30 days </p>
		<div class="flex flex-wrap -mx-3 mb-6 text-center p-4">
			<div class="shadow  border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" >
				<label class="inline-flex items-center">
					<input type="radio" class="form-radio" name="quest1" value="Yes" @if(old('quest1')== "Yes") checked @endif>
					<span class="ml-2">Yes</span>
				</label>
				<label class="inline-flex items-center ml-6">
					<input type="radio" class="form-radio" name="quest1" value="No" @if(old('quest1')== "No") checked @endif>
					<span class="ml-2">No</span>
				</label>
			</div>
		</div>
	</div>
	{{-- question 2  --}}
	<div class="slide " style="display: none">
		<p class="pt-4 font-medium text-lg flex items-center justify-center  p-4 bg-indigo-900 text-white text-center
			rounded-md">
		2. Have you or others that have close contact with you been to a high-risk enviromnet e.g. hospital in the last 14 days? </p>
		<div class="flex flex-wrap -mx-3 mb-6 text-center p-4">
			<div class="shadow  border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
				<label class="inline-flex items-center">
					<input type="radio" class="form-radio" name="quest2" value="Yes" @if(old('quest2')== "Yes") checked @endif>
					<span class="ml-2">Yes</span>
				</label>
				<label class="inline-flex items-center ml-6">
					<input type="radio" class="form-radio" name="quest2" value="No"  @if(old('quest2')== "No") checked @endif>
					<span class="ml-2">No</span>
				</label>
			</div>
		</div>
	</div>
	{{-- question 3  --}}
	<div class="slide " style="display: none">
		<p class="pt-4 font-medium text-lg flex items-center justify-center  p-4 bg-indigo-900 text-white text-center
			rounded-md">
			3. Have you been in close contact with anyone who is quarantined or infected with COVID-19
		infections? </p>
		<div class="flex flex-wrap -mx-3 mb-6 text-center p-4">
			<div class="shadow  border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
				<label class="inline-flex items-center">
					<input type="radio" class="form-radio" name="quest3" value="Yes"  @if(old('quest3')== "Yes") checked @endif>
					<span class="ml-2">Yes</span>
				</label>
				<label class="inline-flex items-center ml-6">
					<input type="radio" class="form-radio" name="quest3" value="No"  @if(old('quest3')== "No") checked @endif>
					<span class="ml-2">No</span>
				</label>
			</div>
		</div>
	</div>
	{{-- question 4  --}}
	<div class="slide " style="display: none;">
		<p class="pt-4 font-medium text-lg flex items-center justify-center  p-4 bg-indigo-900 text-white text-center
			rounded-md">
		4. In the last 14 days, did you have the following: </p>
		<div class="flex flex-wrap -mx-3  pr-4 pl-4 pt-1">
			<div class="shadow  border rounded w-full py-2 px-3 text-gray-700  leading-tight focus:outline-none focus:shadow-outline">
				
				<span class="text-red-500">*</span><span class="ml-2 mr-2 ">High Fever (higher than 38 Celsius)</span>
				<div class="pl-2 pt-2">
					<label class="inline-flex items-center">
						<input type="radio" class="form-radio" name="quest4" value="Yes" @if(old('quest4')== "Yes") checked @endif>
						<span class="ml-2">Yes</span>
					</label>
					<label class="inline-flex items-center ml-6">
						<input type="radio" class="form-radio" name="quest4" value="No"  @if(old('quest4')== "No") checked @endif>
						<span class="ml-2">No</span>
					</label>
				</div>
			</div>
		</div>
		<div class="flex flex-wrap -mx-3  pr-4 pl-4 pt-1">
			<div class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
				<span class="text-red-500">*</span><span class="ml-2 mr-2 ">Persistent pain in the chest</span>
				<div class="pl-2 pt-2">
					<label class="inline-flex items-center">
						<input type="radio" class="form-radio" name="quest5" value="Yes" @if(old('quest5')== "Yes") checked @endif>
						<span class="ml-2">Yes</span>
					</label>
					<label class="inline-flex items-center ml-6">
						<input type="radio" class="form-radio" name="quest5" value="No"  @if(old('quest5')== "No") checked @endif>
						<span class="ml-2">No</span>
					</label>
				</div>
			</div>
		</div>
	</div>
	<div class="slide " style="display: none;">
		<p class="pt-4 font-medium text-lg flex items-center justify-center  p-4 bg-indigo-900 text-white text-center
			rounded-md">
		4. In the last 14 days, did you have the following: </p>
		<div class="flex flex-wrap -mx-3  pr-4 pl-4 pt-1">
			<div class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
				<span class="text-red-500">*</span><span class="ml-2 mr-2 ">Shortness of breath</span>
				<div class="pl-2 pt-2">
					<label class="inline-flex items-center">
						<input type="radio" class="form-radio" name="quest6" value="Yes"  @if(old('quest6')== "Yes") checked @endif>
						<span class="ml-2">Yes</span>
					</label>
					<label class="inline-flex items-center ml-6">
						<input type="radio" class="form-radio" name="quest6" value="No" @if(old('quest6')== "No") checked @endif>
						<span class="ml-2">No</span>
					</label>
				</div>
			</div>
		</div>
		<div class="flex flex-wrap -mx-3  pr-4 pl-4 pt-1">
			<div class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
				<span class="text-red-500">*</span><span class="ml-2 mr-2 ">Breathing difficulty</span>
				<div class="pl-2 pt-2">
					<label class="inline-flex items-center">
						<input type="radio" class="form-radio" name="quest7" value="Yes" @if(old('quest7')== "Yes") checked @endif>
						<span class="ml-2">Yes</span>
					</label>
					<label class="inline-flex items-center ml-6">
						<input type="radio" class="form-radio" name="quest7" value="No" @if(old('quest7')== "No") checked @endif>
						<span class="ml-2">No</span>
					</label>
				</div>
			</div>
		</div>
	</div>
	<div class="slide " style="display: none;">
		<p class="pt-4 font-medium text-lg flex items-center justify-center  p-4 bg-indigo-900 text-white text-center
			rounded-md">
		4. In the last 14 days, did you have the following: </p>
		<div class="flex flex-wrap -mx-3  pr-4 pl-4 pt-1">
			<div class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
				<span class="text-red-500">*</span><span class="ml-2 mr-2 ">Cough</span>
				<div class="pl-2 pt-2">
					<label class="inline-flex items-center">
						<input type="radio" class="form-radio" name="quest8" value="Yes"  @if(old('quest8')== "Yes") checked @endif>
						<span class="ml-2">Yes</span>
					</label>
					<label class="inline-flex items-center ml-6">
						<input type="radio" class="form-radio" name="quest8" value="No"  @if(old('quest8')== "No") checked @endif>
						<span class="ml-2">No</span>
					</label>
				</div>
			</div>
		</div>
		<div class="flex flex-wrap -mx-3  pr-4 pl-4 pt-1">
			<div class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
				<span class="text-red-500">*</span><span class="ml-2 mr-2 ">Flu</span>
				<div class="pl-2 pt-2">
					<label class="inline-flex items-center">
						<input type="radio" class="form-radio" name="quest9" value="Yes"  @if(old('quest9')== "Yes") checked @endif>
						<span class="ml-2">Yes</span>
					</label>
					<label class="inline-flex items-center ml-6">
						<input type="radio" class="form-radio" name="quest9" value="No"  @if(old('quest9')== "No") checked @endif>
						<span class="ml-2">No</span>
					</label>
				</div>
			</div>
		</div>
	</div>
	{{-- question 5  --}}
	<div class="slide last" style="display: none">
		<p class="pt-4 font-medium text-lg flex items-center justify-center  p-4 bg-indigo-900 text-white text-center
			rounded-md">
		5. Have  you been is close contact with anyone who have symptoms of high fever (higher than 38 celsius), cough,shortness of breath,breathing difficulty,persistent pain in the chest or flu? </p>
		<div class="flex flex-wrap -mx-3 mb-6 text-center p-4">
			<div class="shadow  border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
				<label class="inline-flex items-center">
					<input type="radio" class="form-radio" name="quest10" value="Yes"  @if(old('quest10')== "Yes") checked @endif>
					<span class="ml-2">Yes</span>
				</label>
				<label class="inline-flex items-center ml-6">
					<input type="radio" class="form-radio" name="quest10" value="No"  @if(old('quest10')== "No") checked @endif>
					<span class="ml-2">No</span>
				</label>
			</div>
		</div>
	</div>
	<div class="flex justify-center">
		<button type="button" class="bg-transparent hover:bg-indigo-700 text-indigo-700 font-semibold hover:text-white py-2 px-4 border border-indigo-500 hover:border-transparent rounded prev">Prev</button>
		<button type="button" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded next">Next</button>
		<button  type="submit" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded submit"
		>Submit</button>
	</div>
</form>