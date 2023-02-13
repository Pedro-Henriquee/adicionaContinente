<?php

include_once 'C:\xampp\htdocs\Listas-PHP-Pedro-Henrique\Aula 12 - PHP Orientado a objetos\Exercício 2 - Orientação a Objetos\class_pais.php';

class Continente {

    private $nomeContinente;
    private $aPaisesContinente = [];
    private $maiorTerritorio;
    private $menorTerritorio;
    private $dimensaoTotal;
    private $populacaoTotal;

    public function __construct($nomeContinente) {
        $this->nomeContinente = $nomeContinente;
    }

    public function getNomeContinente() {
        return $this->nomeContinente;
    }

    function getAPaises() {
        echo "---------PAÍSES DO CONTINENTE--------<br><br>";
        foreach ($this->aPaisesContinente as $paises => $pais) {
            echo $pais->getNome();
            echo "<br><br>";
        }
    }

    public function adicionaPaises($oPais) {
        $this->aPaisesContinente[] = $oPais;
    }

    public function dimensaoTotal() {
        $total = 0;
        foreach ($this->aPaisesContinente as $paises) {
            $total += $paises->getDimensao();
        }
        $this->dimensaoTotal = $total;
        return $total;
    }

    public function populacaoTotal() {
        $total = 0;
        foreach ($this->aPaisesContinente as $paises) {
            $total = $paises->getPopulacao();
        }
        $this->populacaoTotal = $total;
        return $total;
    }

    public function densidade() {
        $populacao = $this->populacaoContinente;
        $dimensao = $this->dimensaoContinente;
        $densidade = $populacao / $dimensao;
        return $densidade;
    }

    public function maiorPopulacao() {
        $oAuxiliar = null;
        foreach ($this->aPaisesContinente as $paises) {
            if ((is_null($oAuxiliar)) || ($paises->getPopulacao() < $oAuxiliar->getPopulacao())) {
                $oAuxiliar = $paises;
            }
        }
        return $oAuxiliar->getPopulacao();
    }

    public function menorPopulacao() {
        $oAuxiliar = null;
        foreach ($this->aPaisesContinente as $paises) {
            if ((is_null($oAuxiliar)) || ($paises->getPopulacao() < $oAuxiliar->getPopulacao())) {
                $oAuxiliar = $paises;
            }
        }
        return $oAuxiliar->getPopulacao();
    }

    public function maiorDimensao() {
        $oAuxiliar = null;
        foreach ($this->aPaisesContinente as $paises) {
            if ((is_null($oAuxiliar)) || ($paises->getDimensao() > $oAuxiliar->getDimensao())) {
                $oAuxiliar = $paises;
            }
        }
        $this->maiorTerritorio = $oAuxiliar->getDimensao();
        return $oAuxiliar->getDimensao();
    }

    public function menorDimensao() {
        $oAuxiliar = null;
        foreach ($this->aPaisesContinente as $paises) {
            if ((is_null($oAuxiliar)) || ($paises->getDimensao() < $oAuxiliar->getDimensao())) {
                $oAuxiliar = $paises;
            }
        }
        $this->menorTerritorio = $oAuxiliar->getDimensao();
        return $oAuxiliar->getDimensao();
    }

    public function diferencaTerritorial() {
        $diferenca = ($this->maiorTerritorio - $this->menorTerritorio);
        return $diferenca;
    }
}
?>
