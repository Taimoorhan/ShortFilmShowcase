<?php
include ('config.php');
session_start();

$query="SELECT * FROM vehicle";
$query_result = $conn->query($query);

?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
	th {
		color: #fff;
	}
</style>
<h1 class="text-center">Short Film Showcase</h1>


<table class="table table-striped ">
	<tr class="bg-info">
		<th class="text-center">ID</th>
		<th class="text-center">Email</th>
		<th class="text-center">Subscription Name</th>
		<th class="text-center">Transaction ID</th>
		<th class="text-center">Amount</th>
		<th class="text-center">Action</th>


	</tr>

	<tbody id="myTable" class="text-center">

	</tbody>
</table>

<script>
	var myArray = []


	$.ajax({
		method: 'GET',
		url: 'https://r8eiiuivwe.execute-api.us-east-1.amazonaws.com/dev/transaction',
		success: function (response) {
			myArray = response.data
			buildTable(myArray)
			console.log(myArray)
		}
	})



	function buildTable(data) {
		var table = document.getElementById('myTable')

		for (var i = 0; i < data.length; i++) {
			var row = `<tr>
							<td>${data[i].id}</td>
							<td>${data[i].email}</td>
							<td>${data[i].subscription_name}</td>
							<td>${data[i].transactionId}</td>
							<td>${data[i].paid_amount} $ </td>



							<td class="text-center">
		                    <div class="btn-group">
		                    	<!--<button id="validate1" onclick="validate()" type="button" class="btn btn-light btn-flat view_parcel" data-id="">
		                           <i  class="fa fa-check"></i>
		                            Validate transaction
		                        </button> -->
		                        <!-- <button id="valrefund1" onclick="valrefund()" type="button" class="btn btn-dark btn-flat view_parcel" data-id="">
		                           <i  class="fa fa-check"></i>
		                            Validate Refund
		                        </button>-->
		                    	<button id="cancel1" onclick="myfunction('${data[i].transactionId}')" type="button" class="btn btn-danger btn-flat view_parcel" data-id="">
		                           <i  class="fa fa-window-close"></i>
		                            Cancel Subscription
		                        </button>

		                          <div class="btn-group">
		                    	<button id="refund1" onclick="myrefund('${data[i].transactionId}')" type="button" class="btn btn-primary btn-flat view_parcel" data-id="">
		                           <i  class="fa fa-undo"></i>
		                            Refund Subscription
		                        </button>

		                       <!-- <button id="update" onclick="update()" type="button" class="btn btn-info btn-flat delete_parcel" data-id="">
		                          <i class="fa fa-wrench"></i> Update
		                        </button> -->

		                       <!--  <button type="button" onclick="credit()" class="btn btn-success btn-flat delete_parcel" data-id="">
		                          <i class="fa fa-credit-card"></i> Credit
		                        </button> -->
	                      </div>
						</td>
					  </tr>`
			table.innerHTML += row



		}
	}


	function myfunction(transactionId) {
		var person = confirm("Are you sure you want to Cancel Subscription?");
		if (person==true) {
			/* fetch('https://apipub.roku.com/listen/transaction-service.svc/cancel-subscription',
				{
					method: 'post',
					body: {
						"cancellationDate": "2020-01-10T18:44:01.034020",
						"dontNotifyUser": false,
						"partnerAPIKey": "F05447A57F8DF275FC30EC835FCAD10A19B6",
						"partnerReferenceId": "7s9d8w0n6z",
						"transactionId": "retw456546h6y456y4"
					}
				}).then(function (response) {
					return response.json();
				}).then(function (josn) {
					console.log(josn);
				})

			alert("your subscription is canceled"); */

			fetch('api.php', {
				method: "POST",
				body: JSON.stringify({
					"cancellationDate": "2020-01-10T18:44:01.034020",
					"partnerAPIKey": "2bMLMN3wZKTkyDHYyB35UaWym7fmbAhPU",
					"transactionId": transactionId
				})
			}).then(function (res) {
				console.log(res);
				alert("Subscription is canceled");
				location.reload();

			})
			$.ajax({
		method: 'DELETE',
		url: 'https://r8eiiuivwe.execute-api.us-east-1.amazonaws.com/dev/transaction/' + transactionId,
		success: function (data) {
            console.log('deleted');
		}
	})
				
			
		}
	}

	function myrefund(transactionId) {

	var person = confirm("Are you sure you want to Refund Subscription?");
		if (person==true) {
			
			fetch('refund.php', {
				method: "POST",
				body: JSON.stringify({
    		   "partnerAPIKey": "2bMLMN3wZKTkyDHYyB35UaWym7fmbAhPU",
               "transactionId": transactionId
				})
			}).then(function (res) {
				console.log(res);
				alert("Subscription is Refunded");
				location.reload();

			})
			$.ajax({
		method: 'DELETE',
		url: 'https://r8eiiuivwe.execute-api.us-east-1.amazonaws.com/dev/transaction/' + transactionId,
		success: function (data) {
            console.log('deleted');
		}
	})
				
			
		}
	}

/*
	function update() {
		var person = prompt("Are you sure you want to refund?", "yes");
		if (person === "yes" || person === "Yes") {
			fetch('https://apipub.roku.com/listen/transaction-service.svc/update-bill-cycle',
				{
					method: 'post',
					body: ''
				}).then(function (response) {
					return response.text();
				}).then(function (text) {
					console.log(text);
				}).catch(function (error) {
					console.error(error);

				})
		}
	}

	function validate() {
		var click = alert("Your transaction is validating");
		fetch('https://apipub.roku.com/listen/transaction-service.svc/validate-refund/{partnerAPIKey}/{refundId}',
			{
				method: 'get',
				body: ''
			}).then(function (response) {
				return response.text();
			}).then(function (text) {
				console.log(text);
			}).catch(function (error) {
				console.error(error);

			})
		alert("Your transaction is validated");
	}
	function valrefund() {
		fetch('https://apipub.roku.com/listen/transaction-service.svc/validate-refund/{partnerAPIKey}/{refundId}',
			{
				method: 'get',
				body: ''
			}).then(function (response) {
				return response.text();
			}).then(function (text) {
				console.log(text);
			}).catch(function (error) {
				console.error(error);

			})
		alert("Your Refund is validated");
	}


	function credit() {
		var click = alert("Your request for Credit is processing");
		alert("Amount credited is 0$");
	}*/
</script>


<div class="btns">
	<?php
	if(!isset($_SESSION['email']))
	{?>
	<a class="btn" href="login.php">Login</a>
	<!-- <a class ="btn" href="empYourID.php">SignUp</a> -->
	<?php
	}
	?>
	<?php
	if(isset($_SESSION['email']))
	{?>
	<center style=" float: right; margin-top: -112px;margin-right: 20px;"><a class="btn btn-danger" href="logout.php">Logout</a></center>	
	<?php
	}
	{?>
	<center style=" float: right;margin-top: -112px;margin-right: 100px;"><a class="btn btn-primary" href="register.php">Settings</a></center>	
	<?php
	}
	?> 
	
</div>