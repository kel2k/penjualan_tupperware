<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_model;
use TCPDF;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\XLsx;


class Home extends BaseController
{
    public function index()
    {
          echo view('header');
           // echo view('menuutama');
          echo view('login');
         echo view('footer');
	}
    public function aksi_login()
    {
        $a=$this->request->getPost('username');
        $b=$this->request->getPost('password');
        $model=new M_model();
        $data=array(
            'username'=>$a,
            'password'=>$b
        );
$cek=$model->getWhere2('user', $data);
if ($cek>0) {
    session()->set('id', $cek['id_user']);
    session()->set('username', $cek['username']);
    session()->set('level', $cek['level']);
    return redirect()->to('home/dashboard');
}else{
    return redirect()->to('home');
}
}
public function dashboard()
{
    if (session()->get('id')>0){
        echo view('menuutama');
        echo view('header');
        
        echo view('dashboard');
echo view('footer');
    }else{
        return redirect()->to('/home/');
    }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/home/');
    }
    public function user()
	{
		if (session()->get('level')==1 ||  session()->get('level')==3 || session()->get('level')==4) {	

			$model=new M_model();
			$on='user.level=level.id_level';
			$diva['okta'] = $model->join2('user', 'level',$on);
			echo view('header');
			echo view('menuutama');
			echo view('v_user',$diva);
			echo view('footer');
		}else{
		return redirect()->to('/Home');
	}
	}
	public function karyawan()
	{
		if (session()->get('level')==1 || session()->get('level')==3 || session()->get('level')==4) {	
			$model=new m_model();
			$on='karyawan.level=level.id_level';
			$diva['okta'] = $model->join2('karyawan', 'level',$on);
			echo view('menuutama');
			echo view('header');
			echo view('karyawan',$diva);
			echo view('footer');
		}else{
			return redirect()->to('/Home');
	}
}
	public function edit_karyawan($user)
	{
		if (session()->get('id')>0) {
		$model=new M_model();
		$where=array('user'=>$user);
		$where2=array('id_user'=>$user);
		$data['jess']=$model->tampil('level');
		$data['jojo']=$model->getWhere('karyawan',$where);
		$data['rizkan']=$model->getWhere('user',$where2);
		echo view('menuutama');
		echo view('header');
		echo view('edit_karyawan',$data);
		echo view('footer');
	}else{
			return redirect()->to('/Home');
	}
}
	public function aksi_edit_karyawan()
	{
		$nik= $this->request->getPost('nik');
		$a= $this->request->getPost('username');
		$b= $this->request->getPost('password');
		$c= $this->request->getPost('email');
		$nama= $this->request->getPost('nama');
		$jenis= $this->request->getPost('jenis');
		$nohp= $this->request->getPost('nohp');
		$alamat= $this->request->getPost('alamat');
		$tgl= $this->request->getPost('tgl');
		$tempat= $this->request->getPost('tempat');
		$level= $this->request->getPost('level');
		$gaji= $this->request->getPost('gaji');
		$id= $this->request->getPost('id');
		$id2= $this->request->getPost('id2');


		$where=array('id_user'=>$id);
		$data1=array(
			'username'=>$a,
			'password'=>$b,
			'level'=>$level,
			'email'=>$c
		);
		$darrel=new M_model();
		$darrel->qedit('user', $data1, $where);
		
		$where2=array('user'=>$id2);
		$data2=array(
			'nik'=>$nik,
			'nama'=>$nama,
			'jenis'=>$jenis,
			'nohp'=>$nohp,
			'alamat'=>$alamat,
			'tgl'=>$tgl,
			'tempat'=>$tempat,
			'level'=>$level,
			'gaji'=>$gaji
		);
		$darrel->qedit('karyawan', $data2,$where2);

		return redirect()->to('/Home/karyawan');

	}
	public function hapus_karyawan($id)
	{
		$model=new m_model();
		$where=array('user'=>$id);
		$where2=array('id_user'=>$id);
		$model->hapus('karyawan',$where);
		$model->hapus('user',$where2);
		return redirect()->to('/Home/karyawan');
	}

