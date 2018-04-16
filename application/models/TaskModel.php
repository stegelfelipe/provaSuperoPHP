<?php
defined('BASEPATH') or die ("Sem Permissão");

class TaskModel extends CI_Model{
  protected $table = 'tb_task';

  public function insert(stdClass $newTask){
    $this->db->insert($this->table, $newTask);

    return $this->db->insert_id();
  }

  public function searchAllByStatus($status){
    $this->db->select('id_task, title, tb_task.description, tb_task.created_in,
    completed_in');
    $this->db->where('status', $status);
    $this->db->from($this->table);

    return $this->db->get()->result();
  }

  public function searchById($id){
    $this->db->where('id_task', $id);
    $this->db->limit(1);
    $this->db->from($this->table);

    return $this->db->get()->row();
  }

  public function updateById(stdClass $task, $id){
    $this->db->where('id_task', $id);
    $this->db->update($this->table, $task);

    return true;
  }

  public function deleteById($id){
    $this->db->where('id_task', $id);
    $this->db->delete($this->table);

    return true;
  }
}
