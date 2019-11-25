<?php

namespace App\Exports;

use App\Lead;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use DB;

class LeadExport implements FromCollection,WithHeadings,ShouldAutoSize,WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return Lead::all();
        return $lead = Lead::select('leads.first_name','leads.middle_name','leads.last_name','leads.phone_no','leads.mobile_no','leads.alternate_mobile_no','leads.email_id','leads.zipcode', DB::raw("CONCAT('leads.house_no', ',', 'leads.street_address', ',', 'cities.name', ',' ,'states.name') AS address"),'cities.name as city_name','states.name as state_name',DB::raw("(CASE 
        	WHEN (status = 1) THEN 'Pending' 
        	WHEN (status = 2) THEN 'Activation Done'
        	ELSE 'Not Activated' END) as lead_status"))
            ->join('cities','cities.id','=','leads.city_id')
            ->join('states','states.id','=','leads.state_id')
            ->get();
       // return $lead->prepend(['First Name','Middle Name','Last Name','Phone No','Mobile No','Alternate Mobile No','Email ID','Zipcode','Address','City','State']);
    }

    public function headings(): array
    {
        return ['First Name','Middle Name','Last Name','Phone No','Mobile No','Alternate Mobile No','Email ID','Zipcode','Address','City','State','Status'];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
            },
        ];
    }
}
