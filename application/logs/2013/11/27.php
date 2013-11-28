<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-27 13:27:43 --- EMERGENCY: ErrorException [ 2 ]: mktime() expects parameter 2 to be long, string given ~ APPPATH/classes/Model/Comment.php [ 36 ] in file:line
2013-11-27 13:27:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/home/ralfe/wor...', 36, Array)
#1 /home/ralfe/workspace/spree/application/classes/Model/Comment.php(36): mktime('13', ':2', ':4', '11', '27', '2013')
#2 /home/ralfe/workspace/spree/application/classes/Model/Comment.php(18): Model_Comment->get_datetime()
#3 /home/ralfe/workspace/spree/application/classes/Controller/Ajax.php(27): Model_Comment->display()
#4 /home/ralfe/workspace/spree/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_post_comment()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/ralfe/workspace/spree/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 /home/ralfe/workspace/spree/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/ralfe/workspace/spree/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/ralfe/workspace/spree/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-11-27 13:27:52 --- EMERGENCY: ErrorException [ 2 ]: mktime() expects parameter 2 to be long, string given ~ APPPATH/classes/Model/Comment.php [ 36 ] in file:line
2013-11-27 13:27:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/home/ralfe/wor...', 36, Array)
#1 /home/ralfe/workspace/spree/application/classes/Model/Comment.php(36): mktime('13', ':2', ':5', '11', '27', '2013')
#2 /home/ralfe/workspace/spree/application/classes/Model/Comment.php(18): Model_Comment->get_datetime()
#3 /home/ralfe/workspace/spree/application/classes/Controller/Ajax.php(27): Model_Comment->display()
#4 /home/ralfe/workspace/spree/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_post_comment()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/ralfe/workspace/spree/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 /home/ralfe/workspace/spree/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/ralfe/workspace/spree/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/ralfe/workspace/spree/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-11-27 13:28:40 --- EMERGENCY: ErrorException [ 2 ]: mktime() expects parameter 2 to be long, string given ~ APPPATH/classes/Model/Comment.php [ 37 ] in file:line
2013-11-27 13:28:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/home/ralfe/wor...', 37, Array)
#1 /home/ralfe/workspace/spree/application/classes/Model/Comment.php(37): mktime('13', ':2', ':4', '11', '27', '2013')
#2 /home/ralfe/workspace/spree/application/classes/Model/Comment.php(18): Model_Comment->get_datetime()
#3 /home/ralfe/workspace/spree/application/classes/Controller/Ajax.php(27): Model_Comment->display()
#4 /home/ralfe/workspace/spree/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_post_comment()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/ralfe/workspace/spree/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#7 /home/ralfe/workspace/spree/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/ralfe/workspace/spree/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/ralfe/workspace/spree/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-11-27 13:28:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_Comment::$response ~ APPPATH/classes/Model/Comment.php [ 22 ] in /home/ralfe/workspace/spree/application/classes/Model/Comment.php:22
2013-11-27 13:28:54 --- DEBUG: #0 /home/ralfe/workspace/spree/application/classes/Model/Comment.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/ralfe/wor...', 22, Array)
#1 /home/ralfe/workspace/spree/application/classes/Controller/Ajax.php(27): Model_Comment->display()
#2 /home/ralfe/workspace/spree/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_post_comment()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/ralfe/workspace/spree/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /home/ralfe/workspace/spree/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/ralfe/workspace/spree/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/ralfe/workspace/spree/index.php(118): Kohana_Request->execute()
#8 {main} in /home/ralfe/workspace/spree/application/classes/Model/Comment.php:22
2013-11-27 13:29:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_Comment::$response ~ APPPATH/classes/Model/Comment.php [ 22 ] in /home/ralfe/workspace/spree/application/classes/Model/Comment.php:22
2013-11-27 13:29:03 --- DEBUG: #0 /home/ralfe/workspace/spree/application/classes/Model/Comment.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/ralfe/wor...', 22, Array)
#1 /home/ralfe/workspace/spree/application/classes/Controller/Ajax.php(27): Model_Comment->display()
#2 /home/ralfe/workspace/spree/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_post_comment()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/ralfe/workspace/spree/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /home/ralfe/workspace/spree/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/ralfe/workspace/spree/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/ralfe/workspace/spree/index.php(118): Kohana_Request->execute()
#8 {main} in /home/ralfe/workspace/spree/application/classes/Model/Comment.php:22
2013-11-27 13:33:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: comments ~ APPPATH/views/pages/home.php [ 58 ] in /home/ralfe/workspace/spree/application/views/pages/home.php:58
2013-11-27 13:33:38 --- DEBUG: #0 /home/ralfe/workspace/spree/application/views/pages/home.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/ralfe/wor...', 58, Array)
#1 /home/ralfe/workspace/spree/system/classes/Kohana/View.php(61): include('/home/ralfe/wor...')
#2 /home/ralfe/workspace/spree/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/ralfe/wor...', Array)
#3 /home/ralfe/workspace/spree/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/ralfe/workspace/spree/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/ralfe/workspace/spree/application/classes/Controller/Welcome.php(14): Kohana_Response->body(Object(View))
#6 /home/ralfe/workspace/spree/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/ralfe/workspace/spree/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /home/ralfe/workspace/spree/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/ralfe/workspace/spree/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/ralfe/workspace/spree/index.php(118): Kohana_Request->execute()
#12 {main} in /home/ralfe/workspace/spree/application/views/pages/home.php:58
2013-11-27 14:01:04 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'spree.tools' doesn't exist [ INSERT INTO `tools` (`datetime`, `author`, `email`, `comment`, `parent_id`, `active`) VALUES ('2013-11-27 14:01:04', 'Ralfe Poisson', 'ralfe@implyit.co.za', 'This is a test comment.', NULL, 1) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/ralfe/workspace/spree/modules/database/classes/Kohana/Database/Query.php:251
2013-11-27 14:01:04 --- DEBUG: #0 /home/ralfe/workspace/spree/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `to...', false, Array)
#1 /home/ralfe/workspace/spree/application/classes/Model/Comment.php(62): Kohana_Database_Query->execute()
#2 /home/ralfe/workspace/spree/application/classes/Controller/Ajax.php(24): Model_Comment->save()
#3 /home/ralfe/workspace/spree/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_post_comment()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/ralfe/workspace/spree/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /home/ralfe/workspace/spree/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/ralfe/workspace/spree/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/ralfe/workspace/spree/index.php(118): Kohana_Request->execute()
#9 {main} in /home/ralfe/workspace/spree/modules/database/classes/Kohana/Database/Query.php:251
2013-11-27 14:01:48 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'parent_id' cannot be null [ INSERT INTO `comments` (`datetime`, `author`, `email`, `comment`, `parent_id`, `active`) VALUES ('2013-11-27 14:01:48', 'Ralfe Poisson', 'ralfe@implyit.co.za', 'This is a test comment.', NULL, 1) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/ralfe/workspace/spree/modules/database/classes/Kohana/Database/Query.php:251
2013-11-27 14:01:48 --- DEBUG: #0 /home/ralfe/workspace/spree/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 /home/ralfe/workspace/spree/application/classes/Model/Comment.php(62): Kohana_Database_Query->execute()
#2 /home/ralfe/workspace/spree/application/classes/Controller/Ajax.php(24): Model_Comment->save()
#3 /home/ralfe/workspace/spree/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_post_comment()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/ralfe/workspace/spree/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /home/ralfe/workspace/spree/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/ralfe/workspace/spree/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/ralfe/workspace/spree/index.php(118): Kohana_Request->execute()
#9 {main} in /home/ralfe/workspace/spree/modules/database/classes/Kohana/Database/Query.php:251
2013-11-27 20:16:32 --- EMERGENCY: ErrorException [ 4 ]: parse error, expecting `T_STRING' or `T_VARIABLE' or `'$'' ~ APPPATH/classes/Controller/Welcome.php [ 12 ] in file:line
2013-11-27 20:16:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-27 20:18:43 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'spree.users' doesn't exist [ SELECT `uid` FROM `users` WHERE `parent_id` = 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/ralfe/Documents/workspace/spree-test/modules/database/classes/Kohana/Database/Query.php:251
2013-11-27 20:18:43 --- DEBUG: #0 /Users/ralfe/Documents/workspace/spree-test/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `uid` FR...', false, Array)
#1 /Users/ralfe/Documents/workspace/spree-test/application/classes/Model/Comment.php(108): Kohana_Database_Query->execute()
#2 /Users/ralfe/Documents/workspace/spree-test/application/classes/Controller/Welcome.php(12): Model_Comment::comment_list(0)
#3 /Users/ralfe/Documents/workspace/spree-test/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/ralfe/Documents/workspace/spree-test/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/ralfe/Documents/workspace/spree-test/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/ralfe/Documents/workspace/spree-test/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/ralfe/Documents/workspace/spree-test/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/ralfe/Documents/workspace/spree-test/modules/database/classes/Kohana/Database/Query.php:251