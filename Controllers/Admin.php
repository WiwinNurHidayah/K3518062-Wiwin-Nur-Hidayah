<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Siswa;
use App\Models\Profil_K3518062;
class Admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $siswa = Siswa::all();
         return view ('welcome',compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nim'=>'required',
            'nama'=>'required',
            'angkatan'=>'required',
            'email'=>'required',
            'telp'=>'required'
            //
    ]);

    $siswa = new Siswa;
    $siswa->nim = $request->nim;
    $siswa->nama_lengkap = $request->nama;
    $siswa->angkatan = $request->angkatan;
    $siswa->email = $request->email;
    $siswa->telp = $request->telp;
    $siswa->save();
    return redirect(route('home')) ->with('successMsg','New Siswa Successfully Added');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view ('edit',compact('siswa'));
}


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $this->validate($request, [
            'nim'=>'required',
            'nama'=>'required',
            'angkatan'=>'required',
            'email'=>'required',
            'telp'=>'required'
            //
    ]);

    $siswa = Siswa::find($id);
    $siswa->nim = $request->nim;
    $siswa->nama_lengkap = $request->nama;
    $siswa->angkatan = $request->angkatan;
    $siswa->email = $request->email;
    $siswa->telp = $request->telp;
    $siswa->save();
    return redirect(route('home')) ->with('successMsg','Siswa Successfully Update');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Siswa::find($id) -> delete(); 
        return redirect(route('home'))->with('successMsg', 'Siswa Successfully Delete');
//
    }
    public function indexnim()
    {

         $k3518062 = Profil_K3518062::all();
         return view ('about_k3518062',compact('k3518062'));
    }
    public function editprofil($id)
    {
        $k3518062 = Profil_K3518062::find($id);
        return view ('edit_profil',compact('k3518062'));
    }
    public function updateprofil(Request $request, $id)
    {
       $this->validate($request, [
            'nim'=>'required',
            'nama'=>'required',
            'alamat'=>'required',
            'bidang_peminatan'=>'required',
            'email'=>'required',
            'telp'=>'required'
            //
    ]);

    $k3518062 = Profil_K3518062::find($id);
    $k3518062->nim = $request->nim;
    $k3518062->nama = $request->nama;
    $k3518062->alamat = $request->alamat;
    $k3518062->bidang_peminatan = $request->bidang_peminatan;
    $k3518062->email = $request->email;
    $k3518062->telp = $request->telp;
    $k3518062->save();
    return redirect(route('home')) ->with('successMsg','Siswa Successfully Update');
    }

    public function generate(){
        for ($i=0; $i < 1000; $i++) {
            $siswa = new Siswa;
            $siswa->nim = '2020'.$i;
            $siswa->nama_lengkap = "Siswa" . $i;
            $siswa->angkatan = '2021';
            $siswa->email = "siswa".$i."@student.uns.ac.id";
            $siswa->telp = "08122000".$i;
            $siswa->save();
        }
        echo "Siswa telah selesai digenerate!";
    }

    public function getdatanochunk(){
        $time_start = microtime(true);
        $begin = memory_get_usage();
        foreach (Siswa::all() as $a) {
            echo $a->id.'<br>';
        }
        $time_end=microtime(true);
        echo '<b>Total memory usage :</b> ' . (memory_get_usage() - $begin).'<br>';
        $execution_time = ($time_end - $time_start);
        echo '<b>Total Execution Time:</b> '.($execution_time*1000).'Milliseconds'.'<br>';
    }

    public function getdatachunk(){
        $time_start = microtime(true);
        $begin = memory_get_usage();
        Siswa::chunk(300,function($siswas){ 
            foreach ($siswas as $a) 
            {
            echo $a->id.'<br>';
            }
        });
       
        $time_end=microtime(true);
        echo '<b>Total memory usage :</b> ' . (memory_get_usage() - $begin).'<br>';
        $execution_time = ($time_end - $time_start);
        echo '<b>Total Execution Time:</b> '.($execution_time*1000).'Milliseconds'.'<br>';
    }




}
