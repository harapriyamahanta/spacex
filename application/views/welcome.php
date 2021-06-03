<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SpaceX Lunch</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/custom.css'; ?>">
	
</head>
<body style="">

<div class="container1" >
	<h1>SpaceX Lunch Programs</h1>
	<div class="row">
		<div class="col-lg-3 col-md-4 col-xs-12">
			<div class="card">
				<div class="card-body">
			       <h3>Filters</h3>
			       <div class="text-center pr-5 pl-5">
			       		<p class="borderbtom">Lunch Year</p>
			       </div>
		        	
			       <div class="text-center pr-5 pl-5">
				      	<div class="row pb-1">
						    <div class="col-6">
						    	<a class="btn btn-primary" data-type="launch_year" data-id="2006" href="javascript:void(0)">2006</a>
						    </div>
						    <div class="col-6">
						    	<a class="btn btn-primary" data-type="launch_year" data-id="2007" href="javascript:void(0)">2007</a>
						    </div>
				      	</div>

				      	<div class="row  pb-1">
						    <div class="col-6">
						    	<a class="btn btn-primary" data-type="launch_year" data-id="2008" href="javascript:void(0)">2008</a>
						    </div>
						    <div class="col-6">
						    	<a class="btn btn-primary" data-type="launch_year" data-id="2009" href="javascript:void(0)">2009</a>
						    </div>
				      	</div>

				      	<div class="row pb-1">
						    <div class="col-6">
						    	<a class="btn btn-primary" data-type="launch_year" data-id="2010" href="javascript:void(0)">2010</a>
						    </div>
						    <div class="col-6">
						    	<a class="btn btn-primary" data-type="launch_year" data-id="2011" href="javascript:void(0)">2011</a>
						    </div>
				      	</div>

				      	<div class="row pb-1">
						    <div class="col-6">
						    	<a class="btn btn-primary" data-type="launch_year" data-id="2012" href="javascript:void(0)">2012</a>
						    </div>
						    <div class="col-6">
						    	<a class="btn btn-primary" data-type="launch_year" data-id="2013" href="javascript:void(0)">2013</a>
						    </div>
				      	</div>

				      	<div class="row pb-1">
						    <div class="col-6">
						    	<a class="btn btn-primary" data-type="launch_year" data-id="2014" href="javascript:void(0)">2014</a>
						    </div>
						    <div class="col-6">
						    	<a class="btn btn-primary" data-type="launch_year" data-id="2015" href="javascript:void(0)">2015</a>
						    </div>
				      	</div>

				      	<div class="row pb-1">
						    <div class="col-6">
						    	<a class="btn btn-primary" data-type="launch_year" data-id="2016" href="javascript:void(0)">2016</a>
						    </div>
						    <div class="col-6">
						    	<a class="btn btn-primary" data-type="launch_year" data-id="2017" href="javascript:void(0)">2017</a>
						    </div>
				      	</div>

				   		<div class="row pb-1">
						    <div class="col-6">
						    	<a class="btn btn-primary" data-type="launch_year" data-id="2018" href="javascript:void(0)">2018</a>
						    </div>
						    <div class="col-6">
						    	<a class="btn btn-primary" data-type="launch_year" data-id="2019" href="javascript:void(0)">2019</a>
						    </div>
				      	</div>

				      	<div class="row pb-1">
						    <div class="col-6">
						    	<a class="btn btn-primary" data-type="launch_year" data-id="2020" href="javascript:void(0)">2020</a>
						    </div>
						    <div class="col-6">
						    	<a class="btn btn-primary" data-type="launch_year" data-id="2021" href="javascript:void(0)">2021</a>
						    </div>
				      	</div>


			      	</div>
			      	
			      	<div class="text-center pr-5 pl-5">
			       		<p class="borderbtom">Successful Lunch</p>
			        </div>
			        <div class="text-center pr-5 pl-5">
				      	

				      	<div class="row  pb-1">
						    <div class="col-6">
						    	<a class="btn btn-primary" data-type="launch_success" data-id="true" href="javascript:void(0)">True</a>
						    </div>
						    <div class="col-6">
						    	<a class="btn btn-primary" data-type="launch_success" data-id="false" href="javascript:void(0)">False</a>
						    </div>
				      	</div>
				    </div>
			      	

			      	
			      	<div class="text-center pr-5 pl-5">
			       		<p class="borderbtom">Successful Landing</p>
			        </div>
			        <div class="text-center pr-5 pl-5">
				      	

				      	<div class="row  pb-1">
						    <div class="col-6">
						    	<a class="btn btn-primary" data-type="land_success" data-id="true" href="javascript:void(0)">True</a>
						    </div>
						    <div class="col-6">
						    	<a class="btn btn-primary" data-type="land_success" data-id="false" href="javascript:void(0)">False</a>
						    </div>
				      	</div>
				    </div>
			      	
		      </div>
	      </div>
	    </div>
	    <div class="col-lg-9 col-md-8 col-xs-12">
	    	<div class="row pr-3 pl-3" id="searchlist">
	      		<div>Loading ............</div>
	      	</div>
	    </div>
	</div>
	<footer class="footer text-center">
                Devloped By:Harapriya Mahanta
    </footer>
</div>

</body>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>

<script  src="<?php echo base_url().'assets/js/custom.js'; ?>"></script>
</html>