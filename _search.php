<?php
/**
 * Created by IntelliJ IDEA.
 * User: sachin
 * Date: 9/30/15
 * Time: 8:42 AM
 */
?>
<!--<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">-->
<!--<script src="//code.jquery.com/jquery-1.10.2.js"></script>-->
<!--<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>-->
<link href="css/jquery-ui.min.css" rel="stylesheet"/>
<script src="js/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript">
    function autoSug(search,distinct){
        var dataString = 'search='+search+"&distinct="+distinct;
        var availableTags=[];
        $.ajax({
            type: "POST",
            url: 'search.php',
            data: dataString,
            cache: false,
            success: function (jsonData) {
                var parsedJson = JSON.parse(jsonData)
                //console.log(parsedJson)
               for(var i=0;i<parsedJson.length; i++){
                   console.log(parsedJson[i][0]);
                  availableTags[i]=parsedJson[i][0].toString();
               }
            },
        });
        if(distinct=="pickUp"){
            $( "#pickUp" ).autocomplete({
                source: availableTags
            });
        }else if(distinct=="dropOff"){
            $( "#dropOff" ).autocomplete({
                source: availableTags
            });
        }
        /*else if(distinct=="date"){
            $( "#date" ).autocomplete({
                source: availableTags
            });
        }else{
            $( "#time" ).autocomplete({
                source: availableTags
            });
        }*/

    }

</script>


<div id="CKsearch" class="row">
    <form method="get" action="carpool-lists.php">
    <div class="ui left icon input" style="width: 305px">
        <input type="text" placeholder="Pick up Address" id="pickUp" onkeyup="autoSug(this.value,'pickUp');" name="pickUp">
        <i class="Sign in icon"></i>
    </div>
    <div class="ui left icon input" style="width: 305px">
        <input type="text" placeholder="Dropp off Address" id="dropOff" onkeyup="autoSug(this.value,'dropOff')" name="dropOff">
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
