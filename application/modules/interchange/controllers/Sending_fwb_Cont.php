<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sending_fwb_Cont extends MX_Controller 
{
	function __construct()
    {
        parent::__construct();		
        $this->load->model(array('sending_fwb_model'));
    }
	
	public function get_list_fwb_1_standardmessageindentification($HostName,$MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_1_standardmessageindentification($HostName,$MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fwb_2_awbconsignmentdetails($MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_2_awbconsignmentdetails($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fwb_3_flightbookings($MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_3_flightbookings($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fwb_4_routing($MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_4_routing($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}

	public function get_list_fwb_5_shipper($MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_5_shipper($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fwb_6_consignee($MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_6_consignee($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fwb_7_agent($MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_7_agent($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}

	public function get_list_fwb_8_specialservicerequest($MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_8_specialservicerequest($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fwb_9_alsonotify($MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_9_alsonotify($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fwb_a_accountinginformation($MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_a_accountinginformation($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fwb_b_chargedeclarations($MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_b_chargedeclarations($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fwb_c_ratedescription($MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_c_ratedescription($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fwb_d_othercharges($MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_d_othercharges($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fwb_e_prepaidchargesummary($MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_e_prepaidchargesummary($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}

	public function get_list_fwb_f_collectchargesummary($MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_f_collectchargesummary($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fwb_g_shippercertification($MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_g_shippercertification($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fwb_h_carrierexecution($MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_h_carrierexecution($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fwb_i_otherserviceinformation($MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_i_otherserviceinformation($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fwb_j_chargerindestinationcurrency($MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_j_chargerindestinationcurrency($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fwb_k_senderreference($MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_k_senderreference($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fwb_l_customsorigin($MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_l_customsorigin($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fwb_m_commisioninformation($MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_m_commisioninformation($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fwb_n_salesincentiveinformation($MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_n_salesincentiveinformation($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fwb_o_agentreferencedata($MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_o_agentreferencedata($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fwb_p_specialhandlingdetails($MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_p_specialhandlingdetails($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fwb_q_nominatedhandlingparty($MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_q_nominatedhandlingparty($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fwb_r_shipmentreferenceinformation($MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_r_shipmentreferenceinformation($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fwb_s_otherparticipantinformation($MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_s_otherparticipantinformation($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}
	
	public function get_list_fwb_t_othercustomsinformation($MessageKey)
	{
		$listhasil = $this->sending_fwb_model->list_fwb_t_othercustomsinformation($MessageKey);
		// menjadikan objek menjadi JSON
		$hasil = json_encode($listhasil);
		
		// mengeluarkan JSON ke browser
		header('HTTP/1.1: 200');
		header('Status: 200');
		header('Content-Length: '.strlen($hasil));
        exit($hasil);
	}

}