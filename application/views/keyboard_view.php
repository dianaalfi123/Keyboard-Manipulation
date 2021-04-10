<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<table border="1">
  	<tr>
  		<?php
  			foreach ($a as $key) {
  		?>
  		<td><?php echo $key ;?></td>
  		<?php } ?>
  	</tr>
  	<tr>
  		<?php
  			foreach ($b as $key) {
  		?>
  		<td><?php echo $key ;?></td>
  		<?php } ?>
  		
  	</tr>
  	<tr>
  		<?php
  			foreach ($c as $key) {
  		?>
  		<td><?php echo $key ;?></td>
  		<?php } ?>
  		
  	</tr>
  	<tr>
  		<?php
  			foreach ($d as $key) {
  		?>
  		<td><?php echo $key ;?></td>
  		<?php } ?>
  		
  	</tr>
</table>
<br>
<br>

<form action="http://localhost/keyboard" method="GET">
        <fieldset>
          <legend>Kirim Data untuk melihat perubahan dengan ketik H/V/5/-12</legend>
        <p>
            <label>Isi di sini:</label>
            <input type="text" name="code"  />
        </p>
        
        <p>
            <input type="submit" name="submit" value="Submit" />
        </p>
        </fieldset>
    </form>

<button onClick="document.location.href='http://localhost/keyboard/?code=h&submit=Submit'">Press H to horizontal</button>
<button onClick="document.location.href='http://localhost/keyboard/?code=v&submit=Submit'">Press V to Vertical</button>
<button onClick="document.location.href='http://localhost/keyboard'">Press N to Normal</button>
