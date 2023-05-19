<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mahasiswa;
use App\Models\MahasiswaMatkul;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mhs = MahasiswaModel::all();
        return view('mahasiswa.mahasiswa')
            ->with('mhs', $mhs);
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
    public function store(Request $request)
    {
       
        $request->validate([
            'nim'=>'required|string|max:10|unique:mahasiswa,nim', 
            'nama'=>'required|string|max:50',
            'foto'=> 'required|image|mimes:jpeg,png,jpg',
            'kelas_id'=>'required',
            'jk'=>'required|in:l,p',
            'tempat_lahir'=>'required|string|max:50',
            'tanggal_lahir'=>'required|date',
            'alamat'=>'required|string|max:255',
            'hp'=>'required|digits_between:6,15'
        ]);

        // MahasiswaModel::insert($request->except(['_token']));

        $image_name = $request->file('foto')->store('images', 'public');

        MahasiswaModel::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'foto' => $image_name,
            'kelas_id' => $request->kelas_id,
            'jk' => $request->jk,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'hp' => $request->hp,
        ]);

        //$data = MahasiswaModel::create($request->except(['_token']));
        return redirect('mahasiswa')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');
        // $data = MahasiswaModel::create($request->except(['_token']));
        // return redirect('mahasiswa')
        //     ->with('success', 'Mahasiswa Berhasil Ditambahkan');
       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = MahasiswaModel::where('id',$id)->get();
        return view('mahasiswa.detail', ['Mahasiswa' => $mahasiswa[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $mahasiswa = MahasiswaModel::where('id',$id)->get();
       $kelas = Kelas::all();
       return view('mahasiswa.create_mahasiswa', ['kelas'=>$kelas])
        ->with('mhs', $mahasiswa[0])
        ->with('url_form', url('/mahasiswa/'. $id));
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
        $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswa,nim,'.$id,
            'nama' => 'required|string|max:50',
            'foto' => 'image|mimes:jpeg,png,jpg',
            'kelas_id'=>'required',
            'jk' => 'required|in:l,p',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'hp' => 'required|string|max:15',
        ]);

       
        // MahasiswaModel::where('id', '=', $id)->update($request->except(['_token', '_method']));

        $image_name = $request->file('foto')->store('images', 'public');

        MahasiswaModel::where('id', $id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'foto' => $image_name,
            'jk' => $request->jk,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'hp' => $request->hp,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect('mahasiswa')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // MahasiswaModel::where('id', '=', $id)->delete();
        // return redirect('mahasiswa')
        $mahasiswa = MahasiswaModel::where('id', $id)->first();
        Storage::disk('public')->delete($mahasiswa->foto);
        $mahasiswa->delete();

        return redirect('mahasiswa')
        ->with('success', 'Mahasiswa Berhasil Delete');
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
        // return view('mahasiswa.mahasiswa_pdf')
        //         ->with('mahasiswa', $mahasiswa)
        //         ->with('khs', $khs);
        $pdf = Pdf::loadview('mahasiswa.mahasiswa_pdf', ['mahasiswa' => $mahasiswa, 'khs' => $khs]);
        return $pdf->stream();
}
}

