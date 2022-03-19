<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;

class ProductsDateExport implements FromQuery
{
    use Exportable;
    /**
    * @return \Illuminate\Database\Query\Builder
    */
    private $office;

    public Function __construct($office)
    {
        $this->office = $office;
    }
    public function query()
    {
        return Product::query()->where('office_id',$this->office);
    }
}
