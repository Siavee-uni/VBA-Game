<div class="vba-tasks grid">
    <x-sitebar :exp="$exp" :lv="$lv"/>
    <div class=" mx-auto shadow-md p-4 bg-gray-900 bg-opacity-75">
        <x-task :errors="$errors" :formSubmitted="$formSubmitted" />
    </div>
</div>
