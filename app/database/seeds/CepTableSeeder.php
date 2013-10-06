<?php

class CepTableSeeder extends Seeder {

    public function run()
    {
    	DB::disableQueryLog();

		$this->seed('cep_bairro',           'log_bairro.utf8.txt', true);
		$this->seed('cep_cpc',              'log_cpc.utf8.txt', true);
		$this->seed('cep_ect_pais',         'ect_pais.utf8.txt', true);
		$this->seed('cep_faixa_bairro',     'log_faixa_bairro.utf8.txt', true);
		$this->seed('cep_faixa_cpc',        'log_faixa_cpc.utf8.txt', true);
		$this->seed('cep_faixa_localidade', 'log_faixa_localidade.utf8.txt', true);
		$this->seed('cep_faixa_uf',         'log_faixa_uf.txt', true);
		$this->seed('cep_faixa_uop',        'log_faixa_uop.utf8.txt', true);
		$this->seed('cep_grande_usuario',   'log_grande_usuario.utf8.txt', true);
		$this->seed('cep_localidade',       'log_localidade.utf8.txt', true);
		$this->seed('cep_num_sec',          'log_num_sec.utf8.txt', true);
		$this->seed('cep_unid_oper',        'log_unid_oper.utf8.txt', true);
		$this->seed('cep_var_bai',          'log_var_bai.utf8.txt', true);
		$this->seed('cep_var_loc',          'log_var_loc.utf8.txt', true);
		$this->seed('cep_var_log',          'log_var_log.utf8.txt', true);

		$this->seed('cep_logradouro',       'log_logradouro_rj.utf8.txt', true);
		$this->seed('cep_logradouro',       'log_logradouro_sp.utf8.txt', false);
		$this->seed('cep_logradouro',       'log_logradouro_ac.utf8.txt', false);
		$this->seed('cep_logradouro',       'log_logradouro_al.utf8.txt', false);
		$this->seed('cep_logradouro',       'log_logradouro_am.utf8.txt', false);
		$this->seed('cep_logradouro',       'log_logradouro_ap.utf8.txt', false);
		$this->seed('cep_logradouro',       'log_logradouro_ba.utf8.txt', false);
		$this->seed('cep_logradouro',       'log_logradouro_ce.utf8.txt', false);
		$this->seed('cep_logradouro',       'log_logradouro_df.utf8.txt', false);
		$this->seed('cep_logradouro',       'log_logradouro_es.utf8.txt', false);
		$this->seed('cep_logradouro',       'log_logradouro_go.utf8.txt', false);
		$this->seed('cep_logradouro',       'log_logradouro_ma.utf8.txt', false);
		$this->seed('cep_logradouro',       'log_logradouro_mg.utf8.txt', false);
		$this->seed('cep_logradouro',       'log_logradouro_ms.utf8.txt', false);
		$this->seed('cep_logradouro',       'log_logradouro_mt.utf8.txt', false);
		$this->seed('cep_logradouro',       'log_logradouro_pa.utf8.txt', false);

		$this->seed('cep_logradouro',       'log_logradouro_pb.utf8.txt', false);
		$this->seed('cep_logradouro',       'log_logradouro_pe.utf8.txt', false);
		$this->seed('cep_logradouro',       'log_logradouro_pi.utf8.txt', false);
		$this->seed('cep_logradouro',       'log_logradouro_pr.utf8.txt', false);
		$this->seed('cep_logradouro',       'log_logradouro_rn.utf8.txt', false);
		$this->seed('cep_logradouro',       'log_logradouro_ro.utf8.txt', false);
		$this->seed('cep_logradouro',       'log_logradouro_rr.utf8.txt', false);
		$this->seed('cep_logradouro',       'log_logradouro_rs.utf8.txt', false);
		$this->seed('cep_logradouro',       'log_logradouro_sc.utf8.txt', false);
		$this->seed('cep_logradouro',       'log_logradouro_se.utf8.txt', false);
		$this->seed('cep_logradouro',       'log_logradouro_to.utf8.txt', false);

    }

    public function seed($table, $fileName, $zap) 
    {
    	$fh = fopen(app_path().'/database/data/'.$fileName,'r');

		Log::info('Starting table: '.$table.' -- '.$fileName);

  		$user = new User;
  		$columns = $user->getColumns($table);

  		set_time_limit(0);

  		if ($zap) {
  			DB::table($table)->delete();
  		}

		while (!feof($fh)) {
			$row = fgets($fh);
    		$row = str_replace ("\n", "", $row);
    		$row = str_replace ("\r", "", $row);

    		if (!$row) {
    			continue;
    		}

    		$data = explode('@', $row);

    		$r = [];
    		foreach($columns as $key => $column) 
    		{
    			if ($key > 0 and $key < count($columns)-2) 
    			{
    				if (!empty($data[$key-1])) {
    					$r[$column] = trim($data[$key-1]);
    				}
    			}
    		}

	   		$r['created_at'] = new DateTime;
    		$r['updated_at'] = new DateTime;

	        DB::table($table)->insert($r);

	        unset($row);
	        unset($data);
	        unset($r);
    	}

		Log::info('Table done: '.$table.' -- '.$fileName);
		Log::info('');

    	echo "$table - $fileName<br>\n";

    	fclose($fh);
    }
}
