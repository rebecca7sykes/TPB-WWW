<?php
			//echo "hello".INC_DIR . 'classes/doLogin.php';
			//fixes for aumlavta

//-----------------------------------------------------------------------------------------------------------
			$stmt = new Statement('SELECT SQL_CACHE * FROM '.$GLOBALS['fc_config']['db']['pref'].'rooms ORDER BY id',65);
			$rs = $stmt->process();
			if($res = $rs->next())
			{
			}
			else
			{
				$stmt = new Statement('INSERT INTO '.$GLOBALS['fc_config']['db']['pref'].'rooms (created, name, password, ispublic, ispermanent) VALUES (NOW(), ?, ?, ?, ?)',58);
				$rs = $stmt->process('None','','',null);
			}
			//------------------------------------------------------------------------------------------------------------

			ChatServer::loadCMSclass();
			$cms = $GLOBALS['fc_config']['cms'];
			$cmsclass = strtolower(get_class($cms));
			if( $cmsclass != 'statelesscms' && $GLOBALS['fc_config']['loginUTF8decode'] )
			{
//				$login    = utf8_decode($login);
//				$password = utf8_decode($password);
//          		mysql_query("SET NAMES utf8");
			}
			//---

//			$uId = ChatServer::isLoggedIn();
//			$u = ChatServer::getUser($uId);


      $succLogin = ($this->userid = ChatServer::login($login, $password, array('ip' => $bot_id), $session_inst));
      if (!$succLogin && $GLOBALS['fc_config']['combineCMS']) {
        fb('goto stateless');

        $GLOBALS['fc_config']['CMSsystem'] = 'statelessCMS';
        $pref = ($GLOBALS['fc_config']['guestPrefix']) ? ('('.$GLOBALS['fc_config']['guestPrefix'].') ') : '';
        $succLogin = ($this->userid = ChatServer::login($pref.$login, $password, array('ip' => $bot_id), $session_inst));
      }


			//if($this->userid = ChatServer::login($login, $password, array('ip' => $bot_id))) {
			if ($succLogin)
			{// changed on 090706 for chat instances
				if($lang) $this->lang = $lang;
				if($tzoffset) $this->tzoffset = $tzoffset;
				$ar = $this->getAvailableRoom($GLOBALS['fc_config']['defaultRoom']);
				$this->roomid = $roomid? $roomid : $ar['id'];
				$this->room_is_permanent = $ar['ispermanent'] != '';

				$this->start = $this->sendLoginInfo($fsoId);
			}
			else
			{
				$this->start = $this->sendBack(new Message('lout', null, null, 'wrongPass'));
			}

			$this->save();
?>