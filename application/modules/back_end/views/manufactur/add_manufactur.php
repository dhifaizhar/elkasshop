<?php 
	$this->load->view('head_back'); 
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Elkasshop-Admin | Manufactur Data</title>
	</head>
    <div class="konten content-wrapper">
        <section class="content-header">
            <h1>
                Data | <small>Manufactur</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?PHP echo site_url('back_end');?>"><i class="fa fa-dashboard"></i> Home</a></li>
				<li>catalogue</li>
                <li><a href="<?PHP echo site_url('back_end/manufactur_view');?>"> Manufactur</a></li>
				<li class="active"><?PHP if(empty($manufactur_id)) echo 'Add'; else echo 'Update';?></li>
            </ol>
        </section>
        <section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<ul class="nav nav-tabs">
						<li class="active" >
							<a href="<?php echo base_url('#tab-general');?>" data-toggle="tab" >General</a>
						</li>
					</ul>
				</div>
				<form method="post" enctype="multipart/form-data" action="<?PHP echo site_url('back_end/manufactur'); if(empty($manufactur_id)) echo '/insert'; else echo '/update'; ?>" id="form-upload">
				<div class="col-md-6">
					<div class="pull-right">
						<button id="submit-button" type="submit" class="btn btn-primary"><i class="fa fa-file-text-o"></i> <?PHP if(empty($manufactur_id)) echo 'Save'; else echo 'Update';?></button>
						<a  href="<?PHP echo site_url('back_end/manufactur_view') ;?>"class="btn bg-orange"><i class="fa fa-reply"></i> Cancel</a>
					</div>
				</div>
			</div>
		</div>
		<div class="tab-content">
			<div class="tab-pane active" id="tab-general">
				<div class="kotak_full">	
					<div class="row form-group">
						<input type="hidden" name="manufactur_id"<?PHP if(! empty($manufactur_id)) echo ' value="'.$manufactur_id.'"'; ?> />
						
						<div class="col-sm-2 text-right">
							<label>Manufactur Name</label>
						</div>
						<div class="vert-align col-sm-10 text-left">
							<input type="text" name="manufactur_name" <?PHP if(! empty($manufactur_id)) echo ' value="'.$manufactur_name.'"'; ?>  class="form-control" placeholder="Manufactur Name" required autofocus />
						</div>	
					</div>
					<div class="row form-group">
						<div class="col-sm-2 text-right">
							<label>Upload Gambar</label>
						</div>
						<div class=" vert-align col-sm-10 text-left">
						<input data-toggle="tooltip" data-placement="bottom" title="Only JPG,PNG, and JPEG"  name="image" type="file" <?PHP if(! empty($image)) echo ' value="'.$image.'"'; ?>/>
						</div>
					</div>
					<?php if (empty($manufactur_id)) echo $error;?>
				</div>
				</form>
			</div>
		</section>
		</div>
	</div>	   
</html>

<?php 
	$this->load->view('foot_back'); 
?>

