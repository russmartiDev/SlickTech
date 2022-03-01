
<form action="/users/edit_account" method="post">
    <div class="modal fade" id="edit_profile" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Profile</h5>
                    <button type="button" data-bs-dismiss="modal" class="btn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-danger">
                            <?= $this->session->flashdata('error'); ?>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="name" class="form-label">First Name</label>
                                <input type="text" required class="form-control" id="name" name="first_name">
                            </div>

                            <div class="mb-3 col-6">
                                <label for="name" class="form-label">Last Name</label>
                                <input type="text" required class="form-control" id="name" name="last_name">
                            </div>
                            <div class="mb-3 col-12">
                                <label for="stocks" class="form-label">Email address</label>
                                <input type="text" required class="form-control" id="stocks" name="email">
                            </div>

                            <div class="mb-3 col-12">
                                <label for="stocks" class="form-label">Contact#</label>
                                <input type="number" required class="form-control" id="stocks" name="contact">
                            </div>

                            <div class="mb-3 col-12">
                                <label for="sold" class="form-label">Old password</label>
                                <input type="password" required class="form-control" id="sold" name="old_password">
                            </div>
                            
                            <div class="mb-3  col-12">
                                <label for="price" class="form-label">New password</label>
                                <input type="password" required class="form-control" id="price" name="password">
                            </div>

                            <div class="mb-3  col-12">
                                <label for="name" class="form-label">Confirm password</label>
                                <input type="password" required class="form-control" id="img" name="confirm_password">
                            </div>

                        </div>
                    
                    </div>

                    <div class="modal-footer">
                    <button type="button" data-bs-dismiss="modal" class="btn btn-secondary">Close</button>
                    <input type="submit" class="btn btn-primary">
                </div>
            </div>
        </div>
    </div>
</form>