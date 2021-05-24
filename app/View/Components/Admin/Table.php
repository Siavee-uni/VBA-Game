<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Table extends Component
{

    public $tableData;
    public $rowNames;
    public $columns;
    public $tzest;

    public function __construct($tableData = [], $rowNames = [], $columns = []  )
    {
        $this->tableData = $tableData;
        $this->tzest = $tzest;
        $this->rowNames = $rowNames;
        $this->columns = $columns;
    }

    public function render()
    {
        return view('components.admin.table');
    }
}
