<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Animals App Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!--
  Tailwind UI components require Tailwind CSS v1.8 and the @tailwindcss/ui plugin.
  Read the documentation to get started: https://tailwindui.com/documentation
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c151b27f34.js" crossorigin="anonymous"></script>
    
    
    <title>Master</title>

  <style>
  .icon::after{
  content: '';
  display: block;
  position: absolute;
  border-top: 23px solid transparent;
  border-bottom: 17px solid transparent;
  border-left: 12px solid #3182ce;
  left: 100%;
  top: 0;
}
  </style>
   
</head>
  
  <body>
  <form method= 'POST' action="{{route('Animals.update',$animal->id)}}" class="form bg-white p-6 my-10 relative">
  @method('PUT')
  @csrf
  <nav id="header" class="w-full z-30 top-10 py-1 bg-white shadow-lg border-b border-blue-400 mt-24">
      <div class="w-full flex items-center justify-between mt-0 px-6 py-2">
         <label for="menu-toggle" class="cursor-pointer md:hidden block">
            <svg class="fill-current text-blue-600" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
             
               <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
         </label>
         <input class="hidden" type="checkbox" id="menu-toggle">
         
         <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
            <nav>
              <p class= "bg-900">Insertar nuevo Animal</p>
            </nav>
         </div>
         
         <div class="order-2 md:order-3 flex flex-wrap items-center justify-end mr-0 md:mr-4" id="nav-content">
          
         </div>
      </div>
   </nav>
            
                <div class="flex space-x-5 mt-3">
                    <input type="text" name="name" id="name" placeholder="{{$animal -> name}} "  class="border p-2  w-1/2">
                    <input type="text" name="extinto" id="extinto" placeholder=" {{$animal -> extinto}} "  class="border p-2  w-1/2">
                  
                </div>
            
     
          <div class="relative">
        <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="specie_id" name="specie_id" >
        @foreach($species as $specie)
                <option value="{{$specie -> id}}" selected> {{$specie -> name}}  </option>
                @endforeach
        </select>
        </div>
                <input type="text" name="image" id="image" placeholder="Image" class="border p-2 w-full mt-3">
                <textarea name="description" id="description" cols="10" rows="3" placeholder="{{$animal -> description}} " class="border p-2 mt-3 w-full"></textarea>

                <input type="submit" value="Insertar" class="w-full mt-6 bg-blue-600 hover:bg-blue-500 text-white font-semibold p-3">

          
    
  </body>
</html>
 </div>
  
 </div>
</x-app-layout>