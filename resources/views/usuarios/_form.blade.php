@csrf
<div class="card">
    <div class="card-body">


        <fieldset>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Nome do Usuário</label>
                        <input value="{{ old('name', $usuario->name ?? '') }}" type="input" required class="form-control"
                            name="name" id="name" placeholder="Digite o nome do Usuário">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email do Usuário</label>
                        <input value="{{ old('email', $usuario->email ?? '') }}" type="email" required
                            class="form-control" name="email" id="email" placeholder="Digite o email do Usuário">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input value="{{ old('password', '') }}" type="password" required class="form-control"
                            name="password" id="password" placeholder="Digite a senha do Usuário">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password__confirmation">Confirmação da Senha</label>
                        <input value="{{ old('password__confirmation', '') }}" type="password" required
                            class="form-control" name="password__confirmation" id="password__confirmation"
                            placeholder="Confirme a senha do Usuário">
                    </div>
                </div>
            </div>


        </fieldset>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Salvar</button>
                    <button type="button" id="btnVoltar" action="{{route('usuarios.index')}}" class="btn btn-info"></i> Voltar</button>

                </div>
            </div>
        </div>
    </div>
