@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Benvenuto, {{ Auth::user()->name }}</h1>
    </div>

    <div class="row">
        <!-- Card Statistiche -->
        <div class="col-md-4">
            <div class="card shadow-sm border-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title text-primary">Progetti Totali</h5>
                    <p class="card-text fs-2 fw-bold">0</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-white">Ultime Attività</div>
                <div class="card-body">
                    <p class="text-muted">Inizia a caricare i tuoi lavori per vederli apparire qui.</p>
                    <a href="#" class="btn btn-primary">Aggiungi Progetto</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection