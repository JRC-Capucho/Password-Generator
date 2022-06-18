<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php 

        class Pass{
            private $latterL; 
            private $latterU;
            private $specialCaracter;
            private $numbers;
            private $randomLatterL;
            private $randomLatterU;
            private $randomSpecialCaracter;
            private $randomNumbers;
            private $generatorPassword;
	    private $getChars;

            function __construct(){
	     $this->latterL = "abcdefghijklmnopqrtuvwxyz";
	     $this->latterU = strtoupper($this->latterL);
             $this->specialCaracter = "!@#$%^&*(){};:''/><?-_+.,[]";
             $this->numbers = "1234567890";
	    }
            function full(){
                $this->randomLatterL = substr(str_shuffle($this->latterL),0,2);
                $this->randomLatterU = substr(str_shuffle($this->latterU),0,2);
                $this->randomSpecialCaracter = substr(str_shuffle($this->specialCaracter),0,2);
                $this->randomNumbers = substr(str_shuffle($this->numbers),0,2);
		$this->getChars = "$this->randomLatterL$this->randomLatterU$this->randomSpecialCaracter$this->randomNumbers";
                $this->generatorPassword = substr(str_shuffle($this->getChars),0,8);
            }

	    function lessNumber(){
                $this->randomLatterL = substr(str_shuffle($this->latterL),0,3);
                $this->randomLatterU = substr(str_shuffle($this->latterU),0,2);
                $this->randomSpecialCaracter = substr(str_shuffle($this->specialCaracter),0,3);
		$this->getChars = "$this->randomLatterL$this->randomLatterU$this->randomSpecialCaracter";
		$this->generatorPassword = substr(str_shuffle($this->getChars),0,8);
	    }

	    function lessSpecialCaracter(){
                $this->randomLatterL = substr(str_shuffle($this->latterL),0,3);
                $this->randomLatterU = substr(str_shuffle($this->latterU),0,2);
                $this->randomNumbers = substr(str_shuffle($this->numbers),0,3);
		$this->getChars = "$this->randomLatterL$this->randomLatterU$this->randomNumbers";
		$this->generatorPassword = substr(str_shuffle($this->getChars),0,8);
	    }
	    
	    function lessLatterUP(){
                $this->randomLatterL = substr(str_shuffle($this->latterL),0,3);
                $this->randomSpecialCaracter = substr(str_shuffle($this->specialCaracter),0,2);
                $this->randomNumbers = substr(str_shuffle($this->numbers),0,3);
		$this->getChars = "$this->randomLatterL$this->randomSpecialCaracter$this->randomNumbers";
		$this->generatorPassword = substr(str_shuffle($this->getChars),0,8);
	    }

	    function lessLatterL(){
                $this->randomLatterU = substr(str_shuffle($this->latterU),0,3);
                $this->randomSpecialCaracter = substr(str_shuffle($this->specialCaracter),0,2);
                $this->randomNumbers = substr(str_shuffle($this->numbers),0,3);
		$this->getChars = "$this->randomLatterU$this->randomSpecialCaracter$this->randomNumbers";
		$this->generatorPassword = substr(str_shuffle($this->getChars),0,8);
	    }

            function onlyLL(){
                $this->generatorPassword = substr(str_shuffle($this->latterL),0,8);
            }

            function onlyLU(){
                $this->generatorPassword = substr(str_shuffle($this->latterU),0,8);
	    }

	    function onlyNB()
	    {
		$this->generatorPassword = substr(str_shuffle($this->numbers),0,8);
	    }

	    function onlySC()
	    {
	    	$this->generatorPassword = substr(str_shuffle($this->specialCaracter),0,8);
	    }

	    function llAndlu()
	    {
                $this->randomLatterL = substr(str_shuffle($this->latterL),0,4);
                $this->randomLatterU = substr(str_shuffle($this->latterU),0,4);
		$this->getChars = "$this->randomLatterL$this->randomLatterU";
		$this->generatorPassword = substr(str_shuffle($this->getChars),0,8);
	    }

	    function llAndsc()
	    {
                $this->randomLatterL = substr(str_shuffle($this->latterL),0,4);
                $this->randomSpecialCaracter = substr(str_shuffle($this->specialCaracter),0,4);
		$this->getChars = "$this->randomLatterL$this->randomSpecialCaracter";
		$this->generatorPassword = substr(str_shuffle($this->getChars),0,8);
	    }
	    function llAndn()
	    {
                $this->randomLatterL = substr(str_shuffle($this->latterL),0,4);
                $this->randomNumbers = substr(str_shuffle($this->numbers),0,4);
		$this->getChars = "$this->randomLatterL$this->randomNumbers";
		$this->generatorPassword = substr(str_shuffle($this->getChars),0,8);
	    }
	    function luAndsc()
	    {

                $this->randomSpecialCaracter = substr(str_shuffle($this->specialCaracter),0,4);
                $this->randomLatterU = substr(str_shuffle($this->latterU),0,4);
		$this->getChars = "$this->randomLatterU$this->randomSpecialCaracter";
		$this->generatorPassword = substr(str_shuffle($this->getChars),0,8);
	    }
	    function luAndn()
	    {
                $this->randomLatterU = substr(str_shuffle($this->latterU),0,4);
                $this->randomNumbers = substr(str_shuffle($this->numbers),0,4);
		$this->getChars = "$this->randomLatterL$this->randomLatterU$this->randomSpecialCaracter$this->randomNumbers";
		$this->generatorPassword = substr(str_shuffle($this->getChars),0,8);
	    }
	    function scAndn()
	    {
                $this->randomSpecialCaracter = substr(str_shuffle($this->specialCaracter),0,4);
                $this->randomNumbers = substr(str_shuffle($this->numbers),0,4);
		$this->getChars = "$this->randomSpecialCaracter$this->randomNumbers";
		$this->generatorPassword = substr(str_shuffle($this->getChars),0,8);
	    } 

            function getGenerator(){ 
                return $this->generatorPassword; 
            }

        }
    ?>
