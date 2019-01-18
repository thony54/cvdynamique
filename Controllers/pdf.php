<?php

session_start();
//variable de connexion à la BDD + chargement de la bibliothèque FPDF
require('../fpdf/fpdf.php');
$db = new PDO('mysql:host=localhost;dbname=cvdyn_bdd','root','');

//titres des colonnes
class myPDF extends FPDF{
    function headerTable(){
        $this->SetFont('Times','B',12);
        $this->Cell(16,5,'id_users',1,0,'C');
        $this->Cell(19,5,'name_user',1,0,'C');
        $this->Cell(28,5,'lastname_user',1,0,'C');
        $this->Cell(25,5,'keypass_user',1,0,'C');
        $this->Cell(24,5,'address_user',1,0,'C');
        $this->Cell(20,5,'phone_use',1,0,'C');
        $this->Cell(18,5,'mail_user',1,0,'C');
        $this->Cell(29,5,'date_birth_user',1,0,'C');
        $this->Cell(30,5,'obj_career_user',1,0,'C');
        $this->Cell(24,5,'cv_title_user',1,0,'C');
        $this->Cell(28,5,'handicap_user',1,0,'C');
        $this->Ln(20);
    }

    //recupération données dans la bdd
    function viewTable($db){
        $this->SetFont('Times','',12);
        $stmt = $db->query('select * from users');
        while($data = $stmt->fetch(PDO::FETCH_OBJ)){
            $this->Cell(16,5,$data->id_users,0,0,'C');
            $this->Cell(19,5,$data->name_user,0,0,'L');
            $this->Cell(28,5,$data->lastname_user,0,0,'L');
            $this->Cell(25,5,$data->keypass_user,0,0,'L');
            $this->Cell(24,5,$data->address_user,0,0,'L');
            $this->Cell(20,5,$data->phone_user,0,0,'L');
            $this->Cell(18,5,$data->mail_user,0,0,'L');
            $this->Cell(29,5,$data->date_birth_user,0,0,'L');
            $this->Cell(30,5,$data->obj_career_user,0,0,'L');
            $this->Cell(24,5,$data->cv_title_user,0,0,'L');
            $this->Cell(28,5,$data->handicap_user,0,0,'L');
            $this->Ln();
        } 
    }
}

//génération du PDF
$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output();
?>