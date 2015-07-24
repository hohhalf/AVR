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
                    $join->on('OprValueTable.DataIndex', '=', 'DataTable.DataIndex')->orOn('OprValueTable.RegionIndex', '=', 'DataTable.RegionIndex'); 
            })
			->select('OprValueTable.LogTime', 'DataTable.DispName', 'OprValueTable.Value')
            ->take(100)
            ->orderBy('OprValueTable.Value')
			->get();
		return view('records/main',compact('downsList'));
	}


    public function test()
    {
    	return phpinfo();
    }

    public function dispname()
    {
    	$dispname = DataTable::all();

        return $dispname;
    }
}
