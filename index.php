<?php
include "includes/core.php";
include "includes/header.php";

if(isset($_REQUEST["newcharacter"])) {
    $name = $_REQUEST["name"];
    $race = $_REQUEST["race"];
    
    $character = new Character();
    $character->name = $name;
    $character->race = $race;
    if(!$character->exists()) {
        $character->save();
    }
}

?>
<h1>Trade Wars</h1>
<style>
div.title {}
table tr td.label {
    padding-right:15px;
    text-align:right;
}
table tr td.desc {
    padding-left:25px;
}
table tr td select {
    padding:3px;
    font-size:14px;
    min-width:170px;
}
</style>
<form method="post">
    <input type="hidden" name="newcharacter" />
    <div class="title">Create a New Character</div>
    <table style="padding:10px;">
        <tbody>
            <tr>
                <td class="label">Character Name</td>
                <td><input type="text" name="charname" value="<?php echo @$_POST["charname"]; ?>" /></td>
                <td class="desc">This will be your character's name through the journey!</td>
            </tr>
            <tr>
                <td class="label">Race</td>
                <td>
                    <select name="race">
                        <option <?php if(isset($_POST["race"]) and $_POST["race"] == "Angosian"): ?>checked="checked"<?php endif; ?> >Angosian</option>
                        <option <?php if(isset($_POST["race"]) and $_POST["race"] == "Angosian"): ?>checked="checked"<?php endif; ?> >Benzite</option>
                        <option <?php if(isset($_POST["race"]) and $_POST["race"] == "Angosian"): ?>checked="checked"<?php endif; ?> >Orcharion</option>
                    </select>
                </td>
                <td class="desc">
                    <strong>Angosian</strong>: Masters of genetic and chemical engineering, they have bonuses to trading <i>Science</i> materials.<br/>
                    <strong>Benzite</strong>: Strong affinities for living things, Benzites have bonuses to trading <i>Living</i> materials.<br/>
                    <strong>Ochari</strong>: Alikened to "Space Dwarves" the Ochari have bonuses to trading <i>Mineral</i> materials.
                </td>
            </tr>
        </tbody>
    </table>
    <button>Start New Character!</button>
</form>
<?php include "includes/footer.php"; ?>