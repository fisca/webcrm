<div class="panel panel-primary">
    <div class="panel-heading">
        <i class="glyphicon glyphicon-cog"></i> 
        จัดการข้อมูลพนักงาน
    </div>
    <div class="panel-body">
        <form id="formEmployee" class="form-inline">
            <div>
                <label>ชื่อ</label>
                <input type="text" name="fname" class="form-control" required>

                <label>นามสกุล</label>
                <input type="text" name="lname" class="form-control" required>
            </div> 

            <div>
                <label>เพศ</label>
                <input type="radio" name="gender" value="m"> ชาย
                <input type="radio" name="gender" value="f"> หญิง
            </div>

            <div>
                <label>เบอร์โทร</label>
                <input type="text" name="tel" class="form-control">

                <label>อีเมล</label>
                <input type="text" name="email" class="form-control">
            </div>

            <div>
                <label>Username</label>
                <input type="text" name="user" class="form-control" required>

                <label>Password</label>
                <input type="password" name="pass" class="form-control" required>
            </div>

            <div>
                <label></label>
                <a href="#" 
                   onclick="return saveEmployee()"
                   class="btn btn-primary">
                    <i class="glyphicon glyphicon-ok"></i> 
                    บันทึก
                </a>
            </div>
        </form>

        <table class="table table-bordered table-striped" style="margin-top: 20px;">
            <thead>
                <tr>
                    <th>เพศ</th>
                    <th>ชื่อ</th>
                    <th>เบอร์โทร</th>
                    <th>email</th>
                    <th>username</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee): ?>
                    <tr>
                        <td>
                            <?php echo $employee->getGender(); ?>
                        </td>
                        <td>
                            <?php echo $employee->fname; ?>
                            <?php echo $employee->lname; ?>
                        </td>
                        <td><?php echo $employee->tel; ?></td>
                        <td><?php echo $employee->email; ?></td>
                        <td><?php echo $employee->user; ?></td>
                        <td width="140">
                            <a href="#" class="btn btn-primary" 
                               onclick="editEmployee(<?php echo $employee->id ?>)">
                                Edit
                            </a>
                            <a href="#" class="btn btn-danger" 
                               onclick="deleteEmplyee(<?php echo $employee->id ?>)">
                                Delete
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>