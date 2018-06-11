<script>
	(function(){
		"use strict";
		var startOver = function( name ){
			return {
				changeBowler: function( newBowler ){
					name = newBowler;
				},
				getBowlerName: function(){
					return name;
				}
			}
		}

		var over = startOver("Mashrafee");
		var bowlerName = over.getBowlerName();
		console.log(bowlerName);
		over.changeBowler("Mustafiz");
		var bowlerName = over.getBowlerName();
		console.log(bowlerName);
	})();
</script>