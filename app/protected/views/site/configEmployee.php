<div class="panel panel-primary">
    <div class="panel-heading">
        <i class="glyphicon glyphicon-cog"></i> 
        จัดการข้อมูลพนักงาน
    </div>
    <div class="panel-body">
        <form id="formEmployee" class="form-inline">
            <div>
                <label>ชื่อ</label>
                <input type="text" name="fname" class="form-control">

                <label>นามสกุล</label>
                <input type="text" name="lname" class="form-control">
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
                <input type="text" name="user" class="form-control">

                <label>Password</label>
                <input type="password" name="pass" class="form-control">
            </div>

            <div>
                <label></label>
                <a href="#" 
                   onclick="return saveEmployee()"
                   class="btn btn-primary">
                    บันทึก
                </a>
            </div>
        </form>
    </div>
</div>