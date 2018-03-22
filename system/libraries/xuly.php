<?php

require_once 'Classes/PHPExcel.php';

class CI_xuly
{


    public function mother_of_xl($name){
        if(isset($name))
        {
            $objFile = PHPExcel_IOFactory::identify($name);
$objData = PHPExcel_IOFactory::createReader($objFile);

$objData->setReadDataOnly(true);

$objPHPExcel = $objData->load($name);

$sheet  = $objPHPExcel->setActiveSheetIndex(2);


$Totalrow = $sheet->getHighestRow();

$LastColumn = $sheet->getHighestColumn();


$TotalCol = PHPExcel_Cell::columnIndexFromString($LastColumn);

//Tạo mảng chứa dữ liệu
$data = [];
$datadump = array();
$hocki = "";
$ma_nghanh = "";
$khoahoc = "";
$tennghanh = "";


for ($i = 0; $i <= $Totalrow; $i++)
{
	//----Lặp cột
	for ($j = 0; $j < $TotalCol; $j++)
	{
		$data[$i][$j]=$sheet->getCellByColumnAndRow($j, $i)->getValue();
		
		if(preg_match("/Nghành đào tạo: (.*)/",$data[$i][$j],$matchl))
		{
			$ma_nghanh = explode(":",$data[$i][$j])[count(explode(":",$data[$i][$j])) -1];
			$tennghanh = preg_match("/Nghành đào tạo: (.*)    Mã Nghành/",$data[$i][$j],$tennghanh2);
			$tennghanh = $tennghanh2[1];
			
			
		}

		if(preg_match("/Khóa học (.*)$/",$data[$i][$j],$matchl))
		{
			$khoahoc = $matchl[0];
			
		}
		if(preg_match("/HỌC KỲ \w+/",$data[$i][$j],$matched))
		{
			//$hocki = preg_match("/HỌC KỲ {\w}/",$data[$i][$j]);
			$hocki = $matched[0];
		}

		// Tiến hành lấy giá trị của từng ô đổ vào mảng
		if(preg_match("/^[\w]{2}\d{3}|^[\w]{2}\d{2}/",$data[$i][$j]))
		{
			$datadump[] = array("mamon"=>$data[$i][$j] , "tenhocphan" => $sheet->getCellByColumnAndRow($j+1, $i)->getValue(), "sotc" => $sheet->getCellByColumnAndRow($j+2, $i)->getValue(),"batbuot" => $sheet->getCellByColumnAndRow($j+3, $i)->getValue(),"tuchon" => $sheet->getCellByColumnAndRow($j+4, $i)->getValue(),"tongsotiet" => $sheet->getCellByColumnAndRow($j+5, $i)->getValue(),"sotietlt"=>$sheet->getCellByColumnAndRow($j+6, $i)->getValue(),"sotietbt" => $sheet->getCellByColumnAndRow($j+7, $i)->getValue(),"kiemtra"=>$sheet->getCellByColumnAndRow($j+8, $i)->getValue(),"hocki" => $hocki);
			// echo $data[$i][$j] ."<br>";

			// echo $sheet->getCellByColumnAndRow($j+1, $i)->getValue() . ' ' .$sheet->getCellByColumnAndRow($j+2, $i)->getValue() ;
			
		}
		//$data[$i][$j]=$sheet->getCellByColumnAndRow($j, $i)->getValue();

		
	}
}
    return  array("ma_nghanh" => trim($ma_nghanh),"khoahoc"=>$khoahoc,"tennghanh" => $tennghanh,"danhsach"=>$datadump);
        
        }
    }
    

}





?>