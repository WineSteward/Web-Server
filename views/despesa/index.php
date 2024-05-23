<h2 class="text-left top-space">Gestão das Despesas Da Conta: <?= $conta->titulo ?></h2>
<h2 class="top-space"></h2>


<br><br>
<table class="table table-striped">
    <thead>
    <th><h3>Valor</h3></th>
    <th><h3>Categoria</h3></th>
    <th><h3>Data e Hora</h3></th>
    <th><h3>User Actions</h3></th>
    </thead>
    <tbody>
    <?php foreach($conta->despesas as $despesa) { ?>
        <tr>
            <td><?=$despesa->valor?></td>
            <td><?=$despesa->categoria->nome?></td>
            <td><?=$despesa->data?></td>
            <td>
                <a href="index.php?c=despesa&a=show&id=<?=$despesa->id
                ?>" class="btn btn-info" role="button">Despesa Details</a>
                <a href="index.php?c=despesa&a=edit&id=<?=$despesa->id
                ?>" class="btn btn-info" role="button">Edit</a>
                <a href="index.php?c=despesa&a=delete&id=<?=$despesa->id
                ?>" class="btn btn-warning" role="button">Delete</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>



</div>
<div class="d-flex justify-content-center">
    <h3>Create a new Despesa</h3>
</div>

<div class="d-flex justify-content-center">
    <a href="index.php?c=despesa&a=create&id=<?=$conta->id?>"class="btn btn-info"
       role="button">New</a>
</div>














