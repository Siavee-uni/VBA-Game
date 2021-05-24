<div>
    @if($isOpen)
        <div
            class="overflow-scroll fadeIn main-modal fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
            style="background: rgba(0,0,0,.7);">
            <div
                class="border border-blue-500 shadow-lg modal-container bg-white w-4/12 md:max-w-11/12 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
                <div class="modal-content py-4 text-left px-6">
                    <!--Title-->
                    <div class="flex justify-between items-center pb-3">
                        <p class="text-2xl font-bold text-gray-500">Add Caretaker</p>
                        <div wire:click="$emitSelf('closeModal')" class="modal-close cursor-pointer z-50">
                            <svg class="fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" width="18"
                                 height="18"
                                 viewBox="0 0 18 18">
                                <path
                                    d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <!--Body-->
                    <div class="my-5 mr-5 ml-5 flex justify-center">
                        <form wire:submit.prevent="submit" id="add_caretaker_form" class="w-full">
                            @if($data)
                                <div class="">
                                    @foreach($data as $key => $value)
                                        <div class="">
                                            <label for="{{$key}}"
                                                   class="text-md text-gray-600">{{$key}}</label>
                                            @if($key === "code_blocks_solution")
                                                <textarea value="{{$value}}" type="text" autocomplete="off"
                                                          name="{{$key}}"
                                                          class="h-36 p-6 w-full border-2 border-gray-300 mb-5 rounded-md"
                                                        >{{$value}}
                                                </textarea>
                                            @else
                                                <input value="{{$value}}" type="text" autocomplete="off" name="{{$key}}"
                                                       class="h-3 p-6 w-full border-2 border-gray-300 mb-5 rounded-md"
                                                       >
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </form>
                    </div>
                    <!--Footer-->
                    <div class="flex justify-end pt-2 space-x-14">
                        <button wire:click="$emitSelf('closeModal')"
                                class="px-4 bg-gray-200 p-3 rounded text-black hover:bg-gray-300 font-semibold"
                        >Cancel
                        </button>
                        <button
                            class="px-4 bg-blue-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400"
                            onclick="validate_form(document.getElementById('add_caretaker_form'))">Confirm
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
