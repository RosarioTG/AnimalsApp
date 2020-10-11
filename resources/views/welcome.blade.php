<x-guest-layout>
<head>
</head>
   <body>

	<nav id="nav" class="fixed inset-x-0 top-0 flex flex-row justify-between z-10 text-white bg-transparent">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}  " class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif
    </nav>
    <!-- component -->
<!-- Dark Header component -->
 <!-- Fontswesome -->   
  <header class="text-gray-100  body-font shadow w-full  bg-gray-400 ; ">
			<div class="mx-2 text-center">
				<h1 class="text-gray-100 font-serif text-4xl  xs:text-5xl md:text-6xl">
					<span class="text-white font-serif"></span> Animals App
           </h1>
           </div>
    </header>
<!-- component -->

<nav  class="fixed inset-x-0   justify-between z-10  ">
<div class="bg-white float-right  shadow w-64 my-2">
<div class="   flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
      <a class="  text-center font-serif md:text-4xl text-gray-500 text-900">Especies</a>
      </div>
  <ul class="list-reset">
  @foreach ($species as $specie)
   <li class="-mb-px mr-1">
   <a href="{{$specie -> name}}" class="block p-4 text-grey-darker font-bold border-grey-lighter hover:border-purple-light hover:bg-grey-lighter border-r-4">{{$specie -> name}}</a>
   </li>
      @endforeach
   
  </ul>
  </div>
</nav>

<nav  class="fixed inset-x-0   justify-between z-10  ">
<div class="bg-white   shadow w-64 my-2">
<div class="   flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
      <a class="  text-center font-serif md:text-4xl text-gray-500 text-900">Animales</a>
      </div>
  <ul class="list-reset">
   @foreach ($animals as $animal)
   <li class="-mb-px mr-1">
   <a  class="block p-4 text-grey-darker font-bold border-grey-lighter hover:border-purple-light hover:bg-grey-lighter border-r-4">{{$animal -> name}}</a>
   </li>
      @endforeach
   
  </ul>
  </div>
</nav>

@foreach ($species as $specie)

<div class=" xl:max-w-6xl mx-auto  mt-10" >
<div class="x_specie mb-2 border-4 border-600 border-gray-600">
<h2 class="text-center underline  mt-6 font-serif md:text-4xl text-gray-500 text-900" name="{{$specie -> name}}">{{$specie -> name}}</h2>
<div class=" w-full bg-white shadow flex flex-col my-4 p-6  text-center mx-auto px-4 text-center lg:px-0 mt-12 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">
          <p class="pb-6 text-lg"> {{$specie -> description}}</p>
          
</div>

@foreach ($specie->animals as $Animal)

<div class="md:flex shadow-lg  mx-6 md:mx-auto my-20 max-w-lg md:max-w-2xl h-64">
<img class="h-full w-full md:w-1/3 object-cover rounded-lg " src="{{$Animal-> image}}" >
   <div class="w-full md:w-2/3 px-4 py-4 bg-white rounded-lg">
      <div class="flex items-center">
         <h2 class="text-xl text-gray-800 font-medium mr-auto " >{{$Animal-> name}}</h2>
         <p class="text-gray-800 font-semibold tracking-tighter">
        Extinto : {{$Animal-> extinto}}
         </p>
      </div>
      <p class=" text-lgtext-gray-700 mt-4">
      {{$Animal-> description}}
      </p>
      </div>
</div>

@endforeach
</div>     
</div>  


@endforeach
 


</html>
</body>      
    </x-guest-layout>