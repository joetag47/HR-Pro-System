<?php

namespace App\DataTables\userManagement;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class UsersDataTable extends DataTable
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
            ->addColumn('action', function ($query){
                return '<div style="display:inline-flex;">
                        <a class="btn btn-sm btn-icon mr-2 btn-circle btn-warning btn-shadow updateDepartment" href="'.route('company.department.fetch', $query->id).'"><i class="fa fa-edit fa-sm"></i></a>
                        <a class="btn btn-sm btn-icon btn-circle btn-danger btn-shadow deleteDepartment" href="'.route('company.department.delete', $query->id).'"><i class="fa fa-trash fa-sm"></i></a>
                    </div>';
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\User/UsersDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {

        $query = User::query()->where('company_id', auth()->user()->company->id)->orderBy('id', 'DESC');

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
            Column::make('company_id'),
            Column::make('department_id'),
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
        return User::all(). '_Users_' . date('YmdHis');
    }
}
