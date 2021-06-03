<div x-data="{ addModule: @entangle('showModal')}">
    {{-- <p>ksfjdks {{$showModal}} </p> --}}
    {{-- The Master doesn't talk, he acts. --}}

    <div style='display:none' x-show.transition="addModule"  class=" absolute bg-black bg-opacity-20 w-full h-full left-0 top-0 z-50">
        <div @click.self="addModule = false" class=" w-full h-full  flex items-center justify-center">
            <div class="w-full md:w-6/12 bg-blue-50 py-6 px-5 shadow mb-3">
                <div class="">
                    <h1 class=" text-lg text-indigo-800 font-semibold text-center mb-3">Create Group<h1>
                </div>
                <div class="md:grid md:grid-cols-1 space-y-3  md:space-y-0 md:gap-3 ">
                    <div class="">
                        <label for="" class=" text-indigo-800 text-sm font-normal mb-2 block">Group Name </label>
                        <input wire:model='name' type="text" class=" w-full h-8 border @error('name') border-red-600 @else border-primary @enderror focus:outline-noneborder-primary text-primary text-sm p-4 placeholder-gray-400 focus:outline-none"  placeholder="Enter Value">
                        @error('name')
                            <span class="block text-left font-medium mt-1 text-sm text-red-600 " role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="" wire:ignore>
                        
                        <label for="" class=" text-indigo-800 text-sm font-normal mb-2 block">Group Name </label>
                        {{-- <input wire:model='name' type="text" class=" w-full h-8 border @error('name') border-red-600 @else border-primary @enderror focus:outline-noneborder-primary text-primary text-sm p-4 placeholder-gray-400 focus:outline-none"  placeholder="Enter Value"> --}}
                        <select id="select2" style="width: 100%" multiple="multiple">
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->first_name}} {{$user->last_name}}</option>
                            @endforeach
                          </select>
                        @error('name')
                            <span class="block text-left font-medium mt-1 text-sm text-red-600 " role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class=" flex items-end gap-x-2">
                        <button wire:click='save' type="button" class=" px-6 py-2 h-auto w-full bg-indigo-800 rounded-full text-sm  text-white shadow-md focus:outline-none hover:bg-opacity-80">Submit</button>
                        <button @click="addModule = false"  type="button" class=" px-6 py-2 h-auto w-full bg-red-500 rounded-full text-sm  text-white shadow-md focus:outline-none hover:bg-opacity-80">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <script>
        $(document).ready(function() {
            $('#select2').select2();
            $('#select2').on('change', function (e) {
                var data = $('#select2').select2("val");
                @this.set('selected', data);
            });

        });
    </script>
</div>

 