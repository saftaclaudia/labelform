<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type='text/css' href='assets/bootstrap.min.css'>
	<link rel='stylesheet' type='text/css' href='stylesheet.css'/>
</head>
<body>
	<div class="wrapper container">
		<form class="form-horizontal">
			<div class="form-group">
				<label for="labels" class="col-sm-2 control-label">Labels</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="label" placeholder="label" data-bind="value:newLabel">
				</div>
				<div class="col-sm-2">
					<button type="submit" class="btn btn-success" data-bind="click:addLabel, disable:labels().length >=6">Add Label</button>
				</div>
				<div class="col-sm-2">
					<button type="reset" class="btn btn-danger" data-bind="click:$root.removeAllLabels, disable:labels().length == 0">Remove All</button>
				</div>
			</div>
			<ul data-bind= "foreach:labels">
					<li class="input-group">
						<input  type="text" class="form-control" data-bind="
							value:name,
							disable: isEdit() == false,
							hasFocus: isEdit() == true
							">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button" data-bind="click:$root.editLabel, visible:isEdit()== false"><span class="glyphicon glyphicon-pencil" aria-hidden="true" ></span></button>
							<button class="btn btn-default" type="button" data-bind="click:$root.saveEditLabel, visible: isEdit()== true"><span class= "glyphicon glyphicon-ok" aria-hidden="true"  ></span></button>
							<button class="btn btn-default" type="button" data-bind="click:$root.removeLabel"><span class= "glyphicon glyphicon-remove" aria-hidden="true"  ></span></button>
						</span>
					</li>
			</ul>
			<div class="alert alert-danger label-style" role="alert"  data-bind= "visible:errorMessage().length >0">
				<p data-bind ="text:errorMessage"></p>
			</div>

		</form>
	</div>
	<script type='text/javascript' src='assets/knockout-3.2.0.js'></script>
	<script type='text/javascript' src='assets/jquery-1.11.1.min.js'></script>
	<script type='text/javascript' src='assets/bootstrap.min.js'></script>
	<script type='text/javascript' src="function.js"></script>
</body>
</html>

