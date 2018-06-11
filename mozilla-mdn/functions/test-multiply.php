<script>
	(function(){
		"use strict";
		function multiply(a, b){
			b = typeof b !== 'undefined' ? b : 1;
			return a * b;
		}
		var result = multiply( 5 );
		console.log(result);
	})();
</script>