<?php
class Model_Iframe extends Model
{
    
	public function get_data()
	{	
		$db = Db::getConnection();
        $sql = 'SELECT name FROM city';
        $result = $db->query($sql);
        $index = array();
        $i=0;
        while($row=$result->fetch()) {
            //$index[$i]['id'] = $row['id'];
            $index[$i]['name'] = $row['name'];
            $i++;
        }
        return $index;
}
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

