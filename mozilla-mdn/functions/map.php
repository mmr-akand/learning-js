<script>
	(function(){
		"use strict";
		var arr = [3, 2, 5, 1];
	
		//var map1 = arr.map( x => x * 2 );
		//or
		var map1 = arr.map( function(x){return x*2;} );

		console.log(arr);
		console.log(map1);
	})();
</script>