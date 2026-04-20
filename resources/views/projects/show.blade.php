@extends("layouts.projects")
@section("title", $project->title)

@section("content")
<div class="col-md-4 mb-4">
                <div class="border p-3">
                    <h3>{{ $project->name }}</h3>
                    <p><strong>Cliente:</strong> {{ $project->client ?? 'N/A' }}</p>
                    <p><strong>Periodo:</strong> {{ $project->period }}</p>
                    <p><strong>Riassunto:</strong> {{ $project->summary }}</p>
                    
                    @if($project->tech_stack)
                        <p><small>Tecnologie: {{ $project->tech_stack }}</small></p>
                    @endif
                </div>
            </div>
@endsection