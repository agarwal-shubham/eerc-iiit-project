<!DOCTYPE html>
<!--Economic Loss-Inducing Factors related to the Structural Elements - Page 2 -->
<form action= "form-1-backend.php" method="" onsubmit="return false;">

    <p>1. Acceleration and Displacement Hazards</p>

    <p>1.1 Shelves</p>
    <p>You may select 0 or more.</p>
    <input type="checkbox" name="_1-1[]" value='a' id='_1-1_a_-20'/>Not anchored to structural system<br/>'
    <input type="checkbox" name="_1-1[]" value='b' id='_1-1_b_-10'/>Contents not strapped<br/>'

    <p>1.2 Roof design</p>
    <p>You may select 0 or more.</p>
    <input type="checkbox" name="_1-2[]" value='a' id='_1-2_a_-20'/>Items on lofts<br/>'

    <p>1.3 Hangings from roof/floor and from walls</p>
    <p>You may select 0 or more.</p>
    <input type="checkbox" name="_1-3[]" value='a' id='_1-3_a_-5'/>Heavy weight and unstrapped<br/>'

    <p>1.4 Gas cylinders and geysers</p>
    <p>You may select 0 or more.</p>
    <input type="checkbox" name="_1-4[]" value='a' id='_1-4_a_-5'/>Unsecured to the wall<br/>'

    <p>1.5 Items on adjacent building</p>
    <p>You may select 0 or more.</p>
    <input type="checkbox" name="_1-5[]" value='a' id='_1-5_a_-20'/>Unsecured to adjacent building<br/>'
    <br/>
<button onclick="window.openTab(2)">Next page</button>
</form>

<script>
$('input').click(function() {

    console.log('hi');    
    section = this.name.split('-')[0].split('_')[1]
    console.log("section"+section);
        scores[section] += parseInt(this.id.split('_')[3]);
    console.log("score"+this.id.split('_')[3]);
      if (scores[section] <= formvals[page_loaded][section]) {
        scores[section] = formvals[page_loaded][section];
    }
    console.log(scores);
});
</script>