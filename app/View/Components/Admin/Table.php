<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Table extends Component
{

    public object $tableData;
    /*public $rows;*/
    public function __construct($tableData)
    {
        $this->tableData = $tableData;
        /*$this->rows = $rows;*/
    }

    public function render()
    {
        return view('components.admin.table');
    }
}
