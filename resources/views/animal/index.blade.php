<x-animal>

                            <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
                            <nav>
                                <p>Animales Actualmente Cargados en pagina</p>
                            </nav>
                    </div>
         
         <div class="order-2 md:order-3 flex flex-wrap items-center justify-end mr-0 md:mr-4" id="nav-content">
            <div class="auth flex items-center w-full md:w-full">
               
              
            </div>
           </div>
      </div>
   </nav>
<body class="antialiased font-sans bg-gray-200">
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
           
            <div class="my-2 flex sm:flex-row flex-col">
                <div class="flex flex-row mb-1 sm:mb-0">
                
                </div>
            
                <div class="block relative">
       
                @can('create',App\Models\Animal::class)
               <a href="{{ url('animal/create') }}" class="bg-transparent text-gray-800  p-2 rounded border border-gray-300 mr-4 hover:bg-gray-100 hover:text-gray-700">Crear Nuevo Animal</a>
            </div>
            @endcan
                </div>
            </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                     
                            <tr>
                               
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                 Nombre 
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                 Nombre Animal
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                   Especie
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                peligro de extincion 
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                   Fecha de Creacion
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                   Acciones
                                </th>
                            </tr>
                        </thead>
                        <div class="order-2 md:order-3 flex flex-wrap items-center justify-end mr-0 md:mr-4" id="nav-content">
       
                        </tbody>
                     
                        @foreach ($animals as $Animal)
                            <tr>
                                
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                    <div class="flex-shrink-0">
                         <img class="h-10 w-10 rounded-full" src="{{$Animal->user->getProfilePhotoUrlAttribute()}}" />
                                     </div>
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                            {{$Animal-> user->name }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                       
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                           
                                            {{$Animal-> name}}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{$Animal-> specie->name }}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                    {{$Animal-> extinto}}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                    {{$Animal-> created_at}}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <a href=""><span>
                                <div class="bg-gray-200 text-sm text-gray-500 leading-none border-2 border-gray-200 rounded-full inline-flex">
                                <form method="POST" action="{{ route('animal.destroy', $Animal) }}">
                               @method('DELETE')
                                  @csrf
                          <button dusk="index-button"type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                    borrar
                                    </button>
                                        </form>
                              </td>
                            
                           </form>
              
                         
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <a href=""><span>
                                @can('update',$Animal)
                                <div class="bg-gray-200 text-sm text-gray-500 leading-none border-2 border-gray-200 rounded-full inline-flex">
                               <a href="{{ route('animal.edit',$Animal -> id ) }}" dusk="edit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">edit</a>
                           @endcan
                            </li>
                           </form>
                           </td>
                            </tr>
                         </form>
   
                                </td>
                            </tr>
                          @endforeach
                       
                   
                    </table>
                 
           </div>
                </div>
            </div>
        </div>
    </div>
</body>
      </div>
    </div>
  </div>
</div>

        </div>
    </div>
</x-animal>
