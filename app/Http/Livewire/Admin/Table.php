<?php

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\Challanges;
use App\Models\Challenge;
use App\Models\Tutorial;
use App\Models\User;
use Livewire\Component;

class Table extends Component
{
    public $tableData;
    public $rowNames;
    public $columns;
    public $modelName;

    protected $listeners = [
        'loadTutorials' => 'loadTutorials',
        'loadChallenges' => 'loadChallenges',
        'loadUsers' => 'loadUsers'
    ];

    public function render()
    {
        return view('livewire.admin.table');
    }

    public function mount($rowNames = [], $columns = [])
    {
        $this->rowNames = $rowNames;
        $this->columns = $columns;

        $this->modelName = 'Tutorial';
        $this->tableData = Tutorial::all();
    }

    public function loadTutorials()
    {
        $this->tableData = Tutorial::all();
        $this->modelName = 'Tutorial';
    }

    public function loadChallenges()
    {
        $this->tableData = Challenge::all();
        $this->modelName = 'Challenge';
    }

    public function loadUsers()
    {
        $this->tableData = User::all();
        $this->modelName = 'User';
    }

}
