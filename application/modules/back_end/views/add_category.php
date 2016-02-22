<?php 
	$this->load->view('head_back'); 
	
?>
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
                <li><a href="<?PHP echo site_url('back_end/categories');?>"> category</a></li>
				<li class="active"><?PHP if(empty($category_id)) echo 'Add'; else echo 'Update';?></li>
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
						<li>
							<a href="<?php echo base_url('#tab-link');?>" data-toggle="tab" >Link</a>
						</li>
					</ul>
				</div>
				<form method="post" action="<?PHP echo site_url('back_end/category'); if(empty($category_id)) echo '/insert'; else echo '/update'; ?>">
				<div class="col-md-6">
						<div class="pull-right">
							<button type="submit" class="btn btn-primary"><i class="fa fa-file-text-o"></i> <?PHP if(empty($category_id)) echo 'Save'; else echo 'Update';?></button>
							<a  href="<?PHP echo site_url('back_end/categories') ;?>"class="btn bg-orange"><i class="fa fa-reply"></i> Cancel</a>
						</div>
				</div>
			</div>
		</div>
				<div class="tab-content">
					<div class="tab-pane active" id="tab-general">
							<div class="kotak">	
									<div class="row form-group">
										<input type="hidden" name="category_id"<?PHP if(! empty($category_id)) echo ' value="'.$category_id.'"'; ?> />
										<div class="col-sm-2 text-right">
											<label>Category Name</label>
										</div>
										<div class="col-sm-10 text-left">
											<input type="text" name="category_name" <?PHP if(! empty($category_id)) echo ' value="'.$category_name.'"'; ?>  class="form-control" placeholder="Category Name" required autofocus />
										</div>	
									</div>
									<div class="row form-group">
										<div class="col-sm-2 text-right">
											<label>Description</label>
										</div>
										<div class="form-group col-sm-10 col-xs-6">
											<textarea class="form-control" rows="12" id="compose-textarea" name="description"> <?PHP if(! empty($category_id)) echo $description; ?> </textarea>
										</div>
									</div>
									<div class="row form-group">
										<div class="col-sm-2 text-right">
											<label>Status</label>
										</div>
										<div class="col-sm-10 text-left">
											<select class="form-control" name="status"  id="select" required class="form-control">
												<option value="Enabled">Enabled</option>
												<option value="Disabled">Disabled</option>
											</select>
										</div>
									</div>	
								</div>
							</div>
						</div>
						<div class="tab-content">
							<div class="tab-pane active" id="tab-general">
							</div>
						</div>
					</div>
				</form>
            </div>
        </section>
    </div>
</html>
<script>
    $(function () {
        //CKEDITOR.replace('#compose-textarea');
        $("#compose-textarea").wysihtml5();
    });
</script>
<?php 
	$this->load->view('foot_back'); 
?>