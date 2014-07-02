<div class="panel panel-primary">
    <div class="panel-heading"><i class="glyphicon glyphicon-cog"></i> ประเภทการติดต่อ</div>
    <div class="panel-body">
        <form id="formVisitType" class="form-inline">
            <label>ชื่อ</label>
            <input type="text" name="name" class="form-control" size="50">
            <input type="hidden" name="id">
            <a href="#" onclick="return saveConfigVisitType()" class="btn btn-primary">
                <i class="glyphicon glyphicon-ok"></i> 
                บันทึก
            </a>
        </form>

        <table style="margin-top: 20px;" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ชื่อ</th>
                    <th width="140"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($visitTypes as $visitType) : ?>
                    <tr>
                        <td><?php echo $visitType->name; ?></td>
                        <td>
                            <a href="#" onclick="return editVisitType(<?php echo $visitType->id; ?>)" class="btn btn-primary">
                                Edit
                            </a>
                            <a href="#" onclick="return deleteVisitType(<?php echo $visitType->id; ?>)" class="btn btn-danger">
                                Delete
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>