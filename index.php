<?php include "inc/header.php"; ?>

<section class=" py-5 " style="height: 100vh;">
<div class="container  py-5">

	<h2 class="mb-5 text-center ">Type Favourite Number & get your Result</h2>

	<div class="row justify-content-center text-center">
		<div class="col">

			<form method="POST" action="" class="text-align-center">
				<input type="number" name="number" class="form-control mb-2 w-50 text-center m-auto">
				<input type="submit" name="result" value="Get Result" class="btn btn-lg btn-success ">
			</form>


			<h1>
			<?php 

			if (isset($_POST['result'])) {
				
		         $a = $_POST['number'];

			if ($a >= 0  &&  $a <= 100) {
				if($a >= 80){
				echo "A+(You are best)";
			    } else if($a >= 70){
			    	echo "A(Good)";
			    }else if($a >= 60){
			    	echo "A(Not bad)";
			    }else if($a >= 50){
			    	echo "B(so so)";
			    }else if($a >= 40){
			    	echo "C(T.T.P)";
			    }else if($a >= 33){
			    	echo "D(T.T.P.P)";
			    } else {
			    	echo "You are Fail! Go and Study";
			    }

		} else {
			echo "Invalid Result";
		}

	}

         

			



			?>
            </h1>



	
		<div class="col-7">
		
		</div>
          

	</div>

	


</div>
</section>

<?php include "inc/footer.php"; ?>