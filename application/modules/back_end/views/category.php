<!DOCTYPE html>
<html>
<head>
    <title>Elkasshop-Admin | Category Data</title>
</head>

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Data | <small>Category</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?PHP echo site_url('back_end');?>"><i class="fa fa-dashboard"></i> Home</a></li>
				<li>catalogue</li>
                <li class="active">catagory</li>
            </ol>
        </section>			
        <section class="content">
           <div class="table-responsive">
				<div class="col-md-6 text-left"><h4><span class="fa fa-list"></span> Category lIst</h4></div>
				<div class="col-md-6 text-right">
					 <a  href="<?PHP echo site_url('back_end/category'); ?>" class=" btn btn-primary"  title="Add Data"><span class="glyphicon glyphicon-plus"></span> Add Data</a>
				</div><br/><br/>
			<div class="kotak">		
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>Category Name</th>
							<th>Parent</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>				
					<tbody>
					<?PHP
						$query = $this->category_m->view();
						foreach($query->result() as $row) {
					?>
						<tr>
							<td><?PHP echo $row->category_name; ?></td>
							<td><?PHP 
							
							$parent= $row->category_parent; 
							if($parent !=0){
								$q=mysql_query("SELECT * FROM el_category WHERE category_id='".$parent."'");
								while($d=mysql_fetch_array($q))	{
									echo $d['category_name'];
								}
							}
							else echo "Induk";
							?>
							
							</td>
							<td>
							<?PHP if($row->status==0){
								echo "Disabled";
							}
							else echo "Enabled";
								?></td>
							<td class="text-center">
								<a href="<?php echo site_url();?>back_end/category/view_edit/<?PHP echo $row->category_id; ?>" class="btn btn-info fa fa-pencil" onclick="if(confirm('Ubah data ini?')) return true; else return false;" title="ubah"></a>
								&nbsp;
								<a href="<?php echo site_url();?>back_end/category/delete/<?PHP echo $row->category_id; ?>" class="btn btn-danger fa fa-trash" onclick="if(confirm('Apakah Anda yakin akan menghapus data?')) return true; else return false;" title="hapus"></a>
							</td>
						</tr>
						<?PHP }
						if(! $query->num_rows()) { ?>
								<td colspan="9" align="center">Tidak ada data</td>
						<?PHP } ?>	
					</tbody>
				</table>
            </div>
          </div>
	</section>
 </div>
</html>
<style type="text/css">
    th{
        text-align: center;
    }
</style>
<script type="text/javascript">
    $(document).ready(function() {
        $("table").dataTable({
			"lengthMenu": [[10, 15, 25, 50, -1], [10, 15, 25, 50, "All"]]
		});
    });
</script>


