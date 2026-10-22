class jogo 
{
    //propriedades
    _nome
    _ano
    _editora
    _jogado = "não jogado"
    //metodos
    constructor(nome,ano,editora)
    {
        this._nome = nome;
        this._ano = ano; 
        this._editora = editora;
    }
    info()
    {
        document.writeln(" <br> JOGO");
        document.writeln(" <br> Nome: " +this._nome);
        document.writeln(" <br> Ano: " +this._ano);
        document.writeln(" <br> Editora: " +this._editora);
        document.writeln(" <br> Jogado: " +this._jogado);
    }

    Jogar()
    {
        if(this._jogado == "não jogado")
        this._jogado= "jogado"
    }

}

const sonic = new jogo("Sonic: The hedgehog","1991","Sega"); 
const crash = new jogo("Crash Bandicoot ","1996","Activision"); 

sonic.Jogar();
sonic.info();

class VideoJogo extends jogo
{
    //propriedades
    _sistemas //Windows, Linux, XBOX, Nintendo
    _reqmin //requisitos minimos

    //metodos
    constructor(nome,ano,editora,sistemas,reqmin)
    {
        super(nome, ano, editora);
        this._sistemas = sistemas;
        this._reqmin = reqmin;
    }

    info()
    {
        super.info();
        document.writeln(" <br> Sistemas: " +this._sistemas);
        document.writeln(" <br> Requisitos Mínimos: " +this._reqmin);
    }
}

const mario = new jogo("Super Mario Bros. ","1982","Nintendo", "NES", "NES"); 

mario.Jogar();
mario.info();

class FPS extends VideoJogo
{
    _estilo;

    constructor(nome,ano,editora,sistemas,reqmin,estilo)
    {
        super(nome,ano,editora,sistemas,reqmin);
        this._estilo = estilo;
    }
}

class Jogodetabuleiro extends jogo
{
    //propriedades
    _duracao
    _numjogadores

    //metodos
    constructor(nome,ano,editora,duracao,numjogadores)
    {
        super(nome,ano,editora);
        this._duracao = duracao;
        this._numjogadores = numjogadores;
    }

    info()
    {
        super.info();
        document.writeln(" <br> Duração: " +this._duracao);
        document.writeln(" <br> Numero de Players: " +this._numjogadores);
    }

    Jogar()
    {
        super.jogar();
    }
}
const Catan = new Jogodetabuleiro("Catan","1995","KOSMOS","60min","2-4");
Catan.Jogar();
Catan.info();