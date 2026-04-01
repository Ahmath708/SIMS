<div class="row justify-content-center" style="min-height: 100vh;">
    <div class="col-md-10">
        <div class="card mt-5">
            <div class="card-header">
                <h4>View Students</h4>
            </div>
            <div class="card-body">
                <table id="table" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Registration Number</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Name with Initials</th>
                        <th>NIC</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(isset($students) && count($students) > 0): ?>
                        <?php foreach($students as $student): ?>
                            <tr>
                                <td><?= $student['student_id'] ?></td>
                                <td><?= $student['reg_no'] ?></td>
                                <td><?= $student['first_name'] ?></td>
                                <td><?= $student['last_name'] ?></td>
                                <td><?= $student['name_with_initials'] ?></td>
                                <td><?= $student['nic'] ?></td>
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
