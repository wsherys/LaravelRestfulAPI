<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\models\Artikel;

use Illuminate\Support\Facades\View;
use DB;

class ArtikelPages extends Controller
{
    //
    public function PageList()
    {
        //
        $artikel = DB::table('artikels')->get();
        $data=array('judul'=>'Artikel','urlajax'=>'/ListAjax', 'artikel' => $artikel);
        return view('child',$data);
        // dd($data);
    }

    public function ListAjax(request $request)
	{
        
       
   
        // Fetch records
       
        
		// $list = $this->bank->get_datatables();
		$list =DB::table('artikels')->get();
		$data = array();
        $no = $request->get("start");
		foreach ($list as $dt) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $dt->author;
			$row[] = $dt->text;
			$row[] = '<center><a href=/ArtikelPages/PageEdit/'.$id=$dt->id.'> edit</a> &nbsp; 
					<a href=/ArtikelPages/Hapus/'.$id=$dt->id.'>hapus</a></center>';

			$data[] = $row;
			
		}
		
        $totalRecords = Artikel::select('count(*) as allcount')->count();
        $search_arr = $request->get('search');
        $searchValue = $search_arr['value']; // Search value
        $totalRecordswithFilter = Artikel::select('count(*) as allcount')->where('text', 'like', '%' .$searchValue . '%')->count();

        $output = array(
        "draw" => intval($request->get('draw')),
        "recordsTotal" => $totalRecords,
        "recordsFiltered" => $totalRecordswithFilter,
        "data" => $data
        );
		//output to json format
		echo json_encode($output);
	}

    public function PageDetail()
    {
        //
    }

    public function PageEdit()
    {
        //
    }
    
}
