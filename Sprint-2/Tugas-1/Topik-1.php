<?php

class Draft{
    public $Books = [
        [
            'Judul Buku' => 'Belajar PHP',
            'ISBN'       => '010101' 
        ],
        [
            'Judul Buku' => 'Belajar OOP',
            'ISBN'       => '020202'
        ],
        [
            'Judul Buku' => 'Belajar JS',
            'ISBN'       => '030303'
        ]
    ];
    public $Peminjam = [
        [
            'No.ID'      => '0101',
            'Nickname'   => 'Zeys'
        ],
        [
            'No.ID'      => '0202',
            'Nickname'   => 'Funi'
        ],
        [
            'No.ID'      => '0303',
            'Nickname'   => 'Honey'
        ]
    ];
}
class Peminjaman extends Draft {
    public $peminjaman = [
        [
            'Nama' => 'mouza',
            'judul buku' => 'How to use GitHub',
            'tanggal peminjaman' => '17-07-2017',
            'tanggal pengembalian' => '21-07-2017'
        ]
    ];
    public $pengembalian = [];
    public function peminjaman(){
        echo "Judul Buku =";
        $judul_buku = trim(fgets(STDIN));
        $i=count($this->peminjaman);
        foreach ($this->peminjaman as $key => $value) {
            if ($value["Judul Buku"]==$judul_buku) {
                echo "Judul Buku = ".$value['Judul Buku']."\n";
                $this->Peminjaman[$i]['Judul Buku']=$value['Judul Buku'];
                $this->Peminjaman[$i]['ISBN']=$value['ISBN'];
            }
        }
        echo "Waktu peminjaman = ";
        $this->Peminjaman[$i]['Waktu peminjaman']=trim(fgets(STDIN));
        echo "Waktu pengembalian = ";
        $this->peminjaman[$i]['Waktu pengembalian']=trim(fgets(STDIN));
        foreach ($this->Books as $key => $value) {
            if ($value['Judul Buku']==$judul_buku) {
                unset ($this->Books[$key]);
            }
        }
        print_r($this->Books);
        print_r($this->peminjaman);
    }
    public function pengembalian(){
        $i=count($this->pegembalian);
        echo "Nama Peminjam    = ";
        $this->pengembalian[$i]['Nama']=trim(fgets(STDIN));
        echo "Judul Buku       = ";
        $this->pengembalian[$i]['Judul Buku']=trim(fgets(STDIN));
        echo "Waktu peminjaman = ";
        $this->pengembalian[$i]['Judul Buku']=trim(fgets(STDIN));
        echo "Pengembalian     = ";
        print_r($this->pengembalian);
    }
}
$Peminjaman=new Peminjaman;
$Draft=new Draft;
echo "                      ==========+==========\n";
echo "                      |    PERPUSTAKAAN   |\n";
echo "                      ==========+==========\n";
echo "1. Peminjaman.  \n ";
echo "2. Pengembalian.\n ";
echo "Mau pilih yang mana..?\n";
$pilih=trim(fgets(STDIN));

switch ($pilih) {
    case 1:
        $Peminjaman->peminjaman();
        break;
        $Peminjaman->pengembalian();
        break;
    default:
        echo "Plihan yang anda pilih tidak tersedia, silahkan pilih ulang!\n";
        break;    
    }
?>