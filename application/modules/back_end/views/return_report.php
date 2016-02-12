<!DOCTYPE html>

<html>
<head>
    <title>Elkasshop-Admin | Return Data</title>
</head>

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Data | <small>Return</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?PHP echo site_url('admin');?>"><i class="fa fa-dashboard"></i> Home</a></li>
				<li>sales</li>
                <li class="active">return</li>
            </ol>
        </section>

        <section class="content">

           <div class="table-responsive">
				<div class="col-md-6 text-left"><h4><span class="fa fa-list"></span> Return List</h4></div>
				<div class="col-md-6 text-right">
					 <a  href="<?PHP echo site_url('admin/add_form'); ?>" class="btn btn-primary"  cltitle="Add"><span class="glyphicon glyphicon-plus"></span> Add Data</a>
				</div>
					<br/><br/>
				<div class="kotak">		
            <table id="tables" class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>Return ID</th>
					<th>Order ID</th>
                    <th>Customer</th>
                    <th>Product</th>
                    <th>Model</th>
                    <th>Status</th>
                    <th>Data Added</th>
					<th>Data Modified</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
						<td></td>
                        <td></td>
                        <td class="text-center">
									<a href="" class="btn bg-aqua fa fa-eye"  title="View"></a>
									<a href="" class="btn bg-blue fa fa-pencil" onclick="if(confirm('Ubah data Admin ini?')) return true; else return false;" title="Edit"></a>
									<a href="" class="btn btn-danger fa fa-trash" onclick="if(confirm('Apakah Anda yakin akan menghapus data?')) return true; else return false;" title="Delete"></a>
						</td>
                    </tr>
                    <tr>
                        <td colspan="8" align="center">Tidak ada data</td>
                    </tr>
               </tbody>
            </table>
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
        $("#tables").dataTable(
            { "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]] }
        );
    });
</script>