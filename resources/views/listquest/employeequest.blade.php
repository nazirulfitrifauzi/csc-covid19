@extends('welcome')
<style>
	
.form-radio {
	color: #667eea !important;
	}
@media (max-width: 600px){
.picnone {
display: none !important;
}
.mtop {
margin-top: 0px !important;
margin-bottom: 0px !important;
}
}
</style>
@section('content')
<!--Header-->
<div class="w-full m-0 p-0 bg-cover bg-bottom bg-indigo-900" style=" height: 45vh; max-height:360px;">
	<div class="container max-w-4xl mx-auto pt-16 md:pt-18 text-center break-normal">
		<!--Title-->
		<p class="text-white font-extrabold text-3xl md:text-5xl">
			{{$employee->name}}
		</p>
		<p class="text-xl md:text-2xl text-gray-500 pt-2"></p>
	</div>
</div>
<!--Container-->
<div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
	
</div>


<div class="mx-0 sm:mx-6">
	<div class="bg-gray-200 w-full text-gray-800 leading-normal rounded-t">
		<!--Lead Card-->
		<div class=" bg-white rounded overflow-hidden shadow-lg" >
			<a  class="flex flex-wrap no-underline hover:no-underline">
				
				<div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
					<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
						<div class=" flex justify-end ">
							<button class="font-medium text-sm flex items-center py-1 px-2 text-white mt-4 mr-2 flex
							rounded-md mb-4 bg-indigo-500 hover:bg-indigo-700"  
							 onclick="window.location.href = '{{url('EmployeeQuestList')}}';">
							<i class="fas fa-undo-alt text-sm mr-2" aria-hidden="true"></i> Back to List
							</button>
						</div>
						<!-- Replace with your content -->
						<div class="px-4  sm:px-0">
							<div>
								
								
								<form class="w-full  bg-white">
									
									{{-- personal data --}}
									<div class="slide active-slide first">
										<p class="pt-4 font-medium text-lg flex items-center justify-center  p-4 bg-indigo-900 text-white text-center
											rounded-md">
										Please fill with your personal data </p>
										<div class="flex flex-wrap -mx-3 mb-6 pt-4">
											<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
												<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="text" name="name" placeholder="Full Name" value="{{@$employee->name}}"
												readonly>
												
											</div>
											<div class="w-full md:w-1/2 px-3  mb-6 md:mb-0">
												<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="text" name="nric" placeholder="Staff NRIC" value="{{@$employee->nric}}" readonly>
											</div>
											<div class="w-full md:w-1/2 px-3  mb-6 md:mb-0">
												<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="text" name="department" placeholder="Department" value="{{@$employee->department}}"readonly >
											</div>
											<div class="w-full md:w-1/2 px-3  mb-6 md:mb-0">
												<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="number"step="0.1"  type="text" name="temperature" placeholder="Temperature"
												value="{{@$employee->temperature}}"readonly >
											</div>
										</div>
									</div>
									{{-- question 1 --}}
									<div class="slide " >
										<p class="pt-4 font-medium text-lg flex items-center justify-center  p-4 bg-indigo-900 text-white text-center
											rounded-md">
											1. Did you or others (family member,relatives, friend,etc.) that have
											close contact with you travel overseas to any COVID-19 affected countries in the
										last 30 days </p>
										<div class="flex flex-wrap -mx-3 mb-6  p-4">
											<div class="shadow  border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" >
												<label class="inline-flex items-center">
													<input type="radio" class="form-radio" name="quest1" value="Yes" disabled
													{{ (@$employee->quest1 =="Yes")? "checked" : "" }}>
													<span class="ml-2">Yes</span>
												</label>
												<label class="inline-flex items-center ml-6">
													<input type="radio" class="form-radio" name="quest1" value="No" disabled
													{{ (@$employee->quest1 =="No")? "checked" : "" }}>
													<span class="ml-2">No</span>
												</label>
											</div>
										</div>
									</div>
									{{-- question 2  --}}
									<div class="slide ">
										<p class="pt-4 font-medium text-lg flex items-center justify-center  p-4 bg-indigo-900 text-white text-center
											rounded-md">
										2. Have you or others that have close contact with you been to a high-risk enviromnet e.g. hospital in the last 14 days? </p>
										<div class="flex flex-wrap -mx-3 mb-6  p-4">
											<div class="shadow  border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
												<label class="inline-flex items-center">
													<input type="radio" class="form-radio" name="quest2" value="Yes" disabled
													{{ (@$employee->quest2 =="Yes")? "checked" : "" }}>
													<span class="ml-2">Yes</span>
												</label>
												<label class="inline-flex items-center ml-6">
													<input type="radio" class="form-radio" name="quest2" value="No" disabled
													{{ (@$employee->quest2 =="No")? "checked" : "" }}>
													<span class="ml-2">No</span>
												</label>
											</div>
										</div>
									</div>
									{{-- question 3  --}}
									<div class="slide ">
										<p class="pt-4 font-medium text-lg flex items-center justify-center  p-4 bg-indigo-900 text-white text-center
											rounded-md">
											3. Have you been in close contact with anyone who is quarantined or infected with COVID-19
										infections? </p>
										<div class="flex flex-wrap -mx-3 mb-6  p-4">
											<div class="shadow  border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
												<label class="inline-flex items-center">
													<input type="radio" class="form-radio" name="quest3" value="Yes"
													{{ (@$employee->quest3 =="Yes")? "checked" : "" }} disabled>
													<span class="ml-2">Yes</span>
												</label>
												<label class="inline-flex items-center ml-6">
													<input type="radio" class="form-radio" name="quest3" value="No"
													{{ (@$employee->quest3 =="No")? "checked" : "" }} disabled>
													<span class="ml-2">No</span>
												</label>
											</div>
										</div>
									</div>
									{{-- question 4  --}}
									<div class="slide " >
										<p class="pt-4 font-medium text-lg flex items-center justify-center  p-4 bg-indigo-900 text-white text-center
											rounded-md">
										4. In the last 14 days, did you have the following: </p>
										<div class="flex flex-wrap -mx-3  pr-4 pl-4 pt-1">
											<div class="shadow  border rounded w-full py-2 px-3 text-gray-700  leading-tight focus:outline-none focus:shadow-outline">
												
												<span class="text-red-500">*</span><span class="ml-2 mr-2 ">High Fever (higher than 38 Celsius)</span>
												<div class="pl-2 pt-2">
													<label class="inline-flex items-center">
														<input type="radio" class="form-radio" name="quest4" value="Yes"
														{{ (@$employee->quest4 =="Yes")? "checked" : "" }} disabled>
														<span class="ml-2">Yes</span>
													</label>
													<label class="inline-flex items-center ml-6">
														<input type="radio" class="form-radio" name="quest4" value="No"
														{{ (@$employee->quest4 =="No")? "checked" : "" }} disabled >
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
														<input type="radio" class="form-radio" name="quest5" value="Yes"
														{{ (@$employee->quest5 =="Yes")? "checked" : "" }} disabled>
														<span class="ml-2">Yes</span>
													</label>
													<label class="inline-flex items-center ml-6">
														<input type="radio" class="form-radio" name="quest5" value="No"
														{{ (@$employee->quest5 =="No")? "checked" : "" }} disabled>
														<span class="ml-2">No</span>
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="slide " >
										<div class="flex flex-wrap -mx-3  pr-4 pl-4 pt-1">
											<div class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
												<span class="text-red-500">*</span><span class="ml-2 mr-2 ">Shortness of breath</span>
												<div class="pl-2 pt-2">
													<label class="inline-flex items-center">
														<input type="radio" class="form-radio" name="quest6" value="Yes"
														{{ (@$employee->quest6 =="Yes")? "checked" : "" }} disabled>
														<span class="ml-2">Yes</span>
													</label>
													<label class="inline-flex items-center ml-6">
														<input type="radio" class="form-radio" name="quest6" value="No"
														{{ (@$employee->quest6 =="No")? "checked" : "" }} disabled>
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
														<input type="radio" class="form-radio" name="quest7" value="Yes"
														{{ (@$employee->quest7 =="Yes")? "checked" : "" }} disabled>
														<span class="ml-2">Yes</span>
													</label>
													<label class="inline-flex items-center ml-6">
														<input type="radio" class="form-radio" name="quest7" value="No"
														{{ (@$employee->quest7 =="No")? "checked" : "" }} disabled>
														<span class="ml-2">No</span>
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="slide ">
										<div class="flex flex-wrap -mx-3  pr-4 pl-4 pt-1">
											<div class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
												<span class="text-red-500">*</span><span class="ml-2 mr-2 ">Cough</span>
												<div class="pl-2 pt-2">
													<label class="inline-flex items-center">
														<input type="radio" class="form-radio" name="quest8" value="Yes"
														{{ (@$employee->quest8 =="Yes")? "checked" : "" }} disabled>
														<span class="ml-2">Yes</span>
													</label>
													<label class="inline-flex items-center ml-6">
														<input type="radio" class="form-radio" name="quest8" value="No"
														{{ (@$employee->quest8 =="No")? "checked" : "" }} disabled>
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
														<input type="radio" class="form-radio" name="quest9" value="Yes"
														{{ (@$employee->quest9 =="Yes")? "checked" : "" }} disabled>
														<span class="ml-2">Yes</span>
													</label>
													<label class="inline-flex items-center ml-6">
														<input type="radio" class="form-radio" name="quest9" value="No"
														{{ (@$employee->quest9 =="No")? "checked" : "" }} disabled>
														<span class="ml-2">No</span>
													</label>
												</div>
											</div>
										</div>
									</div>
									{{-- question 5  --}}
									<div class="slide last mt-10" >
										<p class="pt-4 font-medium text-lg flex items-center justify-center  p-4 bg-indigo-900 text-white text-center
											rounded-md">
										5. Have  you been is close contact with anyone who have symptoms of high fever (higher than 38 celsius), cough,shortness of breath,breathing difficulty,persistent pain in the chest or flu? </p>
										<div class="flex flex-wrap -mx-3 mb-6  p-4">
											<div class="shadow  border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
												<label class="inline-flex items-center">
													<input type="radio" class="form-radio" name="quest10" value="Yes"
													{{ (@$employee->quest10 =="Yes")? "checked" : "" }} disabled>
													<span class="ml-2">Yes</span>
												</label>
												<label class="inline-flex items-center ml-6">
													<input type="radio" class="form-radio" name="quest10" value="No"
													{{ (@$employee->quest10 =="No")? "checked" : "" }} disabled>
													<span class="ml-2">No</span>
												</label>
											</div>
										</div>
									</div>
									
								</form>
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