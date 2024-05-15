@php use App\Helpers\PermissionsHelper; @endphp
@extends('layouts.app')

@section('content')
    @if (session('success'))
        <x-alert type="success" :message="session('success')"/>
    @endif
    @if (session('error'))
        <x-alert type="danger" :message="session('error')"/>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <section class="mb-12">
        <div class="card">
            <div class="card-header text-center py-3">
                <h5 class="mb-0 text-center">
                    <strong>Ranks</strong>
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-borderless" id="ranksList" style="width:100%">
                        <thead>
                        <tr>
                            <th>Position</th>
                            <th>Player</th>
                            <th>CS Rating</th>
                            <th>Rank</th>
                            <th>Kills <i class="fas fa-skull-crossbones"></i></th>
                            <th>Deaths <i class="fas fa-skull"></i></th>
                            <th>Assists <i class="fas fa-hands-helping"></i></th>
                            <th>Headshots <i class="fas fa-bullseye"></i></th>
                            <th>Rounds CT <i class="fas fa-trophy"></i></th>
                            <th>Rounds T <i class="fas fa-trophy"></i></th>
                            <th>Rounds Overall <i class="fas fa-trophy"></i></th>
                            <th>Games Won <i class="fas fa-trophy"></i></th>
                            <th>Games Lost <i class="fas fa-times-circle"></i></th>
                        </tr>
                        </thead>
                        <tbody >

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
@vite(['resources/js/ranks/ranks.ts'])

