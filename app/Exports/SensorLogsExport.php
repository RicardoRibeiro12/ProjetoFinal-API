<?php

namespace App\Exports;

use App\Models\ObsData;
use Maatwebsite\Excel\Concerns\FromCollection;

class SensorLogsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $id;

    function __construct ($id){
        $this->id=$id;

    }

    public function collection()
    {
        return ObsData::where('id_sensor',$this->id)->get();
    }
}
