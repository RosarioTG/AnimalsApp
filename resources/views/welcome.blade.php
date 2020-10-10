<x-guest-layout>
<head>
</head>
<style>
.x{
    width: 50%;
    margin-left: 25%;
  }
.es{
   width: 40%;
  margin-left: 30%;
}

 </style>
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
  <div class=" ">
			<div class="mx-2 text-center">
				<h1 class="text-gray-100 font-serif text-4xl  xs:text-5xl md:text-6xl">
					<span class="text-white font-serif"></span> Animals App
           </h1>
           </div>
    </header>
<!-- component -->

<div class="bg-white shadow b w-64 ">
  <div @click.away="open = false" class="flex flex-col w-full md:w-64 text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0" x-data="{ open: false }">
    <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
      <a href="#" class="text-center font-serif md:text-4xl text-gray-500 text-900">Especies </a>
      </div>
    <nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
    @foreach ($species as $specie)
      <a class="block text-lg px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">{{$specie-> name}}</a>
      @endforeach
      <div @click.away="open = false" class="relative" x-data="{ open: false }">
    
        </div>
      </div>
    </nav>
  </div>


@foreach ($species as $specie)

<div class="  x " >
<div class="x_specie mb-2 border-4 border-600 border-gray-600">
<h2 class="text-center font-serif md:text-4xl text-gray-500 text-900">{{$specie -> name}}</h2>
<div class=" es  px-4 text-center lg:px-0 mt-12 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">
          <p class="pb-6 "> {{$specie -> description}}</p>
</div>

@foreach ($specie->animals as $Animal)

<div class="md:flex shadow-lg  mx-6 md:mx-auto my-20 max-w-lg md:max-w-2xl h-64">
<img class="h-full w-full md:w-1/3 object-cover rounded-lg " src="{{$Animal-> image}}" >
   <div class="w-full md:w-2/3 px-4 py-4 bg-white rounded-lg">
      <div class="flex items-center">
         <h2 class="text-xl text-gray-800 font-medium mr-auto">{{$Animal-> name}}</h2>
         <p class="text-gray-800 font-semibold tracking-tighter">
        Extinto : {{$Animal-> extinto}}
         </p>
      </div>
      <p class="text-sm text-gray-700 mt-4">
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