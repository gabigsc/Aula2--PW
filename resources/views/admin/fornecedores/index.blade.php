<h3> admin - fornecedores - index </h3>

{{-- slide 90 bloco if e else se acrescentar vários itens na váriavel $fornecedores irá trocar as mensagens --}}

@if (count($fornecedores) > 0 && count($fornecedores)< 10)
<h3>Existem alguns fornecedores cadastrados</h3>

@elseif(count($fornecedores)>10)
<h3>Existem vários fornecedores cadastrados</h3>

@else
<h3>Não existem fornecedores cadastrados</h3>

@endif