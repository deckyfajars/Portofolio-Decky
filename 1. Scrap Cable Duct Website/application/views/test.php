<input type="text" id="a" onkeyup="sum()">
<input type="text" id="proses" onkeyup="sum()">
<input type="text" id="b" onkeyup="sum()">=
<input type="text" id="c" readonly="">

<script type="text/javascript">
	function sum(){
	var a = document.getElementById('a').value;
	var b = document.getElementById('b').value;
	var pr = document.getElementById('proses').value;
	

			if (pr=="+"){		
				var c = parseInt(a)+parseInt(b);
			} else if (pr=="-") {
				var c = parseInt(a)-parseInt(b);
			} else if (pr=="*"){
				var c = parseInt(a)*parseInt(b);
			} else if(pr=="/") {
				var c = parseInt(a)/parseInt(b);
			} else {
				var c = document.getElementById('c').value="Wait";
			}
				
				if (!isNaN(c)){
				document.getElementById('c').value=c;
				}
			}


</script>
