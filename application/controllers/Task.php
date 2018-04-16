<?php
defined('BASEPATH') or exit('Sem Permissão');

class Task extends CI_Controller{
  public function index(){
    $this->load->model(array('TaskModel'));
   
    $tasksToDo = $this->TaskModel->searchAllByStatus(0);
    $tasksDone = $this->TaskModel->searchAllByStatus(1);

    $page = array(
      'page_title' => 'Minhas Tarefas',
      'page_content' => 'task/list',
      'tasks' => $tasksToDo,
      'tasksDone' => $tasksDone,
    );

    $this->load->view('public/base', $page);
  }

  public function insert(){
    
    $this->load->model('TaskModel');

    $task = new stdClass();
    $task->title = $this->input->post('title', true);
    $task->description = $this->input->post('description', true);
    $task->created_in = date('d/m/Y H:i:s');

    $this->TaskModel->insert($task);

    $this->session->set_flashdata('success', 'Nova Tarefa Inserida');

    redirect('/tarefas');
  }

  public function edit($id){
    
    $task = $this->thisIsMyTask($id);
        
    $page = array(
      'page_title' => 'Editar Tarefa',
      'page_content' => 'task/edit',
      'task' => $task,
    );

    $this->load->view('public/base', $page);
  }

  public function update($id){
    
    $task = $this->thisIsMyTask($id);

    $newTask = new stdClass();
    $newTask->title = $this->input->post('title', true);
    $newTask->description = $this->input->post('description', true);
    
    $this->TaskModel->updateById($newTask, $id);

    $this->session->set_flashdata('success', 'Tarefa Atualizada');

    redirect('tarefas');
  }

  public function delete($id){
    
    $task = $this->thisIsMyTask($id);

    $this->TaskModel->deleteById($id);

    $this->session->set_flashdata('success', 'Tarefa Excluída');

    redirect('tarefas');
  }

  public function complete($id){
    
    $task = $this->thisIsMyTask($id);

    $newTask = new stdClass();
    $newTask->status = 1;
    $newTask->completed_in = datetime_current();

    $this->TaskModel->updateById($newTask, $id);

    $this->session->set_flashdata('success', 'Tarefa Concluída');

    redirect('tarefas');
  }

  public function reopen($id){
    
    $task = $this->thisIsMyTask($id);

    $newTask = new stdClass();
    $newTask->status = 0;
    $newTask->completed_in = '';

    $this->TaskModel->updateById($newTask, $id);

    $this->session->set_flashdata('success', 'Tarefa Reaberta');

    redirect('tarefas');
  }

  public function thisIsMyTask($id_task){
    $this->load->model('TaskModel');

    $task = $this->TaskModel->searchById($id_task);

    if(!$task){
      $this->session->set_flashdata('error', 'Tarefa Inválida');
      redirect('tarefas');
    }

    return $task;
  }
}
