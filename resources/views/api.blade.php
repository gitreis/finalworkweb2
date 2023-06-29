<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Buscado de Cep</title>
    <livewire:styles/>
</head>
<body class="bg-indigo-950 container-md">
  <form class="bg-indigo-900 p-3 flex flex-col w-1/2 mx-auto my-auto align-middle self-center mt-20 rounded">
    <div class="p-8 flex flex-col w-1/2 mx-auto mt-1">
      <h1 class="text-2xl text-white mx-auto">Buscar CEP</h1>
      <p class="mt-1 text-white mx-auto">Encontre centenas de CEP. </br>Nunca mais erre o endereco!</p>
    </div>
    <div class="p-8 flex flex-col w-1/2 mx-auto mt-1">
      <label for="cep" class="text-white rounded text-lg">CEP:</label>
      <input id="cep" name="cep" type="text" class="mt-3 rounded h-10 text-lg" readonly value="{{$api['cep']}}">
    </div>
    <div class="p-8 flex flex-col w-1/2 mx-auto">
      <label for="uf" class="text-white rounded text-lg">Unidade Federativa - UF:</label>
      <input id="uf" name="uf" type="text" class="rounded mt-3 h-10 text-lg" readonly value="{{$api['uf']}}">
    </div>
    <div class="p-8 flex flex-col w-1/2 mx-auto">
      <label for="cidade" class="text-white rounded text-lg">Cidade:</label>
      <input id="cidade" name="cidade" type="text" class="rounded mt-3 h-10 text-lg" readonly value="{{$api['localidade']}}">
    </div>
    <div class="p-8 flex flex-col w-1/2 mx-auto">
      <label for="bairro" class="text-white rounded text-lg">Bairro:</label>
      <input id="bairro" name="bairro" type="text" class="rounded mt-3 h-10 text-lg" readonly value="{{$api['bairro']}}">
    </div>
    <div class="p-8 flex flex-col w-1/2 mx-auto">
      <label for="rua" class="text-white rounded text-lg">Rua:</label>
      <input id="rua" name="rua" type="text" class="rounded mt-3 h-10 text-lg" readonly value="{{$api['logradouro']}}">
    </div>
  </form>
</body>
</html>

