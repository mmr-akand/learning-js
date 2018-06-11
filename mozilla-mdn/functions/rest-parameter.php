<script>
	(function(){
		"use strict";
		function multiply( multiplier, ...args){
			return args.map( x => x * multiplier );
		}
		var res = multiply(3, 5, 6);
		console.log(res);
		})();
</script>