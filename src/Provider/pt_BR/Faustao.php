<?php

namespace FakerRestaurant\Provider\pt_BR;

class Faustao extends \Faker\Provider\Base
{
    /**
     * Fausto Silva quotes based on the best memes from Brazil
     *
     * @var array
     */
    protected static $faustoQuotes = [
        "Brincadeira!",
        "Chama o bombeiro lá!",
        "Churrasqueira de controle remoto",
        "E agora, mais do que nunca...",
        "E agora para desligar essa merda ai meu?",
        "Errooooouu!",
        "Esta fera aí, meu!",
        "Está fera ai bixo",
        "Eu não sou elevador pou!",
        "Ligou!",
        "Logo após os reclames do Plim-Plim...",
        "Ninguém acertou!",
        "Olokinho meu!",
        "O looooooooooco meu!",
        "Puta vida!",
        "Que Isso Bixo,ó u Cara lá ó",
        "Quem sabe faz ao vivo!",
        "Se vira nos 30!",
        "Tá pegando fogo bicho!",
        "Você destruiu o meu ovo!",
        "É brincadera bicho.",
        "É um pais da Europa",
        "Ô loco",
        "Ô loco, bixo!",
        "Ô loco meu!",
    ];

    /**
     * A random Faustão Quote
     * @return string
     */
    public function quote()
    {
        return static::randomElement(static::$faustoQuotes);
    }
}