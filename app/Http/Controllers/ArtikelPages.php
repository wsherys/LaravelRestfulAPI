<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\models\Artikel;

use Illuminate\Support\Facades\View;
// use DB;
use Illuminate\Support\Facades\DB;

class ArtikelPages extends Controller
{
    //
    public function PageList()
    {
        //
        $artikel = DB::table('artikels') ->get();
        $data=array('tbh'=>'','judul'=>'Article', 'artikel' => $artikel);
        return view('child',$data);
    }

    public function ListAjax(request $request)
	{
		$list =DB::table('artikels')
        ->orderByRaw('id DESC')
        ->get();
		$data = array();
        $no = $request->get("start");
		foreach ($list as $dt) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $dt->author;
			$row[] = $dt->text;
			$row[] = '  <center>
                        <a href=/ArtikelPages/PageDetail/'.$id=$dt->id.' > detail</a> &nbsp;
                        <a href=/ArtikelPages/PageEdit/'.$id=$dt->id.'> edit</a> &nbsp; 
                        <a onclick="myFunction()" href=/ArtikelPages/Hapus/'.$id=$dt->id.'> hapus</a>
                        </center>';

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

    public function PageTambah()
    {
        //
        $data=array('judul'=>'Article');
        return view('pagetambah',$data);
    }

    public function Tambah(request $request)
    {
        //validasi
        $rule=['author'=>'required','text'=>'required'];
        $this->validate($request, $rule);
        $input = $request->all();
        unset($input['_token']);
        $status= \DB::table('artikels')->insert($input);

        if($status){ return redirect('/')->with('success','Data Berhasil Ditambahkan');}
        else{ return redirect('/ArtikelPages/PageTambah')->with('error','Data Gagal Ditambahkan');}
        
    }

    public function PageDetail($id)
    {
        //
        $artikel = DB::table('artikels')->where('id',$id)->get();
        $data=array('judul'=>'Article', 'artikel'=>$artikel);
        return view('pagedetail',$data);
    }

    public function PageEdit($id)
    {
        //
        $artikel = DB::table('artikels')->where('id',$id)->get();
        $data=array('judul'=>'Article', 'artikel'=>$artikel);
        return view('pageedit',$data);
    }

    public function Update(Request $request)
    {
        //
        $rule=['id'=>'required', 'author'=>'required','text'=>'required'];
        $this->validate($request, $rule);
        $input = $request->all();
        unset($input['_token']);

        DB::table('artikels')->where('id',$request->id)->update([
        'id' => $request->id,
        'author' => $request->author,
        'text' => $request->text,
        ]);

        return redirect('/')->with('success','Data Berhasil Diupdate');
       
    }
   

    public function Hapus($id)
    {
        //
        DB::table('artikels')->where('id',$id)->delete();
        return redirect('/')->with('success','Data Berhasil Dihapus');
    }
    
}
