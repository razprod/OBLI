

<?php if ($this->session->flashdata('status')) { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong><?php echo $this->session->flashdata('status'); ?></strong>
            </div>
        </div>
    </div>
<?php } ?>
<?php if ($this->session->flashdata('error')) { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong><?php echo $this->session->flashdata('error'); ?></strong>
            </div>
        </div>
    </div>
<?php } ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">
            Partner List
        </div>
         <div class="panel-options">
            <a href="<?php echo site_url('index.php/admin/add_partner'); ?>" class="btn btn-turquoise fa-plus-circle" style="color: #fff;">
                Add Partner
            </a> 
        </div> 
    </div>
    <div id="slider_images_list" class="panel-body table-responsive">

        <script type="text/javascript">

            jQuery(document).ready(function ($)

            {

                $("#example-1").dataTable({

                    aLengthMenu: [

                        [5, 10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]

                    ]

                });

                

            });

        </script>
        <table id="example-1" class="table table-striped table-bordered" cellspacing="0" width="100%">

            <thead>

                <tr>

                    <th>S.No.</th>
                    <th>Name</th>
                    <th>Created Date</th>
                    <th>Action</th>

                </tr>

            </thead>

            <tbody>
                <?php if (!empty($partner_list)) {
                    $n = 1;
                    foreach ($partner_list as $value) {
                        ?>

                        <tr>
                            <td><?php echo $n; ?></td>
                            <td><?php echo $value->name; ?></td>
                           
                            <td><?php $date = date("d M Y h:i A", strtotime($value->created_at)); echo $date; ?></td>
                            
                            <td width="30%">
                                
                                <?php $status = $value->status; ?>

                                <?php if ($status == 1) { ?>
                                <a href="<?php echo site_url('index.php/admin/change_status') . '/id/' . $value->id; ?>/partners/status/2/partner_list" class="btn btn-secondary btn-sm btn-icon icon-left" data-toggle="tooltip" data-placement="right" title="Click to Deactive!"><i class="fa fa-check"></i></a>
                                <?php } elseif ($status == 2) { ?>

                                <a href="<?php echo site_url('index.php/admin/change_status') . '/id/' . $value->id; ?>/partners/status/1/partner_list" class="btn btn-warning btn-sm btn-icon icon-left" data-toggle="tooltip" data-placement="right" title="Click to Active!"><i class="fa fa-exclamation"></i></a>
                                <?php } ?>

                                
                                <a href="<?php echo site_url('index.php/admin/edit_partner') . '/' . $value->id; ?>" class="btn btn-blue btn-sm btn-icon icon-left" data-toggle="tooltip" data-placement="right" title="Edit"><i class="fa fa-pencil"></i></a>
                                

                                <a onClick="if(!confirm('Are you sure, You want to delete this partner?')){return false;}" href="<?php echo site_url('index.php/admin/delete') . '/delete_partner/partners/id/' . $value->id; ?>" class="btn btn-danger btn-sm btn-icon icon-left" data-toggle="tooltip" data-placement="right" title="Delete"><i class="fa fa-trash"></i></a>

                            </td>
                        </tr>

                <?php $n = $n + 1; } } ?>

            </tbody>

        </table>

    </div>
</div>