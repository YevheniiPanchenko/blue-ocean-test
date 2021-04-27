@extends('layouts.app')
@section('content')
    <div class="row mt-5">
        <div class="col">
            <h2>Players</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Player ID</th>
                    <th scope="col">Agent ID</th>
                    <th scope="col">Currency</th>
                    <th scope="col">Bet</th>
                    <th scope="col">Win</th>
                    <th scope="col">Rake</th>
                    <th scope="col">Tournament</th>
                    <th scope="col">Net</th>
                    <th scope="col">Fin</th>
                    <th scope="col">Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach($players as $player)
                    <tr>
                        <th scope="row">{{ $player->id }}</th>
                        <td>{{ $player->playerid }}</td>
                        <td>{{ $player->agentid }}</td>
                        <td>{{ $player->currency }}</td>
                        <td>{{ $player->bet }}</td>
                        <td>{{ $player->win }}</td>
                        <td>{{ $player->rake }}</td>
                        <td>{{ $player->tournament }}</td>
                        <td>{{ $player->net }}</td>
                        <td>{{ $player->fin }}</td>
                        <td>{{ $player->date }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

