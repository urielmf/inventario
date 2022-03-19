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
    private $date1;
    private $date2;

    public Function __construct($date1,$date2)
    {
        $this->date1 = $date1;
        $this->date2 = $date2;
    }
    public function query()
    {
        return Product::query()->where('created_at','>',$this->date1)->where('created_at','<',$this->date2);
    }
}
