<?php
/**
* OpenEyes
*
* (C) Moorfields Eye Hospital NHS Foundation Trust, 2008-2011
* (C) OpenEyes Foundation, 2011-2013
* This file is part of OpenEyes.
* OpenEyes is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
* OpenEyes is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
* You should have received a copy of the GNU General Public License along with OpenEyes in a file titled COPYING. If not, see <http://www.gnu.org/licenses/>.
*
* @package OpenEyes
* @link http://www.openeyes.org.uk
* @author OpenEyes <info@openeyes.org.uk>
* @copyright Copyright (c) 2008-2011, Moorfields Eye Hospital NHS Foundation Trust
* @copyright Copyright (c) 2011-2013, OpenEyes Foundation
* @license http://www.gnu.org/licenses/gpl-3.0.html The GNU General Public License V3.0
*/

$config = array(
	'components' => array(
		'db' => array(
			'connectionString' => 'mysql:host=localhost;dbname=qe',
			'username' => 'qe',
			'password' => 'qe',
		),
		'session' => array(
			'timeout' => 86400
		),
		'cacheBuster' => array(
			'time' => date('Ymd').'01',
		),
		/*
		'log' => array(
			'routes' => array(
				 // SQL logging
				'system' => array(
					'class' => 'CFileLogRoute',
					'levels' => 'trace, info, warning, error',
					'categories' => 'system.db.CDbCommand',
					'logFile' => 'sql.log',
				),
				// System logging
				'system' => array(
					'class' => 'CFileLogRoute',
					'levels' => 'trace, info, warning, error',
					'categories' => 'system.*',
					'logFile' => 'system.log',
				),
				// Profiling
				'profile' => array(
					'class' => 'CFileLogRoute',
					'levels' => 'profile',
					'logFile' => 'profile.log',
				),
				// User activity logging
				'user' => array(
					'class' => 'CFileLogRoute',
					'levels' => 'user',
					'logfile' => 'user.log',
					'filter' => array(
						'class' => 'CLogFilter',
						'prefixSession' => false,
						'prefixUser' => true,
						'logUser' => true,
						'logVars' => array('_GET','_POST'),
					),
				),
				// Log to browser
				'browser' => array(
					'class' => 'CWebLogRoute',
				),
			),
		),
		*/
	),

	'modules' => array(
		'OphCiExamination' => array(
			'class' => '\OEModule\OphCiExamination\OphCiExaminationModule',
		),
		'OphTrOperationnote',
		'eyedraw'
	),

	'params'=>array(
                'alerts_email' => 'jamie.neil@omniaperta.com',
                'adminEmail' => 'jamie.neil@omniaperta.com',
                'helpdesk_email' => 'helpdesk@example.com',
                'helpdesk_phone' => '12345678',
                'google_analytics_account' => '',
                'default_site_code' => '',
                'institution_code' => 'RP6',
                'hos_num_regex' => '/^([0-9]{1,9})$/',
                'pad_hos_num' => '%07s',
                'profile_user_can_edit' => true,
                'profile_user_can_change_password' => true,
		'environment' => 'dev',
		'watermark' => 'QE Demo',
		'watermark_admin' => 'QE Demo (admin)',
		'local_users' => array('admin','username'),
		'specialty_codes' => array(130),
		'specialty_sort' => array(130, 'SUP')
	),
);

return $config;
