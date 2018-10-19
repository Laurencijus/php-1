<html>

<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
	 crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
	 crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
	 crossorigin="anonymous"></script>
</head>

<body>
	<div class="container">
		<h1>Form</h1>
		<?php
$error = '';
if (empty($_POST['name'])) {
    $error .= 'Būtina įvesti vardą';
}
if (!isset($_POST['user_type'])) {
    if (!empty($error)) {
        $error .= '<br>';
    }
    $error .= 'Būtina pasirinkti vartotojo tipą';
}
if (empty($_POST['city']) && empty($_POST['postal_code'])) {
    if (!empty($error)) {
        $error .= '<br>';
    }
    $error .= 'Būtina įvesti pašto kodą arba miestą!';
}
?>
		<div class="row">
			<div class="col-md-12 col-sm-6 col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<i class="icon-calendar"></i>
						<h3 class="panel-title">Inputs</h3>
					</div>
					<div class="alert alert-danger" role="alert">
						<?php echo $error ?>
					</div>
					<div class="panel-body">
						<form class="form-horizontal row-border" method="POST">
							<div class="form-group">
								<label class="col-md-2 control-label">Vardas</label>
								<div class="col-md-10">
									<input type="text" name="name" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Vartotojo tipas</label>
								<div class="col-md-10">
									<input type="radio" name="user_type" value="1"> Normal &nbsp;&nbsp;
									<input type="radio" name="user_type" value="2"> WIP
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Miestas</label>
								<div class="col-md-10">
									<input type="text" name="city" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Pašto indeksas</label>
								<div class="col-md-10">
									<input type="text" name="postal_code" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Adresas</label>
								<div class="col-md-10">
									<input type="text" name="address" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"></label>
								<div class="col-md-10">
									<input type="checkbox" name="agree_with_terms_and_conditions" value="1" /> Sutinku su taisyklėmis
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"></label>
								<div class="col-md-10">
									<input type="checkbox" name="subscribe_newsletter" value="1" /> Noriu gauti naujienas
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"></label>
								<div class="col-md-10">
									<input type="submit" value="Siųsti" />
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
</body>

</html>
