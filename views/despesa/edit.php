<h2 class="text-left top-space">Edit Despesa</h2>
<h2 class="top-space"></h2>

<div class="justify-content-center align-items-center d-flex">
    <form method="post" action="index.php?c=despesa&a=update&id=<?=$despesa->id?>">

        <div class="m-2">
        <label for="categoria_id">Categoria:</label><br>
        <select name="categoria_id">
            <?php foreach($categorias as $categoria){?>
                <?php if($categoria->id == $despesa->categoria->id) { ?>
                <option value="<?= $categoria->id?>" selected><?= $categoria->nome;
                    ?> </option>
                <?php }else { ?>
                <option value="<?= $categoria->id?>"> <?= $categoria->nome;
                    ?></option>
                <?php }
            } ?>
        </select>
        </div>

        <div class="m-2">
            <label for="valor">Valor da Despesa:</label>
            <input type="number" name="valor" value="<?= $despesa->valor?>">
        </div>

        <div class="m-2">
            <label for="metodopagamentos_id">Metodo de Pagamento:</label><br>
            <select name="metodopagamentos_id">
                <?php foreach($metodopagamentos as $metodopagamento){?>
                    <?php if($metodopagamento->id == $despesa->metodopagamentos_id) { ?>
                        <option value="<?= $metodopagamento->id?>" selected><?= $metodopagamento->nome;
                            ?> </option>
                    <?php }else { ?>
                        <option value="<?= $metodopagamento->id?>"> <?= $metodopagamento->nome;
                            ?></option>
                    <?php }
                } ?>
            </select>
        </div>

        <div class="m-2">
            <label for="descrica">Descricao da Despesa:</label>
            <input type="text" name="descricao" value="<?= $despesa->descricao?>">
        </div>

        <div class="m-2">
            <label for="data">Data da Despesa:</label>
            <input type="text" name="data" value="<?= $despesa->data?>">
        </div>

        <input type="hidden" name="conta_id" value="<?= $despesa->conta->id ?>">


        <div class="m-2">
            <button type="submit" class="btn btn-primary">Editar Despesa</button>
        </div>
    </form>
</div>

