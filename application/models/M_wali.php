<?php
class M_wali extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('data_wali');
    }
    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('data_wali', array('id' => $id))->row();
        return $query;
    }
}
