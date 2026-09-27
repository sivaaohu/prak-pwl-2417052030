@extends('layouts.app')
@section('content')

    <div>

        <h1>List User</h1>

        <table border="1">

            <tr>

                <th>Nama</th>

                <th>NPM</th>

                <th>Kelas</th>

            </tr>

            @foreach ($users as $user)

                <tr>

                    <td>{{ $user->nama }}</td>

                    <td>{{ $user->npm }}</td>

                    <td>{{ $user->kelas->nama_kelas }}</td>

                </tr>

            @endforeach

        </table>

    </div>