	public function tambah_karyawan()
	{
		if (session()->get('id')>0) {
		$model=new m_model();
		echo view('header');
		echo view('menuutama');
		$diva['okta'] = $model->tampil('level');
		echo view('v_tambahkaryawan', $diva);
		echo view('footer');
		}else{
			return redirect()->to('/Home');
	}
}
	public function aksi_tambah_karyawan()
	{
		$nik= $this->request->getPost('nik');
		$a= $this->request->getPost('username');
		$b= $this->request->getPost('password');
		$c= $this->request->getPost('email');
		$nama= $this->request->getPost('nama');
		$jenis= $this->request->getPost('jenis');
		$nohp= $this->request->getPost('nohp');
		$alamat= $this->request->getPost('alamat');
		$tgl= $this->request->getPost('tgl');
		$tempat= $this->request->getPost('tempat');
		$level= $this->request->getPost('level');
		$gaji= $this->request->getPost('gaji');


		$data1=array(
			'username'=>$a,
			'password'=>$b,
			'level'=>$level,
			'email'=>$c
		);
		$darrel=new M_model();
		$darrel->simpan('user', $data1);
		$where=array('username'=>$a);
		$ayu=$darrel->getWhere2('user', $where);
		$id = $ayu['id_user'];
		$data2=array(
			'nik'=>$nik,
			'nama'=>$nama,
			'jenis'=>$jenis,
			'nohp'=>$nohp,
			'alamat'=>$alamat,
			'tgl'=>$tgl,
			'tempat'=>$tempat,
			'level'=>$level,
			'gaji'=>$gaji,
			'user'=>$id
		);
		$darrel->simpan('karyawan', $data2);

		return redirect()->to('/Home/karyawan');
	}
	
	// public function index()
	// {
	// 	echo view('welcome_message');
	// }
	public function barang_masuk()
	{
		if (session()->get('id')>0) {

			$model=new m_model();
            $on='brg_masuk.id_barang=barang.id_barang';
			echo view('header');
			echo view('menuutama');
			$diva['okta'] = $model->join2('brg_masuk', 'barang',$on);
			echo view('brg_masuk',$diva);
		echo view('footer');
	}else{
			return redirect()->to('/Home');
	}
}

	public function hapus_brg_masuk($id)
	{
		$model=new m_model();
		$where=array('id_brg_msk'=>$id);
		echo view('menuutama');
		
		$model->hapus('brg_masuk',$where);
		return redirect()->to('/Home/barang_masuk');
		
	}

	public function tambah_brg_masuk()
	{
		if (session()->get('id')>0) {

		$model=new m_model();
		echo view('menuutama');
		echo view('header');
		$diva['okta'] = $model->tampil('brg_masuk');
		echo view('tambah_brg_masuk', $diva);
		echo view('footer');
		}else{
			return redirect()->to('/Home');
	}
}
	public function aksi_tambah_brg_masuk()
	{

		$a=$this->request->getPost('id_barang');
		$b=$this->request->getPost('tanggal');
		$c=$this->request->getPost('jumlah');
		$d=$this->request->getPost('kode_brg');
		
		$simpan=array(
			'id_barang'=>$a,
			'tanggal'=>$b,
			'jumlah'=>$c,
			'kode_brg'=>$d
		);
		$model=new M_model();
		$model->simpan('brg_masuk',$simpan);
		return redirect()->to('/Home/barang_masuk');

	}
	public function barang_keluar()
	{
		if (session()->get('id')>0) {
			$model=new m_model();
            $on='brg_keluar.id_barang=barang.id_barang';
            echo view('menuutama');
             echo view('header');
            
            $diva['okta'] = $model->join2('brg_keluar', 'barang',$on);
            echo view('brg_keluar',$diva);
		echo view('footer');
		}else{
			return redirect()->to('/Home');
}
	}
	public function hapus_brg_keluar($id)
	{
		$model=new m_model();
		$where=array('id_brg_klr'=>$id);
		echo view('menuutama');
		$model->hapus('brg_keluar',$where);
		return redirect()->to('/Home/barang_keluar');
	}
public function reset_password($id)
    {
        if(session()->get('id')>0) {
            $okta=new M_model();
            $where=array('id_user'=>$id);
            $user=array('password'=>'12345');
            $okta->qedit('user', $user, $where);

            echo view('header');
            echo view('menu');
            echo view('footer');

            return redirect()->to('/Home/user');
        }else {
            return redirect()->to('home');

        }
    }
	public function tambah_brg_keluar()
	{
		if (session()->get('id')>0) {
		$model=new m_model();
		echo view('menuutama');
		echo view('header');
		$diva['okta'] = $model->tampil('brg_keluar');
		echo view('tambah_brg_keluar', $diva);
		echo view('footer');
			}else{
			return redirect()->to('/Home');
	}
}

