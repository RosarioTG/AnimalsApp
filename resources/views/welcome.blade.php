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
                <a
                    class="mr-5 hover:text-gray-900 cursor-pointer border-b border-transparent hover:border-indigo-600">Mamiferos</a>
                <a
                    class="mr-5 hover:text-gray-900 cursor-pointer border-b border-transparent hover:border-indigo-600">Reptiles</a>
                <a class="mr-5 hover:text-gray-900 cursor-pointer border-b border-transparent hover:border-indigo-600">peces</a>
                <a
                    class="hover:text-gray-900 cursor-pointer border-b border-transparent hover:border-indigo-600">Anfibios </a>
            </nav>
          
        </div>
    </header>
<!-- component -->
<head>  <script src="https://kit.fontawesome.com/479346cc73.js" crossorigin="anonymous"></script>
</head>

<body class="  h-250">
    <div class="  margen grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-3 xl:grid-cols-4 gap-2 m-5 mb-10">

        <div class="bg-white shadow-xl rounded-lg overflow-hidden">
            <div class="bg-cover bg-center h-56 p-4"
                style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRNvq5eKR4Tmqd6OykTcx_IPQdMLdxeinpIIg&usqp=CAU)">

            </div>
            <div class="m-2 text-justify text-sm">
                  <h2 class=" font-bold h-2 mb-5 text-center nombre ">canguro</h2>
                <p class=" text-xs p-3 texto"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore Author portrait ; https://karina-balzer.fr/portfolio/glamour/
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                 </p>
                 <h1 class="e">Especie : mamifero </h1>

            </div>
            <div class="w-full text-center  "><button class=" text-gray-400 text-lg mb-2"><i
                        class="fas fa-plus-circle"></i></button>
            </div>
        </div>

       
        

</html>
        
    </x-guest-layout>

