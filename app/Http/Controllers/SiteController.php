<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Mostra a página de home
     *
     * @return void
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Mostra a página de sobre
     *
     * @return void
     */
    public function about()
    {
        echo "Conteúdo Sobre";
    }
    /**
     * Mostra a página de contato
     *
     * @return void
     */
    public function contact()
    {
        echo "Conteúdo Contato";
    }
    /**
     * Mostra a lista de serviços
     *
     * @param integer $id
     * @return void
     */
    public function services(int $id)
    {
        $servicos = [
            1 => [
                'nome' => 'Serviço 1',
                'descricao' => 'Descrição do serviço 1'
            ],
            2 => [
                'nome' => 'Serviço 2',
                'descricao' => 'Descrição do serviço 2'
            ],
            3 => [
                'nome' => 'Serviço 3',
                'descricao' => 'Descrição do serviço 3'
            ]
        ];
        
        return view('site.servico', [
            'servico' => $servicos[$id],
            'outro' => 'treinaweb'
        ]);
    }
}
