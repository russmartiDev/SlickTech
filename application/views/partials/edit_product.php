<!-- ------------------------------------------Update/add modal------------------------------------------------------------- -->
<form action="/admins/update_product" method="post" id="product_update">
    <div class="modal fade" id="edit_product" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!------Upadte/add input field-------->
                    <input type="hidden" name="edit_id" id="edit_prd_id"  />
                    <div class="mb-1">
                        <label for="name" class="form-label">Product Name</label>
                        <input type="text"  class="form-control" id="edit_name" name="name"  />
                    </div>

                    <div class="mb-2">
                        <label for="Description" class="form-label">Description</label>
                        <textarea class="form-control"  id="edit_description" name="description" rows="3"></textarea>
                    </div>

                    <div class="row">
                        <div class="mb-1 col-6">
                            <label for="stocks" class="form-label">Inventory</label>
                            <input type="number"  class="form-control" id="edit_stocks" name="stocks" />
                        </div>

                        <div class="mb-1 col-6">
                            <label for="price" class="form-label">Price</label>
                            <input type="number"  class="form-control" id="edit_price" name="price" />
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
                                <li class='row align-items-center ui-state-default'>
                                    <i class='handle fas fa-bars col-1'></i>
                                    <div class='col-4'>
                                        <div class='img_container'>
                                            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt='mouse' />
                                        </div>
                                    </div>
                                    <p class='col-3'>img.png</p>
                                    <i class='fas fa-trash col-1'></i>
                                    <input class='col-1' type='checkbox' />
                                    <p class='col-1 m-0 p-0'>main</p>
                                </li>

                                <li class='row align-items-center ui-state-default'>
                                    <i class='handle fas fa-bars col-1'></i>
                                    <div class='col-4'>
                                        <div class='img_container'>
                                            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt='mouse' />
                                        </div>
                                    </div>
                                    <p class='col-3'>img.png</p>
                                    <i class='fas fa-trash col-1'></i>
                                    <input class='col-1' type='checkbox' />
                                    <p class='col-1 m-0 p-0'>main</p>
                                </li>

                                <li class='row align-items-center ui-state-default'>
                                    <i class='handle fas fa-bars col-1'></i>
                                    <div class='col-4'>
                                        <div class='img_container'>
                                            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt='mouse' />
                                        </div>
                                    </div>
                                    <p class='col-3'>img.png</p>
                                    <i class='fas fa-trash col-1'></i>
                                    <input class='col-1' type='checkbox' />
                                    <p class='col-1 m-0 p-0'>main</p>
                                </li>

                                <li class='row align-items-center ui-state-default'>
                                    <i class='handle fas fa-bars col-1'></i>
                                    <div class='col-4'>
                                        <div class='img_container'>
                                            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80" alt='mouse' />
                                        </div>
                                    </div>
                                    <p class='col-3'>img.png</p>
                                    <i class='fas fa-trash col-1'></i>
                                    <input class='col-1' type='checkbox' />
                                    <p class='col-1 m-0 p-0'>main</p>
                                </li>

                                
                            </ul>
                        
                        
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a id="preview" href="http://slicktech.com/products/show/"><input type="button" class="btn btn-success" value="preview" /></a>
                    <input type="submit" class="btn btn-primary" data-bs-dismiss="modal" value="Edit" />
                </div>

            </div>
        </div>
    </div>
</form>