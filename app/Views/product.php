<main class="container">
    <div class="row">
        <div class="col-6">
            <h2>Crear Producto</h2>
            <form action="/product/save" method="post" class="col-12">
                <label for="code" class="col-12">Codigo
                    <input type="text" name="code" class="form-control " placeholder="###" id="code">
                </label>
                <label for="description" class="col-12">Descripción
                    <input type="text" name="description" class="form-control" placeholder="" id="description">
                </label>
                <div class="row">
                    <label for="min" class="col-6">Min
                        <input type="number" name="min" class="form-control" placeholder="" id="min">
                    </label>
                    <label for="max" class="col-6">max
                        <input type="number" name="max" class="form-control" placeholder="" id="max">
                    </label>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary btn-block">
                        Guardar
                    </button>
                </div>

            </form>
        </div>
        <div class="col-6 pl-5">
            <h2>Ingreso de Producto</h2>
            <form action="/product/saveInput" method="post" class="col-12">
                <label for="product_id" class="col-12">Producto
                    <select name="product_id" id="product_id" class="form-control">
                        <option>Seleccionar</option>
                        <?php foreach ($this->products as $product) : ?>
                            <option value="<?php echo $product->id ?>">
                                <?php echo $product->id . '>' . $product->code . '>' . $product->description ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </label>
                <label for="amount" class="col-12">Cantidad
                    <input type="text" name="amount" class="form-control " placeholder="###" id="amount">
                </label>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary btn-block">
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="row p-5">
        <table class="table table-responsive table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Codigo</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($this->products as $product) : ?>
                    <tr>
                        <th><?php echo $product->id ?></th>
                        <th><?php echo $product->code ?></th>
                        <th><?php echo $product->description ?></th>
                        <th><?php echo $product->getAmount() ?></th>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</main>