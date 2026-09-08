<h1>Id: {{ $id }}</h1>
<h1>Nome: {{ $nome }}</h1>

<a href="{{ route('produtos', ['id'=>123, 'nome'=>'carro']) }}">Produto 1</a><br>
<a href="{{ route('produtos', ['id'=>321, 'nome'=>'moto']) }}">Produto 1</a><br>
<a href="{{ route('produtos', ['id'=>312, 'nome'=>'bicicleta']) }}">Produto 1</a><br>