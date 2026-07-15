<div class="card shadow-sm mb-4">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Criar Novo Utilizador</h5>
    </div>
    <div class="card-body">
        <!-- Rota para onde o formulário vai enviar os dados (método POST) -->
        <form action="{{ url('/users') }}" method="POST">
            @csrf <!-- Obrigatório no Laravel para proteção contra ataques CSRF -->

            <div class="form-row">
                <!-- Primeiro Nome -->
                <div class="form-group col-md-6">
                    <label for="first_name" class="font-weight-bold">Primeiro Nome</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Ex: João" required>
                </div>

                <!-- Último Nome -->
                <div class="form-group col-md-6">
                    <label for="last_name" class="font-weight-bold">Último Nome</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Ex: Silva" required>
                </div>
            </div>

            <div class="form-row">
                <!-- Email -->
                <div class="form-group col-md-6">
                    <label for="email" class="font-weight-bold">Endereço de Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Ex: joao@email.com" required>
                </div>

                <!-- Data de Nascimento -->
                <div class="form-group col-md-6">
                    <label for="birth_date" class="font-weight-bold">Data de Nascimento</label>
                    <input type="date" name="birth_date" id="birth_date" class="form-control" required>
                </div>
            </div>

            <!-- Selecionar País -->
            <div class="form-group">
                <label for="country_id" class="font-weight-bold">País de Residência</label>
                <select name="country_id" id="country_id" class="form-control" required>
                    <option value="" disabled selected>Escolha um país...</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Botão Guardar -->
            <button type="submit" class="btn btn-primary btn-block shadow-sm">
                Guardar Utilizador
            </button>
        </form>
    </div>
</div>
