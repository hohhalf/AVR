<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\DataTable;
use App\OprValueTable;

class IndexController extends Controller
{
	public function main(){
		$downsList = DB::table('OprValueTable')
			->join('DataTable', 'OprValueTable.DataIndex', '=', 'DataTable.DataIndex', 'OprValueTable.RegionIndex', '=', 'DataTable.RegionIndex')
			->select('OprValueTable.LogTime','DataTable.DispName','OprValueTable.Value')
			->
		return view('main', compact($downsList));
	}


    public function test()
    {
    	return phpinfo();
    }

    public function dispname()
    {
    	$dispname = OprValueTable::all();

        return $dispname;
    }
}
