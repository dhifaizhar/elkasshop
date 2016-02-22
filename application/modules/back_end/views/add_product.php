<?php 
	$this->load->view('head_back'); 
	
?>
<!DOCTYPE html>
<html>
<head>

    <title>Elkasshop-Admin | Product Data</title>

	<script type="text/javascript">

		function onAddTag(tag) {
			alert("Added a tag: " + tag);
		}
		function onRemoveTag(tag) {
			alert("Removed a tag: " + tag);
		}

		function onChangeTag(input,tag) {
			alert("Changed a tag: " + tag);
		}

		$(function() {

			$('#tags_1').tagsInput({width:'auto'});
			$('#tags_2').tagsInput({
				width: 'auto',
				onChange: function(elem, elem_tags)
				{
					var languages = ['php','ruby','javascript'];
					$('.tag', elem_tags).each(function()
					{
						if($(this).text().search(new RegExp('\\b(' + languages.join('|') + ')\\b')) >= 0)
							$(this).css('background-color', 'yellow');
					});
				}
			});
			$('#tags_3').tagsInput({
				width: 'auto',

				//autocomplete_url:'test/fake_plaintext_endpoint.html' //jquery.autocomplete (not jquery ui)
				autocomplete_url:'./test/fake_json_endpoint.html' // jquery ui autocomplete requires a json endpoint
			});


// Uncomment this line to see the callback functions in action
//			$('input.tags').tagsInput({onAddTag:onAddTag,onRemoveTag:onRemoveTag,onChange: onChangeTag});

// Uncomment this line to see an input with no interface for adding new tags.
//			$('input.tags').tagsInput({interactive:false});
		});

	</script>
</head>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Data | <small>Product</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?PHP echo site_url('admin');?>"><i class="fa fa-dashboard"></i> Home</a></li>
				<li>catalogue</li>
                <li class="active">product</li>
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
							<a href="<?php echo base_url('#tab-data');?>" data-toggle="tab" >Data</a>
						</li>
					</ul>
					
				</div>
				<div class="col-md-6">
				
						<div class="pull-right">
							<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> <?PHP if(empty($category_id)) echo 'Save'; else echo 'Update';?></button>
							<a  class="btn bg-orange"><i class="fa fa-reply"></i> Cancel</a>
						</div>
				</div>	
				
			</div>
		</div>
		<div class="tab-content">
			<div class="tab-pane active" id="tab-general">
			<div class="kotak">		
				<form method="post" action="<?PHP echo site_url('back_end/product'); if(empty($product_id)) echo '/insert'; else echo '/update'; ?>">
					<div class="row form-group">
						<input type="hidden" name="product_id"<?PHP if(! empty($product_id)) echo ' value="'.$product_id.'"'; ?> />
					
						<div class="col-sm-2 text-right">
							<label>Product Name</label>
						</div>
						<div class="col-sm-10 text-right">
							<input type="text" name="product_name" <?PHP if(! empty($product_id)) echo ' value="'.$product_name.'"'; ?>  class="form-control" placeholder="product Name" required autofocus />
						</div>
						
					</div>
					<div class="row form-group">
						<div class="col-sm-2 text-right">
								<label>Description</label>
							</div>
						<div class="form-group col-sm-10 col-xs-6">
									<textarea class="form-control" rows="12" id="compose-textarea" name="description"> <?PHP if(! empty($product_id)) echo $description; ?> </textarea>
								</div>
							</div>
					
					<div class="row form-group">
						<div class="col-sm-2 text-right">
								<label>Meta</label>
						</div>
					<div class="col-sm-10 text-left">
<form>					
						<p>
						<input id="tags_1" type="text" class="tags" value="Mesin Kasir,ELKASSA,Point of sale," />
							
						</p>
						</form>
					</div>
					</div>
				</form>
			</div></div>
			
			<div class="tab-pane" id="tab-data">
					<div class="kotak">	
						<div class="row form-group">
							<div class="col-md-2 text-right">
								<label>Upload Image</label>
							</div>
							<div class="col-sm-10 text-left">
								<input type="file" name="filefoto" > 
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-2 text-right">
								<label>Price</label>
							</div>
							<div class="col-sm-10 text-left">
								<input type="text" name="product_name" <?PHP if(! empty($product_id)) echo ' value="'.$product_name.'"'; ?>  class="form-control" placeholder="product Name" required autofocus />
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-2 text-right">
								<label>Quantity</label>
							</div>
							<div class="col-sm-10 text-left">
								<input type="text" name="product_name" <?PHP if(! empty($product_id)) echo ' value="'.$product_name.'"'; ?>  class="form-control" placeholder="product Name" required autofocus />
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-2 text-right">
								<label>Date Availablee</label>
							</div>
							<div class="col-sm-10 text-left">
								<div class='col-sm-5 form-group input-group date' >
									<input type="text" id="datepicker"name="tgl_lahir" class="form-control">
									<div class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</div>
								</div>
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
						<div class="row form-group">
								<div class="col-sm-2 text-right">
									<label>Category</label>
								</div>
								
								<div class="col-sm-10 text-left">
									<select class="form-control" name="status"  id="select" required class="form-control">
									<option></option>
									<?php 
							$query=mysql_query("SELECT * FROM el_category ORDER BY category_name ASC");
							while ($data=mysql_fetch_array($query)){
							echo '<option value="'.$data['category_id'].'">'.$data['category_name'].'</option>';
							}
						?>
									</select>
								</div>
								
						</div>
						<div class="row form-group">
							<div class="col-sm-2 text-right">
								<label>Manufactur</label>
							</div>
							<div class="col-sm-10 text-left">
								<input type="text" name="product_name" <?PHP if(! empty($product_id)) echo ' value="'.$product_name.'"'; ?>  class="form-control" placeholder="product Name" required autofocus />
							</div>
							</br></br></br></br></br>
							</br></br>
						</div>
					</div>	
				</div>
			</div>
        </section>
    </div>
	<footer class="bawah navbar-bottom text-center no-print">
    <p>&copy; 2016 <a href="<?PHP echo site_url();?>">ELKASSHOP</a>. All right reserved &middot; 
</footer>
</html>
<script>
    $(function () {
        //CKEDITOR.replace('#compose-textarea');
        $("#compose-textarea").wysihtml5();
    });
</script>
<script>
	$(function() {
		$( "#datepicker" ).datepicker({
			changeMonth: true,
			changeYear: true
		});
	});
	</script>
<script>




 
 