<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Polish Your Skills With Bootstap and JQuery</title>
	<!-- 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	-->
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
  <body>
	<div class="container">
		<form id="newform" name="newform" enctype="multipart/form-data" class="form-horizontal" action="upload.php" method="post">			
			<div class="panel panel-success">
				<div class="panel-heading">Polish Your Skills With Bootsrtap and JQuery</div>
			</div>
			<!--<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Panel title</h3>
				</div>
			</div>-->			
			<div class="panel-body">
				<div class "row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
								<div class="panel-body" 
								<label>Upload File</label>
								<input class="form-control" type="file" name="myfile"accept="image/gif, image/jpeg">
							</div>
							<br/>
							<div class="row">
								<div class="col-md-6"><img width="216" height="180" alt="No file selected" id="imgpreview" name="imgpreview" src="" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="panel-footer">				
				<div class="btn-group">
					<button type="submit"class="btn btn-md btn-primary">Submit</button>
					<button type="reset" class="btn btn-md btn-reset">Cancel</button>
				</div>
			</div>
		</form>
	</div>
</body>

<script src="js/jquery-3.2.0.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript"></script>
<script type= "text/javascript">

	$(document).ready(function(){
		//alert('Page loaded succesfully');
		$('#myfile').on('change', function(){
			readURL(this);
		});		
		$('#btnreset').on('click', function(){
			var f=document.getElementById('newform');
			f.reset();
			$('#imgpreview').attr('src','');
		});
	});
	function readURL(input){
		if (input.files && input.files[0]){
			var reader = new FileReader();
			reader.onload = function (e){
				//document.getElementById(ímgpreview).src=e.target.result);
				$('#imgpreview').attr('src', e.target.result);			
			}
			reader.readAsDataURL(input.files[0]);
		}
	}
</script>
</html>
