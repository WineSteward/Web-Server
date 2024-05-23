<h2 class="text-left top-space">Create New Despesa</h2>
<h2 class="top-space"></h2>

<div class="justify-content-center align-items-center d-flex">
<form method="post" action="index.php?c=despesa&a=store&id=<?=$conta->id?>">

    <label for="categoria_id">Categoria:</label><br>
    <select name="categoria_id">
        <?php foreach($categorias as $categoria){?>
            <option value="<?= $categoria->id?>"> <?= $categoria->nome; ?></option>
        <?php } ?>
    </select>
<div class="m-2">
    <label for="valor">Valor da Despesa:</label>
    <input type="number" name="valor">
</div>
<div class="m-2">
    <label for="metodopagamentos_id">Metodo de Pagamento:</label><br>
    <select name="metodopagamentos_id">
        <?php foreach($metodopagamentos as $metodopagamento){?>
            <option value="<?= $metodopagamento->id?>"> <?= $metodopagamento->nome; ?></option>
        <?php } ?>
    </select>
</div>
<div class="m-2">
    <label for="descrica">Descricao da Despesa:</label>
    <input type="text" name="descricao">
</div>
<div class="m-2">
    <label for="data">Data da Despesa:</label>
    <input type="text" name="data">
</div>

    <input type="hidden" name="conta_id" value="<?= $conta->id ?>">


<div class="m-2">
    <button type="submit" class="btn btn-primary">Create New Despesa</button>
</div>
</form>
</div>

