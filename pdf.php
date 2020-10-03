<?php

session_start();
$con=mysqli_connect('localhost','root','','hotelmanagement');
$Sno = (isset($_POST['SNo']) ? $_POST['SNo'] : 'error');
//echo $Sno;
if(isset($_POST['room'])){
    $SQL="SELECT * FROM room  WHERE SNo='$Sno'";
    $query=mysqli_query($con,$SQL);
    $result=mysqli_fetch_assoc($query);
   
//  ob_end_clean();
        
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
    
       $pdf->SetFont("Arial","B",16);
		$pdf->SetFont('Arial','B',30);
		$pdf->Cell(200,5,"THE PASIFIC HOTEL ",0,0,'C');
		$pdf->Ln(15);
		
		$pdf->SetFont('Times','',20);
		$pdf->Cell(180,5,"ROOM BOOKING BILL",0,0,'C');
        $pdf->Ln(30);
	    
		$pdf->SetFont('Arial','',15);	
		$pdf->Cell(100,5,"Username",0,0,'C');
		$pdf->Cell(20,5,":",0,0);
		$pdf->Cell(50,5,$result['Username'],0,0);
		$pdf->Ln(20);
		
		$pdf->Cell(100,5,"Name",0,0,'C');
		$pdf->Cell(20,5,":",0,0);
		$pdf->Cell(50,5,$result['Name'],0,0);
		$pdf->Ln(20);
		
		$pdf->Cell(100,5,"Phone No",0,0,'C');
		$pdf->Cell(20,5,":",0,0);
		$pdf->Cell(50,5,$result['PhoneNo'],0,0);
		$pdf->Ln(20);


		$pdf->Cell(100,5,"Type",0,0,'C');
		$pdf->Cell(20,5,":",0,0);
		$pdf->Cell(50,5,$result['Type'],0,0);
		$pdf->Ln(20);
    
       $pdf->Cell(100,5,"Checkin Date",0,0,'C');
		$pdf->Cell(20,5,":",0,0);
		$pdf->Cell(50,5,$result['Checkin'],0,0);
		$pdf->Ln(20);
      
       $pdf->Cell(100,5,"Checkout Date",0,0,'C');
		$pdf->Cell(20,5,":",0,0);
		$pdf->Cell(50,5,$result['Checkout'],0,0);
		$pdf->Ln(20);
    
        $pdf->Cell(100,5,"No of Guest",0,0,'C');
		$pdf->Cell(20,5,":",0,0);
		$pdf->Cell(50,5,$result['NoGuest'],0,0);
		$pdf->Ln(20);
        
        $pdf->Cell(100,5,"City",0,0,'C');
		$pdf->Cell(20,5,":",0,0);
		$pdf->Cell(50,5,$result['City'],0,0);
		$pdf->Ln(20);
        
        $pdf->Cell(100,5,"Status",0,0,'C');
		$pdf->Cell(20,5,":",0,0);
		$pdf->Cell(50,5,$result['Status'],0,0);
		$pdf->Ln(20);
    
    
      $pdf->Cell(100,5,"Total",0,0,'C');
		$pdf->Cell(20,5,":",0,0);
		$pdf->Cell(50,5,$result['Total'],0,0);
		$pdf->Ln(20);
    
    ob_clean() ;
  
$pdf->output();
 
    
}
    else if (isset($_POST['event'])){
 $SQL="SELECT * FROM events  WHERE SNo='$Sno'";
    $query=mysqli_query($con,$SQL);
    $result=mysqli_fetch_assoc($query);
   
//  ob_end_clean();
        
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
    
       $pdf->SetFont("Arial","B",16);
		$pdf->SetFont('Arial','B',30);
		$pdf->Cell(200,5,"THE PASIFIC HOTEL ",0,0,'C');
		$pdf->Ln(15);
		
		$pdf->SetFont('Times','',20);
		$pdf->Cell(180,5,"EVENT BOOKING BILL",0,0,'C');
        $pdf->Ln(30);
	    
		$pdf->SetFont('Arial','',15);	
		$pdf->Cell(100,5,"Username",0,0,'C');
		$pdf->Cell(20,5,":",0,0);
		$pdf->Cell(50,5,$result['username'],0,0);
		$pdf->Ln(20);
		
		$pdf->Cell(100,5,"Name",0,0,'C');
		$pdf->Cell(20,5,":",0,0);
		$pdf->Cell(50,5,$result['Name'],0,0);
		$pdf->Ln(20);
		
		$pdf->Cell(100,5,"Phone No",0,0,'C');
		$pdf->Cell(20,5,":",0,0);
		$pdf->Cell(50,5,$result['Phone'],0,0);
		$pdf->Ln(20);


		$pdf->Cell(100,5,"Type",0,0,'C');
		$pdf->Cell(20,5,":",0,0);
		$pdf->Cell(50,5,$result['Type'],0,0);
		$pdf->Ln(20);
    
       $pdf->Cell(100,5,"Date",0,0,'C');
		$pdf->Cell(20,5,":",0,0);
		$pdf->Cell(50,5,$result['Checkin'],0,0);
		$pdf->Ln(20);
      
       $pdf->Cell(100,5,"Time In",0,0,'C');
		$pdf->Cell(20,5,":",0,0);
		$pdf->Cell(50,5,$result['InTime'],0,0);
		$pdf->Ln(20);
        
        
       $pdf->Cell(100,5,"Time Out ",0,0,'C');
		$pdf->Cell(20,5,":",0,0);
		$pdf->Cell(50,5,$result['OutTime'],0,0);
		$pdf->Ln(20);
    
        $pdf->Cell(100,5,"No of Guest",0,0,'C');
		$pdf->Cell(20,5,":",0,0);
		$pdf->Cell(50,5,$result['NoGuest'],0,0);
		$pdf->Ln(20);
        
        
        $pdf->Cell(100,5,"City",0,0,'C');
		$pdf->Cell(20,5,":",0,0);
		$pdf->Cell(50,5,$result['City'],0,0);
		$pdf->Ln(20);
    
        
        $pdf->Cell(100,5,"Status",0,0,'C');
		$pdf->Cell(20,5,":",0,0);
		$pdf->Cell(50,5,$result['Status'],0,0);
		$pdf->Ln(20);
    
    
      $pdf->Cell(100,5,"Total",0,0,'C');
		$pdf->Cell(20,5,":",0,0);
		$pdf->Cell(50,5,$result['Total'],0,0);
		$pdf->Ln(20);
    
    ob_clean() ;
  
$pdf->output();
 
}
?>