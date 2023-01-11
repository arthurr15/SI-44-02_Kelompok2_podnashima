@extends('component.layout')

@section('title')
    <title>My Ticket</title>
@endsection

@section('content')
    <div class="d-md-flex h-md-100 align-items-center">

        <div class="w-100 p-0 h-md-100 loginarea">

            <div class="p-3">
                <table class="table">
                    <thead class="bg-oren">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Keberangkatan</th>
                            <th scope="col">Tujuan</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Dewasa</th>
                            <th scope="col">Anak</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Tarif</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tiket as $eachtiket)
                        <tr>
                            <th scope="row">{{ $eachtiket->id }}</th>
                            <td>{{ $eachtiket->terminal_asal }}</td>
                            <td>{{ $eachtiket->terminal_tujuan }}</td>
                            <td>{{ $eachtiket->tanggal_keberangkatan }}</td>
                            <td>{{ $eachtiket->dewasa }}</td>
                            <td>{{ $eachtiket->anak }}</td>
                            <td>{{ $eachtiket->kelas }}</td>
                            <td>{{ $eachtiket->tarif }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection



    