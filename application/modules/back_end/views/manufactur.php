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
                <li><a href="<?PHP echo site_url('admin');?>"><i class="fa fa-dashboard"></i> Home</a></li>
				<li>catalogue</li>
                <li class="active">manufactur</li>
            </ol>
        </section>

        <section class="content">

           <div class="table-responsive">
				<div class="col-md-6 text-left"><h4><span class="fa fa-list"></span> Manufactur List</h4></div>
				<div class="col-md-6 text-right">
					 <a  href="<?PHP echo site_url('admin/add_form'); ?>" class="btn btn-primary"  cltitle="Add"><span class="glyphicon glyphicon-plus"></span> Add Data</a>
				</div>
					<br/><br/>
				<div class="kotak">		
            <table id="tables" class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Manufactur Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="text-center">
							<a href="" class="btn btn-info fa fa-pencil" onclick="if(confirm('Ubah data Admin ini?')) return true; else return false;" title="ubah"></a>
							&nbsp;
							<a href="" class="btn btn-danger fa fa-trash" onclick="if(confirm('Apakah Anda yakin akan menghapus data?')) return true; else return false;" title="hapus"></a>
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