(document).ready(function(){
	$("#btn").click(function(){
			var log=$("#log").val();
			var pass=$("#pass").val();
			$ajax({
				type: "POST",
				url: "Login.php",
				data: {l:log,p:pass},
				success: function(Issa) {
				if(Issa=='1'){alert("success!");} else{alert("Error!");}
				}
			});
		};
}