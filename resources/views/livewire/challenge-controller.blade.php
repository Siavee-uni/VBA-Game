<div class="md:container md:mx-auto">
    <div class="float-right mr-4">
        <x-profile-card :user="$user" :exp="$exp"/>
    </div>
    <div class="mb-3 pt-0 container">
        <x-task-text/>
        <x-code-block :codeBlocks="$codeBlockSolution" :submittedCode="$submittedCodeBlocks"/>
       {{-- <livewire:code-block/>--}}
        @if ($formSubmitted)
            <x-task-succes-message>
                You have now created a sub titled "HelloWorld".
                You will notice that the VBE completes the setup of the sub for you automatically by adding the line
                End Sub.
                All of your code should go in between the start and the end of the procedure.
            </x-task-succes-message>

            <x-task-exp-message>
                You have gained 10exp
            </x-task-exp-message>
        @endif
    </div>
</div>
