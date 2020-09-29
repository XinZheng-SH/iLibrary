<head>
	<link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../../assets/css/style.css">
	<link rel="stylesheet" href="../../../assets/css/rader.css">
	<script src="../../../assets/js/jquery-3.5.1.js"></script>
	<script type="text/javascript">
		setTimeout(function (){
			$('#disappear_div').remove();
			$('#appear_div').css("visibility", "visible");
		},3000)
	</script>
</head>

<body>
	<div class="row" id="disappear_div" style="margin-top: 5rem">
		<img class='col-lg-4 offset-4 disappear'src="../../../assets/images/searching_rader.gif" alt="searching_rader">
	</div>
	<div class="" id="appear_div" style="visibility: hidden;height: 100%;" >
		<div class="row align-items-center" style="height: 100%;margin: 1px">
			<div class="col-4" style="height: 100%;padding: 0">
				<div class="h-25" style="background-color: red;" >
					first panel
				</div>
				<div class="h-25" style="background-color: green">
					.. panel
				</div>
				<div class="h-25" style="background-color: yellow">
					.. panel
				</div>
				<div class="h-25" style="background-color: blue">
					.. panel
				</div>
			</div>
			<div class="col-8" style="height: 100%;padding-left: 5px;padding-right: 0">
				<div class="h-25 w-75 offset-1  d-flex justify-content-center">
					<input type="text" class="form-control"
						   placeholder="666 Rd, St.Lucia" name="postcode" disabled="disabled"
						   style="border-radius: 15px;margin-top: 10%"
					/>
				</div>
				<div class="h-100 w-100">
					<img src="../../../assets/images/test_rader_results.jpg" style="width: 95%;">
				</div>
			</div>
		</div>
	</div>
</body>
