<?php

if (file_exists(ABSPATH . 'wp-admin/includes/upgrade.php')) require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

class Ezeksoft_Quizz_Builder_Pro
{
	public function create_table($table, $fields=array())
	{
		global $wpdb;
		$charset_collate = $wpdb->get_charset_collate();
		$columns = "";
		
		foreach ($fields as $key => $value)
		{
			$columns .= "{$key} {$value} DEFAULT NULL, ";
		}

		$sql = "CREATE TABLE IF NOT EXISTS
			$table (
				id INT(32) NOT NULL AUTO_INCREMENT, 
				$columns
				PRIMARY KEY (id)
			); " . $charset_collate . ";";

		$wpdb->query($sql);
		$wpdb->get_results($sql);
		if (function_exists('dbDelta')) dbDelta($sql);
	}

	public function get_option($table_name, $uri_or_id='')
	{
		global $wpdb;
		$sql = "SELECT * FROM {$table_name}";
		if ($uri_or_id) 
		{
			if (is_int($uri_or_id)) $sql .= " WHERE id = '{$uri_or_id}'";
			else $sql .= " WHERE uri = '{$uri_or_id}'";

		}

		return $wpdb->get_results($sql);
	}

	public function update_option($table_name, $items, $id=0)
	{
		global $wpdb;

		if ($id)
		{
			$fields_and_values = "";
			foreach ($items as $key => $value)
				$fields_and_values .= "{$key}='{$value}',";
			$fields_and_values = substr_replace($fields_and_values, "", -1);

			$sql = "UPDATE {$table_name} SET {$fields_and_values} WHERE id = {$id}";			
			return $wpdb->query($sql);
		}

		else
		{
			$fields = "";
			foreach ($items as $key => $value)
				$fields .= "{$key},";
			$fields = substr_replace($fields, "", -1);

			$values = "";
			foreach ($items as $key => $value)
				$values .= "'{$value}',";
			$values = substr_replace($values, "", -1);


			$sql = "INSERT INTO {$table_name}({$fields}) VALUES({$values})";
			return $wpdb->query($sql);
		}
	}

	public function delete_option($table_name, $id)
	{
		global $wpdb;
		return $wpdb->query("DELETE FROM {$table_name} WHERE id = {$id}");
	}


	public function get_uri_from_url($url)
	{
		// retornar URI
		$url_ = $url;
		$quebrar_interrogacao = explode("?", $url);

		if (preg_match("/\?/", $url_)) 
		{
			if (empty($quebrar_interrogacao[1]))
				$url_ = substr_replace($url_, "", -1);
		}

		$Hotmax3_last_chara = substr($quebrar_interrogacao[0],-1);

		if ($Hotmax3_last_chara == "/")
		$url_ = substr($quebrar_interrogacao[0], 0, -1);

		$quebra_barra = explode("/", $url_);

		$ret = $quebra_barra[sizeof($quebra_barra) - 1];

		if (preg_match("/\?/", $ret)) 
		{
			$quebrar_interrogacao = explode("?", $ret);
			$ret = $quebrar_interrogacao[0];
		}

		return $ret;

	}

	public function get_site_uri()
	{
		$url = $_SERVER['REQUEST_SCHEME'] . '://' .$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		return $this->get_uri_from_url($url);
	}

	public function site_is_https()
	{
		return $_SERVER['REQUEST_SCHEME'] == "https" ? 1 : 0;
	}

	public function get_site_full_domain()
	{
		return $_SERVER['REQUEST_SCHEME'] . '://' .$_SERVER['HTTP_HOST'] . "/";
	}


	public function request($value)
	{
	    $search = array("\\",  "\x00", "\n",  "\r",  "'",  '"', "\x1a");
	    $replace = array("\\\\","\\0","\\n", "\\r", "\'", '\"', "\\Z");

	    return str_replace($search, $replace, $value);
	}

	public function struct_db_by_uri($table, $fields, $file)
	{
		global $wpdb;

		$id_field = $fields[0];

		// verifica se é para renderizar o quizz
		$id = 0;
		$render = 0;
		$tablename = $wpdb->prefix."options";
		$list = $wpdb->get_results("SELECT * FROM $tablename WHERE option_name LIKE '%{$table}_{$id_field}_%'");
		if (sizeof($list))
		{
			foreach ($list as $key => $value)
			{
				if($value->option_value == $this->get_site_uri())
				{
					$render = 1;
					if (preg_match("/{$table}_{$id_field}_/", $value->option_name))
					{
						$arr_88172 = explode("{$table}_{$id_field}_", $value->option_name);
						$id = $arr_88172[1];
					}
					break;
				}
			}
		}
		if ($render)
		{

			$SQL = "option_name = '{$table}_{$id_field}_{$id}'"; 
			foreach ($fields as $item_87172)
			{
				$SQL .= " OR option_name = '{$table}_{$item_87172}_{$id}' ";
			}

			$data = $wpdb->get_results("SELECT * FROM $tablename WHERE $SQL");


			if (sizeof($data)) 
			{	
				$dbObject = new stdClass();
				$dbArray = array();
				// itera dado atual, cada dado é uma row com o ID dessa URI
				foreach ($data as $item)
				{
					$arr_88173 = explode("_", $item->option_name);
					$prop = "";

					$i=0;foreach ($arr_88173 as $st)
					{
						if ($i < sizeof($arr_88173) - 1)
							$prop .= $st . "_";
						$i++;
					}
					$prop = substr_replace($prop, "", -1);
					$prop = str_replace($table, "", $prop);
					$prop = substr($prop, 1);
					$dbObject->$prop = $item->option_value;
					$dbArray[$prop] = $item->option_value;
				}

				require(dirname( __FILE__ ) . DIRECTORY_SEPARATOR . $file);
				die();
			}

		} else return 0;

	}

}
