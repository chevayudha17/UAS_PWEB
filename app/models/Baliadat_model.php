<?php

class Baliadat_model{
    private $table = 'dbadatb';
    private $db;


    public function __construct()
    {
      $this->db = new Database;
    }
    public function getAllAdat()
    {
        $this->db->query('SELECT * FROM ' . $this->table );
        return $this->db->resultSet();
    }
    
    public function getAdatById($id)
    {
      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
      $this->db->bind('id',$id);
      return $this->db->single();
    }

    public function tambahDataAdat($data)
    {
      $query = "INSERT INTO dbadatb 
                VALUES 
              ('', :nama_adat, :keterangan, :gambar)";
      $this->db->query($query);
      $this->db->bind('nama_adat', $data['nama_adat']);
      $this->db->bind('keterangan', $data['keterangan']);
      $this->db->bind('gambar', $data['gambar']);

      $this->db->execute();
      return $this->db->rowCount();
    }
    public function hapusDataAdat($id)
    {
      $query = "DELETE FROM dbadatb WHERE id = :id";
      $this->db->query($query);
      $this->db->bind('id', $id);

      $this->db->execute();

      return $this->db->rowCount();
    }
}

    
