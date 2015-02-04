<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type='text/css' href='assets/bootstrap.min.css'>
	<link rel='stylesheet' type='text/css' href='stylesheet.css'/>
</head>
<body>
	<div class="wrapper">
		<form class="form-horizontal">
			<div class="form-group">
				<label for="labels" class="col-sm-2 control-label">Labels</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="label" placeholder="label" data-bind="value:newLabel.label">
				</div>
				<div class="col-sm-2">
					<button type="submit" class="btn btn-success" data-bind="click:addLabel">Add Label</button>
				</div>
				<div class="col-sm-2">
					<button type="reset" class="btn btn-danger" data-bind="click:$root.removeLabels">Remove All</button>
				</div>
			</div>
			<ul>
				<!-- ko foreach: labels -->
					<li class="label label-info"> 
						<span class= "glyphicon glyphicon-minus"></span>
						<span data-bind="text:label"></span> 
					</li>
				<!-- /ko -->
			</ul>



			<div class="form-group">
				<label for="hobbies" class="col-sm-2 control-label">Hobbies</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="hobbies" placeholder="hobby">
				</div>
				<div class="col-sm-2">
					<button type="submit" class="btn btn-success">Add Hobby</button>
				</div>
				<div class="col-sm-2">
					<button type="reset" class="btn btn-danger">Remove All</button>
				</div>
			</div>
		</form>
	</div>
	<script type='text/javascript' src='assets/knockout-3.2.0.js'></script>
	<script type='text/javascript' src='assets/jquery-1.11.1.min.js'></script>
	<script type='text/javascript' src='assets/bootstrap.min.js'></script>
	<script type='text/javascript' src="function.js"></script>
</body>
</html>

