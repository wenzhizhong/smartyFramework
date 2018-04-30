<?php
//CanPHP框架默认配置
class cpConfig{
	static public $config=array(
			//日志和错误调试配置
		'DEBUG' => true,
		//数据库配置
		'DB'  => array(								
				'DB_TYPE' => 'mysql',//数据库类型，一般不需要修改
				'DB_HOST' => 'localhost',//数据库主机，一般不需要修改
				'DB_USER' => 'root',//数据库用户名
				'DB_PWD' => '',//数据库密码
				'DB_PORT' => 3306,//数据库端口，mysql默认是3306，一般不需要修改
				'DB_NAME' => '',//数据库名
				'DB_CHARSET' => 'utf8',//数据库编码，一般不需要修改
				'DB_PREFIX' => 'ts_',//数据库前缀
				
				'DB_CACHE_ON' => false,//是否开启数据库缓存，true开启，false不开启
				'DB_CACHE_TYPE' => 'FileCache',//缓存类型，FileCache或Memcache或SaeMemcache，cp2.0添加
				'DB_CACHE_TIME' => 600,//缓存时间,0不缓存，-1永久缓存,单位：秒
				
				//文件缓存配置
				'DB_CACHE_PATH' => './data/db_cache/',//数据库查询内容缓存目录，地址相对于入口文件，一般不需要修改
				'DB_CACHE_CHECK' => false,//是否对缓存进行校验，一般不需要修改
				'DB_CACHE_FILE' => 'cachedata',//缓存的数据文件名
				'DB_CACHE_SIZE' => '15M',//预设的缓存大小，最小为10M，最大为1G
				'DB_CACHE_FLOCK' => true,///是否存在文件锁，设置为false，将模拟文件锁,，一般不需要修改
				
				//memcache配置，可配置多台memcache服务器，cp2.0添加
				'MEM_SERVER' => array( array('127.0.0.1', 11211),  array('localhost', 11211) ),
				'MEM_GROUP' => 'db',
				
				//SaeMemcache配置，cp2.0添加
				'SAE_MEM_GROUP' => 'db',
				
				//数据库主从配置，cp2.0添加
				'DB_SLAVE' => array(),//数据库从机配置，cp2.0添加
				/* 数据库主从配置示例，可以配置多台从机，如果用户名、密码等跟主机相同，可不设置
				'DB_SLAVE' => array(
									array(
											'DB_HOST' => '127.0.0.1',
											'DB_USER' => 'root',
											'DB_PWD' => '',
										),
									array(
											'DB_HOST' => '127.0.0.2',
											'DB_USER' => 'root',
											'DB_PWD' => '',
										),
								),
				*/
				
		),

	);
	
	//获取默认配置
	static public function get( $name = '' ) {
		if(isset(self::$config[$name])) {
			return self::$config[$name];
		} else if(isset(self::$config['DB'][$name])) {
			return self::$config['DB'][$name];			
		}  else {
			return false;
		}
	}
	
	//设置参数
	static public function set($name, $value = array()) {
		return self::$config[$name] = $value;
	}
}