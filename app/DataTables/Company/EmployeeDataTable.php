<?php

namespace App\DataTables\Company;

use App\Models\Company\Employee;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class EmployeeDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->editColumn('created_at', function ($query){
                return date('Y-m-d', strtotime($query->created_at));
            })
            ->editColumn('department_id', function ($query) {
                return $query->department->name ?? 'N/A';
            })
            ->editColumn('position', function ($query) {
                return $query->position ?? 'N/A';
            })
            ->addColumn('action', function ($query){
                return '<div style="display:inline-flex;">
                        <a class="btn btn-sm btn-icon mr-2 btn-circle btn-primary btn-shadow" href="'.route('company.employee.details', $query->id).'"><i class="fa fa-eye fa-sm"></i></a>
                        <a class="btn btn-sm btn-icon mr-2 btn-circle btn-warning btn-shadow" href="'.route('company.employee.edit', $query->id).'"><i class="fa fa-edit fa-sm"></i></a>
                        <a class="btn btn-sm btn-icon btn-circle btn-danger btn-shadow" id="deleteBtn" href="'.route('company.employee.delete', $query->id).'"><i class="fa fa-trash fa-sm"></i></a>
                    </div>';
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @return Builder
     */
    public function query()
    {
        $query = Employee::query()->where('company_id', auth()->user()->company_id)->orderBy('id', 'desc');

        return $this->applyScopes($query);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('dataTable')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip');
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('name'),
            Column::make('email'),
            Column::make('department_id')->title('Department'),
            Column::make('position'),
            Column::make('created_at')->title('Date Created'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Company/Employee_' . date('YmdHis');
    }
}
