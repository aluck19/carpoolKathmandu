<script type="text/javascript" src="js/typeahead.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#pickUp").typeahead({
			name : 'pickUp',
			remote : {
				url : 'searchPickUp.php',
				replace : function(url, uriEncodedQuery) {
					var val = $('#pickUp').val();
					if (!val)
						return url;
					return url + '?search=' + encodeURIComponent(val)
				}
			}
		});
	});

	$(document).ready(function() {
		$("#dropOff").typeahead({
			name : 'dropOff',
			remote : {
				url : 'searchDropOff.php',
				replace : function(url, uriEncodedQuery) {
					var val = $('#dropOff').val();
					if (!val)
						return url;
					return url + '?search=' + encodeURIComponent(val)
				}
			}
		});
	});

</script>
<style>
	.tt-query, .tt-hint {
		width: 487px;
		outline: none;
	}

	.tt-query {
		-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
		-moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
		box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
	}

	.tt-hint {
		color: #999
	}

	.tt-dropdown-menu {
		width: 487px;
		margin-top: 0px;
		padding: 5px 0;
		background-color: #fff;
		border: 1px solid #ccc;
		border: 1px solid rgba(0, 0, 0, 0.2);
		-webkit-border-radius: 3px;
		-moz-border-radius: 3px;
		border-radius: 3px;
		-webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
		-moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
		box-shadow: 0 5px 10px rgba(0,0,0,.2);
	}

	.tt-suggestion {
		padding: 3px 20px;
		font-size: 18px;
		line-height: 24px;
	}

	.tt-suggestion.tt-is-under-cursor {
		color: #fff;
		background-color: #0097cf;
	}
</style>

<div id="CKsearch" class="row">
	<form method="get" action="carpool-lists.php">
		<div class="ui left icon input" >
			<input style="vertical-align: baseline;" type="text" placeholder="Pick up Address" id="pickUp" name="pickUp">
			<i class="Sign in icon"></i>
		</div>
		<div class="ui left icon input">
			<input style="vertical-align: baseline; type="text" placeholder="Drop off Address" id="dropOff"  name="dropOff">
			<i class="Sign out icon"></i>
		</div>

		<input type="submit" class="ui  button" value="Search" style="
		position: relative;
		bottom: -23px;
		">
	</form>
</div><!-- search--->
