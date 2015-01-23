<?php
/*
 * GamePanelX
 * 
 * Hungarian Language file
 * Written by Kov�cs Levente
 * Email: kovacs_levi@yahoo.com
 * 
 * To translate to another language, copy this to a new PHP file named "yourlanguage.php", and translate all the english words on the right (to the right of the = sign).
 * Try and keep the structure of the file the same, and make sure you close all '';
 * 
*/
$lang = array();

########################################################################

// Common Words/Phrases
$lang['yes']                = 'Igen';
$lang['no']                 = 'Nem';
$lang['active']             = 'Akt�v';
$lang['inactive']           = 'Inakt�v';
$lang['setup']              = 'Be�ll�t�s';
$lang['settings']           = 'Be�ll�t�sok';
$lang['language']           = 'Nyelv';
$lang['default_language']   = 'Alap�rtelmezett Nyelv';
$lang['email_address']      = 'E-mail C�m';
$lang['company']            = 'V�llalat';
$lang['theme']              = 'T�ma';
$lang['save']               = 'Ment�s';
$lang['game']               = 'J�t�k';
$lang['voice']              = 'Hang';
$lang['desc']               = 'Le�r�s';
$lang['status']             = 'St�tusz';
$lang['manage']             = 'Kezel�s';
$lang['info']               = 'Inf�';
$lang['owner']              = 'Tulajdonos';
$lang['date_added']         = 'Hozz�ad�s D�tuma';
$lang['last_updated']       = 'Utolj�ra Friss�tve';
$lang['default']            = 'Alap�rtelmezett';
$lang['delete']             = 'T�r�l';
$lang['create']             = 'K�sz�t';
$lang['add']                = 'Hozz�ad�s';
$lang['edit']               = 'Szerkeszt';
$lang['failed']             = 'Sikertelen';
$lang['name']               = 'N�v';
$lang['first_name']         = 'Keresztn�v';
$lang['last_name']          = 'Vezet�kn�v';
$lang['type']               = 'T�pus';
$lang['none']               = 'Nincs';
$lang['optional']           = 'Opcion�lis';
$lang['complete']           = 'Befejez';
$lang['go_back']            = 'Vissza';
$lang['saved']              = 'Mentve';

// Tech Words
$lang['server']             = 'Szerver';
$lang['username']           = 'Felhaszn�l�n�v';
$lang['password']           = 'Jelsz�';
$lang['newpassword']        = '�j Jelsz�';
$lang['newpassword_conf']   = '<b>�j Jelsz�</b> (meger�s�t�s)';
$lang['chpassword']         = 'Jelsz� M�dos�t�sa';
$lang['cur_password']       = 'Jelenlegi Jelsz�';
$lang['network']            = 'H�l�zat';
$lang['online']             = 'Online';
$lang['offline']            = 'Offline';
$lang['connect']            = 'Csatlakoz�s';
$lang['startup']            = 'Ind�t�';
$lang['files']              = 'F�jlok';
$lang['command']            = 'Parancs';
$lang['local_dir']          = 'Helyi K�nyvt�r';
$lang['working_dir']        = 'M�k�dtet�i K�nyvt�r';
$lang['pid_file']           = 'PID F�jl';
$lang['ip']                 = 'IP C�m';
$lang['ips']                = 'IP C�mek';
$lang['port']               = 'Port';
$lang['login']              = 'Bel�p�s';
$lang['logout']             = 'Kil�p�s';
$lang['logged_out']         = 'Sikeresen Kil�pt�l';
$lang['install']            = 'Telep�t';
$lang['installing']         = 'Telep�t�s';
$lang['not_installed']      = 'Nincs Telep�tve';

