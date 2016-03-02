<!DOCTYPE html>
<html>
	<head>
		<title>Elkasshop-Admin | Manufactur Data</title>
	</head>
	<div class="content-wrapper">
        <section class="content-header">
            <h1>
                Data | <small>Manufactur</small>
            </h1>
            <ol class="breadcrumb">
               <li><a href="<?PHP echo site_url('back_end');?>"><i class="fa fa-dashboard"></i> Home</a></li>
				<li>catalogue</li>
                <li class="active">manufactur</li>
            </ol>
        </section>
        <section class="content">
           <div class="table-responsive">
				<div class="col-md-6 text-left"><h4><span class="fa fa-list"></span> Manufactur List</h4></div>
				<div class="col-md-6 text-right">
					 <a  href="<?PHP echo site_url('back_end/manufactur');; ?>" class="btn btn-primary"  cltitle="Add"><span class="glyphicon glyphicon-plus"></span> Add Data</a>
				</div>
				<br/><br/>
				<div class="kotak">		
					<table class="table table-hover table-striped table-bordered">
						<thead>
							<tr>
								<th>Image</th>
								<th>Manufactur Name</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?PHP
								$query = $this->manufactur_m->view();
								foreach($query->result() as $row) {		
							?>
							<tr>
								<td class="text-center">
									<img class=" img-responsive img-thumbnail" src="<?php echo assets_url();?>images/manufactur_img/<?php echo $row->image ;?>" /></td>
								<td class="vert-align"><?PHP echo $row->manufactur_name; ?></td>
								<td class="vert-align text-center">
									<a href="<?PHP echo site_url();?>back_end/manufactur/view_edit/<?PHP echo $row->manufactur_id; ?>" " class="btn btn-info fa fa-pencil" onclick="if(confirm('Ubah data ini?')) return true; else return false;"  data-toggle="tooltip" data-placement="bottom" title="Edit"></a>
									&nbsp;
									<a href="<?php echo site_url();?>back_end/manufactur/delete/<?PHP echo $row->manufactur_id; ?>" class="btn btn-danger fa fa-trash" onclick="if(confirm('Apakah Anda yakin akan menghapus data?')) return true; else return false;"  data-toggle="tooltip" data-placement="bottom" title="Delete"></a>
								</td>
							</tr>
							<?PHP }if(! $query->num_rows()) { ?>
								<td colspan="9" align="center">Tidak ada data</td>
							<?PHP } ?>	
						</tbody>
					</table>
				</div>
        </section>
		</div>
	</div>
</html>

<script type="text/javascript">
    $(document).ready(function() {
        $(".table").dataTable(
            { "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]] }
        );
    });
</script>