<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: monstar
 * Date: 2017/7/24
 * Time: 上午10:02
 */

class User_model extends MY_Model {

    /* 用户登录
     * @param $user_name string 用户名
     * @param $password string 密码
     * @return array
     * */
    public function user_login($user_name, $password){
        $user_info = $this->db->select('*')
                            ->from('admin_user')
                            ->where(array('userName' => $user_name, 'password' => $password))
                            ->limit(1)
                            ->get()->result_array();

        return $user_info;
    }


    /* 根据用户ID查找用户信息
     * @param $user_id int 用户Id
     * @return $user_info array 用户信息
     * */
    public function get_user_info_by_id($user_id){
        $user_info = array();
        $user_info = $this->db->select('*')
                            ->from('admin_user')
                            ->where(array('id' => $user_id))
                            ->limit(1)
                            ->get()->row_array();

        return $user_info;
    }

    /* 获取用户列表信息(分页)
     * @param $count int 每页显示的用户记录数
     * @param $offset int 每页开始的记录标识
     * @return $user_list array 用户信息
     * */
    public function get_user_list($count = 20, $offset = 0){
        $user_list = array();

        $user_list = $this->db->select('*')
                            ->from('admin_user')
                            ->limit($count, $offset)
                            ->get()->result_array();

        return $user_list;
    }

    /* 获取用户的总数[一般用于分页计算总数]
     *
     * */
    public function get_user_count(){
        return $this->db->count_all_results('admin_user');
    }

    /* 新增单个用户信息
     * @param $user_info array 用户信息数组
     * */
    public function add_admin_user($user_info){
        $res = $this->db->insert('admin_user', $user_info);
        return $res;
    }

    /* 批量新增用户信息
     * @param $user_data array 多个用户信息的数组
     * */
    public function add_batch_admin_user($user_data){
        $this->db->trans_start(); // 启用事务机制
        $this->db->insert('admin_user', $user_data);
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            return false;
        } else {
            return true;
        }
    }

    /* 根据用户Id修改用户信息
     * @param $user_id int 用户Id
     * @param $user_info array 用户信息(修改后)
     * */
    public function update_admin_user($user_id, $user_info){
        $where = array('id' => $user_id);
        $res = $this->db->update('admin_user', $user_info, $where);

        return $res;
    }

    /* 根据用户Id删除用户信息
     * @param $user_id int 用户Id
     * */
    public function delete_admin_user($user_id){
        $where = array('id' => $user_id);
        $res = $this->db->delete('admin_user', $where);

        return $res;
    }

}