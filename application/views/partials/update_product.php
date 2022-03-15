<!-- ------------------------------------------Update/add modal------------------------------------------------------------- -->
<form action="/admins/add_new_product" method="post" id="add_product">
    <div class="modal fade" id="product" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!------Upadte/add input field-------->
                    <input type="hidden" name="id"  />
                    <div class="mb-1">
                        <label for="name" class="form-label">Product Name</label>
                        <input type="text"  class="form-control" id="name" name="name"  />
                    </div>

                    <div class="mb-2">
                        <label for="Description" class="form-label">Description</label>
                        <textarea class="form-control"  id="Description" name="description" rows="3"></textarea>
                    </div>

                    <div class="row">
                        <div class="mb-1 col-6">
                            <label for="stocks" class="form-label">Inventory</label>
                            <input type="number"  class="form-control" id="stocks" name="stocks" />
                        </div>

                        <div class="mb-1 col-6">
                            <label for="price" class="form-label">Price</label>
                            <input type="number"  class="form-control" id="price" name="price" />
                        </div>
                        <!------Category Dropdown-------->
                        <div class="mb-1 col-12 dropdown">
                            <input type="hidden" name="category" id="category" val="">
                            <button class="btn btn-success dropdown-toggle w-100" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Category</button>
                            <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                                            
    
                            
                            </ul>
                        </div>

                        <div class="mb-1 col-12">
                            <label for="add_new_categ" class="form-label">Add new category</label>
                            <input type="text" class="form-control category_add"/>
                        </div>

                        <!------Images-------->
                        <div class="mb-4 col-12">
                            <label for="add_new_categ" class="form-label">images</label>
                            <input type="button" value="upload image" class="btn btn-success upload" />
                     
                        </div>
                        <ul id="sortable">
                    
                        </ul>
                        
                        
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="button" class="btn btn-success d-none" value="preview" />
                    <input type="submit" class="btn btn-primary" data-bs-dismiss="modal" value="add" />
                </div>

            </div>
        </div>
    </div>
</form>

<form class="category" action="/admins/add_category" method="post" >
    <input type="hidden" value="dasda" name="category_add"  id="add_new_categ">
</form>

<form class="edit_category" action="/admins/edit_category" method="post">
    <input type="hidden" name="category_name" class="category_name_edit">
    <input type="hidden" name="category_id" class="category_id_edit">
</form> 

<form class="del_category" action="/admins/delete_category" method="post">
    <input type="hidden" name="category_id_del" class="category_id_del">
</form> 

<?php echo form_open_multipart('admins/upload_img', 'id="file_form"');?>
    <input name="userfile" type="file" class="file_button d-none" />
</form>