	public function aksi_tambah_brg_keluar()
	{
		$a=$this->request->getPost('id_barang');
		$b=$this->request->getPost('tanggal');
		$c=$this->request->getPost('jumlah');
		$d=$this->request->getPost('kode_brg');

		$simpan=array(
			'id_barang'=>$a,
			'tanggal'=>$b,
			'jumlah'=>$c,
			'kode_brg'=>$d
		);
		$model=new M_model();
		$model->simpan('brg_keluar',$simpan);
		return redirect()->to('/Home/barang_keluar');

	}
	public function barang()
	{
		if (session()->get('id')>0) {
			$model=new m_model();
			echo view('header');
			echo view('menuutama');
             $diva['okta'] = $model->tampil('barang');
			echo view('barang',$diva);
echo view('footer');
}else{
			return redirect()->to('/Home');
	}
}
	public function hapus_barang($id)
	{
		$model=new m_model();
		$where=array('id_barang'=>$id);
		echo view('menuutama');
		$model->hapus('barang',$where);
		return redirect()->to('/Home/barang');
	}

	public function tambah_barang()
	{
		if (session()->get('id')>0) {
		$model=new m_model();
		echo view('menuutama');
		echo view('header');
		$diva['okta'] = $model->tampil('barang');
		echo view('tambah_barang', $diva);
		echo view('footer');
}else{
			return redirect()->to('/Home');	
	}
}
	public function aksi_tambah_barang()
	{
		$a=$this->request->getPost('nama_brg');
		$b=$this->request->getPost('kode_brg');
		$c=$this->request->getPost('stock');
		$d=$this->request->getPost('harga');
		
		$simpan=array(
			'nama_brg'=>$a,
			'kode_brg'=>$b,
			'stock'=>$c,
			'harga'=>$d
		);
		$model=new M_model();
		$model->simpan('barang',$simpan);
		return redirect()->to('/Home/barang');

	}
	public function edit_barang($id)
	{
		if (session()->get('id')>0) {

		$model=new m_model();
		$where=array('id_barang'=>$id);
		echo view('header');
		echo view('menuutama');
		$data['jojo']=$model->getWhere('barang',$where);
		return view('edit_barang',$data);
		echo view('footer');
		}else{
			return redirect()->to('/Home');	
	}
}
	public function aksi_edit_barang()
	{
		$id=$this->request->getPost('id');
		$a=$this->request->getPost('nama_brg');
		$b=$this->request->getPost('kode_brg');
		$c=$this->request->getPost('stock');
		$d=$this->request->getPost('harga');

		$where=array('id_barang'=>$id);
		$simpan=array(
			'nama_brg'=>$a,
			'kode_brg'=>$b,
			'stock'=>$c,
			'harga'=>$d
		);
		$model=new M_model();
		$model->qedit('barang',$simpan, $where);
		return redirect()->to('/Home/barang');

	}
    public function nota()
	{
		if (session()->get('id')>0) {

		$model=new m_model();
		echo view('header');
		echo view('menuutama');
		$diva['okta'] = $model->tampil('nota');
		echo view('nota',$diva);
		echo view('footer');
			}else{
			return redirect()->to('/Home');	
}
}
public function penjualan()
{
	if (session()->get('id')>0) {
    $model=new m_model();
            echo view('menuutama');
             echo view('header');
            echo view('footer');
            $diva['okta'] = $model->tampil('penjualan');
            echo view('penjualan',$diva);
            }else{
			return redirect()->to('/Home');	
}
}
public function detail($id)
	{
		if (session()->get('id')>0) {
		$model=new m_model();
		echo view('header');
		echo view('menuutama');
		$where=array('brg_keluar.id_nota'=>$id);
		$on='brg_keluar.id_nota=nota.id_nota';
		$on1='brg_keluar.id_barang=barang.id_barang';
		$diva['okta'] = $model->join3('brg_keluar', 'nota','barang',$on,$on1,$where);
		echo view('brg_keluar',$diva);
		echo view('footer');
		}else{
			return redirect()->to('/Home');	
}
}
public function pdf()
{
	if (session()->get('id')>0) {
   $model=new M_model();
		$okta =$model->getNota();
		$pdf = new TCPDF('p','mm','A4');
		$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);
		$pdf->addPage();

		$pdf->Image('Images/Mukaku.jpeg',15,8,15);
		// $pdf->SetFont('Arial','B',12);
		$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$pdf->Cell(70);
		$pdf->Cell(60, 0,'Kelsey Tupperware',0, true, 'C', 0, '', 0, false, 'T', 'M');
		$pdf->Cell(60);
		$pdf->Cell(90, 15,'Komp.Slebew Mas, Jl. Gajah Mada Blok O No.1,2,3, Baloi Slebew, Kota Batam 29444',0, true, 'C', 0, '', 0, false, 'T', 'M');
		
		$pdf->SetLineStyle($style);
		$pdf->Line(PDF_MARGIN_LEFT, $pdf->getY(), $pdf->getPageWidth()-PDF_MARGIN_LEFT, $pdf->getY());
		$pdf->Ln(5);
		$pdf->Cell(5);
		$pdf->Cell(10,6,'No',1,0);
		$pdf->Cell(28,6,'Nomor Nota',1,0);
		$pdf->Cell(45,6,'Tanggal',1,0);
		$pdf->Cell(35,6,'Total Bayar',1,1);
		$no=1;
		foreach ($okta as $row) {
			$pdf->Cell(5);

			$pdf->Cell(10,6,$no++,1,0);
			$pdf->Cell(28,6,$row['no_nota'],1,0);
			$pdf->Cell(45,6,$row['tanggal'],1,0);
			$pdf->Cell(35,6,$row['total'],1,1);
		}
		$this->response->setContentType('application/pdf');
		$pdf->Output();	
		}else{
			return redirect()->to('/Home');	
}
}
public function hapus_user($id)
{
	if (session()->get('id')>0) {
	$model=new m_model();
		$where=array('id_user'=>$id);
		echo view('menuutama');
		$model->hapus('user',$where);
		return redirect()->to('/Home/user');
		}else{
			return redirect()->to('/Home');	
}
}
public function excel()
	{
			if (session()->get('id')>0) {
		$model=new m_model();
		$diva['okta'] = $model->tampil('nota');
		echo view('header');
		echo view('menuutama');
		echo view('v_excel',$diva);
		echo view('footer');
		}else{
			return redirect()->to('/Home');	
	}
}
	public function excel_print()
	{
		if (session()->get('id')>0) {
		$model=new m_model();
		$data=array('title'=>'excel','okta'=>$model->tampil('nota'));
		echo view('v_excel_print',$data);
		}else{
			return redirect()->to('/Home');
}
}
public function hapus_nota($id)
{
	if (session()->get('id')>0) {
	$model=new m_model();
		$where=array('id_nota'=>$id);
		echo view('menuutama');
		$model->hapus('nota',$where);
		return redirect()->to('/Home/nota');
		}else{
			return redirect()->to('/Home');
}
}
public function tambah_nota()
	{
		if (session()->get('id')>0) {
		$model=new m_model();
		echo view('header');
		echo view('menuutama');
		$diva['okta'] = $model->tampil('nota');
		echo view('tambah_nota', $diva);
		echo view('footer');
		}else{
			return redirect()->to('/Home');
	}
}
	public function aksi_tambah_nota()
	{
		$a=$this->request->getPost('no_nota');
		$b=$this->request->getPost('tanggal');
		$c=$this->request->getPost('total');

		$simpan=array(
			'no_nota'=>$a,
			'tanggal'=>date('y-m-d'),
			'total'=>$c
		);
		$model=new M_model();
		$model->simpan('nota',$simpan);
		return redirect()->to('/Home/nota');

	}
	public function form()
	{
		echo view('header');
		echo view('menuutama');
		echo view('form_upload');
		
		echo view('footer');

	}
	public function upload()
	{
		// echo view('header');
		// echo view('menuutama');
		echo view('upload');
		// echo view('footer');
}
public function l_brg()
	{
		if(session()->get('level')== 1) {

			$model=new M_model();
			$data['status']=$model->getWhere('user',array('id_user'=>session()->get('id')));
			$kui['kunci']='view_b';

			echo view('header');
			echo view('menuutama',$data);
			echo view('filter',$kui);
			echo view('footer');

		}else{
			return redirect()->to('/home/');
		}
	}

	public function l_masuk()
	{
		if(session()->get('level')== 1) {

			$model=new M_model();
			$data['status']=$model->getWhere('user',array('id_user'=>session()->get('id')));
			$kui['kunci']='view_bm';
			echo view('header');
			echo view('menuutama',$data);
			echo view('filter',$kui);
			echo view('footer');

		}else{
			return redirect()->to('/home/');
		}
	}

	public function l_penjualan()
	{
		if(session()->get('level')== 1) {

			$model=new M_model();
			$data['status']=$model->getWhere('user',array('id_user'=>session()->get('id')));
			$kui['kunci']='view_p';
			echo view('header');
			echo view('menuutama',$data);
			echo view('filter',$kui);
			echo view('footer');

		}else{
			return redirect()->to('/home/');
		}
	}
	public function cari_b()
	{
		if(session()->get('level')== 1) {

			$model=new M_model();
			$awal= $this->request->getPost('awal');
			$akhir= $this->request->getPost('akhir');
			$kui['duar']=$model->filter2('barang',$awal,$akhir);

			echo view('c_b',$kui);

		}else{
			return redirect()->to('/home/');
		}
	}

	public function cari_bm()
	{
		if(session()->get('level')== 1) {

			$model=new M_model();
			$awal= $this->request->getPost('awal');
			$akhir= $this->request->getPost('akhir');
			$kui['duar']=$model->filter_f('brg_masuk',$awal,$akhir);

			echo view('c_bm', $kui);

		}else{
			return redirect()->to('/home/');
		}
	}

	public function cari_p()
	{
		if(session()->get('level')== 1) {

			$model=new M_model();
			$awal= $this->request->getPost('awal');
			$akhir= $this->request->getPost('akhir');
			$kui['duar']=$model->filter_f('brg_keluar',$awal,$akhir);

			echo view('c_p', $kui);

		}else{
			return redirect()->to('/home/');
		}
	}
	public function pdf_b()
	{
		$model = new M_model();
		$awal= $this->request->getPost('awal');
		$akhir= $this->request->getPost('akhir');
		$kui['duar']=$model->filter2('barang',$awal,$akhir);
		$dompdf = new\Dompdf\Dompdf();
			// $dompdf->set_option('isRemoteEnabled',TRUE);
		$dompdf->loadHtml(view('c_b',$kui));
		$dompdf->setPaper('A4','potrait');
		$dompdf->render();
		$dompdf->stream('my.pdf', array('Attachment'=>0));

	}
	public function pdf_bm()
	{
		$model = new M_model();
		$awal= $this->request->getPost('awal');
		$akhir= $this->request->getPost('akhir');
		$kui['duar']=$model->filter_f('brg_masuk',$awal,$akhir);
		$dompdf = new\Dompdf\Dompdf();
			// $dompdf->set_option('isRemoteEnabled',TRUE);
		$dompdf->loadHtml(view('c_bm',$kui));
		$dompdf->setPaper('A4','potrait');
		$dompdf->render();
		$dompdf->stream('my.pdf', array('Attachment'=>0));
	}
	public function pdf_p()
	{
		$model = new M_model();
		$awal= $this->request->getPost('awal');
		$akhir= $this->request->getPost('akhir');
		$kui['duar']=$model->filter_f('brg_keluar',$awal,$akhir);
		$dompdf = new\Dompdf\Dompdf();
			// $dompdf->set_option('isRemoteEnabled',TRUE);
		$dompdf->loadHtml(view('c_b',$kui));
		$dompdf->setPaper('A4','landscape');
		$dompdf->render();
		$dompdf->stream('my.pdf', array('Attachment'=>0));
	}
	public function excel_barang()
	{
		$model=new M_model();
		$awal= $this->request->getPost('awal');
		$akhir= $this->request->getPost('akhir');
		$data=$model->filter2('barang',$awal,$akhir);
        

		$spreadsheet=new Spreadsheet();

		$spreadsheet->setActiveSheetIndex(0)
		->setCellValue('A1', 'Nama Barang')
		->setCellValue('B1', 'Kode Barang')
		->setCellValue('C1', 'Harga')
		->setCellValue('D1', 'Stock')
		->setCellValue('E1', 'Tanggal');

		$column=2;

		foreach($data as $data){
			$spreadsheet->setActiveSheetIndex(0)
			->setCellValue('A'. $column, $data->nama_brg)
			->setCellValue('B'. $column, $data->kode_brg)
			->setCellValue('C'. $column, $data->harga)
			->setCellValue('D'. $column, $data->stock)
			->setCellValue('E'. $column, $data->tanggal);
			$column++;
		}

		$writer = new XLsx($spreadsheet);
		$fileName = 'Data Laporan Barang';

        //  Coba Redirect hasilnya xlsx ke web client
		header('Content-type:vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition:attachment;filename='.$fileName.'.xls');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');

	}
	public function excel_bm()
	{
		$model=new M_model();
		$awal= $this->request->getPost('awal');
		$akhir= $this->request->getPost('akhir');
		$data=$model->filter_f('brg_masuk',$awal,$akhir);
        // echo view('excel_print_pg', $data);

		$spreadsheet=new Spreadsheet();

		$spreadsheet->setActiveSheetIndex(0)

		->setCellValue('A1', 'Nama Barang')
		->setCellValue('B1', 'Kode Barang')
		->setCellValue('C1', 'Jumlah')
		->setCellValue('D1', 'Tanggal')
		->setCellValue('E1', 'Harga');

		$column=2;

		foreach($data as $data){
			$spreadsheet->setActiveSheetIndex(0)

			->setCellValue('A'. $column, $data->nama_brg)
			->setCellValue('B'. $column, $data->kode_brg)
			->setCellValue('C'. $column, $data->jumlah)
			->setCellValue('D'. $column, $data->tanggal)
			->setCellValue('E'. $column, $data->harga);
			$column++;
		}

		$writer = new XLsx($spreadsheet);
		$fileName = 'Data Laporan Barang Masuk';


		header('Content-type:vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition:attachment;filename='.$fileName.'.xls');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');

	}
	public function excel_p()
	{
		$model=new M_model();
		$awal= $this->request->getPost('awal');
		$akhir= $this->request->getPost('akhir');
		$data=$model->filter_f('brg_keluar',$awal,$akhir);
        // echo view('excel_print_pg', $data);

		$spreadsheet=new Spreadsheet();

		$spreadsheet->setActiveSheetIndex(0)
		->setCellValue('A1', 'Nama Barang')
		->setCellValue('B1', 'Kode Barang')
		->setCellValue('C1', 'Jumlah')
		->setCellValue('D1', 'Tanggal')
		->setCellValue('E1', 'Harga');

		$column=2;

		foreach($data as $data){
			$spreadsheet->setActiveSheetIndex(0)
			->setCellValue('A'. $column, $data->nama_brg)
			->setCellValue('B'. $column, $data->kode_brg)
			->setCellValue('C'. $column, $data->jumlah)
			->setCellValue('D'. $column, $data->tanggal)
			->setCellValue('E'. $column, $data->harga);
			$column++;
		}

		$writer = new XLsx($spreadsheet);
		$fileName = 'Data Laporan Penjualan';
		header('Content-type:vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition:attachment;filename='.$fileName.'.xls');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');

	}
}	