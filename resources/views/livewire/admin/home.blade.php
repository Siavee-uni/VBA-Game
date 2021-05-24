<div class="fixed">
    <x-admin.sidebar/>
</div>
<div class="mt-auto">
    <livewire:admin.table
        :columns="['name','exp']"
        :rowNames="['Name','Exp']"
    />
</div>

<livewire:admin.modal/>
