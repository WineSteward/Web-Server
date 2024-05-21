<h2 class="text-left top-space">Gestão de Categorias</h2>
<h2 class="top-space"></h2>


<br><br>
<table class="table table-striped">
    <thead>
    <th><h3>Nome da Categoria/h3></th>
    <th><h3>User Actions</h3></th>
    </thead>
    <tbody>
    <?php foreach($categorias as $categoria) { ?>
        <tr>
            <td><?=$categoria->nome?></td>
            <td>
                <a href="index.php?c=categoria&a=show&id=<?=$categoria->id
                ?>" class="btn btn-info" role="button">Categoria Info</a>
                <a href="index.php?c=categoria&a=edit&id=<?=$categoria->id
                ?>" class="btn btn-info" role="button">Edit</a>
                <a href="index.php?c=categoria&a=delete" 
                class="btn btn-warning" role="button">Delete</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>



</div>
<div class="d-flex justify-content-center">
    <h3>Create a new Categoria</h3>
</div>

<div class="d-flex justify-content-center">
    <a href="index.php?c=categoria&a=create"class="btn btn-info"
       role="button">New</a>
</div>














