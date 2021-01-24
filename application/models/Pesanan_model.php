<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Pesanan_model extends CI_Model
{
	private $_table="pesanan";

	public $nomeja;
	public $makan;
	public $minum;
	public $stock;

	public function rules()
	{
		return [
			['field'=> 'nomeja',
			'label' => 'Nomor Meja'
			'rules' => 'required'],
			['field'=> 'makan',
			'label' => 'Makanan'
			'rules' => 'required'],
			['field'=> 'minum',
			'label' => 'Minuman'
			'rules' => 'required']
		];
	}

	public function getAll()
	{
		return $this->db->get($this->_table)->results();
	}
	public function getById($id)
	{
		return $this->db->get_where($this->table, ["nomeja" => $id])->row();
	}
	public function save()
	{
		$post = $this->input->post();
		$this->nomeja = uniqid();
		$this->makan = $post["makan"];
		$this->minum = $post["minum"];
		$this->stock = $post["stock"];
		return $this->db->insert($this->_table, $this);
	}
	public function update()
	{
		$post = $this->input->post();
		$this->nomeja = $post["id"];
		$this->makan = $post["makan"];
		$this->minum = $post["price"];
		$this->stock = $post["stock"];
		return $this->db->update($this->_table, $this, array('nomeja'=>$post['id']));
	}
	public function delete($id)
	{
		return $this->db->delete($this->_table, array("nomeja"=>$id));
	}
}

 ?>