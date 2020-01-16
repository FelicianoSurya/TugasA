<?php
	session_start();
	if(!isset($_SESSION['username'])){
		?>
		<script>
			alert("Maaf, Anda tidak mempunyai hak akses");
			location.href="index.php";
		</script>
		<?php
	}
?>