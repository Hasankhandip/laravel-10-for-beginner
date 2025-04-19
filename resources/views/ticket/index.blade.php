<x-app-layout>
  <div class="ticket-wrapper">
    <div class="create-ticket">
        <div class="flex justify-between w-full">
          <h2 class="text-lg text-white text-center" style="margin-bottom: 30px">Support Tickets</h2>
          <div>
            <a href="{{route('ticket.create')}}" class="bg-white rounded-lg p-2">Create New</a>
          </div>
        </div>
       <!-- Session Status -->
       <x-auth-session-status class="mb-4" :status="session('status')" />
       
       @forelse ($tickets as $ticket )
            <div class="ticket-details text-white flex justify-between py-4">
                <a href="{{route('ticket.show',$ticket->id)}}">{{$ticket->title}}</a>
                <p>{{$ticket->created_at->diffForHumans()}}</p>
            </div>
            @empty
            <p class="text-white">You don't have any support ticket yet.</p>
       @endforelse 

      </div>
  </div>
</x-app-layout>
