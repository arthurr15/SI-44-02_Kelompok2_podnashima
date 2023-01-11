<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;
use App\Models\Ticket;
use App\Models\Lokasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiket = Ticket::where('users_id',Auth::id())->get();
        // dd($tiket);
        if(Auth::check()){
            return view('ticket', compact('tiket'));
        }
        return redirect()->route('home')->withErrors('Silahkan melakukan login');
    }

    public function tiket(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'terminal_asal' => 'required',
            'terminal_tujuan' => 'required',
            'tanggal_keberangkatan' => 'required|date|after:today',
            'dewasa' => 'required',
            'anak' => 'required',
            'kelas' => 'required',
        ]);
        
        $lokasi_berangkat = Lokasi::findorfail($data['terminal_asal']+1);
        $lokasi_tujuan = Lokasi::findorfail($data['terminal_tujuan']+1);
        
        $cek_lokasi = $lokasi_berangkat['id_kota'] <> $lokasi_tujuan['id_kota'];
        
        $tarif = ($data['kelas']=='Ekonomi')?125000:300000;
        $total_tarif = $tarif * ($data['dewasa']+$data['anak']);
        // dd($total_tarif);

        if (!$cek_lokasi)
        {
            return redirect()->route('home')->withErrors('Rute tidak ditemukkan');
        }
        else
        {
            // dd(Auth::id());
            $tiket = Ticket::create([
                'users_id' => Auth::id(),
                'terminal_asal' => $lokasi_berangkat['titik'],
                'terminal_tujuan' => $lokasi_tujuan['titik'],
                'tanggal_keberangkatan' => $data['tanggal_keberangkatan'],
                'dewasa' => $data['dewasa'],
                'anak' => $data['anak'],
                'kelas' => $data['kelas'],
                'tarif' => $total_tarif,
            ]);
            return redirect('/pembayaran/'.$tiket->id);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTicketRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTicketRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTicketRequest  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTicketRequest $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
