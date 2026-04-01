<div class="row justify-content-center" style="min-height: 100vh;">
    <div class="col-md-8 col-lg-6">
        <div class="card mt-5">
            <div class="card-header">
                <h4>Create New Student</h4>
            </div>
            <div class="card-body">
                <form method="POST">
                    
                    <div class="form-group">
                        <label for="reg_no">Registration Number<span class="text-danger"> *</span></label>
                        <input type="text" name="reg_no" class="form-control" id="reg_no" required>
                    </div>

                    <div class="form-group">
                        <label for="first_name">First Name<span class="text-danger"> *</span></label>
                        <input type="text" name="first_name" class="form-control" id="first_name" required>
                    </div>

                    <div class="form-group">
                        <label for="last_name">Last Name<span class="text-danger"> *</span></label>
                        <input type="text" name="last_name" class="form-control" id="last_name" required>
                    </div>

                    <div class="form-group">
                        <label for="name_with_initials">Name with Initials<span class="text-danger"> *</span></label>
                        <input type="text" name="name_with_initials" class="form-control" id="name_with_initials" required>
                    </div>

                    <div class="form-group">
                        <label for="nic">NIC Number<span class="text-danger"> *</span></label>
                        <input type="text" name="nic" class="form-control" id="nic" required>
                    </div>

                    <input type="hidden" name="action" id="action" value="Add" />
                    <input type="submit" name="submit" id="submit" class="btn btn-success" value="Add Student" />
                    
                </form>
            </div>
        </div>
    </div>
</div>
