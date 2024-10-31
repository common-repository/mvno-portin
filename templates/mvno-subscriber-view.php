<style>
    .my-container {
        display: grid;
        grid-template-columns: repeat( 3, 1fr );
        grid-template-rows: repeat( 2, 1fr );
    }

    .element-1 {
        grid-column-start: 2;
        grid-column-end: 4;
        grid-row-start: 1;
        grid-row-end: 3;
    }
    .column {
        float: left;
        width: 33.33%;
        /*border: 1px solid black;*/
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
    .row{
        text-align: center;
    }
</style>
<div class="wrap">
    <h1>Subscriber View</h1>
    <div class="row">
        <div class="column">
            <h2>Data Used</h2>
            <div>
                <label for="home">Home<?=$usage->DATA->Home?></label><br>
                <label for="home">Roaming<?=$usage->DATA->Roaming?></label> <br>
                <label for="home">Hotspot<?=$usage->DATA->Hotspot?></label> <br>
                <label for="home">Broadband<?=$usage->DATA->Broadband?></label> <br>
            </div>
        </div>
        <div class="column">
            <h2>Plan</h2>
            <div>
                <label for="home"><?=$subscriber->characteristics[6]->value?></label> <br>
            </div>
        </div>
        <div class="column">
            <h2>Data left</h2>
            <div>
                <label for="home"><?=$data_left?> MB</label> <br>
            </div>
        </div>
    </div>
<br />
    <hr />
    <div>
        <div class="element-1" style="text-align: center">
            <h2>Subscriber Name</h2>
            <h2><?=$characteristics[2]->value?></h2>
        </div>
    </div>
    <div class="row">
        <div class="column" style="background-color:#aaaaaa29;">


            <div class="element-1">
                <b>Plan Name: </b>
                <h2><?=$characteristics[5]->value?></h2>
            </div>
            <div class="element-1">
                <b><?=ucfirst($characteristics[6]->name)?></b>
                <h2><?=$characteristics[6]->value?></h2>
            </div>

        </div>
        <div class="column" style="background-color:#aaaaaa29;">
            <div  class="element-1">
                <b><?=$characteristics[3]->name?></b>
                <h2><?=$characteristics[3]->value?></h2>
            </div>

            <div class="element-1">
                <b><?=ucfirst($characteristics[7]->name)?></b>
                <h2><?=$characteristics[7]->value?></h2>
            </div>


        </div>
        <div class="column" style="background-color:#aaaaaa29;">
            <div class="element-1">
                <b><?=$characteristics[4]->name?></b>
                <h2><?=$characteristics[4]->value?></h2>
            </div>

            <div class="element-1">
                <b><?=ucfirst($characteristics[8]->name)?></b>
                <h2><?=$characteristics[8]->value?></h2>
            </div>
            <div class="element-1">
                <b><?=ucfirst($characteristics[9]->name)?></b>
                <h2><?=$characteristics[9]->value?></h2>
            </div>


        </div>
    </div>

</div>