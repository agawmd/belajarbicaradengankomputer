<?php
class perulangan {
	public $n=0, $x=0, $y=0, $output='', $step=0;


	public function siapkan($nilai) {
		$this->n = $nilai;
		$this->step = 0;
		echo "<pre>------[START]------\nN = {$this->n}\n------------------\n\n\n</pre>";
	}
	

	public function cetak($nilai) {
		$this->output .= $nilai;
		$this->step++;
		echo "<pre>---[mulai step-{$this->step}]---\nx = {$this->x}\ny = {$this->y}\n---[output step-{$this->step}]---\n{$this->output}\n---[selesai step-{$this->step}]---\n\n\n\n</pre>";
	}


	public function jalankan() {
     
		for($y=1; $y<=$this->n; $y++) {
			for($x=1; $x<=$this->n; $x++) {
				$this->x = $x;
				$this->y = $y;

				$this->cetak($y);
			}
			$this->cetak("\n");
		}				
	}

}


$p = new perulangan();
$p->siapkan($_GET['n']);
$p->jalankan();
//echo json_encode($p);

