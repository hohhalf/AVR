<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\DataTable;
use App\OprValueTable;

class IndexController extends Controller
{
	public function main(){

		$downsList = DB::table('OprValueTable')
			->join('DataTable', function($join){
                    $join->on('OprValueTable.DataIndex', '=', 'DataTable.DataIndex');
            })
			->select('OprValueTable.Time', 'DataTable.DispName', 'OprValueTable.Value')
#            ->orderBy('OprValueTable.Time')
			->get();


            $downsCount = DB::table('OprValueTable')
            ->join('DataTable', function($join){
                    $join->on('OprValueTable.DataIndex', '=', 'DataTable.DataIndex');
            })
            ->select('OprValueTable.Time', 'DataTable.DispName', 'OprValueTable.Value')
#            ->orderBy('OprValueTable.Time')
            ->count();
		return view('records/main',compact('downsList', 'downsCount'));
	}


    public function test()
    {
    	return phpinfo();
    }
		
    public function dispname()
    {
    	$dispname = DataTable::where('DataTypeIndex', '=', '1')->get();

      return view ('records.objects', compact('dispname'));
				//return $dispname;
    }

	public function history($DataIndex)
		{
		 return $DataIndex;
		}


    public function edit(){
        return view('records/edit');
    }    
}
