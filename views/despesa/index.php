<h2 class="text-left top-space">Gestão das Despesas Da Conta: <?php $conta->titulo ?></h2>
<h2 class="top-space"></h2>


<br><br>
<table class="table table-striped">
    <thead>
    <th><h3>Valor</h3></th>
    <th><h3>Data e Hora</h3></th>
    <th><h3>User Actions</h3></th>
    </thead>
    <tbody>
    <?php foreach($conta->despesas as $despesa) { ?>
        <tr>
            <td><?=$despesa->valor?></td>
            <td><?=$despesa->data?></td>
            <td><?=$conta->email?></td>
            <td>
                <a href="index.php?c=conta&a=show&id=<?=$conta->id
                ?>" class="btn btn-info" role="button">Account Details</a>
                <a href="index.php?c=despesa&a=index&id=<?=$conta->id
                ?>" class="btn btn-info" role="button">Despesas</a>
                <a href="index.php?c=conta&a=edit&id=<?=$conta->id
                ?>" class="btn btn-info" role="button">Edit</a>
                <a href="index.php?c=conta&a=delete" class="btn btn-warning" role="button">Delete</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>



</div>
<div class="d-flex justify-content-center">
    <h3>Create a new Account</h3>
</div>

<div class="d-flex justify-content-center">
    <a href="index.php?c=conta&a=create"class="btn btn-info"
       role="button">New</a>
</div>














