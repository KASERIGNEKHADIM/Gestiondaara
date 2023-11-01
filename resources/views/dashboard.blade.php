<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="content">
                        <div class="container-fluid">
                            </div>
                          <h1 class="fs-3 text-center mt-5 text-black text-capitalize">@yield('titre')</h1>
                  @yield('contenue')
                        </div><!-- /.container-fluid -->
                      </div>
                      <!-- /.content -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
