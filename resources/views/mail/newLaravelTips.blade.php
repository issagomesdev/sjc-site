@component('mail::message')
<h1 style="font-size: 30px;"> {{ $request['nome'] }} respondeu o formulário de contato desejando obter mais informações. </h1>

<h1 style="font-size: 20px;"> Aqui está uma copia da solicitação enviada. </h1>

<p> <strong> Nome: </strong> {{ $request['nome'] }}  </p>
<p> <strong> Telefone: </strong> {{ $request['numero'] }}  </p>
<p> <strong> Email: </strong> {{ $request['email'] }}  </p>
<p> <strong> Tipo de Instituição: </strong> {{ $request['tipo'] }}  </p>
<p> <strong> Nome da Instituição: </strong> {{ $request['team'] }}  </p>
<p> <strong> Cargo: </strong> {{ $request['cargo'] }}  </p>
<p> <strong> Como pode ser ajudado(a): </strong> {{ $request['ajuda'] }}  </p>
<p> <strong> Localização: </strong> {{ $request['cidade'] }} - {{ $request['estado'] }}  </p>
<p> <strong> Comentários adicionais: </strong> {{ $request['comentarios'] ?? 'Nenhum' }}  </p>
 @endcomponent

<style media="screen">

strong {
  color: #5a6974;
}

</style>
