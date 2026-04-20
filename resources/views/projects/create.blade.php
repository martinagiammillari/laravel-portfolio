@extends("layouts.projects")
@section("title", "Aggiungi un progetto")

@section("content")
<div class="container py-5">
    {{-- Il titolo è già nel layout, quindi qui mettiamo solo il form --}}
    
    <div class="d-flex justify-content-end mb-4">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary btn-sm">Torna alla lista</a>
    </div>

    <form action="{{ route('admin.projects.store') }}" method="POST" class="row g-3 shadow p-4 rounded bg-white">
        @csrf 

        {{-- Nome del Progetto --}}
        <div class="col-md-6">
            <label for="name" class="form-label">Nome Progetto *</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        {{-- Cliente --}}
        <div class="col-md-6">
            <label for="client" class="form-label">Cliente</label>
            <input type="text" class="form-control" id="client" name="client">
        </div>

        {{-- Periodo --}}
        <div class="col-md-6">
            <label for="period" class="form-label">Periodo *</label>
            <input type="text" class="form-control" id="period" name="period" required>
        </div>

        {{-- Immagine di Copertina --}}
        <div class="col-md-6">
            <label for="cover_image" class="form-label">URL Immagine</label>
            <input type="text" class="form-control" id="cover_image" name="cover_image">
        </div>

        {{-- Riassunto --}}
        <div class="col-12">
            <label for="summary" class="form-label">Riassunto *</label>
            <input type="text" class="form-control" id="summary" name="summary" required>
        </div>

        {{-- Descrizione --}}
        <div class="col-12">
            <label for="description" class="form-label">Descrizione Progetto</label>
            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
        </div>

        {{-- Tech Stack --}}
        <div class="col-12">
            <label for="tech_stack" class="form-label">Tecnologie (separate da virgola)</label>
            <input type="text" class="form-control" id="tech_stack" name="tech_stack">
        </div>

        {{-- Link GitHub --}}
        <div class="col-md-6">
            <label for="github_link" class="form-label">Link GitHub</label>
            <input type="url" class="form-control" id="github_link" name="github_link">
        </div>

        {{-- Link Live Demo --}}
        <div class="col-md-6">
            <label for="live_demo" class="form-label">Link Live Demo</label>
            <input type="url" class="form-control" id="live_demo" name="live_demo">
        </div>

        <div class="col-12 mt-4 text-center">
            <button type="submit" class="btn btn-success px-5">Salva Progetto</button>
        </div>
    </form>
</div>
@endsection