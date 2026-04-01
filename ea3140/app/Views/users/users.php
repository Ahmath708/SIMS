
<div class="card">

    <div class="card-header">

        <div class="row">

            <div class="col-9" style="text-align: right; vertical-align: middle;">

                <h3 class="card-title"><b>Users</b></h3>

            </div>

            <div class="col-3" style="text-align: right; vertical-align: middle;">


            </div>

        </div>

    </div>

    <div class="card-body">

        <div>

            <table id="table" class="display" style="text-align:center;">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>NIC</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach ($users as $user) {
                    echo "<tr>";
                    echo "<td>" . $user['user_id'] . "</td>";
                    echo "<td>" . $user['firstname'] . "</td>";
                    echo "<td>" . $user['lastname'] . "</td>";
                    echo "<td>" . $user['email'] . "</td>";
                    echo "<td>" . $user['nic'] . "</td>";
                    echo "</tr>";
                }?>

                </tbody>

            </table>

        </div>

    </div>

</div>