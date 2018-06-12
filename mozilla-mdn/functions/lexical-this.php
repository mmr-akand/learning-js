<script>
	(function(){
		"use strict";
		function Person() {
			//this.age = 0; 
			var self = this;
			self.age = 0;
			setInterval(function growUp() {
				//this.age++; //NAN
				//console.log(this.age) //NAN
				self.age++;
				console.log(self.age)
			}, 1000);
		}
		var p = new Person();
		console.log(p)
	})();
</script>