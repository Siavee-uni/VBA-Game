<div class="grid justify-center">
    <div class="page-content">
        @foreach ($challenges as $challenge)
            <livewire:card
                route="challenge"
                pageId="{{$challenge->id}}"
                title="{{$challenge->name}}"
                content="{{$challenge->task_description}}"
                buttonText="{{$challenge->name}}"
            />
        @endforeach
    </div>
</div>
