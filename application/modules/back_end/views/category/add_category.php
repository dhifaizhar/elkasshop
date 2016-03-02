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
							<textarea class="form-control" rows="12" id="compose-textarea" name="description" required> <?PHP if(! empty($category_id)) echo $description; ?>  </textarea>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-sm-2 text-right">
							<label>Status</label>
						</div>
						<div class="col-sm-10 text-left">
							<select class="form-control" name="status"  id="select" required class="form-control">
								<?php
								if(! empty($category_id)&&($status=="1")){
									echo '<option value="1" selected>Enabled</option>';
									echo '<option value="0">Disabled</option>';
								}
								else if(! empty($category_id)&&($status=="0")){
									echo '<option value="1" >Enabled</option>';
									echo '<option value="0" selected>Disabled</option>';
								}
								else
									echo '
									<option value="1">Enabled</option>
									<option value="0">Disabled</option>'	
								?>
							</select>
						</div>
					</div>	
				</div>
			</div>						
			<div class="tab-pane" id="tab-link">
				<div class="kotak_full">	
					<div class="row form-group">
						<div class="col-sm-2 text-right">
							<label>Parent</label>
						</div>
						<div class="col-sm-10 text-left">
							<select class="form-control" name="category_parent"  id="select" required class="form-control">
								<?php
								if(! empty($category_id) && $parent !==0){
									$parent=$category_parent;
									$q=mysql_query("SELECT * FROM el_category WHERE category_id='".$parent."'");
									while($d=mysql_fetch_array($q))	{
									
									$query=mysql_query("SELECT * FROM el_category ORDER BY category_name ASC");
									echo '<option value="0" >Induk</option>';
									while ($data=mysql_fetch_array($query)){
										if($d['category_id']==$data['category_id'])
										{
											
											echo '<option value="'.$data['category_id'].'" selected>'.$data['category_name'].'</option>';
											
										}								
										else 			
											echo '<option value="'.$data['category_id'].'" >'.$data['category_name'].'</option>';		
										}
									}										
								}
								if(($parent)==0 ){											
									$query=mysql_query("SELECT * FROM el_category ORDER BY category_name ASC");
									echo '<option value="0" selected>Induk</option>';
									while ($da=mysql_fetch_array($query)){
										echo '<option value="'.$da['category_id'].'" >'.$da['category_name'].'</option>';	
									}
								}
								?>
							</select>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-sm-2 text-right">
							<label>Level</label>
						</div>
						<div class="col-sm-10 text-left">
							<select class="form-control" name="level"  id="select" required class="form-control">
								<?php if(! empty($category_id)&&($level==0))
									{
										echo '<option value="0" selected>Tingkat Induk</option>';
										echo '<option value="1">Tingkat 1</option><option value="2">Tingkat 2</option>';
									}
									else if(! empty($category_id)&&($level==1))
									{
										echo '<option value="0">Tingkat Induk</option>';
										echo '<option value="1" selected>Tingkat 1</option><option value="2">Tingkat 2</option>';
									}
									else if(! empty($category_id)&&($level==2))
									{
										echo '<option value="0">Tingkat Induk</option>';
										echo '<option value="1">Tingkat 1</option><option value="2" selected>Tingkat 2</option>';
									}
									else
										echo
										'
										<option value="0">Tingkat Induk</option>
										<option value="1">Tingkat 1</option>
										<option value="2">Tingkat 2</option>'
									?>					
							</select>
						</div>
					</form>
					</div>
				</div>
			</div>
		</section>
		</div>
	</div>    
</html>

<script>
    $(function () {
        //CKEDITOR.replace('#compose-textarea');
        $("#compose-textarea").wysihtml5();
    });
</script>

