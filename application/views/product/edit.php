<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
    <div class="header-body">
        <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0"><?php echo $name ?></h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>productos">Productos</a></li>
                <li class="breadcrumb-item active"><?php echo $name ?></li>
            </ol>
            </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
            <a href="<?php echo base_url(); ?>productos" class="btn btn-sm btn-neutral">Volver</a>
        </div>
        </div>
    </div>
    </div>
</div>

<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-8 order-xl-1">
            <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Actualice los datos</h3>
                        <?php print_r(form_error("name")); ?>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="<?php echo base_url();?>producto/update/<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
                    

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Código de barras</label>
                                <input type="text" name="barcode" class="form-control <?php echo form_error('barcode') ? 'is-invalid':''?>" placeholder="Valor del codigo de barras"  value="<?php echo form_error('barcode') ? set_value('barcode'): $barcode; ?>">
                                <div class="invalid-feedback"><?php echo form_error('barcode'); ?></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Categoria</label>
                                <select id="category" name="categoryId" class="form-control">
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Nombre</label>
                        <input type="text" name="name" class="form-control <?php echo form_error('name') ? 'is-invalid':''?>" placeholder="Nombre del producto"  value="<?php echo form_error('name') ? set_value('name') : $name; ?>">
                        <div class="invalid-feedback"><?php echo form_error('name'); ?></div>
                    </div>

                    <div class="form-group">
                        <label class="form-control-labe">Descripción</label>
                        <textarea rows="4" name="description" class="form-control <?php echo form_error('description') ? 'is-invalid':''?>" placeholder="Descripión de la categoría"><?php echo  form_error('description') ? set_value('description') : $description; ?></textarea>
                        <div class="invalid-feedback"><?php echo form_error('description'); ?></div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Precio</label>
                                <input type="text" name="price" class="form-control <?php echo form_error('price') ? 'is-invalid':''?>" placeholder="Precio del producto"  value="<?php echo form_error('price') ? set_value('price') : $price; ?>">
                                <div class="invalid-feedback"><?php echo form_error('price'); ?></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Stock</label>
                                <input type="text" name="stock" class="form-control <?php echo form_error('stock') ? 'is-invalid':''?>" placeholder="Stock del producto"  value="<?php echo form_error('stock') ? set_value('stock') : $stock; ?>">
                                <div class="invalid-feedback"><?php echo form_error('stock'); ?></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-success mt-4">Guardar</button>
                    </div>  
                
                </form>
            </div>
            </div>
        </div>

       
    </div>
