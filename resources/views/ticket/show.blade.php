<x-app-layout>
    <div class="ticket-wrapper">
      <div class="create-ticket">
          <h2 class="text-lg text-white text-center" style="margin-bottom: 30px">{{$ticket->title}}</h2>
         <!-- Session Status -->
         <x-auth-session-status class="mb-4" :status="session('status')" />
         
              <div class="ticket-details text-white flex justify-between py-4">
                  <p>{{$ticket->description}}</p>
                  <p>{{$ticket->created_at->diffForHumans()}}</p>
                    @if ($ticket->attachment)
                    <a href="{{"/storage/".$ticket->attachment}}" target="_blank">Attachment</a>
                    @endif
              </div>


              
           <div class="ticket-button-wrapper">
            <div class="ticket-btn-area">
              <div class="ticket-btn">
                  <a href="{{route('ticket.edit',$ticket->id)}}">
                      <x-primary-button >Edit</x-primary-button>
                  </a>
              </div>
              <div class="ticket-btn">
                  <form action="{{route('ticket.destroy',$ticket->id)}}" method="post">
                      @method('delete')
                      @csrf
                      <x-primary-button>Delete</x-primary-button>
                    </form>
              </div>
            </div>

            @if (auth()->user()->isAdmin)
            <div class="ticket-btn-area justify-end">
              <div class="ticket-btn">
                  <form action="{{route('ticket.update',$ticket->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <input type="hidden" name="status" value="resolved">
                      <x-primary-button >Resolve</x-primary-button>
                  </form>
              </div>
              <div class="ticket-btn">
                  <form action="{{route('ticket.update',$ticket->id)}}" method="post">
                      @csrf  
                      @method('patch')
                      <input type="hidden" name="status" value="rejected">
                      <x-primary-button>Reject</x-primary-button>
                    </form>
              </div>
            </div>
            @else
            <p class="text-white">Status: {{$ticket->status}}</p>
            @endif
           </div>

        </div>
    </div>
  </x-app-layout>
  