<?php

return array(
  '^login$' => 'user/login',
  '^register$' => 'user/register',
  '^logout$' => 'user/logout',
	'^upload$' => 'load/upload',
	'^download/([a-zA-Z0-9.]+)' => 'load/download/$1',
  '^delete/([a-zA-Z0-9.]+)' => 'load/delete_file/$1',
  '^list$' => 'list/index',
	'^$' => 'index/index'
);