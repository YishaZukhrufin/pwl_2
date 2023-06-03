<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mahasiswa;
use App\Models\MahasiswaMatkul;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\MahasiswaModel;
use App\Models\MataKuliahModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $mhs = MahasiswaModel::all();
        return view('mahasiswa.mahasiswa');
            // ->with('mhs', $mhs);
    }

    public function data(){
        $data = MahasiswaModel::selectRaw('id, nim, nama, hp');
        return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('mahasiswa.create_mahasiswa',['kelas' => $kelas])
        //return view('mahasiswa.create_mahasiswa')
            ->with('url_form', url('/mahasiswa/') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
       
    //     $request->validate([
    //         'nim'=>'required|string|max:10|unique:mahasiswa,nim', 
    //         'nama'=>'required|string|max:50',
    //         'foto'=> 'required|image|mimes:jpeg,png,jpg',
    //         'kelas_id'=>'required',
    //         'jk'=>'required|in:l,p',
    //         'tempat_lahir'=>'required|string|max:50',
    //         'tanggal_lahir'=>'required|date',
    //         'alamat'=>'required|string|max:255',
    //         'hp'=>'required|digits_between:6,15'
    //     ]);

    //     // MahasiswaModel::insert($request->except(['_token']));

    //     $image_name = $request->file('foto')->store('images', 'public');

    //     MahasiswaModel::create([
    //         'nim' => $request->nim,
    //         'nama' => $request->nama,
    //         'foto' => $image_name,
    //         'kelas_id' => $request->kelas_id,
    //         'jk' => $request->jk,
    //         'tempat_lahir' => $request->tempat_lahir,
    //         'tanggal_lahir' => $request->tanggal_lahir,
    //         'alamat' => $request->alamat,
    //         'hp' => $request->hp,
    //     ]);

    //     //$data = MahasiswaModel::create($request->except(['_token']));
    //     return redirect('mahasiswa')
    //         ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    //     // $data = MahasiswaModel::create($request->except(['_token']));
    //     // return redirect('mahasiswa')
    //     //     ->with('success', 'Mahasiswa Berhasil Ditambahkan');
       
        
    // }
    public function store(Request $request)
    {
        $rule = [
            'nim' => 'required|string|max:10|unique:mahasiswa,nim',
            'nama' => 'required|string|max:50',
            'hp' => 'required|digits_between:6,15',
        ];

        $validator = Validator::make($request->all(), $rule);
        if($validator->fails()){
            return response()->json([
                'status' => false,
                'modal_close' => false,
                'message' => 'Data gagal ditambahkan. ' .$validator->errors()->first(),
                'data' => $validator->errors()
            ]);
        }

        $mhs = MahasiswaModel::create($request->all());
        return response()->json([
            'status' => ($mhs),
            'modal_close' => false,
            'message' => ($mhs)? 'Data berhasil ditambahkan' : 'Data gagal ditambahkan',
            'data' => null
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $mahasiswa = MahasiswaModel::where('id',$id)->get();
        // return view('mahasiswa.detail', ['Mahasiswa' => $mahasiswa[0]]);
        $data['mahasiswa'] = MahasiswaModel::find($id);
        // $data['mahasiswa']->kelas_id = $data['mahasiswa']->kelas->nama_kelas;
        $data['khs'] = MahasiswaMatkul::where('mahasiswa_id',$id)->get();
        $data['khs']->map(function ($item){
            $item->matkul_id = $item->matkul->nama;
            $item['sks'] = $item->matkul->sks;
            $item['semester'] = $item->matkul->semester;
            return $item;
        });
        return response()->json([
            'data' => $data['mahasiswa'],
            'khs' => $data['khs']
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $mhs = MahasiswaModel::where('id',$id)->first();
        return response()->json($mhs);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
            $rule = [
            'nim' => 'required|string|max:10|unique:mahasiswa,nim,'.$id,
            'nama' => 'required|string|max:50',
            'hp' => 'required|string|max:15',
            ];
            

        $data = $request->all();
        // $foto = $request->foto;

        $validator = Validator::make($data, $rule);
        if($validator->fails()){
            return response()->json([
                'status' => false,
                'modal_close' => false,
                'message' => 'Data gagal diupdate. ' .$validator->errors()->first(),
                'data' => $validator->errors()
            ]);
        }
       $mhs = MahasiswaModel::where('id', '=', $id)->update($request->except(['_token', '_method']));

        return response()->json([
            'status' => ($mhs),
            'modal_close' => false,
            'message' => ($mhs)? 'Data berhasil diupdate' : 'Data gagal diupdate',
            'data' => null
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $data = MahasiswaModel::where('id','=',$id)->first();
        // if($data->foto && file_exists(storage_path('app/public/'.$data->foto))){
        //     Storage::delete('public/'.$data->foto);
        // }

        $data->delete();
        return response()->json([
            'status' => ($data),
            'modal_close' => false,
            'message' => ($data)? 'Data berhasil dihapus' : 'Data gagal dihapus',
            'data' => null
        ]);
    }

    public function khs($id){
        $mahasiswa = MahasiswaModel::where('id',$id)->first();
        $khs = MahasiswaMatkul::where('mahasiswa_id', $id)->get();

        // $pdf = Pdf::loadView('mahasiswa.mahasiswa_pdf', ['mahasiswa' => $mahasiswa, 'khs' => $khs]);
        // return $pdf->stream();
        return view('mahasiswa.nilai')
            ->with('mahasiswa', $mahasiswa)
            ->with('khs', $khs);
    }

    public function cetak_pdf($id) {
        $mahasiswa = MahasiswaModel::where('id',$id)->first();
        $khs =MahasiswaMatkul::where('mahasiswa_id',$id)->get();
        return view('mahasiswa.mahasiswa_pdf')
                ->with('mahasiswa', $mahasiswa)
                ->with('khs', $khs);
        $pdf = Pdf::loadview('mahasiswa.mahasiswa_pdf', ['mahasiswa' => $mahasiswa, 'khs' => $khs]);
        return $pdf->stream();
}
}

