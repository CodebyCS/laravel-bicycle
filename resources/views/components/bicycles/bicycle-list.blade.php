<div class="card shadow-sm">
    <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Lista de Bicicletas</h5>
        <span class="badge badge-light">{{ count($bicycles) }} Bicicletas</span>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-striped table-hover mb-0">
                <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Cor</th>
                    <th>Preço</th>
                    <th>Dono da Bicicleta</th>
                </tr>
                </thead>
                <tbody>
                @forelse($bicycles as $bicycle)
                    <tr>
                        <td>{{ $bicycle->id }}</td>
                        <td>{{ $bicycle->brand }}</td>
                        <td>{{ $bicycle->model }}</td>
                        <td>
                                <span class="badge badge-outline-secondary border px-2 py-1">
                                    {{ $bicycle->color }}
                                </span>
                        </td>
                        <!-- Formatação simples para preço em Euros -->
                        <td class="font-weight-bold text-success">
                            {{ number_format($bicycle->price, 2, ',', '.') }} €
                        </td>
                        <td>
                            <!-- Acede ao primeiro e último nome do dono através da relação com User -->
                            @if($bicycle->user)
                                <span class="text-dark font-weight-bold">
                                        {{ $bicycle->user->first_name }} {{ $bicycle->user->last_name }}
                                    </span>
                            @else
                                <span class="text-muted italic">Sem dono associado</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted py-4">
                            Nenhuma bicicleta encontrada na base de dados.
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
