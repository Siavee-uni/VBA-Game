<div class="vba-tasks grid">
    <x-sitebar :exp="$exp" :lv="$lv"/>
    <div class="container mx-auto shadow-md p-4 bg-gray-100 bg-opacity-75">
        <x-task :errors="$errors" :formSubmitted="$formSubmitted" />
    </div>
</div>
