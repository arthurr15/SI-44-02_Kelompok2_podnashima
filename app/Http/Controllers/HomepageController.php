<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Lokasi;
use App\Models\Ticket;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Cast\Bool_;
use Ramsey\Uuid\Type\Integer;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class HomepageController extends Controller
{
    public function index()
    {
        if (Auth::check()){
            if (Auth::user()->isAdmin==1){
                $tiket = Ticket::all();
            return view('ticket', compact('tiket'));
            } else {
                return view('index');
            }
        }
        return view('index');
    }

    public function bayar($id)
    {
        $data = Ticket::findorfail($id);
        // dd($data);
        return view('bayar', compact('data'));
    }

    public function bayarberhasil($id)
    {
        $data = Ticket::findorfail($id);
        // dd($data);
        return view('berhasilbayar', compact('data'));
    }

    public function admin()
    {
        
    }
}
