<?php
require('checkallowed.php'); // Check logged-in
?>

<div class="page_title">
    <div class="page_title_icon"><img src="../images/icons/medium/add.png" border="0" /></div>
    <div class="page_title_text"><?php echo $lang['add']; ?></div>
</div>
<?php echo $lang['games_add_desc']; ?><br /><br />

<div class="infobox" style="display:none;"></div>

<div class="box" style="width:750px;">
<div class="box_title" id="box_servers_title"><?php echo $lang['add']; ?></div>
<div class="box_content" id="box_servers_content">


<table border="0" cellpadding="2" cellspacing="0" width="650" class="cfg_table">
<tr>
  <td width="250"><b><?php echo $lang['name']; ?>:</b></td>
  <td><input type="text" id="add_name" value="" class="inputs_req" style="width:430px;" /></td>
</tr>
<tr>
  <td><b><?php echo $lang['type']; ?>:</b></td>
  <td>
    <select id="add_type" class="dropdown">
      <option value="game">Game</option>
      <option value="voice">Voice</option>
      <option value="other">Other</option>
    </select>
  </td>
</tr>
<tr>
  <td><b><?php echo $lang['int_name']; ?>:</b></td>
  <td><input type="text" id="add_intname" value="" class="inputs_req" style="width:430px;" /></td>
</tr>
<tr>
  <td><b><?php echo $lang['desc']; ?>:</b></td>
  <td><input type="text" id="add_desc" value="" class="inputs" style="width:430px;" /></td>
</tr>

<tr>
  <td colspan="2">&nbsp;</td>
</tr>

<tr>
  <td><b><?php echo $lang['port']; ?>:</b></td>
  <td><input type="text" id="add_port" value="" class="inputs_req" style="width:430px;" /></td>
</tr>
<tr>
  <td><b><?php echo $lang['map']; ?>:</b></td>
  <td><input type="text" id="add_def_map" value="" class="inputs" style="width:430px;" /></td>
</tr>
<tr>
  <td><b><?php echo $lang['maxplayers']; ?>:</b></td>
  <td><input type="text" id="add_def_maxplayers" value="" class="inputs_req" style="width:430px;" /></td>
</tr>
<tr>
  <td><b><?php echo $lang['hostname']; ?>:</b></td>
  <td><input type="text" id="add_def_hostname" value="" class="inputs" style="width:430px;" /></td>
</tr>
<tr>
  <td><b><?php echo $lang['config_file']; ?>:</b></td>
  <td><input type="text" id="add_config_file" value="" class="inputs" style="width:430px;" /></td>
</tr>

<tr>
  <td colspan="2">&nbsp;</td>
</tr>


<tr>
  <td><b><?php echo $lang['startup']; ?>:</b></td>
  <td>
      <select id="add_startup" class="dropdown" style="width:430px;">
        <option value="0"<?php if($def_startup == '0') echo ' selected'; ?>><?php echo $lang['no']; ?></option>
        <option value="1"<?php if($def_startup == '1') echo ' selected'; ?>><?php echo $lang['yes']; ?></option>
      </select>
  </td>
</tr>
<tr>
  <td><b><?php echo $lang['query_engine']; ?>:</b></td>
  <td>
      <?php
      // INI file parsing
      if(function_exists('parse_ini_file'))
      {
          $ini_arr  = parse_ini_file(DOCROOT.'/includes/gamequery/games.ini', true);
          
          echo '<select id="add_query_engine" class="dropdown">
                <option value="" selected>'.$lang['none'].'</option>';
          
          foreach($ini_arr as $game => $game_val)
          {
              echo '<option value="'.$game.'">'.$game.'</option>';
          }
          
          echo '</select>';
      }
      // No INI parsing; let them enter it manually
      else
      {
          echo '<font color="red">You do not have PHP INI support (parse_ini_file)!<br />  Enter the engine manually:</font><br />
          <input type="text" id="add_query_engine" value="" class="inputs" />';
      }
      ?>
  </td>
</tr>
<tr>
  <td colspan="2">&nbsp;</td>
</tr>

<tr>
  <td><b>Steam:</b></td>
  <td>
      <select id="add_steam_based" class="dropdown">
        <option value="0" selected><?php echo $lang['no']; ?></option>
        <option value="1"><?php echo $lang['yes']; ?></option>
      </select>
  </td>
</tr>
<tr>
  <td><b>Steam <?php echo $lang['name']; ?>:</b></td>
  <td><input type="text" id="add_steam_name" value="" class="inputs" /></td>
</tr>

<tr>
  <td colspan="2">&nbsp;</td>
</tr>

<tr>
  <td><b><?php echo $lang['working_dir']; ?>:</b></td>
  <td><input type="text" id="add_working_dir" value="" class="inputs" /></td>
</tr>
<tr>
  <td><b><?php echo $lang['pid_file']; ?>:</b></td>
  <td><input type="text" id="add_pid_file" value="" class="inputs" /></td>
</tr>
<tr>
  <td><b><?php echo $lang['update_cmd']; ?>:</b></td>
  <td><textarea id="add_update_cmd" class="inputs" style="width:430px;height:70px;"></textarea></td>
</tr>
<tr>
  <td><b><?php echo $lang['command']; ?>:</b></td>
  <td><textarea id="add_simplecmd" class="inputs_req" style="width:430px;height:70px;"></textarea></td>
</tr>
</table>

<div class="button" onClick="javascript:game_add();"><?php echo $lang['add']; ?></div>

</div>
</div>
