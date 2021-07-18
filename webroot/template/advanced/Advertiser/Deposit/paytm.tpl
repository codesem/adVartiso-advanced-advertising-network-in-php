<html>
<head>
<title>Redirecting</title>
</head>
<body>
	<center><h1>Please do not refresh this page...</h1></center>
		<form method="post" action="{$txn_url}" name="f1">
		<table border="1">
			<tbody>
			{foreach from=$paramList key=k item=v}
				<input type="text" name="{$k}" value="{$v}">
			{/foreach}
			<input type="hidden" name="CHECKSUMHASH" value="{$checkSum}">
			</tbody>
		</table>
		<script type="text/javascript">
			document.f1.submit();
		</script>
	</form>
</body>
</html>