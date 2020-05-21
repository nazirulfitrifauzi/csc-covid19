@extends('welcome')
<style>
	.slide {
    display: none;
}
.active-slide {
    display: block;
}
.slider-nav {
    text-align: center;
    margin-top: 20px;
}
.prev {
    display: inline-block;
    margin: 10px;
}
.next {
    display: inline-block;
    margin: 10px;
}

.submit {
    display: inline-block;
    margin: 10px;
}

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
            Declaration Form
        </p>
        <p class="text-xl md:text-2xl text-gray-500 pt-2"></p>
    </div>
</div>
<!--Container-->
<div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
    
    <div class="mx-0 sm:mx-6">
        
        <!--Nav-->
     {{--    <nav class="mt-0 w-full">
            <div class="container mx-auto flex items-center">
                
                <div class="flex w-1/2 pl-4 text-sm">
                    <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                        <li class="mr-2">
                            <a class="inline-block py-2 px-2 text-white underline hover:underline font-bold"
                                href="{{ route('TempCheck.index')}}">
                            Temperature Check</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav> --}}
        <div class="bg-gray-200 w-full text-gray-800 leading-normal rounded-t">
            
            <!--Lead Card-->
            <div class="flex  bg-white rounded overflow-hidden shadow-lg" >
                <a  class="flex flex-wrap no-underline hover:no-underline" style="width: 100%">
                    <div class="lg:w-2/4 md:w-2/3 rounded-t lg picnone" >
                        <img src="{{ asset('img/covid19bg.jpg') }}" class="h-full w-full shadow">
                    </div>
                    <div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">

                   @if(session()->has('success'))
                    <div role="alert" style="margin: 10px">
                      <div class="bg-teal-500 text-white font-bold rounded-t px-4 py-2">
                        Successfully Submitted
                      </div>
                      <div class="border border-t-0 border-teal-400 rounded-b bg-teal-100 px-4 py-3 text-teal-700">
                        <p>{!! session('success') !!}</p>
                      </div>
                    </div>
                   @endif

                     @if ($errors->any())
                        <div role="alert" style="margin: 10px">
                            <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                               Please answer all the questions
                            </div>
                            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                                @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        </div>
                       @endif
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <!-- Replace with your content -->
                            <div class="px-4 py-8 sm:px-0">
                                <div>
                                    <div class="w-full max-w-lg">
                                        
                                        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 mt-10 mb-20 " id="btntitle">
                                            <h1 class="font-bold text-2xl text-center pb-5">What type user are you?</h1>
                                            <div class=" flex justify-center text-center">
                                               <button class="text-center block border border-indigo-500 rounded py-2 px-4 bg-indigo-500 hover:bg-indigo-700 text-white mr-2" onclick="show1()">
                                                  EMPLOYEE
                                                </button>

                                                <button class="text-center block border border-indigo-500 rounded py-2 px-4 bg-indigo-600 hover:bg-indigo-500 text-white"onclick="show2()">
                                                    VISITOR
                                                </button>
                                            </div>
                                        </div>
                                         @include('form.employeeform')

                                         @include('form.visitorform')
                                         
                                        
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
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
function checkNavigation() {

    if ($('.active-slide').hasClass('first')) {
        $('.prev').hide();
        $('.next').show();
        $('.submit').hide();
    } else if ($('.active-slide').hasClass('last')) {
        $('.next').hide();
        $('.prev').show();
        $('.submit').show();
    } else {
        $('.prev').show();
        $('.next').show();
        $('.submit').hide();
    }

}

var main = function () {
    checkNavigation();
    
    $('.next').click(function () {
        
        var currentSlide = $('.active-slide');
        var nextSlide = currentSlide.next('.slide');

        //if nextslide is last slide, go back to the first
        if (nextSlide.length === 0) {
            nextSlide = $('.slide').first();
        }

        currentSlide.hide().removeClass('active-slide');
        nextSlide.show().addClass('active-slide');

        checkNavigation();
    });

    //prev slide function
    $('.prev').click(function () {
        var currentSlide = $('.active-slide');
        var prevSlide = currentSlide.prev('.slide');

        if (prevSlide.length === 0) {
            prevSlide = $('.slide').last();
        }

        currentSlide.hide().removeClass('active-slide');
        prevSlide.show().addClass('active-slide');
         checkNavigation();
    });



};

$(document).ready(main);



</script>

<script>
function show1(){
	$( "#employee").show();
	$( "#visitor" ).hide();
	$( "#btntitle" ).hide();
}

function show2(){
	$( "#employee").hide();
	$( "#visitor" ).show();
	$( "#btntitle" ).hide();
}
</script>


<script>
function checkNavigation1() {

    if ($('.active-slide1').hasClass('first1')) {
        $('.prev1').hide();
        $('.next1').show();
        $('.submit1').hide();
    } else if ($('.active-slide1').hasClass('last1')) {
        $('.next1').hide();
        $('.prev1').show();
        $('.submit1').show();
    } else {
        $('.prev1').show();
        $('.next1').show();
        $('.submit1').hide();
    }

}

var main1 = function () {
    checkNavigation1();
    
    $('.next1').click(function () {
        
        var currentSlide = $('.active-slide1');
        var nextSlide = currentSlide.next('.slide1');

        //if nextslide is last slide, go back to the first
        if (nextSlide.length === 0) {
            nextSlide = $('.slide1').first();
        }

        currentSlide.hide().removeClass('active-slide1');
        nextSlide.show().addClass('active-slide1');

        checkNavigation1();
    });

    //prev slide function
    $('.prev1').click(function () {
        var currentSlide = $('.active-slide1');
        var prevSlide = currentSlide.prev('.slide1');

        if (prevSlide.length === 0) {
            prevSlide = $('.slide1').last();
        }

        currentSlide.hide().removeClass('active-slide1');
        prevSlide.show().addClass('active-slide1');
         checkNavigation1();
    });


   

};

$(document).ready(main1);



</script>
