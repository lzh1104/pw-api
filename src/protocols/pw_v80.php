<?php

$PROTOCOL = array(
	'code' => array(
		'getUserRoles' => 3401,
		'getRole' => 8003,
		'putRole' => 8002,
		'getUser' => 3002,
		'getRoleStatus' => 3015,
		'getRoleBase' => 3013,
		'getRoleInventory' => 3053,
		'getRoleEquipment' => 3017,
		'getRoleStoreHouse' => 3027,
		'getRoleTask' => 3019,
		'sendMail' => 4214,
		'worldChat' => 120,
		'forbidAcc' => 5035,
		'forbidRole' => 360,
		'muteAcc' => 362,
		'muteRole' => 356,
		'getRoleid' => 3033,
		'renameRole' => 3404,
		'getTerritory' => 863,
		'getRoleFriend' => 201,
		'AddFaction' => 4600,
		'DelFaction' => 4601,
		'getFactionInfo' => 4606,
		'getUserFaction' => 4607,
		'getFactionDetail' => 4608,
		'FactionUpgrade' => 4610,
		'GFactionFortressDetail' => 4404,
	),
	'role' => array(
		'base' => array(
			'bversion' => 'byte',
			'id' => 'int' ,
			'name' => 'name',
			'race' => 'int',
			'cls' => 'int',
			'gender' => 'byte',
			'custom_data' => 'octets',
			'config_data' => 'octets',
			'custom_stamp' => 'int',
			'status' => 'byte',
			'delete_time' => 'int',
			'create_time' => 'int',
			'lastlogin_time' => 'int',
			'forbidcount' => 'cuint',
			'forbid' => array(
				'type' => 'byte',
				'time' => 'int',
				'createtime' => 'int',
				'reason' => 'name',
			),
			'help_states' => 'octets',
			'spouse' => 'int',
			'userid' => 'int',
			'cross_data' => 'name',
			'reserved2' => 'byte',
			'reserved3' => 'byte',
			'reserved4' => 'byte',
		),
		'status' => array(
			'sversion' => 'byte',
			'level' => 'int',
			'level2' => 'int',
			'exp' => 'int',
			'sp' => 'int',
			'pp' => 'int',
			'hp' => 'int',
			'mp' => 'int',
			'posx' => 'float',
			'posy' => 'float',
			'posz' => 'float',
			'worldtag' => 'int',
			'invader_state' => 'int',
			'invader_time' => 'int',
			'pariah_time' => 'int',
			'reputation' => 'int',
			'custom_status' => 'octets',
			'filter_data' => 'octets',
			'charactermode' => 'octets',
			'instancekeylist' => 'octets',
			'dbltime_expire' => 'int',
			'dbltime_mode' => 'int',
			'dbltime_begin' => 'int',
			'dbltime_used' => 'int',
			'dbltime_max' => 'int',
			'time_used' => 'int',
			'dbltime_data' => 'octets',
			'storesize' => 'short',
			'petcorral' => 'octets',
			'property' => 'octets',
			'var_data' => 'octets',
			'skills' => 'octets',
			'storehousepasswd' => 'octets',
			'waypointlist' => 'octets',
			'coolingtime' => 'octets',
			'npc_relation' => 'octets',
			'multi_exp_ctrl' => 'octets',
			'storage_task' => 'octets',
			'faction_contrib' => 'octets',
			'force_data' => 'octets',
			'online_award' => 'octets',
			'profit_time_data' => 'octets',
			'country_data' => 'octets',
			'reserved4' => 'int',
			'reserved5' => 'int',
		),
		'pocket' => array(
			'icapacity' => 'int',
			'timestamp' => 'int',
			'money' => 'int',
			'invcount' => 'cuint',
			'inv' => array(
				'id' => 'int',
				'pos' => 'int',
				'count' => 'int',
				'max_count' => 'int',
				'data' => 'octets',
				'proctype' => 'int',
				'expire_date' => 'int',
				'guid1' => 'int',
				'guid2' => 'int',
				'mask' => 'int'
			),
			'reserved6' => 'int',
			'reserved7' => 'int',
		),
		'equipment' => array(
			'eqpcount' => 'cuint',
			'eqp' => array(
				'id' => 'int',
				'pos' => 'int',
				'count' => 'int',
				'max_count' => 'int',
				'data' => 'octets',
				'proctype' => 'int',
				'expire_date' => 'int',
				'guid1' => 'int',
				'guid2' => 'int',
				'mask' => 'int'
			),
		),
		'storehouse' => array(
			'capacity' => 'int',
			'money' => 'int',
			'storecount' => 'cuint',
			'store' => array(
				'id' => 'int',
				'pos' => 'int',
				'count' => 'int',
				'max_count' => 'int',
				'data' => 'octets',
				'proctype' => 'int',
				'expire_date' => 'int',
				'guid1' => 'int',
				'guid2' => 'int',
				'mask' => 'int'
			),
			'size1' => 'byte',
			'size2' => 'byte',
			'dresscount' => 'cuint',
			'dress' => array(
				'id' => 'int',
				'pos' => 'int',
				'count' => 'int',
				'max_count' => 'int',
				'data' => 'octets',
				'proctype' => 'int',
				'expire_date' => 'int',
				'guid1' => 'int',
				'guid2' => 'int',
				'mask' => 'int'
			),
			'materialcount' => 'cuint',
			'material' => array(
				'id' => 'int',
				'pos' => 'int',
				'count' => 'int',
				'max_count' => 'int',
				'data' => 'octets',
				'proctype' => 'int',
				'expire_date' => 'int',
				'guid1' => 'int',
				'guid2' => 'int',
				'mask' => 'int'
			),
			'reserved' => 'int',
		),
		'task' => array(
			'task_data' => 'octets',
			'task_complete' => 'octets',
			'task_finishtime' => 'octets',
			'task_inventorycount' => 'cuint',
			'task_inventory' => array(
				'id' => 'int',
				'pos' => 'int',
				'count' => 'int',
				'max_count' => 'int',
				'data' => 'octets',
				'proctype' => 'int',
				'expire_date' => 'int',
				'guid1' => 'int',
				'guid2' => 'int',
				'mask' => 'int'
			),
		),
	),
	'octet' => array(
		'var_data' => array(
			'version' => 'lint',
			'pk_count' => 'lint',
			'pvp_cooldown' => 'lint',
			'pvp_flag' => 'byte',
			'dead_flag' => 'byte',
			'is_drop' => 'byte',
			'resurrect_state' => 'byte',
			'resurrect_exp_reduce' => 'float',
			'instance_hash_key1' => 'lint',
			'instance_hash_key2' => 'lint',
			'trashbox_size' => 'lint',
			'last_instance_timestamp' => 'lint',
			'last_instance_tag' => 'lint',
			'last_instance_pos' => array(
				'x' => 'float',
				'y' => 'float',
				'z' => 'float',
			),
			'dir' => 'lint',
			'resurrect_hp_factor' => 'float',
			'resurrect_mp_factor' => 'float',
		),
		'property' => array(
			'id' => 'lint',
			'hp' => 'lint',
			'mp' => 'lint',
			'damage_low' => 'lint',
			'damage_high' => 'lint',
			'damage_magic_low' => 'lint',
			'damage_magic_high' => 'lint',
			'defense' => 'lint',
			'resistance' => array(
				1 => 'lint',
				2 => 'lint',
				3 => 'lint',
				4 => 'lint',
				5 => 'lint'
			),
 			'attack' => 'lint',
			'armor' => 'lint',
			'attack_speed' => 'lint',
			'run_speed' => 'lint',
			'attack_degree' => 'lint',
			'defend_degree' => 'lint',
			'damage_reduce' => 'lint',
			'prayspeed' => 'lint',
			'crit_damage_bonus' => 'lint',
			'invisible_degree' => 'lint',
			'anti_invisible_degree' => 'lint',
		),
		'force_data' => array(
			'cur_force_id' => 'int',
			'forcecount' => 'cuint',
			'force' => array(
				'force_id' => 'int',
				'reputation' => 'int',
				'contribution' => 'int',
			),
		),
		'faction_contrib' => array(
			'consume_contrib' => 'lint',
			'exp_contrib' => 'lint',
			'cumulate_contrib' => 'lint',
		),
	),
	'user' => array(
		'roles' => array(
			'count' => 'cuint',
			'roles' => array(
				'id' => 'int',
				'name' => 'name',
			)
		),
		'info' => array(
			'logicuid' => 'int',
			'rolelist' => 'int',
			'cash' => 'int',
			'money' => 'int',
			'cash_add' => 'int',
			'cash_buy' => 'int',
			'cash_sell' => 'int',
			'cash_used' => 'int',
			'add_serial' => 'int',
			'use_serial' => 'int',
			'exp_logcount' => 'cuint',
			'exg_log' => array(
				'tid' => 'int',
				'time' => 'int',
				'result' => 'short',
				'volume' => 'short',
				'cost' => 'int',
			),
			'addiction' => 'octets',
			'cash_password' => 'octets',
			'autolockcount' => 'cuint',
			'autolock' => array(
				'key' => 'int',
				'value' => 'int',
			),
			'status' => 'byte',
			'forbidcount' => 'cuint',
			'forbid' => array(
				'type' => 'byte',
				'time' => 'int',
				'createtime' => 'int',
				'reason' => 'name',
			),
			'reference' => 'octets',
			'consume_reward' => 'octets',
			'taskcounter' => 'octets',
			'cash_sysauction' => 'octets',
			'login_record' => 'octets',
			'mall_consumption' => 'octets',
			'reserved32' => 'short',
		),
	),
	'RoleList' => array(
		'localsid' => 'int',
		'handler' => 'int',
		'userscount' => 'cuint',
		'users' => array(
			'userid' => 'int',
			'roleid' => 'int',
			'linkid' => 'int',
			'localsid' => 'int',
			'gsid' => 'int',
			'status' => 'byte',
			'name' => 'name',
		),
	),
	'FriendList' => array(
		'groupinfocount' => 'cuint',
		'groupinfo' => array(
			'gid' => 'byte',
			'name' => 'name',
		),
		'friendinfocount' => 'cuint',
		'friendinfo' => array(
			'rid' => 'int',
			'cls' => 'byte',
			'gender' => 'byte',
			'name' => 'name'
		),
	),
	'FactionInfo' => array(
		'fid' => 'int',
		'name' => 'name',
		'level' => 'byte',
		'master' => array(
			'roleid' => 'int',
			'role' => 'byte',
		),
		'membercount' => 'cuint',
		'member' => array(
			'roleid' => 'int',
			'role' => 'byte',
		),
		'announce' => 'name',
		'sysinfo' => 'octets',
	),	
	'FactionDetail' => array(
		'fid' => 'int',
		'name' => 'name',
		'level' => 'byte',
		'master' => 'int',
		'announce' => 'name',
		'sysinfo' => 'octets',
		'membercount' => 'cuint',
		'member' => array(
			'roleid' => 'int',
			'level' => 'byte',
			'occupation' => 'byte',
			'froleid' => 'byte',
			'login_day' => 'short',
			'online_status' => 'byte',
			'name' => 'name',
			'nickname' => 'name',
			'contrib' => 'int'
		),
		'last_op_time' => 'int',
		'alliancecount' => 'cuint',
		'alliance' => array(
			'fid' => 'int',
			'end_time' => 'int',
		),
		'hostilecount' => 'cuint',
		'hostile' => array(
			'fid' => 'int',
			'end_time' => 'int',
		),
		'applycount' => 'cuint',
		'apply' => array(
			'type' => 'int',
			'fid' => 'int',
			'end_time' => 'int',
		),
	),
	'RawRead' => array(
		'handle' => 'octets',
		'Rawcount' => 'cuint',
		'Raw' => array(
			'key' => 'octets',
			'value' => 'octets',
		)
	),
	'GTerritoryDetail' => array(
		'Territorycount' => 'cuint',
		'Territory' => array(
			'id' => 'short',
			'level' => 'short',
			'owner' => 'int',
			'occupy_time' => 'int',
			'challenger' => 'int',
			'deposit' => 'int',
			'cutoff_time' => 'int',
			'battle_time' => 'int',
			'bonus_time' => 'int',
			'color' => 'int',
			'status' => 'int',
			'timeout' => 'int',
			'maxbonus' => 'int',
			'challenge_time' => 'int',
			'challengerdetails' => 'octets',
			'reserved1' => 'byte',
			'reserved2' => 'byte',
			'reserved3' => 'byte',
		),
	),
	'FactionFortressDetail' => array(
		'factionid' => 'int',
		'info'=> array(
			'level' => 'int',
			'exp' => 'int',
			'exp_today' => 'int',
			'exp_today_time' => 'int',
			'tech_point' => 'int',
			'technology' => 'octets',
			'material' => 'octets',
			'building' => 'octets',
			'common_value' => 'octets',
			'actived_spawner' => 'octets',
			'reserved11' => 'byte',
			'reserved12' => 'short',
			'reserved2' => 'int',
			'reserved3' => 'int',
		),
		'info2' => array(
			'health' => 'int',
			'offense_faction' => 'int',
			'offense_starttime' => 'int',
			'offense_endtime' => 'int',
			'challenge_listcount' => 'cuint',
			'challenge_list' => array(
				'item' => 'int'
			),
			'reserved1' => 'int',
			'reserved2' => 'int',
			'reserved3' => 'int',
		),
		'reserved1' => 'int',
		'reserved2' => 'int',
		'reserved3' => 'int',	
		'reserved4' => 'int',
		'reserved5' => 'int',
	),
	'getUserFaction' => array(
		'rid' => 'int',
		'name' => 'name',
		'fid' => 'int',
		'cls' => 'byte',
		'role' => 'byte',
		'reserved' => 'byte',
		'extend' => 'octets',
		'nickname' => 'name',
	),
);