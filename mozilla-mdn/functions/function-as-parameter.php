<script>
	(function(){
		"use strict";
		function map(numArr, f){
			var res = [];
			var i;
			for (var i = 0; i < numArr.length; i++) {
				res[i] = f(i);
			}
			return res;
		}

		var numberArr = [1, 2, 3, 4];
		var f = function(x){
			return x*x;
		}
		var result = map(numberArr, f);
		console.log(result);
	})();
</script>