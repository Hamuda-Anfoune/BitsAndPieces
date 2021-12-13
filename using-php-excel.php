<?php

/**
 * This will not work without adding PHPExcel plugin to the project and including it here!
 */

$this->spreadsheet = new PHPExcel();

// Setting a cell value
$this->spreadsheet
    ->setActiveSheetIndex(0)
    ->setCellValue('A1', 'Export for repair');

$sheet = $this->spreadsheet->getActiveSheet();
$last_row_number = 10; // For example

// Merge cells
$sheet->mergeCells("A1:J1");
$sheet->mergeCells("L1:R1");

// Prevent digit-only item codes from being shortened, this happens if data type is General and the value is a ling integer, e.g. actual code: 6971842181292 -> shortened: 6.97184E+12
$sheet->getStyle("B3:B$last_row_number")->getNumberFormat()->setFormatCode('0'); // Format code "0" stands for 0 decimal places, other codes can be seen in the "Format Cells" dialogue box in Excel, under Number->Custom->Type
$sheet->getStyle("L3:L$last_row_number")->getNumberFormat()->setFormatCode('0');

// Set alignment
$sheet->getStyle('A1:R2')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$sheet->getStyle('A1:R2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$sheet->getStyle("A3:R$last_row_number")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_TOP);
$sheet->getStyle("A3:R$last_row_number")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

// Set font size
$sheet->getStyle('A1:R1')->getFont()->setSize(16);

// Set bold font
$sheet->getStyle("A1:R2")->getFont()->setBold(true);

// Set custom height
$sheet->getRowDimension(1)->setRowHeight(29);

// Set custom width
foreach (range("A", "R") as $letter) {
    $sheet->getColumnDimension($letter)->setWidth(15);
}

// enable wrapping text
$sheet->getStyle("A2:R$last_row_number")->getAlignment()->setWrapText(true);

// Set borders
$styleArray = array(
    'borders' => array(
        'allborders' => array(
        'style' => PHPExcel_Style_Border::BORDER_THIN
        )
    )
);

$sheet->getStyle("A1:J$last_row_number")->applyFromArray($styleArray);
$sheet->getStyle("L1:R$last_row_number")->applyFromArray($styleArray);


$objWriter = PHPExcel_IOFactory::createWriter($this->spreadsheet, 'Excel2007');

// Saving the excel sheet to a path
// $objWriter->save($file_full_path);

// Outputting the sheet through the browser
header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet; charset=utf-8");
header("Content-Disposition: attachment; filename=$file_name");
$objWriter->save("php://output");