<div id=box>
	<h1>Gerador de senhas</h1>
	<hr>
    <form action="index.php" method="POST">
	<div>
        <label for="latterl">Letras Minúsculas</label>
        <input type="checkbox" id="latterlower" name="ll" values="ll">
	</div>
        <br>
	<div>
        <label for="latteru">Letras Maiúsculas</label>
        <input type="checkbox" id="latterupper" name="lu" values="lu">
	</div>
        <br>
	<div>
        <label for="specialc">Caracter Especiais</label>
        <input type="checkbox" id="specialCaracter" name="sc" values="sc">
	</div>
        <br>
	<div>
        <label for="specialc">Números</label>
        <input type="checkbox" id="number" name="n" values="n">
	</div>
	<br>
        <input id="botao" type="submit" name="generate" value="Gerar">
        <br>
</div>
    </form>

    
<?php
        $passwd = new Pass();

	if(isset($_POST['generate'])){
	
	if(strcmp($_POST['ll'],"on") == 0 && strcmp($_POST['lu'], "on") ==0 && strcmp($_POST['sc'], "on") == 0 && strcmp($_POST['n'], "on") == 0 ){
			$passwd->full();
		}
		elseif(strcmp($_POST['ll'],"on") == 0 && strcmp($_POST['lu'], "on") ==0 && strcmp($_POST['sc'], "on") == 0){
			$passwd->lessNumber();
		}

		elseif(strcmp($_POST['ll'],"on") == 0 && strcmp($_POST['lu'], "on") ==0 && strcmp($_POST['n'], "on") == 0){
			$passwd->lessSpecialCaracter();
		}

		elseif(strcmp($_POST['ll'],"on") == 0 && strcmp($_POST['sc'], "on") ==0 && strcmp($_POST['n'], "on") == 0){
			$passwd->lessLatterUP();
		}

		elseif(strcmp($_POST['sc'],"on") == 0 && strcmp($_POST['lu'], "on") ==0 && strcmp($_POST['n'], "on") == 0){
			$passwd->lessLatterL();
		}
		elseif(strcmp($_POST['ll'],"on") == 0 && strcmp($_POST['lu'],"on") == 0){
			$passwd->llAndlu();
		}
		elseif(strcmp($_POST['ll'],"on") == 0 && strcmp($_POST['sc'],"on") == 0){
			$passwd->llAndsc();
		}
		elseif(strcmp($_POST['ll'],"on") == 0 && strcmp($_POST['n'], "on") == 0){
			$passwd->llAndn();
		}
		elseif(strcmp($_POST['lu'],"on") == 0 && strcmp($_POST['sc'],"on") == 0){
			$passwd->luAndsc();
		}
		elseif(strcmp($_POST['lu'],"on") == 0 && strcmp($_POST['n'], "on") == 0){
			$passwd->luAndn();
		}
		elseif(strcmp($_POST['sc'], "on") == 0 && strcmp($_POST['n'], "on") == 0){
			$passwd->scAndn();
		}
		elseif(strcmp($_POST['ll'], "on") == 0){
			$passwd->onlyLL();
		}
		elseif(strcmp($_POST['lu'], "on") == 0){
			$passwd->onlyLU();
		}
		elseif(strcmp($_POST['n'], "on") == 0){
			$passwd->onlyNB();
		}
		elseif(strcmp($_POST['sc'], "on") == 0){
			$passwd->onlySC();
		}
	echo '<script type="text/javascript">alert("'.$passwd->getGenerator().'")</script>';
	}
	
?>
</body>
</html>
