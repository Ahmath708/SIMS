<div class="row justify-content-center" style="min-height: 100vh;">
    <div class="col-md-10">
        <div class="card mt-5">
            <div class="card-header">
                <h4>View Courses</h4>
            </div>
            <div class="card-body">
                <table id="table" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Course ID</th>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Credits</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(isset($courses) && count($courses) > 0): ?>
                        <?php foreach($courses as $course): ?>
                            <tr>
                                <td><?= $course['course_id'] ?></td>
                                <td><?= $course['course_code'] ?></td>
                                <td><?= $course['course_title'] ?></td>
                                <td><?= $course['credits'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $('#table').DataTable();
</script>
