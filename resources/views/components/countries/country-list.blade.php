<div class="card shadow-sm">
    <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Lista de Países</h5>
        <span class="badge badge-light">{{ count($countries) }} Países</span>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-striped table-hover mb-0">
                <thead class="thead-dark">
                <tr>
                    <th style="width: 15%">ID</th>
                    <th>Nome do País</th>
                </tr>
                </thead>
                <tbody>
                @forelse($countries as $country)
                    <tr>
                        <td class="font-weight-bold">#{{ $country->id }}</td>
                        <td>
                                <span class="text-dark font-weight-bold">
                                    {{ $country->name }}
                                </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="text-center text-muted py-4">
                            Nenhum país encontrado na base de dados.
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
