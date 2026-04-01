<div class="row justify-content-center" style="min-height: 100vh;">
    <div class="col-md-10">
        <div class="card mt-5">
            <div class="card-header">
                <h4>Student Courses</h4>
            </div>
            <div class="card-body">
                <table id="table" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Reg. No</th>
                        <th>Student Name</th>
                        <th>Course Code</th>
                        <th>Course Title</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(isset($student_courses) && count($student_courses) > 0): ?>
                        <?php foreach($student_courses as $sc): ?>
                            <tr>
                                <td><?= $sc['reg_no'] ?></td>
                                <td><?= $sc['name_with_initials'] ?></td>
                                <td><?= $sc['course_code'] ?></td>
                                <td><?= $sc['course_title'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card mt-5">
            <div class="card-header">
                <h4>Assign Course to Student</h4>
            </div>
            <div class="card-body">
                <form method="POST">

                    <div class="row">

                        <div class="col-6">

                            <div class="form-group">
                                <label for="student_id">Student<span class="text-danger"> *</span></label>
                                <select name="student_id" class="form-control" id="student_id" required>
                                    <option value="">Choose...</option>
                                    <?php if(isset($students) && count($students) > 0): ?>
                                        <?php foreach($students as $student): ?>
                                            <option value="<?= $student['student_id'] ?>">
                                                <?= $student['reg_no'] ?> - <?= $student['name_with_initials'] ?>
                                            </option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </div>

                        </div>

                        <div class="col-6">

                            <div class="form-group">
                                <label for="course_id">Course<span class="text-danger"> *</span></label>
                                <select name="course_id" class="form-control" id="course_id" required>
                                    <option value="">Choose...</option>
                                    <?php if(isset($courses) && count($courses) > 0): ?>
                                        <?php foreach($courses as $course): ?>
                                            <option value="<?= $course['course_id'] ?>">
                                                <?= $course['course_code'] ?> - <?= $course['course_title'] ?>
                                            </option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </div>

                        </div>

                    </div>

                    <input type="hidden" name="action" id="action" value="Add" />
                    <input type="submit" name="submit" id="submit" class="btn btn-success" value="Assign Course" />

                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('#table').DataTable();
</script>
