
<div class="grid grid-cols-12 gap-y-2">
    @if ($type == 'group')
        @if ($message->user_id == auth()->user()->id)
            <div class=" col-start-6 col-end-13 p-3 rounded-lg">
                <div class="flex items-center justify-start flex-row-reverse">
                    <div class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0" >
                        Me
                    </div>
                    <div class="relative mr-3 text-sm bg-indigo-100 py-2 px-4 shadow rounded-xl" >
                        
                        <div>{{$message->message}}</div>
                    </div>
                </div>
            </div>            
        @else
            <div class=" col-start-1 col-end-8 p-3 rounded-lg">
                <div class="flex flex-row items-center">
                    <div class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0" >
                        {{substr($message->user->first_name,0,1)}}
                    </div>
                    <div class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl" >
                        <div class="text-indigo-800 mb-2 font-medium">{{$message->user->first_name}} {{$message->user->last_name}}</div>
                        <div>
                            {{$message->message}}
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @else
        @if ($message->from_id == auth()->user()->id)
            <div class=" col-start-6 col-end-13 p-3 rounded-lg">
                <div class="flex items-center justify-start flex-row-reverse">
                    <div class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0" >
                        Me
                    </div>
                    <div class="relative mr-3 text-sm bg-indigo-100 py-2 px-4 shadow rounded-xl" >
                        <div>{{$message->body}}</div>
                    </div>
                </div>
            </div>            
        @else
            <div class=" col-start-1 col-end-8 p-3 rounded-lg">
                <div class="flex flex-row items-center">
                    <div class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0" >
                        {{substr($message->sender->first_name,0,1)}}
                    </div>
                    <div class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl" >
                        <div>
                            {{$message->body}}
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endif

    
</div>