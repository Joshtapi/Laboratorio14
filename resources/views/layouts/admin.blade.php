<html>

<head>

    <title>plantilla </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles
</head>
<style>
    .altura {
        height: calc(100vh - 4rem);
    }
</style>
<body class="">
    <div class="h-16 bg-blue-300 shadow-lg shadow-b  relative " x-data="{ open: false, login: false } " >

        <div class="max-w-7xl mx-auto px-4 sm: px-6 lg:px-8 relative ">
            <div >
                <div class="flex  justify-between  items-center h-16 ">
                    {{-- SECCION MOVIL --}}
                    <div class="sm:hidden ">
                        <div x-on:click="open =!open">
                            <span>
                                <i class="fa-solid fa-bars text-3xl"></i>
                            </span>
                        </div>
    
                    </div>
                    {{-- FIN DE SECCION MOVIL --}}
                    <div class=" hidden sm:flex items-center h-16">
    
                        <div class="mr-4">
                            <figure>
                                <img class="object-cover object-center h-12 w-12 rounded-1 rounded-xl"
                                    src="https://media.istockphoto.com/photos/croatia-bosnia-harbor-bay-sunset-sunrise-picture-id144958249?s=612x612"
                                    alt="$product->name" />
                            </figure>
                        </div>
    
                        <div>
                            <a href="{{ route('admin') }}"
                                class="font-semibold text-md py-1 px-5 hover:text-white hover:bg-blue-500 rounded-lg {{ request()->routeIs('admin') ? 'bg-blue-500 text-white rounded-lg' : '' }}">admin</a>
                        </div>
                        <div>
                            <a href="{{ route('admin.products.index') }}"
                                class="font-semibold text-md py-1 px-5 hover:text-white hover:bg-blue-500 rounded-lg {{ request()->routeIs('admin.products.*') ? 'bg-blue-500 text-white rounded-lg' : '' }}">Productos</a>
                        </div>
                        <div>
                            <a href="{{ route('admin.categories.index') }}"
                                class="font-semibold text-md py-1 px-5 hover:text-white hover:bg-blue-500 rounded-lg {{ request()->routeIs('admin.categories.*') ? 'bg-blue-500 text-white rounded-lg' : '' }}">Categorias</a>
                        </div>
                        <div>
                            <a href="{{ route('admin.sliders.index') }}"
                                class="font-semibold text-md py-1 px-5 hover:text-white hover:bg-blue-500 rounded-lg {{ request()->routeIs('admin.sliders.*') ? 'bg-blue-500 text-white rounded-lg' : '' }}">Banners</a>
                        </div>
                    </div>
                    <div class=""{{--  x-on:click="login" --}} x-on:click="login = !login">
                      
    
                            <span class=" h-10 w-10 border-black border-4 rounded-full flex items-center justify-center">
                                <i class="fa-solid fa-user text-xl"></i>
                            </span>
    
        
    
                    </div>
                </div>
            </div>
      
         
            <div class="absolute top-0" x-show="open" :class="{ 'sm:hidden': open }">
                <div class="bg-red-500 altura w-1/2">
                    <div>
                        <ul class="divide divide-x">
                            <li class="bg-gray-400 w-full p-4">a</li>
                            <li class="bg-gray-200 w-full p-4">a</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div x-show="login"   >
                <div class="absolute right-0 bg-red-500"> 
                    <div class="mt-1 w-36 bg-gray-100 rounded rounded-lg drop-shadow-xl border-2 border-gray-200 p-2">
                        <div class=" divide-y text-sm ">
                            <div class="px-3 py-2">
                                <a href="">Login</a>
                            </div>
                            <div class="px-3 py-2">
                                <a href="">Register</a>
                            </div>
                        </div>
                       
                    </div>
    
                </div>
            </div>
        </div>

        
    </div>

    
    <div class=" max-w-7xl mx-auto px-4 sm: px-6 lg:px-8 relative">
        @yield('content')
    </div>

    @livewireScripts
</body>

</html>
