
<?php
$n1 = isset($_GET['numero1']) ? $_GET['numero1']*1 : 0 ;
$n2 = isset($_GET['numero2']) ? $_GET['numero2']*1 : 0 ;
$op = isset($_GET['escolha']) ? $_GET['escolha'] : 0 ;

switch ($op){

    case 'Soma':
        $result = $n1 + $n2;
        echo "O Resultado é: $result";
        break;

    case 'Subtração':
        $result = $n1 - $n2;
        echo "O Resultado é: $result";
        break;

    default:
        echo "Sem resultado";
}
if (isset($_POST['num'])) {
    if (!isset($_SESSION['num1'])) {
        $_SESSION['num1'] = $_POST['num'];
    } else {
        $_SESSION['num2'] = $_POST['num'];
    }

    if (isset($_POST['operator'])) {
        $_SESSION['operator'] = $_POST['operator'];
    }

    if (isset($_POST['equal'])) {
        if ($_SESSION['operator'] == '+'){
            $_SESSION['result'] = $_SESSION['num1'] + $_SESSION['num2'];
        }
    }

    if (isset($_POST['equal'])) {
        if ($_SESSION['operator'] == '-'){
            $_SESSION['result'] = $_SESSION['num1'] - $_SESSION['num2'];
        }
    }

    if (isset($_POST['equal'])) {
        if ($_SESSION['operator'] == 'x'){
            $_SESSION['result'] = $_SESSION['num1'] * $_SESSION['num2'];
        }
    }

    if (isset($_POST['equal'])) {
        if ($_SESSION['operator'] == '/'){
            $_SESSION['result'] = $_SESSION['num1'] / $_SESSION['num2'];
        }
    }

    if (isset($_POST['equal'])) {
        echo ['rsult'];
    }

}


?>