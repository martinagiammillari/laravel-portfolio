@extends("layouts.projects")
@section("title", $project->name)

@section("content")
<div class="container py-5">
    <div class="col-md-8 mx-auto">
        
        {{-- Bottone Torna alla lista --}}
        <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-secondary btn-sm">
                <i class="fas fa-arrow-left"></i> Torna alla lista
            </a>
        </div>

        <div class="border p-4 shadow-sm bg-white rounded">
            <h3>{{ $project->name }}</h3>
            <p><strong>Cliente:</strong> {{ $project->client ?? 'N/A' }}</p>
            <p><strong>Periodo:</strong> {{ $project->period }}</p>
            <p><strong>Riassunto:</strong> {{ $project->summary }}</p>
            
            @if($project->tech_stack)
                <p><small>Tecnologie: {{ $project->tech_stack }}</small></p>
            @endif

            <div class="mt-4 d-flex gap-2">
                {{-- Bottone modifica --}}
                <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning btn-sm">
                    Modifica
                </a>

                {{-- Bottone che apre il Modale --}}
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">
                    Elimina
                </button>
            </div>
        </div>
    </div>
</div>

{{-- MODALE DI CONFERMA --}}
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Conferma Eliminazione</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Sei sicuro di voler eliminare definitivamente il progetto <strong>"{{ $project->name }}"</strong>? <br>
                Questa azione non può essere annullata.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                
                {{-- Form reale di eliminazione --}}
                <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Elimina definitivamente</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection