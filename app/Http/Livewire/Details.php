<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;

use Livewire\Component;

class Details extends Component
{
    public $term = '7891000100103';
    public $dataDetail = [];
    public $message = '';
    
    public function resetTerm()
    {
        $this->dataDetail = [];
        $this->message = '';
    }    

    public function getApi()
    {
        $this->message = 'Produto nao localizado';        
        $data = collect();        
        $url = 'https://api.tendaatacado.com.br/api/public/store/product/barcode/' . $this->term;

        $response = Http::get($url);
        if ($response->status() == 200) {
            $product = $response->json();    
            $values = $product;
            $values['supermercado'] = 'Tenda';
            $values['loja'] = 1;
            $values['nome_loja'] = "";
            if (array_key_exists("gearSeoHtml",$values) == false) {
                $values['gearSeoHtml'] = '';
            }
            $data->push($values);
            $this->message = '';
        }
        $this->dataDetail = $data;
    }

    public function render()
    {
        return view('livewire.details');
    }
}
