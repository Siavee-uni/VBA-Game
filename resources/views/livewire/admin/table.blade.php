{{--@props([
'rows' => ['name'],
])--}}
{{--@dd($tableData)--}}
<div id="table-wrapper">
    <table id="keywords" class="user-table">
        <thead>
        <tr>
            @foreach($rowNames as $rowName)
                <th><span>{{$rowName}}</span></th>
            @endforeach
            <th><span>Edit</span></th>
            <th><span>Delete</span></th>
        </tr>
        </thead>
        <tbody>
        @foreach($tableData as $data)
            <tr>
                @foreach($columns as $column)
                    <td class="lalign">{{$data->$column}}</td>
                @endforeach
                <th>
                    <button wire:click="$emitTo('admin.modal', 'showModal', {{$data}})">
                        <svg xmlns="http://www.w3.org/2000/svg" class="edit h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                    </button>
                </th>
                <th>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" class="delete h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                        </svg>
                    </button>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
