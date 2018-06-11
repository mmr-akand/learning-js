<script>
	(function(){
		"use strict";

		var arr = [3, 5, 7];
		arr.foo = "hi";
		for (var i in arr) {
		   console.log(i);
		}
		console.log("---")
		for (var i of arr) {
		   console.log(i);
		}

		var obj = { a:"aa", b:"bb", c:"cc" };
		for (var i in obj) {
		   console.log(i);
		}
	})();
</script>

