<x-guest-layout>
    <h2 class="text-lg text-white text-center" style="margin-bottom: 30px">Create new support ticket</h2>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    
    <form method="POST" action="{{ route('login') }}" >
        @csrf

        <!-- Title -->
        <div>
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" class="block mt-1 w-full" type="title" name="title" required autofocus />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

        <!-- Description -->
        <div class="mt-4">
            <x-input-label for="description" :value="__('Description')" />
            <x-textarea placeholder="Add description" name="description" id="description"/>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>


        <!-- Attachment -->
        <div class="mt-4">
            <x-input-label for="attchment" :value="__('Attachment (if any)')" />
            <x-file-input   name="attchment" id="attchment"/>
            <x-input-error :messages="$errors->get('attchment')" class="mt-2" />
        </div>
        



        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-3">
                {{ __('Create') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
