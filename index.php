<!DOCTYPE html>
<html>
	<head>
		<title>Doctor BeardFace</title>
	</head>

	<body>
		<h3>Doctor BeardFace</h3>
		<div id="left-form">
			<form id="values">
				<label for="http_method">HTTP Method</label>
				<input type="radio" name="http_method" value="DELETE"> DELETE
				<input type="radio" name="http_method" value="GET"> GET
				<input type="radio" name="http_method" value="POST"> POST
				<input type="radio" name="http_method" value="PUT"> PUT

				<label for="resource_url">Resource URL</label>
				<input type="text" name="resource_url" id="resource_url">

				<label for="timestamp">Timestamp</label>
				<input type="text" name="timestamp" id="timestamp">

				<label for="nonce">Nonce</label>
				<input type="text" name="nonce" id="nonce">
			</form>
		</div>

		<div id="right-form">
			<form id="compare">
				<label for="base_string">Base String</label>
				<textarea name="base_string" id="base_string" style="width:100%; height:200px;"></textarea>
				<label for="signature">Signature</label>
				<input type="text" name="signature" id="signature" style="width:100%; height:200px;">
				<label for="header">OAuth 1.0 Header </label>
				<textarea name="header" id="header" style="width:100%; height:200px;"></textarea>
			</form>
		</div>
	</body>
</html>
