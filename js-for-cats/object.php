<script>
	function measureLoopSpeed() {
	  var count = 0;
	  function addOne() { count = count + 1 }
	  var now = Date.now();
	  while (Date.now() - now < 1000) addOne()
	  console.log(count);
	}
	measureLoopSpeed();
</script>
