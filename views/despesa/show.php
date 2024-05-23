<h2 class="text-left top-space"> Detalhes da Despesa <?php $despesa->id ?></h2>
<h2 class="top-space"></h2>


<br><br>
<table class="table table-striped">
    <thead>
    <th><h3>Valor</h3></th>
    <th><h3>Data e Hora</h3></th>
    <th><h3>Categoria</h3></th>
    <th><h3>Metodo de Pagamento</h3></th>
    <th><h3>User Actions</h3></th>
    </thead>
    <tbody>
        <tr>
            <td><?=$despesa->valor?></td>
            <td><?=$despesa->data?></td>
            <td><?=$despesa->categoria->nome?></td>
            <td><?=$despesa->metodopagamento->nome?></td>
            <td>
                <a href="index.php?c=despesa&a=edit&id=<?=$despesa->id
                ?>" class="btn btn-info" role="button">Edit</a>
                <a href="index.php?c=depesa&a=delete&id=<?=$despesa->id
                ?>" class="btn btn-warning" role="button">Delete</a>
            </td>
        </tr>
    </tbody>
</table>

<!-- Adicionar a descricao da despesa fora da tabela para nao ficar sobrelotada e mal formatada -->



</div>
<div class="d-flex justify-content-center">
    <h3>Regressar ao index das despesas da conta</h3>
</div>

<div class="d-flex justify-content-center">
    <a href="index.php?c=despesa&a=index&id=<?=$despesa->id?>"class="btn btn-info"
       role="button">Return</a>
</div>