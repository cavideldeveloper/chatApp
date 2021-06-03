<div class=" h-screen" x-data="{ currentTab: @entangle('currentTab') }" >
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div style=" height:95%" class="flex flex-row antialiased text-gray-800">
    <div class="flex flex-row w-96 flex-shrink-0 bg-gray-100 pr-4 overflow-y-auto">
      {{-- <div class="flex flex-col items-center py-4 flex-shrink-0 w-20 bg-indigo-800">
        <a href="#" class="flex items-center justify-center h-12 w-12 bg-indigo-100 text-indigo-800 rounded-full">
          <svg class="w-8 h-8"
               fill="none"
               stroke="currentColor"
               viewBox="0 0 24 24"
               xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
          </svg>
        </a>
        <ul class="flex flex-col space-y-2 mt-12">
          <li>
            <a href="#"
               class="flex items-center">
              <span class="flex items-center justify-center text-indigo-100 hover:bg-indigo-700 h-12 w-12 rounded-2xl">
                <svg class="w-6 h-6"
                     fill="none"
                     stroke="currentColor"
                     viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
              </span>
            </a>
          </li>
          <li>
            <a href="#"
               class="flex items-center">
              <span class="flex items-center justify-center text-indigo-100 hover:bg-indigo-700 h-12 w-12 rounded-2xl">
                <svg class="w-6 h-6"
                     fill="none"
                     stroke="currentColor"
                     viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
              </span>
            </a>
          </li>
          <li>
            <a href="#"
               class="flex items-center">
              <span class="flex items-center justify-center text-indigo-100 hover:bg-indigo-700 h-12 w-12 rounded-2xl">
                <svg class="w-6 h-6"
                     fill="none"
                     stroke="currentColor"
                     viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
              </span>
            </a>
          </li>
          <li>
            <a href="#"
               class="flex items-center">
              <span class="flex items-center justify-center text-indigo-100 hover:bg-indigo-700 h-12 w-12 rounded-2xl">
                <svg class="w-6 h-6"
                     fill="none"
                     stroke="currentColor"
                     viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                  <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
              </span>
            </a>
          </li>
        </ul>
        <button class="mt-auto flex items-center justify-center hover:text-indigo-100 text-indigo-500 h-10 w-10">
          <svg class="w-6 h-6"
               fill="none"
               stroke="currentColor"
               viewBox="0 0 24 24"
               xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
          </svg>
        </button>
      </div> --}}
      <div class="flex flex-col w-full  h-full pl-4 pr-4 py-4 -mr-4 relative">
        <div class="flex flex-row items-center">
          <div class="flex flex-row items-center">
            <div class="text-xl font-semibold">Messages </div>
            
          </div>
          <div class="ml-auto">
            <button class="flex items-center justify-center h-7 w-7 bg-gray-200 text-gray-500 rounded-full">
              <svg class="w-4 h-4 stroke-current"
                   fill="none"
                   stroke="currentColor"
                   viewBox="0 0 24 24"
                   xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
              </svg>
            </button>
          </div>
        </div>
        <div class="mt-5">
          <ul class="flex flex-row items-center justify-between">
            <li>
              <a @click.prevent='currentTab = 1' href="#"
                 class="flex items-center pb-3 text-xs font-semibold relative @if($currentTab == 1) text-indigo-800 @else text-gray-700 @endif ">
                <span class="flex ">All Conversations <div class="flex items-center justify-center ml-2 text-xs h-4 w-4 text-white bg-red-500 rounded-full font-medium">{{count($chats)}}</div></span>
                @if($currentTab == 1)
                    <span class="absolute left-0 bottom-0 h-1 w-6 bg-indigo-800 rounded-full"></span>
                @endif
              </a>
            </li>
            <li>
              <a @click.prevent='currentTab = 2' href="#"
                 class="flex items-center pb-3 text-xs relative @if($currentTab == 2) text-indigo-800 @else text-gray-700 @endif font-semibold">
                <span class="flex ">Groups <div class="flex items-center justify-center ml-2 text-xs h-4 w-4 text-white bg-red-500 rounded-full font-medium">{{count($groups)}}</div></span>
                @if($currentTab == 2)
                    <span class="absolute left-0 bottom-0 h-1 w-6 bg-indigo-800 rounded-full"></span>
                @endif
              </a>
            </li>
            <li>
              <a @click.prevent='currentTab = 3' href="#"
                 class="flex items-center pb-3 text-xs relative @if($currentTab == 3) text-indigo-800 @else text-gray-700 @endif font-semibold">
                <span>Contacts</span>
                @if($currentTab == 3)
                    <span class="absolute left-0 bottom-0 h-1 w-6 bg-indigo-800 rounded-full"></span>
                @endif
              </a>
            </li>
          </ul>
        </div>
        <div x-show="currentTab == 1">
            <div class="mt-5">
                <div class="text-xs text-gray-400 font-semibold uppercase">All Chats</div>
            </div>
            <div class="mt-2">
                <div class="flex flex-col -mx-4">
                  
                  @foreach ($chats as $chat)
                        <div wire:click="setMessageView({{$users->where('id',$chat)->first()->id}})" class=" cursor-pointer relative flex flex-row items-center">
                              <div class="flex flex-row items-center p-4 hover:bg-gradient-to-r hover:from-red-100 hover:to-transparent hover:border-l-2 hover:border-red-500">
                                  <div class="flex items-center justify-center h-10 w-10 rounded-full bg-pink-500 text-pink-300 font-bold flex-shrink-0">
                                      {{substr($users->where('id',$chat)->first()->first_name,0,1)}}
                                  </div>
                                  <div class="flex flex-col flex-grow ml-3">
                                      <div class="flex items-center">
                                          <div class="text-sm font-medium">{{$users->where('id',$chat)->first()->first_name}} {{$users->where('id',$chat)->first()->last_name}}</div>
                                          {{-- <div class="h-2 w-2 rounded-full bg-green-500 ml-2"></div> --}}
                                      </div>  
                                      @if ( $messages->where('to_id',$users->where('id',$chat)->first()->id)->count() > 0 && $messages->where('from_id',$users->where('id',$chat)->first()->id)->count() > 0)
                                          <div wire:ignore class="text-xs truncate w-40">  {{
                                          $messages->where('to_id',$users->where('id',$chat)->first()->id)->first()['created_at'] > $messages->where('from_id',$users->where('id',$chat)->first()->id)->first()['created_at'] ?
                                          $messages->where('to_id',$users->where('id',$chat)->first()->id)->first()['body'] :
                                          $messages->where('from_id',$users->where('id',$chat)->first()->id)->first()['body']
                                        }} </div>
                                      @else
                                        {{-- {{$messages->where('to_id',$users->where('id',$chat)->first()->id)->first()['body']}} --}}
                                        @if ($messages->where('to_id',$users->where('id',$chat)->first()->id)->count() > 0)
                                          {{$messages->where('to_id',$users->where('id',$chat)->first()->id)->first()['body']}}
                                        @else
                                        {{$messages->where('from_id',$users->where('id',$chat)->first()->id)->first()['body']}}
                                        @endif
                                      @endif
                                  
                                  </div>
                              </div>
                          </div>     
                  @endforeach
                    {{-- <div class="relative flex flex-row items-center p-4">
                    <div class="absolute text-xs text-gray-500 right-0 top-0 mr-4 mt-3">5 min</div>
                    <div class="flex items-center justify-center h-10 w-10 rounded-full bg-pink-500 text-pink-300 font-bold flex-shrink-0">
                        T
                    </div>
                    <div class="flex flex-col flex-grow ml-3">
                        <div class="text-sm font-medium">Cuberto</div>
                        <div class="text-xs truncate w-40">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, doloribus?</div>
                    </div>
                    <div class="flex-shrink-0 ml-2 self-end mb-1">
                        <span class="flex items-center justify-center h-5 w-5 bg-red-500 text-white text-xs rounded-full">5</span>
                    </div>
                    </div>
                    <div class="flex flex-row items-center p-4 bg-gradient-to-r from-red-100 to-transparent border-l-2 border-red-500">
                    <div class="flex items-center justify-center h-10 w-10 rounded-full bg-pink-500 text-pink-300 font-bold flex-shrink-0">
                        T
                    </div>
                    <div class="flex flex-col flex-grow ml-3">
                        <div class="flex items-center">
                        <div class="text-sm font-medium">UI Art Design</div>
                        <div class="h-2 w-2 rounded-full bg-green-500 ml-2"></div>
                        </div>
                        <div class="text-xs truncate w-40">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, doloribus?</div>
                    </div>
                    </div> --}}
                </div>
            </div>
        </div>


        <div  style="display: none" x-show="currentTab == 2" class=" ">
          {{-- <button class=" text-sm text-indigo-800 text-center mt-5 w-full focus:outline-none">Create Group</button> --}}
          <div class="mt-5">
              <div class="text-xs text-gray-400 font-semibold uppercase">All Groups</div>
          </div>
          <div class="mt-2">
              <div id="groups" class="flex flex-col -mx-4">
                @foreach ($groups as $group)
                      <div wire:click="setGroupView({{$group->id}})" class="cursor-pointer relative flex flex-row items-center">
                            <div class="flex flex-row items-center p-4 hover:bg-gradient-to-r hover:from-red-100 hover:to-transparent hover:border-l-2 hover:border-red-500">
                                <div class="flex items-center justify-center h-10 w-10 rounded-full bg-pink-500 text-pink-300 font-bold flex-shrink-0">
                                    {{ substr($group->name,0,1)}}
                                </div>
                                <div class="flex flex-col flex-grow ml-3">
                                    <div class="flex items-center">
                                        <div class="text-sm font-medium">{{$group->name}}</div>
                                        {{-- <div class="h-2 w-2 rounded-full bg-green-500 ml-2"></div> --}}
                                    </div>
                                    <div class="text-xs truncate w-40">{{$group->messages->last() == null? '' : $group->messages->last()->message}}</div>
                                </div>
                            </div>
                        </div>     
                @endforeach
                  {{-- <div class="relative flex flex-row items-center p-4">
                  <div class="absolute text-xs text-gray-500 right-0 top-0 mr-4 mt-3">5 min</div>
                  <div class="flex items-center justify-center h-10 w-10 rounded-full bg-pink-500 text-pink-300 font-bold flex-shrink-0">
                      T
                  </div>
                  <div class="flex flex-col flex-grow ml-3">
                      <div class="text-sm font-medium">Cuberto</div>
                      <div class="text-xs truncate w-40">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, doloribus?</div>
                  </div>
                  <div class="flex-shrink-0 ml-2 self-end mb-1">
                      <span class="flex items-center justify-center h-5 w-5 bg-red-500 text-white text-xs rounded-full">5</span>
                  </div>
                  </div>
                  <div class="flex flex-row items-center p-4 bg-gradient-to-r from-red-100 to-transparent border-l-2 border-red-500">
                  <div class="flex items-center justify-center h-10 w-10 rounded-full bg-pink-500 text-pink-300 font-bold flex-shrink-0">
                      T
                  </div>
                  <div class="flex flex-col flex-grow ml-3">
                      <div class="flex items-center">
                      <div class="text-sm font-medium">UI Art Design</div>
                      <div class="h-2 w-2 rounded-full bg-green-500 ml-2"></div>
                      </div>
                      <div class="text-xs truncate w-40">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, doloribus?</div>
                  </div>
                  </div> --}}
              </div>
          </div>

          <div class="absolute bottom-2 right-0 mr-2 z-20">
            <button wire:click="createModal" class="flex items-center justify-center shadow-sm h-10 w-10 bg-red-500 text-white rounded-full focus:outline-none">
              <svg class="w-6 h-6"
                   fill="none"
                   stroke="currentColor"
                   viewBox="0 0 24 24"
                   xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
              </svg>
            </button>
          </div>
        </div>


        <div style="display: none" x-show="currentTab == 3">
            <div class="mt-5">
                <div class="text-xs text-gray-400 font-semibold uppercase">All Users</div>
            </div>
            <div class="mt-2">
                <div class="flex flex-col -mx-4">
                  
                  @foreach ($users as $user)
                        <div wire:click="setMessageView({{$user->id}})" class=" cursor-pointer relative flex flex-row items-center">
                              <div class="flex flex-row items-center p-4 hover:bg-gradient-to-r hover:from-red-100 hover:to-transparent hover:border-l-2 hover:border-red-500">
                                  <div class="flex items-center justify-center h-10 w-10 rounded-full bg-pink-500 text-pink-300 font-bold flex-shrink-0">
                                      {{substr($user->first_name,0,1)}}
                                  </div>
                                  <div class="flex flex-col flex-grow ml-3">
                                      <div class="flex items-center">
                                          <div class="text-sm font-medium">{{$user->first_name}} {{$user->last_name}}</div>
                                          {{-- <div class="h-2 w-2 rounded-full bg-green-500 ml-2"></div> --}}
                                      </div>
                                      {{-- <div class="text-xs truncate w-40">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, doloribus?</div> --}}
                                  </div>
                              </div>
                        </div>     
                  @endforeach
                    
                </div>
            </div>
        </div>


          
        {{-- <div class="mt-5">
          <div class="text-xs text-gray-400 font-semibold uppercase">Personal</div>
        </div> --}}
        {{-- <div class="h-full overflow-hidden relative pt-2">
          <div class="flex flex-col divide-y h-full overflow-y-auto -mx-4">
            <div class="flex flex-row items-center p-4 relative">
              <div class="absolute text-xs text-gray-500 right-0 top-0 mr-4 mt-3">2 hours ago</div>
              <div class="flex items-center justify-center h-10 w-10 rounded-full bg-pink-500 text-pink-300 font-bold flex-shrink-0">
                T
              </div>
              <div class="flex flex-col flex-grow ml-3">
                <div class="text-sm font-medium">Flo Steinle</div>
                <div class="text-xs truncate w-40">Good after noon! how can i help you?</div>
              </div>
              <div class="flex-shrink-0 ml-2 self-end mb-1">
                <span class="flex items-center justify-center h-5 w-5 bg-red-500 text-white text-xs rounded-full">3</span>
              </div>
            </div>
            <div class="flex flex-row items-center p-4">
              <div class="flex items-center justify-center h-10 w-10 rounded-full bg-pink-500 text-pink-300 font-bold flex-shrink-0">
                T
              </div>
              <div class="flex flex-col flex-grow ml-3">
                <div class="flex items-center">
                  <div class="text-sm font-medium">Sarah D</div>
                  <div class="h-2 w-2 rounded-full bg-green-500 ml-2"></div>
                </div>
                <div class="text-xs truncate w-40">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, doloribus?</div>
              </div>
            </div>
            <div class="flex flex-row items-center p-4">
              <div class="flex items-center justify-center h-10 w-10 rounded-full bg-pink-500 text-pink-300 font-bold flex-shrink-0">
                T
              </div>
              <div class="flex flex-col flex-grow ml-3">
                <div class="flex items-center">
                  <div class="text-sm font-medium">Sarah D</div>
                  <div class="h-2 w-2 rounded-full bg-green-500 ml-2"></div>
                </div>
                <div class="text-xs truncate w-40">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, doloribus?</div>
              </div>
            </div>
            <div class="flex flex-row items-center p-4">
              <div class="flex items-center justify-center h-10 w-10 rounded-full bg-pink-500 text-pink-300 font-bold flex-shrink-0">
                T
              </div>
              <div class="flex flex-col flex-grow ml-3">
                <div class="flex items-center">
                  <div class="text-sm font-medium">Sarah D</div>
                  <div class="h-2 w-2 rounded-full bg-green-500 ml-2"></div>
                </div>
                <div class="text-xs truncate w-40">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, doloribus?</div>
              </div>
            </div>
            <div class="flex flex-row items-center p-4">
              <div class="flex items-center justify-center h-10 w-10 rounded-full bg-pink-500 text-pink-300 font-bold flex-shrink-0">
                T
              </div>
              <div class="flex flex-col flex-grow ml-3">
                <div class="flex items-center">
                  <div class="text-sm font-medium">Sarah D</div>
                  <div class="h-2 w-2 rounded-full bg-green-500 ml-2"></div>
                </div>
                <div class="text-xs truncate w-40">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, doloribus?</div>
              </div>
            </div>
          </div>
          
        </div> --}}
      </div>
    </div>

    @if($currentTab == 1 || $currentTab == 3)
      @livewire('message-view', [])
    @elseif($currentTab == 2)
      @livewire('group-message-view', [])
    @endif


  </div>

  <script>
    $(document).ready(function() {

      var pusher = new Pusher("{{env('PUSHER_APP_KEY')}}", {
          cluster: "{{env('PUSHER_APP_CLUSTER')}}",
      });

      var channel = pusher.subscribe("my-channel");

      channel.bind("my-event", (data) => { 
          // Method to be dispatched on trigger.
          console.log(data)
      });

      channel.bind("new-message-{{auth()->user()->id}}", (data) => { 
          Livewire.emit('refreshMessages');
      });

      channel.bind("new-group", (data) => { 
          data.users.forEach(element => {
            if(element == {{auth()->user()->id}}){
              Livewire.emit('groupCreated');
            }
          });
      });

      // if(){

      // }

      channel.bind("new-group-message", (data) => {
        if(data.users.hasOwnProperty({{auth()->user()->id}})){
          Livewire.emit('refreshGroupMessage');
          console.log(data)
        }
      });

  });

</script>

@livewire('create-group')
</div>
