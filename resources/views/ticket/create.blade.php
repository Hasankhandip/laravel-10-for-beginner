<x-app-layout>
  <div class="ticket-wrapper">
    <div class="create-ticket">
        <h2 class="text-lg text-white text-center" style="margin-bottom: 30px">Create new support ticket</h2>
       <!-- Session Status -->
       <x-auth-session-status class="mb-4" :status="session('status')" />
       
       <form style="width: 100%" method="POST" action="{{ route('ticket.store') }}" enctype="multipart/form-data" >
           @csrf
   
           <!-- Title -->
           <div>
               <x-input-label style="margin-bottom: 7px"  for="title" :value="__('Title')" />
               <x-text-input style="padding: 5px;" id="title" class="block mt-1 w-full" type="title" name="title" autofocus />
               <x-input-error :messages="$errors->get('title')" class="mt-2" />
           </div>
   
           <!-- Description -->
           <div class="mt-4">
               <x-input-label style="margin-bottom: 7px" for="description" :value="__('Description')" />
               <x-textarea placeholder="Add description" name="description" id="description" value=""/>
               <x-input-error :messages="$errors->get('description')" class="mt-2" />
           </div>
   
   
           <!-- Attachment -->
           <div class="mt-4">
               <x-input-label style="margin-bottom: 7px" for="attachment" :value="__('Attachment (if any)')" />
               <x-file-input   name="attachment" id="attachment"/>
               <x-input-error :messages="$errors->get('attachment')" class="mt-2" />
           </div>
           
   
   
   
           <div class="flex items-center justify-end mt-4">
               <x-primary-button class="ms-3">
                   {{ __('Create') }}
               </x-primary-button>
           </div>
       </form>
      </div>
  </div>
</x-app-layout>
