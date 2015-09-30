<?php
/**
 * Created by IntelliJ IDEA.
 * User: sachin
 * Date: 9/30/15
 * Time: 8:42 AM
 */
?>
<div id="CKsearch" class="row">
    <form method="get" action="carpool-lists.php">
    <div class="ui left icon input" style="width: 305px">
        <input type="text" placeholder="Pick up Address">
        <i class="Sign in icon"></i>
    </div>
    <div class="ui left icon input" style="width: 305px">
        <input type="text" placeholder="Dropp off Address">
        <i class="Sign out icon"></i>
    </div>
    <div class="ui left icon input">
        <input type="date" placeholder="Date (mm/dd/yyyy)">
        <i class="calendar icon"></i>
    </div>
    <div class="ui left icon input" style="width: 110px">
        <input type="text" placeholder="Time">
        <i class="clock icon"></i>
    </div>

    <!--<div class="ui primary button">
        <i class="search icon"></i> Search
    </div>-->
    <input type="submit" class="ui primary button" value="Search"/>
    </form>
</div><!-- search--->
