<!DOCTYPE html>
<style>
	html, body {
		height:100%;
		width:100%;
		margin:0;
	}
	.h_iframe iframe {
		width:100%;
		height:100%;
	}
	.h_iframe {
		height: 100%;
		width:100%;
	}
</style>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $credentials['title']; ?></title>
</head>
<script>
    console.log("<?php echo $credentials['gform_src']; ?>")
</script>
<body>
    <!-- ganti src url dengan url form anda -->
	<div class="h_iframe">
		<iframe id="gform" src="<?php echo $credentials['gform_src']; ?>" frameborder="0" allowfullscreen>Loading…</iframe>
	</div>
    <script type="text/javascript">
        var load = 0;
        // sesuaikan id gform dengan id yang ada pada tag iframe di atas
        document.getElementById('gform').onload = function () {
            load++;
            if (load > 1) {
                // ganti url dibawah dengan url webapp anda
                document.location = "<?php echo $credentials['gscript_src']; ?>";
            }
        }
    </script>
</body>

</html>