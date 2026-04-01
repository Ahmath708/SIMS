<div class="row justify-content-center" style="min-height: 100vh;">
    <div class="col-md-8 col-lg-6">
        <div class="card mt-5">
            <div class="card-header">
                <h4>Create New Course</h4>
            </div>
            <div class="card-body">
                <form method="POST">
                    
                    <div class="form-group">
                        <label for="course_code">Course Code<span class="text-danger"> *</span></label>
                        <input type="text" name="course_code" class="form-control" id="course_code" required>
                    </div>

                    <div class="form-group">
                        <label for="course_title">Course Title<span class="text-danger"> *</span></label>
                        <input type="text" name="course_title" class="form-control" id="course_title" required>
                    </div>

                    <div class="form-group">
                        <label for="credits">Credits<span class="text-danger"> *</span></label>
                        <input type="number" name="credits" class="form-control" id="credits" required>
                    </div>

                    <input type="hidden" name="action" id="action" value="Add" />
                    <input type="submit" name="submit" id="submit" class="btn btn-success" value="Add Course" />
                    
                </form>
            </div>
        </div>
    </div>
</div>
