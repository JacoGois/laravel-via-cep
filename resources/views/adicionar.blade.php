<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Busque aqui</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="form-horizontal" action="{{route('salvar_endereco')}}" method="POST">
    @csrf
    <fieldset>
        <legend>Adicionar Endereço</legend>
        <hr>

        <div class="form-group">
            <label class="col-md-1 control-label" for="cep">CEP</label>
            <div class="col-md-11">
                <input class="form-control" id="cep" placeholder="Digite o CEP" name="cep" type="text" value="{{$cep}}">
            </div>
            <label class="col-md-1 control-label" for="cep">Logradouro</label>
            <div class="col-md-11">
                <input class="form-control" placeholder="Digite o Logradouro" name="logradouro" type="text" value="{{$logradouro}}">
            </div>
            <label class="col-md-1 control-label" for="cep">Número</label>
            <div class="col-md-11">
                <input class="form-control" placeholder="Digite o Número" name="numero" type="text">
            </div>
            <label class="col-md-1 control-label" for="cep">Bairro</label>
            <div class="col-md-11">
                <input class="form-control" placeholder="Digite o Bairro" name="bairro" type="text" value="{{$bairro}}">
            </div>
            <label class="col-md-1 control-label" for="cep">Cidade</label>
            <div class="col-md-11">
                <input class="form-control" placeholder="Digite a Cidade" name="cidade" type="text" value="{{$cidade}}">
            </div>
            <label class="col-md-1 control-label" for="cep">Estado</label>
            <div class="col-md-11">
                <input class="form-control" placeholder="Digite o Estado" name="estado" type="text" value="{{$estado}}">
            </div>
            <button type="submit" class="mt-2 btn btn-primary">Salvar</button>
        </div>
    </fieldset>
    <hr class="mt-3">
</form>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>
