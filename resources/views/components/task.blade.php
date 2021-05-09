<div class="mb-3 pt-0">
    <h1 class="h-color text-6xl font-normal leading-normal mt-0 mb-2">
        Chapter 1: The Basics
    </h1>
    <p class="normal-text-color mt-4  text-xl font-normal">Subs
        When working with VBA, you need to create procedures to store your code.
        The most basic type of procedure is called a "Sub".
        To create a new sub procedure, open the VBE and type Sub HelloWorld and press enter.</p>
    <div class="mt-4 w-full lg:w-2/4">
        <h2 class="color-slime text-left text-2xl font-bold leading-normal mt-0 mb-2">Subs</h2>
        <p class="color-slime text-xl font-normal">Aufgabe:  Create a sub procedure titled "HelloWorld"</p>
    </div>
    {{--code block--}}
    <div class="grid grid-cols-2 w-full gap-4">
        <div class="w-full">
            <div class="hint-image w-10 h-5 bg-green-500 float-right"></div>
            <form wire:submit.prevent="submit" class="">
                <textarea wire:model="dbCodeBlock" name="dbCodeBlock" class="color-slime border-transparent active:outline-none h-44 mt-4 px-3 py-4 relative dark-background rounded text-base border w-full" id="comment" required>
                </textarea>
                @error('dbCodeBlock')
                <div class="color-slime border border-red-400  px-4 py-1 rounded relative" role="alert">
                    <span class="block sm:inline">{{ $message }}</span>
                    <strong class="font-bold"></strong>
                </div>
                @enderror
                <button type="submit" class="color-slime border-slime flex items-center float-right mt-2 mb-2 py-1 px-4 border rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 color-slime h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                    </svg>
                    Run Code
                </button>
                <div wire:loading>Loading data</div>
            </form>
        </div>
        <livewire:excel-table  class="mt-3"/>
    </div>
    {{--succes message--}}
    @if ($formSubmitted)
    <div class="mt-4 lg:w-2/4 flex justify-center items-center font-medium py-1 px-2 rounded-md text-green-700 bg-green-100 border border-green-300 ">
        <div slot="avatar">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle w-5 h-5 mx-2">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
        </div>
        <div class="text-xl font-normal  max-w-full flex-initial">
            You have now created a sub titled "HelloWorld".
            You will notice that the VBE completes the setup of the sub for you automatically by adding the line End Sub.
            All of your code should go in between the start and the end of the procedure.
        </div>
    </div>
    {{--exp gained--}}
    {{--w-auto inline-block for fit content--}}
    <div class="mt-4 w-auto inline-block bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
        <p class="font-bold">You have gained 10exp</p>
    </div>
    @endif
</div>
