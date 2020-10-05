<x-guest-layout>
<head>
</head>
<style>
    .fondo{
        background:#636b6f;
    }
 .margen{
     margin-top:100px;
 }
 .nombre {
     color:#636b6f;
     font-size: 40px;
     margin-bottom: 50px;
 }
 .texto {
    font-size: 20px;
}
.e{
    font-size: 25px;
}

.clase{
    width: 30%;
  
    margin-left: 3%;
    margin-top: 2%;
    float: left;   
    margin-bottom: 2%;
   
}
.x_specie{
    border:5px solid #636b6f ;
    
}
.x{
    width: 50%;
    margin-left: 25%;
    margin-top: 5%;
}
.color{
    color:#636b6f;
    text-transform: uppercase;
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
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif
    </nav>
    <!-- component -->
<!-- Dark Header component -->
 <!-- Fontswesome -->
  <header class="text-gray-100  body-font shadow w-full bg-black fondo ">
 
<div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a
                class="flex order-first ">
                 <span class="ml-3 text-xl"> Especies que podes encontrar </span>
            </a>
          
            <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto navbar-brand">
            @foreach ($species as $specie)
         <a  href="" class="mr-5 hover:text-gray-900 cursor-pointer border-b border-transparent hover:border-indigo-600">{{$specie-> name}}</a>
      
                @endforeach
                 
            </nav>
           
  </div>
    </header>
<!-- component -->

@foreach ($species as $specie)

<div class="x " >
<div class="x_specie" >
<h2 class="text-center  md:text-4xl color text-900">{{$specie -> name}}</h2>
<div class=" es px-4 text-center lg:px-0 mt-12 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">
          <p class="pb-6 "> {{$specie -> description}}</p>
</div>

@foreach ($animals as $Animal)

<div class="md:flex shadow-lg  mx-6 md:mx-auto my-20 max-w-lg md:max-w-2xl h-64">
<img class="h-full w-full md:w-1/3 object-cover rounded-lg " src="{{$Animal-> image}}" >
   <div class="w-full md:w-2/3 px-4 py-4 bg-white rounded-lg">
      <div class="flex items-center">
         <h2 class="text-xl text-gray-800 font-medium mr-auto">{{$Animal-> name}}</h2>
         <p class="text-gray-800 font-semibold tracking-tighter">
         Especie : 
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

