<?php

namespace Exercicio2;

class Exercicio2
{

    public static function foiMordidoV1()
    {
        $numeroDeVezes = array_fill(0, 10/2, 0);

        for ($i = 0; $i < 10/2; $i++) {
            $numeroDeVezes[] = 1;
        }

        return $numeroDeVezes;

    }

    public static function foiMordidoV2()
    {
        return intval(rand(0, 1));
    }

    public function imprimeFraseV1()
    {
        $itens = self::foiMordidoV1();

        foreach ($itens as $item) {

            if ($item) {
                $mordeu = ' NÃO ';
            } else {
                $mordeu = '';
            }

            echo "Joãozinho $mordeu mordeu o seu dedo!<br>";
        }
    }

    public function imprimeFraseV2()
    {
        for ($i = 1; $i <= 10; $i++) {

            $mordeu = '';

            if (!self::foiMordidoV2()) {
                $mordeu = ' NÃO ';
            }

            echo "Joãozinho $mordeu mordeu o seu dedo!<br>";
        }
    }

}