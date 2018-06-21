<!DOCTYPE html>
<html>
<head>
	<title>APIT REST - PHP</title>
	<script src="https://code.jquery.com/jquery-3.3.0.min.js" integrity="sha256-RTQy8VOmNlT6b2PIRur37p6JEBZUE7o8wPgMvu18MC4=" crossorigin="anonymous"></script>
</head>
<body>
	
	<div>
		<h3>Utilize este comando no seu console request(query, method, data). </h3>		
	</div>

	<div>
		Exemplos: 
		<div>request('receitas', 'GET', {})</div>
		<div>request('receitas/2', 'GET', {})</div>		
		request('receitas', 'POST', {
		name: "receita ex1", 
		descricao: "aaa",
		img: "imgex.jpg", 
		created_at: "2018-05-02 00:00:00", 
		updated_at: "2018-05-03 00:20:16"
	})
	<div>request('receitas/5', 'DELETE', {})</div>
	<div>request('receitas/12', 'PUT', {'name':'receita1 editada', 'descricao':'editt', 'img':'imgeditada.png'})</div>		
</div>

</body>
<script type="text/javascript">
	function request(query, method, data){
		$.ajaxSetup({
			headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
		});
		jQuery.ajax({
			url:query,
			type: method,
			data: data,
			success: function( data ){
				if(data.length>=1){
					for(i=0;i<data.length; i++){
						console.log(data[i]);
					}
				}else{
					console.log(data);
				}
			},
			error: function (xhr, b, c) {
				console.log("xhr=" + xhr + " b=" + b + " c=" + c);
			}
		});		
	}
</script>
</html>