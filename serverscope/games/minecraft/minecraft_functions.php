<?php


// function getServerStatus($ip) {
//     if (!isset($ip)) {
//         $status = json_decode(file_get_contents('https://api.mcsrvstat.us/2/hypixel.net'));
//     } else {
//         $status = json_decode(file_get_contents('https://api.mcsrvstat.us/2/'.$ip));
//         return $status;
//     }
// }



if (isset($_GET["server_ip"])) {
    $_SESSION['server_ip'] = $_GET["server_ip"];
} else {
    $_SESSION['server_ip'] = "bm.mc-complex.com";
}

function getAllAvailable($status) {

    if (property_exists($status, 'players')) {
        //check if amount of online players is available
        if (property_exists($status->players, 'online')) {
            $server_player_online = $status->players->online;
        } else {
            $server_player_online = '';
        }
        //check if amount of max players is available
        if (property_exists($status->players, 'max')) {
            $server_player_max = $status->players->max;
        } else {
            $server_player_max = '';
        }
        //check if a list of players is available
        if (property_exists($status->players, 'list')) {
            $server_player_list = $status->players->list;
        } else {
            $server_player_list = '';
        }
        //check if a list of uuids is available
        if (property_exists($status->players, 'uuid')) {
            $server_player_uuid = $status->players->uuid;
        } else {
            $server_player_uuid = '';
        }
    } else {
        $server_player_online = '';
        $server_player_max = '';
        $server_player_list = '';
        $server_player_uuid = '';
    }

    //check if Motd is available
    if (property_exists($status, 'motd')) {
        $server_motd = $status->motd->html;
    } else {
        $server_motd = '';
    }
    //check if version is available
    if (property_exists($status, 'version')) {
        $server_version = $status->version;
    } else {
        $server_version = '';
    }

    //check if a protocol is available
    if (property_exists($status, 'protocol')) {
        $server_protocol = $status->protocol;
    } else {
        $server_protocol = '';
    }
    //check if hostname is available
    if (property_exists($status, 'hostname')) {
        $server_hostname = $status->hostname;
    } else {
        $server_hostname = '';
    }
    //check if icon is available
    if (property_exists($status, 'icon')) {
        $server_icon = $status->icon;
    } else {
        $server_icon = '';
    }
    //check if software is available
    if (property_exists($status, 'software')) {
        $server_software = $status->software;
    } else {
        $server_software = '';
    }
    //check if plugins are available
    if (property_exists($status, 'plugins')) {
        $server_plugins = $status->plugins;
    } else {
        $server_plugins = '';
    }
    //check if mods is available
    if (property_exists($status, 'mods')) {
        $server_mods = $status->mods;
    } else {
        $server_mods = '';
    }
    //detecting that the player samples are used for information
    if (property_exists($status, 'info')) {
        $server_info = $status->info;
    } else {
        $server_info = '';
    }

    return $server[] = array(
        'hostname' => $server_hostname,
        'version' => $server_version,
        'player_online' => $server_player_online,
        'player_max' => $server_player_max,
        'motd' => $server_motd,
        'player_list' => $server_player_list,
        'player_uuid' => $server_player_uuid,
        'protocol' => $server_protocol,
        'icon' => $server_icon,
        'software' => $server_software,
        'plugins' => $server_plugins,
        'mods' => $server_mods,
        'info' => $server_info
    ); 
}