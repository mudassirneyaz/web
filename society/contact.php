<?php
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$msg=$_POST['msg'];
	
	$to='mudassir_neyaz@ieee.org';
	$subject='Query Regarding IEEE IEM SB';
	$message="Name: ".$name."\n"."Phone: ".$phone." \n "."Queries: \n".$msg;
	$headers= "From: ".$email;
	
	if(mail($to,$subject,$message,$headers)){
		?>
		<script>
		alert('Message sent successfully! Thank you <?php echo " $name" ?> ,we will reply you soon !');
		</script>
		
		<?php 
	}
	else
			?>
		<script>
		alert('oops! something went wrong.');
		</script>
		
		<?php 
}


?>