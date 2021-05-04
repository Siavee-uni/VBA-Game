<div class="mb-3 pt-0">
    <h1 class="text-6xl font-normal leading-normal mt-0 mb-2">
        Chapter 1: The Basics
    </h1>
    <p class="mt-4 text-gray-600 text-xl font-normal">Subs
        When working with VBA, you need to create procedures to store your code.
        The most basic type of procedure is called a "Sub".
        To create a new sub procedure, open the VBE and type Sub HelloWorld and press enter.</p>
    <div class="mt-4 w-full lg:w-2/4">
        <h2 class="text-2xl font-bold leading-normal mt-0 mb-2">Subs</h2>
        <p class="text-xl font-normal">Aufgabe:  Create a sub procedure titled "HelloWorld"</p>
        <div class="hint-image w-10 h-5 bg-green-500 float-right"></div>
    </div>
    {{--code block--}}
    <form wire:submit.prevent="submit">
        <textarea wire:model="dbCodeBlock" name="dbCodeBlock" class="mt-4 px-3 py-4 relative bg-gray-200 rounded text-base border border-gray-200 w-full lg:w-2/4 h-44" id="comment" required>
        </textarea>
        @error('dbCodeBlock') <span class="error">{{ $message }}</span> @enderror
        <button type="submit" class="">send</button>
    <div wire:loading>Loading data</div>
    </form>
    {{--succes message--}}
    @if ($formSubmitted)
    <div class="mt-4 flex justify-center items-center font-medium py-1 px-2 rounded-md text-green-700 bg-green-100 border border-green-300 ">
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
