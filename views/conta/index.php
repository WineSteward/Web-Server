<h2 class="text-left top-space">Gestão de Contas</h2>
<h2 class="top-space"></h2>


<br><br>
<table class="table table-striped">
    <thead>
    <th><h3>Titulo da Conta</h3></th>
    <th><h3>User Actions</h3></th>
    </thead>
    <tbody>
    <?php foreach($contas as $conta) { ?>
        <tr>
            <td><?=$conta->titulo?></td>
            <td>
                <a href="index.php?c=conta&a=show&id=<?=$conta->id
                ?>" class="btn btn-info" role="button">Account Details</a>
                <a href="index.php?c=despesa&a=index&id=<?=$conta->id
                ?>" class="btn btn-info" role="button">Despesas Da Conta</a>
                <a href="index.php?c=conta&a=edit&id=<?=$conta->id
                ?>" class="btn btn-info" role="button">Edit</a>
                <a href="index.php?c=conta&a=delete" class="btn btn-warning" role="button">Delete</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</div>

<div class="row">
    <div class="col d-flex justify-content-center">
        <h3>Create a new Account</h3>
    </div>
    <div class="col d-flex justify-content-center">
        <h3>Gestao de Categorias</h3>
    </div>
    <div class="col d-flex justify-content-center">
        <h3>Gestao de Metodos de Pagamento</h3>
    </div>
</div>

<div class="row">
    <div class="col d-flex justify-content-center">
        <a href="index.php?c=conta&a=create"class="btn btn-info"
           role="button">New Conta</a>
    </div>
    <div class="col d-flex justify-content-center">
        <a href="index.php?c=categoria&a=index"class="btn btn-info"
           role="button">Gerir</a>
    </div>
    <div class="col d-flex justify-content-center">
        <a href="index.php?c=metodopagamento&a=index"class="btn btn-info"
           role="button">Gerir</a>
    </div>
</div>













