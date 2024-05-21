<h2 class="text-left top-space">Create New Account</h2>
<h2 class="top-space"></h2>

<div class="justify-content-center align-items-center d-flex">
    <form method="post" action="index.php?c=conta&a=store">

        <div class="mb-3">
            <label for="contaNumero" class="form-label">Numero da Conta:</label>
            <input type="text" name="numconta" class="form-control w-auto">
            <?php if(isset($conta->errors)){ echo $conta->errors->on('numconta'); }?>
        </div>

        <div class="mb-3">
            <label for="contaTitulo" class="form-label">Titulo da Conta:</label>
            <input type="text" name="titulo" class="form-control w-auto">
            <?php if(isset($conta->errors)){ echo $conta->errors->on('titulo'); }?>
        </div>

        <div class="mb-3">
            <label for="contaNIB" class="form-label">NIB da Conta:</label>
            <input type="text" name="nib" class="form-control w-auto">
            <?php if(isset($conta->errors)){ echo $conta->errors->on('nib'); }?>
        </div>

        <div class="mb-3">
            <label for="contaEmail" class="form-label">Email da Conta:</label>
            <input type="text" name="email" class="form-control w-auto">
            <?php if(isset($conta->errors)){ echo $conta->errors->on('email'); }?>
        </div>


        <button type="submit" class="btn btn-primary">Create New Account</button>

    </form>
</div>

</div>
<div class="col-sm-6">
    <h3>Return to Index</h3>
    <p>
        <a href="index.php?c=conta&a=index" class="btn btn-info"
           role="button">Return</a>
    </p>
</div>