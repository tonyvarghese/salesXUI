<?php
/**
 * Created by PhpStorm.
 * User: Tony
 * Date: 17-Oct-16
 * Time: 4:25 PM
 */

session_start();

$loginSession = '{
	"success": "true",
	"orgnization_details": {
		"id": 25,
		"name": "org3",
		"owner_id": 38,
		"package_id": null
	},
	"pipeline_details": [{
		"id": 14,
		"name": "new_pipeline",
		"created_date": "2016-06-27 13:08:39",
		"updated_date": "2016-06-27 13:08:39",
		"updated_by": 38,
		"created_by": 38,
		"organization_id": 25,
		"pipeline_stages": [{
			"s_id": 14,
			"stage": "stageOne",
			"sequence_number": 1
		}, {
			"s_id": 15,
			"stage": "stageTwo",
			"sequence_number": 2
		}, {
			"s_id": 16,
			"stage": "stageThree",
			"sequence_number": 3
		}]
	}],
	"lead_custom_fields": [{
		"id": 1,
		"field_name": "custom field",
		"values": "{\"Option1\",\"Option2\"}"
	}, {
		"id": 3,
		"field_name": "fields3",
		"values": "{\"Atom\",\"Molecule\",\"Pizza\"}"
	}],
	"current_user_details": {
		"username": "mail2@salesx.io",
		"user_id": 18,
		"user_profile": {
			"first_name": "Paul",
			"middle_name": "Baker",
			"last_name": "Baber",
			"profile_photo": "http:\/\/www.vvv.ccc",
			"designation": "employee",
			"mail_id": "paul@asa.com"
		}
	},
	"team_details": [{
		"first_name": "Rahul",
		"middle_name": "Middle",
		"last_name": "Name",
		"profile_photo": "http:\/\/www.salesx.io\/abcd",
		"designation": "manager",
		"mail_id": "rahul@mail.com"
	}],
	"session_token":"nc940e7257f92KRfdf342d98e58991256c"
}
';

$_SESSION['login'] = $loginSession;

header("location: ../settings");

?>