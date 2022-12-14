<x-app-layout>
    <x-slot name="header">
        Adicionar curso

        
    </x-slot>

    <div class="container">
      <h1>Editar curso</h1>
      <form action="{{ route('cursos-update',['id'=>$cursos->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" class="form-control" name="titulo" value="{{$cursos->titulo}}" placeholder="Digite um titulo..">
            </div>
            <div class="form-group">
                <label for="topico">Tópico:</label>
                <input type="text" class="form-control" name="topico" value="{{$cursos->topico}}" placeholder="Digite um tópico..">
            </div>
            <div class="form-group">
                <label for="embed">Embed:</label>
                <input type="text" class="form-control" name="embed" value="{{$cursos->embed}}" placeholder="Digite a URL no seu vídeo..">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" class="form-control" name="descricao" value="{{$cursos->descricao}}" placeholder="Digite uma descrição..">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Atualizar">
            </div>
        </div>
      </form>
    </div>
    
</x-app-layout>