$lang['unknown']            = 'Ismeretlen';
$lang['click_here']         = 'Kattints Ide';
$lang['documentation']      = 'GamePanelX Dokument�ci�';
$lang['update_cmd']         = 'CMD Friss�t�s';
$lang['banned_start']       = 'Tiltott Ind�t�i �rt�kek';
$lang['banned_start_desc']  = '<b>Megjegyz�s:</b> �rd ide azokat a szavakat, amelyeket nem szeretn�d, hogy az �gyfelek a szerver ind�t�i �rt�kekben haszn�ljanak';
$lang['plugin']             = 'B�v�tm�ny';
$lang['plugins']            = 'B�v�tm�nyek';
$lang['del_install']        = 'A folytat�shoz t�r�ld ki az "install" k�nyvt�rat!';
$lang['version']            = 'Verzi�';
$lang['system_update']      = 'Rendszerfriss�t�s el�rhet�!';
$lang['invalid_login']      = 'Sikertelen bel�p�s!  K�rlek Pr�b�ld �jra.';
$lang['permissions']        = 'Enged�lyek';

// Error messages
$lang['err_query']          = 'Sikertelen adatb�zis lek�rdez�s';
$lang['err_sql_update']     = 'Sikertelen adatb�zis friss�t�s';

// Left Panel
$lang['home']               = 'F�oldal';
$lang['setup']              = 'Be�ll�t';
$lang['settings']           = 'Be�ll�t�sok';
$lang['game_setups']        = 'J�t�k Be�ll�t�sok';
$lang['cloud_games']        = 'Felh� J�t�kok';
$lang['server_templates']   = 'Szerver Sablonok';
$lang['template']           = 'Sablon';
$lang['templates']          = 'Sablonok';
$lang['servers']            = 'Szerverek';
$lang['all_servers']        = '�sszes Szerver';
$lang['game_servers']       = 'J�t�kszerverek';
$lang['voice_servers']      = 'Hangszerverek';
$lang['create_server']      = 'Szerverk�sz�t�s';
$lang['accounts']           = 'Felhaszn�l�k';
$lang['admins']             = 'Adminok';
$lang['resellers']          = 'Viszontelad�k';
$lang['list_users']         = '�gyfelek List�ja';
$lang['add_user']           = '�gyf�l Hozz�ad�s';
$lang['list_admins']        = 'Adminok List�ja';
$lang['add_admin']          = 'Admin Hozz�ad�s';
$lang['list_resellers']     = 'Viszontelad�k List�ja';
$lang['add_reseller']       = 'Viszontelad� Hozz�ad�s';
$lang['welcome_msg']        = '�dv�z�l a GamePanelX';
$lang['int_name']           = 'Bels� N�v';
$lang['int_name_desc']      = 'A Bels� N�v csak bet�ket, sz�mokat �s al�h�z�sokat tartalmazhat, p�ld�ul: "red_1"';
$lang['query_engine']       = 'Query Motor';
$lang['create_network']     = 'H�l�zati Szerver L�trehoz�s';

// Templates
$lang['delete_tp']          = 'Sablon T�rl�se';
$lang['create_tp']          = 'Sablon L�trehoz�s';
$lang['file_path']          = 'Szerver F�jlok';
$lang['browse']             = 'B�ng�sz�s';

// Network
$lang['network_server']     = 'H�l�zati Szerverek';
$lang['os']                 = 'Oper�ci�s Rendszer';
$lang['location']           = 'Elhelyez�s';
$lang['datacenter']         = 'Adatk�zpont';
$lang['local']              = 'Helyi';
$lang['local_server']       = 'Helyi Szerver';
$lang['remote_server']      = 'T�voli Szerver';
$lang['no_enc_key']         = 'Nem tal�lhat� titkos�tott kulcs!  Ellen�rizd a "/configuration.php" f�jlt.';
$lang['login_user']         = 'Felhaszn�l�n�v';
$lang['login_pass']         = 'Jelsz�';
$lang['login_port']         = 'Port';
$lang['login_homedir']      = 'Home K�nyvt�r';
$lang['net_showing_ips']    = 'IP C�mek mutat�sa';
$lang['srv_using_net']      = 'L�teznek szerverek ezen a h�l�zati szerveren!  K�rlek el�bb t�r�ld �ket.';
$lang['add_ip']             = 'IP C�m Hozz�ad�s';
$lang['new_ip']             = '�j IP C�m';
$lang['ip_exists']          = 'Sajn�lom, Ez az IP C�m m�r l�tezik!';
$lang['ip_port_used']       = 'Sajn�lom, Ez az IP/Port m�r haszn�latban van!';
$lang['srv_using_ip']       = 'L�teznek szerverek ezzel az IP C�mmel!  K�rlek el�bb t�r�ld �ket.';
$lang['invalid_ip']         = 'Helytelen IP C�m!  K�rlek Pr�b�ld �jra.';

