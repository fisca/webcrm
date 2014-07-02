<div class="panel panel-primary">
    <div class="panel-heading">
        <i class="glyphicon glyphicon-cog"></i>
        ประเภทลูกค้า
    </div>
    <div class="panel-body">
        <form id="formGroupCustomer" class="form-inline">
            <label>ชื่อ</label>
            <input type="text" name="name" class="form-control" 
                   style="width: 300px;">
            <input type="hidden" name="id">
            <a href="#" class="btn btn-primary" onclick="return saveGroupCustomer()">
                <i class="glyphicon glyphicon-ok"></i>
                บันทึก
            </a>
        </form>

        <table style="margin-top: 20px;" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ชื่อประเภท</th>
                    <th width="140"></th>                        
                </tr>                  
            </thead>
            <tbody>
                <?php foreach ($groupCustomers as $groupCustomer): ?>
                    <tr>
                        <td><?php echo $groupCustomer->name; ?></td>                    
                        <td>
                            <a href="#" 
                               onclick="return editGroupCustomer(<?php echo $groupCustomer->id; ?>)" 
                               class="btn btn-primary">
                                Edit
                            </a>
                            <a href="#" 
                               onclick="return deleteGroupCustomer(<?php echo $groupCustomer->id; ?>)"
                               class="btn btn-danger">
                                Delete
                            </a>                             
                        </td>                        
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>