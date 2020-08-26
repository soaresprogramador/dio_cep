<?php

use PHPUnit\Framework\TestCase;
use \Soares\Dio_Cep\Search;

class SearchTest extends TestCase{
/**
 *  @dataProvider dadosTeste
*/



    public function testGetAddressFromZipcodeDefaultUsage(string $input, array $esperado){
        $resultado = new Search;
        $resultado = $resultado->getAddressFromZipcode($input);

        $this->assertEquals($esperado, $resultado);

        /* print_r($resultado);
        exit; */
    }

    public function dadosTeste(){
        return [
            "Endereço Praça da Sé" => [
                "01001000",
                [
                    "cep"=> "01001-000",
                    "logradouro"=> "Praça da Sé",
                    "complemento"=> "lado ímpar",
                    "bairro"=> "Sé",
                    "localidade"=> "São Paulo",
                    "uf"=> "SP",
                    "ibge"=> "3550308",
                    "gia"=> "1004",
                    "ddd"=> "11"
                ]
            ],
            "Endereço Qualquer" => [
                "78032145",
                [
                    "cep" => "78032-145",
                    "logradouro" => "Rua Manoel Cavalcante Proença",
                    "complemento" =>"",
                    "bairro" => "Goiabeiras",
                    "localidade" => "Cuiabá",
                    "uf" => "MT",
                    "ibge" => "5103403",
                    "gia" =>"",
                    "ddd" => "65"
                ]
            ],
        ];
    }
}