// Servers
$lang['create_sv']          = 'Szerver K�sz�t�s';
$lang['invalid_port']       = 'Helytelen port!  K�rlek pr�b�ld �jra.';
$lang['invalid_intname']    = 'Helytelen Bels� n�v!  Csak bet�ket, sz�mokat, vonalat �s al�lvonalat haszn�lhatsz.  K�rlek Pr�b�ld �jra.';
$lang['item']               = 'Item';
$lang['value']              = '�rt�k';
$lang['user_editable']      = '�gyf�l �ltal m�dos�that�';
$lang['restart']            = '�jraind�t�s';
$lang['stop']               = 'Le�ll�t�s';
$lang['update']             = 'Friss�t�s';
$lang['map']                = 'P�lya';
$lang['hostname']           = 'Szerver N�v';
$lang['players']            = 'J�t�kosok';
$lang['show_options']       = '�sszes opci�k mutat�sa';
$lang['simple']             = 'Kezd�';
$lang['advanced']           = 'Halad�';

// Cloud
$lang['cloud_avail']        = 'J�t�kok el�rhet�ek a <i>gpx cloud</i> �ltal';
$lang['cloud_topmsg']       = 'Ha megjelenik egy �j j�t�k a GamePanelX Cloud-on, akkor itt lesznek el�rhet�ek.';

// Games
$lang['games_add_desc']     = 'Itt l�trehozhatsz �j telep�thet� j�t�kot.';
$lang['games_up_icon']      = '<b>Megjegyz�s:</b> T�lts fel egy 64x64 PNG ikont';
$lang['note_steam_auto']    = '<b>Megjegyz�s:</b> Steam-es szerverekhez, hagyd �resen a szerver f�jlok �tvonal�t, hogy a Steam Automatikus telep�t�t haszn�ld.';

// File Manager
$lang['new_filename']       = '�j F�jln�v';
$lang['new_dirname']        = '�j K�nyvt�rn�v';

// User perms
$lang['access_ftp']         = 'FTP Hozz�f�r�s';
$lang['update_usr_det']     = 'Felhaszn�l�i adatok friss�t�se';
$lang['user_exists']        = 'Sajn�lom, a felhaszn�l�n�v m�r l�tezik!';

// Home Page hints
$lang['def_adm_step']       = 'L�p�s';
$lang['def_adm_tip_docs']   = 'K�rlek Olvasd el az eg�sz Dokument�ci�t';
$lang['def_adm_tip_accts']  = 'Nincs �gyf�l!  El�bb k�sz�ts egy �gyf�l felhaszn�l�t, hogy azt�n szervert k�sz�thess.';
$lang['def_adm_tip_net']    = 'Nincs H�l�zati Szerver!  El�bb k�sz�ts egyet.';
$lang['def_adm_tip_tpl']    = 'Nincs k�sz szerver sablon!  Szerver l�trehoz�shoz, el�bb k�sz�ts egy szerver sablont';
$lang['def_adm_tip_srv1']   = 'K�szen �llsz egy szerver l�trehoz�shoz!';
$lang['def_adm_tip_srv2']   = 'Most m�r k�sz�thetsz j�t�k/hang szervert.';

// Other
$lang['api_key']            = 'API Kulcs';

##############################################################################################################

// 3.0.8
$lang['install_mirrors']    = 'Telep�t�si �tvonalak';
$lang['game_panel']         = 'Webadmin';
$lang['show_console_out']   = 'Kattints ide, hogy l�sd a console-t';
$lang['config_file']        = 'Konfig F�jl';
$lang['modified']           = 'M�dos�tva';
$lang['accessed']           = 'El�rhet�';
$lang['size']               = 'M�ret';
$lang['maxplayers']         = 'F�r�hely';
$lang['hostname']           = 'Hosztn�v';

?>
