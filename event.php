 <html>
	<body>

		<button>what?</button>
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script>
			alter = function(callback, scope) {
				var args = Array.prototype.slice.call(arguments);
				
				console.log(args);

				callback 	= args.shift(),
				scope 		= args.shift();
					
				return function() {
					var original = Array.prototype.slice.call(arguments);

					for(var i = 0; i < args.length; i++) {
						original.push(args[i]);
					}
					
					return callback.apply(scope || this, original);
				};
			}

		     alter()();

		     (function($) {
				var c = function() {}, p = c.prototype;
				
				p.start = function(color, value) {
					this.color = color;
					$('button').click(alter(_doSomething, this, value));
				};
				
				var _doSomething = function(e, value) {
					$('button').css('background', this.color).html(value);
					alert("what the fuck is happening");
				};


			var button = new c();	
			button.start('blue', '#000000');

			})(jQuery);




		</script>	
	</body>
</html>	