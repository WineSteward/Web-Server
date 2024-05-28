<h2 class="text-left top-space">Gestão da Conta de <?= $conta->titulo?></h2>
<h2 class="top-space"></h2>


<br><br>
<table class="table table-striped">
    <thead>
    <th><h3>Titulo da Conta</h3></th>
    <th><h3>Numero da Conta</h3></th>
    <th><h3>ID da conta</h3></th>
    <th><h3>Email da conta</h3></th>
    <th><h3>User Actions</h3></th>
    </thead>
    <tbody>
        <tr>
            <td><?=$conta->titulo?></td>
            <td><?=$conta->numconta?></td>
            <td><?=$conta->id?></td>
            <td><?=$conta->email?></td>
            <td>
                <a href="index.php?c=despesa&a=index&id=<?=$conta->id
                ?>" class="btn btn-info" role="button">Despesas Da Conta</a>
                <a href="index.php?c=conta&a=edit&id=<?=$conta->id
                ?>" class="btn btn-info" role="button">Edit</a>
                <a href="index.php?c=conta&a=delete" class="btn btn-warning" role="button">Delete</a>
            </td>
        </tr>
    </tbody>
</table>









