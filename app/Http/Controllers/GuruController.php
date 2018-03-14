<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use Session;
class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $a = Guru::all();
        return view('guru.index',compact('a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|',
            'nipd' => 'required|unique:gurus',
            'alamat' => 'required|',
            'mata_pelajaran' => 'required|'
        ]);
        $a = new Guru;
        $a->nama = $request->nama;
        $a->nipd = $request->nipd;
        $a->alamat = $request->alamat;
        $a->mata_pelajaran = $request->mata_pelajaran;
        $a->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$a->nama</b>"
        ]);
        return redirect()->route('guru.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $a = Guru::findOrFail($id);
        return view('guru.show',compact('a'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $a = Guru::findOrFail($id);
        return view('guru.edit',compact('a'));
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
        $this->validate($request,[
            'nama' => 'required|',
            'nipd' => 'required',
            'alamat' => 'required|',
            'mata_pelajaran' => 'required|'
        ]);
        $a = Guru::findOrFail($id);
        $a->nama = $request->nama;
        $a->nipd = $request->nipd;
        $a->alamat = $request->alamat;
        $a->mata_pelajaran = $request->mata_pelajaran;
        $a->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$a->nama</b>"
        ]);
        return redirect()->route('guru.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Guru::findOrFail($id);
        $a->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('guru.index');
    }
}
