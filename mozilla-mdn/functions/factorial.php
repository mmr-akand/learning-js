<script>
	(function(){
		"use strict";
		var factResult = function factorial( n ){ return n<2 ? 1 : n*factorial(n-1); }
		console.log(factResult(5));
	})();
</script>