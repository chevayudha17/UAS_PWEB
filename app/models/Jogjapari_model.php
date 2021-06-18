<?php

class Jogjapari_model{
    private $table = 'dbjogja';
    private $db;


    public function __construct()
    {
      $this->db = new Database;
    }
    public function getAllPariwisata()
    {
        $this->db->query('SELECT * FROM ' . $this->table );
        return $this->db->resultSet();
    }
    
    public function getPariwisataById($id)
    {
      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
      $this->db->bind('id',$id);
      return $this->db->single();
    }

    public function tambahDataPari($data)
    {
      $query = "INSERT INTO dbjogja 
                VALUES 
              ('', :nama_wisata, :keterangan, :gambar)";
      $this->db->query($query);
      $this->db->bind('nama_wisata', $data['nama_wisata']);
      $this->db->bind('keterangan', $data['keterangan']);
      $this->db->bind('gambar', $data['gambar']);

      $this->db->execute();
      return $this->db->rowCount();
    }
    public function hapusDataPari($id)
    {
      $query = "DELETE FROM dbjogja WHERE id = :id";
      $this->db->query($query);
      $this->db->bind('id', $id);

      $this->db->execute();

      return $this->db->rowCount();
    }
}

    
