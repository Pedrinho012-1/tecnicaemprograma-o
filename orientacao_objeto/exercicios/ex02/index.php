<?php
require_once "./PessoaClass.php";
require_once "./FuncionarioClass.php";
require_once "./HospedeClass.php";
require_once "./HotelClass.php";
require_once "./QuartosClass.php";
require_once "./ReservaClass.php";

$funcionario1 = new Funcionario("123456789", "Alberto Roger");
$hospede1 = new Hospede("222.222.222.22", "Maria Clara");
$quarto1 = new Quartos(203, 2, new Hotel("11.111.111/1111-11", "Hotel Transilvânia", 203, 2));

$reserva1 = new Reserva("02/05/2025", "03/05/2025", "10/03/2025", $funcionario1, $hospede1, $quarto1);
$reserva2 = new Reserva("05/05/2025", "05/05/2025", "07/07/2025", $funcionario1, $hospede1, $quarto1);

$quarto1->setReserva(array($reserva1, $reserva2)); /// Adicionando na associação bilateral
$hospede1->setReserva(array($reserva1, $reserva2));// Adicionando na associação bilateral


echo "======== RESERVAS ========<br>";
echo "|||||| - RESERVA 1 - ||||||<br>";
echo "Hotel: {$reserva1->getQuartos()->getHotel()->getRazaoSocial()} || CNPJ: {$reserva1->getQuartos()->getHotel()->getCnpj()}<br>";
echo "Hospede: {$reserva1->getHospede()->getNome()} || CPF: {$reserva1->getHospede()->getCpf()}<br>";
echo "Funcionário: {$reserva1->getFuncionario()->getNome()} || CTPS: {$reserva1->getFuncionario()->getCarteiraProfissional()}<br>";
echo "Quarto: {$reserva1->getQuartos()->getNumero()} || Andar: {$reserva1->getQuartos()->getAndar()}°<br>";
echo "-- Data de Reserva: {$reserva1->getDataReserva()}<br>";
echo "-- Data de Entrada: {$reserva1->getDataEntrada()}<br>";
echo "-- Data de Saída: {$reserva1->getDataSaida()}<br><br>";


echo "Mostrando a associação bilateral feita do Quartos pra Reserva: ";
foreach($quarto1->getReserva() as $testeQuartos)
{
    echo "- {$testeQuartos->getDataReserva()}";
}

echo "<br>Mostrando a associação bilateral feita do Hospede pra Reserva: ";
foreach($hospede1->getReserva() as $testeHospede)
{
    echo " - {$testeHospede->getDataSaida()}";
}
?>