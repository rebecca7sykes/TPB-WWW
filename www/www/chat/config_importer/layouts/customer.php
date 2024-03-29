<?php
	$GLOBALS['fc_config']['layouts'][ROLE_CUSTOMER] = array(
		'allowBan' => false,
		'allowInvite' => false,
		'allowIgnore' => false,
		'allowProfile' => false,
		'allowCreateRoom' => false,
		'allowFileShare' => false,//file sharing user menu
		'allowCustomBackground' => true, //if false, "effects" tab "Custom" button disappears
		'showOptionPanel' => true,
		'showInputBox' => true,
		'showPrivateLog' => false,
		'showPublicLog' => true,
		'showUserList' => false,
		'showLogout' => true,
		'isSingleRoomMode' => true, //if true room drop-down is visible
		'allowPrivateMessage' => false,
		'showAddressee' => false,

		'toolbar' => array(
			'status'  => false,
			'skin'    => false,
			'color'   => false,
			'save'    => false,
			'help'    => true,
			'smilies' => 2,     //0 - disable, 1 - combobox, 2 - smilies popup window
			'clear'   => false,
			'bell'    => true,
		),

		//which tabs to show in the options panel ('About' tab cannot be hidden)
		'optionPanel' => array(
			'themes'  => true,
			'sounds'  => true,
			'effects' => true,
			'text'    => true,
		),

		// UI config
		'constraints' => array(
			'userList' => array(
				'minWidth'   => 50,    //minimal width of user list view, pixels
				'width'      => -1,    //exact width of userlist, pixels
				'relWidth'   => 30,    //relative width of userlist, percent
				'undockWidth'  => 75,    //relative width of docked userlist, percent
				'dockHeight' => 50,    //relative height of docked userlist, percent
				'position'   => RIGHT  //position on the stage p.v. is RIGHT or LEFT
			),
			'publicLog' => array(
				'minHeight'  => 35,   //minimal height of public log, pixels
				'height'     => -1,   //exact height of public log, pixels
				'relHeight'  => 66,   //relative height of public log, percent
			),
			'privateLog' => array(
				'minHeight'  => 35,
				'height'     => -1,
				'relHeight'  => 25,
			),
			'inputBox' => array(
				'minHeight'  => 35,
				'height'     => -1,
				'relHeight'  => 8,
				'position'   => BOTTOM  //position on the stage p.v. is BOTTOM or TOP
			),
		)
	);
?>