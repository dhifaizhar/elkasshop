<!DOCTYPE html>

<html>
<head>
    <title>Elkasshop-Admin | Order Report</title>
</head>

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Report | <small>Order</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?PHP echo site_url('admin');?>"><i class="fa fa-dashboard"></i> Home</a></li>
				<li>sales</li>
                <li class="active">order</li>
            </ol>
        </section>

        <section class="content">

           <div class="table-responsive">
				<div class="col-md-6 text-left"><h4><span class="fa fa-list"></span> Order List</h4></div>
				<div class="col-md-6 text-right">
					 <a  href="<?PHP echo site_url('admin/add_form'); ?>" class="btn bg-red"  cltitle="Add"><span class="fa fa-file-pdf-o"></span> <span class="hidden-xs">Export PDF</span></a>
					 <a  href="<?PHP echo site_url('admin/add_form'); ?>" class="btn bg-green"  cltitle="Add"><span class="fa fa-file-excel-o"></span> Export Excel</a>
					  <a  href="<?PHP echo site_url('admin/add_form'); ?>" class="btn bg-orange"  cltitle="Add"><span class="fa fa-print"></span> Print Priview</a>
				</div>
					<br/><br/>
				<div class="kotak">		
            <table id="tables" class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Status</th>
                    <th>Total</th>
                    <th>Data Added</th>
                    <th>Data Modified</th>
                    
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