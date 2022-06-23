<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ url('update-pass')}}">
            @csrf

            <!-- Password Reset Token -->
            {{-- <input type="hidden" name="token" value="{{ $request->route('token') }}"> --}}

            <!-- Email Address -->
            <div class="status" style="color: red">
                @if (session('stat'))
                    {{session('stat')}}
                @endif
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="old_password" :value="__('Password')" />

                <x-input id="old_password" class="block mt-1 w-full" type="password" name="old_password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="new_password" :value="__('New Password')" />

                <x-input id="new_password" class="block mt-1 w-full"
                                    type="password"
                                    name="new_password" required />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('new Password') }}
                </x-button>
                
            </div>
            <div class="flex items-center justify-start mt-4">
               <a href="{{url('admin_dashboard')}}">Back</a> 
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
