<?php
/**
 * Created by PhpStorm.
 * User: SUPX
 * Date: 16/8/28
 * Time: 下午6:33
 * **********************************数据库操作********************************
 *
 * @version PHP 7.0.8
 * @author 415996664@qq.com;
 *
 */

class db {

    private $host = 'localhost';
    private $user = 'root';
    private $pwd = '';
    private $database = 'cms';
    private $port = 3306;
    public $sql;
    static $obj;

    /*
     * 魔术方法实例化类时自动调用
     *
     * 连接MySQL数据库并将对象赋值到 $thit->link;
     * 如果连接失败则会赋值为null;
     *
     */
    public function __construct()
    {
        $this->sql=new mysqli($this->host,$this->user,$this->pwd,$this->database,$this->port);
        $this->sql->set_charset('utf8');
    }

    /*
     * 获取db对象
     * 所有获取到的对象都只初始化一次
     */
    static function GET_OBJ(){
        if (is_null(self::$obj)) {
            self::$obj =  new db();
        }
        return self::$obj;
    }

    /*
         * 执行一条sql语句
         *
         * 传入两个参数$query,$type,返回查询到的资源,或者执行是否成功true或false
         *
         * $query   SQL语句
         * $type    默认为true 返回结果集或布尔值, 传入false时函数只返回执行结果,true 或者 false
         *
         */
    public function query($query,$type=true)
    {
        if ($type){
            return $this->sql->query($query);
        }else{
            return $this->sql->real_query($query);
        }
    }

    /*
     * 对SQL语句进行转译,防止SQL注入
     * $query SQL语句
     */
    private function escape ($query){
        if (is_string($query)) {
            return $this->sql->real_escape_string($query);
        }
        if (is_array($query)){
            foreach ($query as $key=>$value){
                $query[$key] = $this->escape($value);
            }
            return $query;
        }
    }

    /*
     * 获取数据库内数据
     * $field : 字段
     * $table : 表
     * $where : 筛选条件
     */
    public function get_db_data($field,$table,$where=''){
        $query = "select {$field} from {$table} {$where} ";
        $db = db::GET_OBJ();
        $request = $db->query($query);
        $num = 0;
        while($data[$num] = mysqli_fetch_row($request)){
            $num++;
        }
        $data = array_filter($data);
        return $data;
    }
}
