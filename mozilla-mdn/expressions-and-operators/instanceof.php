<script>
	(function(){
		//"use strict";
		function Human( name, age ){
			this.name = name;
			this.age = age;
		}
		var humanObj = new Human("Johnson", 44);
		
		if(humanObj instanceof Human)
			console.log(humanObj instanceof Human);
		if(humanObj instanceof Object)
			console.log(humanObj instanceof Object);

		//Octal literals are not allowed in strict mode.
		var theDate = new Date (1998, 02, 21);
		if(theDate instanceof Date)
			console.log(theDate instanceof Date);
	})();
</script>