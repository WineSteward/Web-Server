<h2 class="text-left top-space">Edit Categoria</h2>
<h2 class="top-space"></h2>

<div class="justify-content-center align-items-center d-flex">
    <form method="post" action="index.php?c=categoria&a=update&id=<?=$categoria->id ?>">

        <div class="mb-3">
            <label for="categoria" class="form-label">Nome da Categoria:</label>
            <input type="text" name="nome" class="form-control w-auto" value="<?= $categoria->nome ?>">
            <?php if(isset($categoria->errors)){ echo $categoria->errors->on('nome'); }?>
        </div>

        <button type="submit" class="btn btn-primary">Create New Categoria</button>

    </form>
</div>

</div>
<div class="col-sm-6">
    <h3>Return to Index</h3>
    <p>
        <a href="index.php?c=categoria&a=index" class="btn btn-info"
           role="button">Return</a>
    </p>
</div>