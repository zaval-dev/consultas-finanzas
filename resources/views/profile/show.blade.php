<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class = "md:grid md:grid-cols-3 md:gap-6">
                <x-section-title>
                    <x-slot name="title">Establecer Rubro</x-slot>
                    <x-slot name="description">Establezca el rubro de su empresa</x-slot>
                </x-section-title>
            
                <div class="mt-5 md:mt-0 md:col-span-2">
                    {{-- <form wire:submit="{{ $submit }}">
                        <div class="px-4 py-5 bg-white dark:bg-gray-800 sm:p-6 shadow {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
                            <div class="grid grid-cols-6 gap-6">
                                {{ $form }}
                            </div>
                        </div>
            
                        @if (isset($actions))
                            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 dark:bg-gray-800 text-end sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                                {{ $actions }}
                            </div>
                        @endif
                    </form> --}}
                    @php
                        $rubros = App\Models\Rubro::all();
                    @endphp
                    <div class="bg-gray-800 text-gray-300 px-4 py-3 rounded-md">
                        <div class="my-auto swiper mySwiper-2 max-w-full">
                            <div class="swiper-wrapper w-full">
                                @foreach($rubros as $rubro)
                                    <div class="swiper-slide h-full" style="height: 300px;">
                                        <div class="mx-auto h-full w-full max-w-64 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                            <div class="h-full flex flex-col items-center py-10">
                                                <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('img/rubro.webp') }}" alt="Bonnie image"/>
                                                <h5 class="px-2 mb-1 text-lg font-medium text-gray-900 dark:text-white text-center">{{ $rubro->detalle }}</h5>
                                                <form action="{{ route('establecerRubro', $rubro->id) }}" method="POST" class="flex mt-4 md:mt-6">
                                                    @csrf
                                                    <button type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Seleccionar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <x-section-border />
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
