<?php
/**
 * Created by IntelliJ IDEA.
 * User: sachin
 * Date: 9/30/15
 * Time: 8:42 AM
 */
?>
<link href="bootstrap/bootstrap.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/bootstrap.js"></script>
<script type="text/javascript" src="js/typeahead.min.js"></script>
<script type="text/javascript">

    $(document).ready(function(){
        $("#pickUp").typeahead({
            name : 'pickUp',
            remote: {
                url : 'searchPickUp.php',
                replace: function(url, uriEncodedQuery) {
                    var val = $('#pickUp').val();
                    if (!val) return url;
                    return url + '?search=' + encodeURIComponent(val)
                }
            }
        });
    });

    $(document).ready(function() {
        $("#dropOff").typeahead({
            name: 'dropOff',
            remote: {
                url: 'searchDropOff.php',
                replace: function (url, uriEncodedQuery) {
                    var val = $('#dropOff').val();
                    if (!val) return url;
                    return url + '?search=' + encodeURIComponent(val)
                }
            }
        });
    });

</script>
<style>
    .tt-query,
    .tt-hint {
        width: 396px;
        height: 30px;
        padding: 8px 12px;
        font-size: 24px;
        line-height: 30px;
        border: 2px solid #ccc;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        border-radius: 8px;
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
        width: 422px;
        margin-top: 12px;
        padding: 8px 0;
        background-color: #fff;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, 0.2);
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        border-radius: 8px;
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
        <div class="ui left icon input" style="width: 305px">
            <input type="text" placeholder="Pick up Address" id="pickUp" name="pickUp">
            <i class="Sign in icon"></i>
        </div>
        <div class="ui left icon input" style="width: 305px">
            <input type="text" placeholder="Dropp off Address" id="dropOff"  name="dropOff">
            <i class="Sign out icon"></i>
        </div>
        <!--<div class="ui left icon input">
            <input type="date" placeholder="Date (mm/dd/yyyy)" id="date" onkeyup="autoSug(this.value,'date')" name="date">
            <i class="calendar icon"></i>
        </div>
        <div class="ui left icon input" style="width: 125px">
            <input type="text" placeholder="Time" id="time" onkeyup="autoSug(this.value,'time')" name="time">
            <i class="clock icon"></i>
        </div>-->

        <!--<div class="ui primary button">
            <i class="search icon"></i> Search
        </div>-->
        <input type="submit" class="ui  button" value="Search"/>
    </form>
</div><!-- search--->
